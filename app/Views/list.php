<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book List</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">List of Books</h1>

        <table class="table table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Author</th>
                    <th>Published Date</th>
                    <th>Genre</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($books) && is_array($books)): ?>
                    <?php foreach ($books as $book): ?>
                        <tr>
                            <td><?= esc($book['display_id']) ?></td>
                            <td><?= esc($book['title']) ?></td>
                            <td><?= esc($book['author']) ?></td>
                            <td><?= esc($book['published_date']) ?></td>
                            <td><?= esc($book['genre']) ?></td>
                            <td>
                                <!-- <a href="<?= site_url('/edit/' . esc($book['id'])) ?>" class="btn btn-warning btn-sm">Edit</a> -->
                                <form action="<?= site_url('/books/deleteBook/' . esc($book['id'])) ?>" method="POST" style="display:inline;">
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this book?');">Delete</button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="6" class="text-center">No books found</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>

        <a href="<?= site_url('/create'); ?>" class="btn btn-primary">Add a New Book</a>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
