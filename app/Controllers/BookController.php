<?php

namespace App\Controllers; // Specify the namespace

use App\Models\Book_model; // Import the Book_model

class BookController extends BaseController
{
    public function create()
    {
        return view('create'); // Load the create view
    }

    public function success()
    {
        return view('success'); // Load the success view
    }

    public function addBook()
    {
        $model = new Book_model(); // Create an instance of Book_model

        // Get data from the form submission
        $data = [
            'title' => $this->request->getPost('title'),
            'author' => $this->request->getPost('author'),
            'published_date' => $this->request->getPost('published_date'),
            'genre' => $this->request->getPost('genre'),
        ];

        // Insert the book using the model
        if ($model->insert_book($data)) {
            return redirect()->to('success')->with('success-add', 'Book Added successfully.');
        } else {
            return redirect()->to('success')->with('error-add', 'Failed to add the book.');
        }
    }

    public function deleteBook($id)
    {
        $model = new Book_model();

        // Optionally check if the book exists
        if (!$model->find($id)) {
            return redirect()->to('/success')->with('error-delete', 'Book not found.');
        }

        if ($model->delete_book($id)) {
            return redirect()->to('/success')->with('success-delete', 'Book deleted successfully.');
        } else {
            log_message('error', 'Failed to delete book with ID: ' . $id); // Log the error
            return redirect()->to('/success')->with('error-delete', 'Failed to delete the book.');
        }
    }


    public function listBooks()
    {
        $model = new Book_model(); // Create an instance of Book_model
        $data['books'] = $model->get_all_books(); // Get all books

        // Add a counter for display
        foreach ($data['books'] as $index => $book) {
            $data['books'][$index]['display_id'] = $index + 1; // 1-based index for display
        }

        return view('list', $data); // Load the view to display the list of books
    }
}
