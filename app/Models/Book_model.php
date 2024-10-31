<?php 

namespace App\Models; // Specify the namespace

use CodeIgniter\Model; // Import the CodeIgniter Model class

class Book_model extends Model {
    protected $table = 'books'; // Specify the table name
    protected $primaryKey = 'id'; // Specify the primary key
    protected $allowedFields = ['title', 'author', 'published_date', 'genre']; // Define which fields can be mass assigned

    // You can also define validation rules and other settings here if needed

    public function insert_book($data) {
        return $this->insert($data); // Use the insert method provided by CodeIgniter Model
    }

    public function delete_book($id) {
        return $this->delete($id); // Delete the book with the given ID
    }

    // Method to get all books
    public function get_all_books() {
        return $this->findAll(); // Returns all records from the 'books' table
    }

}
