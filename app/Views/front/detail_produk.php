<?= $this->extend('layouts/front/base') ?>
<?= $this->section('title') ?>Detail Produk<?= $this->endSection() ?>
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
    <h1 class="mb-4">Keranjang Belanja Anda</h1>

    <!-- Cek apakah keranjang kosong -->
    <?php if (empty($keranjangItems)): ?>
        <div class="alert alert-warning" role="alert">
            Keranjang Anda kosong.
        </div>
    <?php else: ?>
        <!-- Tabel Keranjang -->
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Nama Produk</th>
                    <th>Harga</th>
                    <th>Jumlah</th>
                    <th>Total</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($keranjangItems as $item): ?>
                    <tr>
                        <td><?= esc($item['nama_produk']) ?></td>
                        <td>Rp <?= number_format($item['harga'], 0, ',', '.') ?></td>
                        <td><?= $item['jumlah'] ?></td>
                        <td>Rp <?= number_format($item['harga'] * $item['jumlah'], 0, ',', '.') ?></td>
                        <td><a href="<?= site_url('keranjang/hapus/' . $item['id_keranjang']) ?>" class="btn btn-danger btn-sm">Hapus</a></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <div class="d-flex justify-content-between align-items-center">
            <a href="<?= site_url('pesanan/checkout') ?>" class="btn btn-success">Lanjutkan ke Checkout</a>
        </div>
    <?php endif; ?>
</div>

<?= $this->endSection() ?>