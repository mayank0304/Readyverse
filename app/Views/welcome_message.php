<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Welcome to Book Haven!</title>
    <meta name="description" content="Your ultimate destination for discovering and exploring a vast collection of books.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="/favicon.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: url('https://source.unsplash.com/1920x1080/?books,library') no-repeat center center fixed;
            background-size: cover;
        }

        .hero {
            background-color: rgba(0, 0, 0, 0.6);
            padding: 80px 20px;
            color: white;
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="container vh-100 d-flex flex-column justify-content-center align-items-center text-center">
        <div class="hero">
            <h1 class="display-4 fw-bold">Welcome to Knowledge Hub</h1>
            <p class="lead">Discover a vast collection of books across all genres, explore new stories, and dive into adventures waiting to be read.</p>
            <a href="<?= site_url('/books'); ?>" class="btn btn-light btn-lg">Explore Now</a>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
