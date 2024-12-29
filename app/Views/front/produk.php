<?= $this->extend('layouts/front/base') ?>
<?= $this->section('title') ?>Cireng Isi<?= $this->endSection() ?>
<?= $this->section('content') ?>
<!-- Main Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark border-top" style="background: #A61F1F;">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav fw-bold">
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('produk') ?>">Cireng Isi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('produk/kp') ?>">Keripik Pisang</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('produk/bb') ?>">Banana Boat</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class="container my-4">
    <h2 class="text-center">Menu Cireng Isi</h2>

    <!-- Baris pertama -->
    <div class="row d-flex justify-content-center text-center">
        <div class="col-md-4 my-2">
            <div class="card w-100 ">
                <img src="<?= base_url('img/produk/ayamsuwir.png') ?>" class="card-img-top custom-card-img" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Ayam Suir</h5>
                    <a href="#" class="btn text-white" style="background: #CB2F08;width: 100px; border-radius: 15px;">Pilih</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 my-2">
            <div class="card w-100 ">
                <img src="<?= base_url('img/produk/sosis.png') ?>" class="card-img-top custom-card-img" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Sosis</h5>
                    <a href="#" class="btn text-white" style="background: #CB2F08;width: 100px; border-radius: 15px;">Pilih</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 my-2">
            <div class="card w-100 ">
                <img src="<?= base_url('img/produk/keju.png') ?>" class="card-img-top custom-card-img" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Keju</h5>
                    <a href="#" class="btn text-white" style="background: #CB2F08;width: 100px; border-radius: 15px;">Pilih</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 my-2">
            <div class="card w-100 ">
                <img src="<?= base_url('img/produk/bakso.png') ?>" class="card-img-top custom-card-img" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Bakso</h5>
                    <a href="#" class="btn text-white" style="background: #CB2F08;width: 100px; border-radius: 15px;">Pilih</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 my-2">
            <div class="card w-100 ">
                <img src="<?= base_url('img/produk/jando.png') ?>" class="card-img-top custom-card-img" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Jando</h5>
                    <a href="#" class="btn text-white" style="background: #CB2F08;width: 100px; border-radius: 15px;">Pilih</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 my-2">
            <div class="card w-100 ">
                <img src="<?= base_url('img/produk/hatiayam.png') ?>" class="card-img-top custom-card-img" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Hati Ayam</h5>
                    <a href="#" class="btn text-white" style="background: #CB2F08;width: 100px; border-radius: 15px;">Pilih</a>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>