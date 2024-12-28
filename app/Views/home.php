<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar with Top Menu</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        .custom-card-img {
            height: 300px;
            /* Atur tinggi gambar sesuai kebutuhan */
            object-fit: cover;
            /* Pastikan gambar ter-crop dan proporsional */
        }
    </style>
</head>

<body>
    <!-- Top Menu -->
    <div class="py-2" style="background: #900909;">
        <div class="container d-flex justify-content-center align-items-center">
            <img src="<?= base_url('img/logo.png') ?>" alt="" style="width: 20%;">
        </div>
    </div>
    <!-- Main Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark" style="background:#900909;">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto text-white">
                    <li class="nav-item fs-2">
                        <i class="bi bi-cart"></i>
                        <!-- <a class="nav-link active" aria-current="page" href="#">Home</a> -->
                    </li>
                    <li class="nav-item fs-2 ms-5">
                        <i class="bi bi-person"></i>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="#">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li> -->
                </ul>
            </div>
        </div>
    </nav>

    <!-- Banner -->
    <div class="container-fluid d-flex justify-content-center align-items-center my-3">
        <img src="<?= base_url('img/banner.png') ?>" alt="Banner" style="width:100%; height:900px;">
    </div>
    <!-- end banner -->


    <!-- text -->
    <div class="container text-center my-3">
        <p class="fs-4">3 Femmes adalah brand kuliner yang berkomitmen untuk menghadirkan makanan berkualitas tinggi dengan cita rasa yang unik dan inovatif. Terinspirasi dari tiga perempuan yang memiliki semangat kewirausahaan, 3 Femmes hadir untuk menciptakan produk-produk yang tidak hanya lezat tetapi juga bernilai gizi. Produk unggulan kami, seperti cireng isi, keripik pisang, dan banana boat, dibuat dari bahan pilihan dan diproses secara higienis. Kami berupaya memberikan cita rasa yang memanjakan dan menyehatkan, dengan kualitas dan kreativitas di setiap sajian.</p>
    </div>
    <!-- end text -->

    <!-- Produk Terlaris -->
    <div class="container mt-5">
        <h2 class="text-center">Produk Terlaris</h2>
        <div class="row d-flex justify-content-center">
            <div class="col-md-3">
                <div class="card" style="width: 18rem;">
                    <img src="<?= base_url('img/produk/cireng.png') ?>" class="card-img-top custom-card-img" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Cireng Isi</h5>
                        <p class="card-text">Rp.</p>
                        <a href="#" class="btn btn-primary">Beli Sekarang</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card" style="width: 18rem;">
                    <img src="<?= base_url('img/produk/pisang.png') ?>" class="card-img-top custom-card-img" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Keripik Pisang</h5>
                        <p class="card-text">Rp.</p>
                        <a href="#" class="btn btn-primary">Beli Sekarang</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card" style="width: 18rem;">
                    <img src="<?= base_url('img/produk/banana.png') ?>" class="card-img-top custom-card-img" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Banana Boat</h5>
                        <p class="card-text">Rp.</p>
                        <a href="#" class="btn btn-primary">Beli Sekarang</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center my-5">
            <a href="#" class="btn fs-4 text-white" style="background: #900909; border-radius: 20px;">Lihat Produk</a>
        </div>

    </div>

    <!-- end Produk Terlaris -->

    <!-- Keunggulan kami -->
    <div class="container my-5">
        <h2 class="text-center">Keunggulan Kami</h2>
        <div class="row d-flex justify-content-center">
            <div class="col-md-3">
                <div class="text-center">
                    <p class=" fs-1 mt-4">
                        <i class="bi bi-award-fill"></i>
                    </p>
                    <h4>
                        Produk berkualitas tinggi dengan bahan terbaik.
                    </h4>
                </div>
            </div>
            <div class="col-md-3">
                <div class="text-center">
                    <p class=" fs-1 mt-4">
                        <i class="bi bi-stopwatch"></i>
                    </p>
                    <h4>
                        Pengiriman tepat waktu untuk kepuasan pelanggan.
                    </h4>
                </div>
            </div>
            <div class="col-md-3">
                <div class="text-center">
                    <p class=" fs-1 mt-4">
                        <i class="bi bi-heart"></i>
                    </p>
                    <h4>
                        Cita rasa lezat dan unik di setiap sajian.
                    </h4>
                </div>
            </div>
        </div>
    </div>

    <!-- end Keunggulan kami -->

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>