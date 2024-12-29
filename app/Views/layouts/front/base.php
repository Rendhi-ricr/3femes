<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $this->renderSection('title') ?></title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        .custom-card-img {
            height: 350px;
            object-fit: cover;
        }

        @media (max-width: 768px) {
            .custom-card-img {
                height: 150px;
            }

            footer iframe {
                width: 100%;
                height: 200px;
            }
        }
    </style>
</head>

<body>
    <?= $this->include('layouts/front/nav'); ?>

    <?= $this->renderSection('content') ?>

    <!-- Footer -->
    <?= $this->include('layouts/front/footer'); ?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>