<?= $this->extend('layouts/front/base') ?>
<?= $this->section('title') ?>Keranjang Belanja<?= $this->endSection() ?>
<?= $this->section('content') ?>

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
                        <td>
                            <a href="<?= site_url('keranjang/hapus/' . $item['id_keranjang']) ?>" class="btn btn-danger btn-sm">Hapus</a>
                        </td>
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