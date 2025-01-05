<!-- Top Menu -->
<div class="py-2" style="background: #900909;">
    <div class="container text-center">
        <img src="<?= base_url('img/logo.png') ?>" alt="Logo" style="width: 30%;">
    </div>
</div>

<!-- Main Navbar -->
<nav class="navbar navbar-expand-lg text-light" style="background:#900909;">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <!-- Keranjang Belanja dengan Badge -->
                <li class="nav-item fs-4 position-relative">
                    <a href="<?= base_url('keranjang') ?>" class="text-white">
                        <i class="bi bi-cart"></i>
                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                            10 <!-- Ganti dengan variabel PHP yang menampilkan jumlah barang -->
                            <span class="visually-hidden">Jumlah barang</span>
                        </span>
                    </a>

                </li>
                <li class="nav-item fs-4 ms-4">
                    <i class="bi bi-person"></i>
                </li>
            </ul>
        </div>
    </div>
</nav>