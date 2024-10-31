<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .container {
            margin-top: 50px;
        }

        .alert {
            position: relative;
            margin-bottom: 20px;
        }

        .alert h1 {
            margin: 0;
            font-size: 1.5rem;
        }

        .alert h3 {
            margin: 0;
            font-size: 1.25rem;
        }

        .btn-custom {
            margin-right: 10px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1 class="text-center mb-4">Knowledge Hub</h1>

        <!-- Success and Error Alerts -->
        <?php if (session()->getFlashdata('success-add')): ?>
            <div class="alert alert-success alert-dismissible fade show d-flex justify-content-center mt-5" role="alert">
                <div class="text-center">
                    <h1>Success!</h1>
                    <h3><?= session()->getFlashdata('success-add'); ?></h3>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php endif; ?>
        <?php if (session()->getFlashdata('success-delete')): ?>
            <div class="alert alert-success alert-dismissible fade show d-flex justify-content-center mt-5" role="alert">
                <div class="text-center">
                    <h1>Success!</h1>
                    <h3><?= session()->getFlashdata('success-delete'); ?></h3>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php endif; ?>
        <?php if (session()->getFlashdata('error-add')): ?>
            <div class="alert alert-danger alert-dismissible fade show d-flex justify-content-center mt-5" role="alert">
                <div class="text-center">
                    <h1>Error!</h1>
                    <h3><?= session()->getFlashdata('error-add'); ?></h3>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php endif; ?>
        <?php if (session()->getFlashdata('error-delete')): ?>
            <div class="alert alert-danger alert-dismissible fade show d-flex justify-content-center mt-5" role="alert">
                <div class="text-center">
                    <h1>Error!</h1>
                    <h3><?= session()->getFlashdata('error-delete'); ?></h3>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php endif; ?>

        <!-- Action Buttons -->
        <div class="text-center">
            <a href="<?= site_url('/create'); ?>" class="btn btn-primary btn-custom">Add a New Book</a>
            <a href="<?= site_url('/books'); ?>" class="btn btn-secondary btn-custom">Discover Our Collection</a>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>