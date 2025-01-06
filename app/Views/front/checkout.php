<?= $this->extend('layouts/front/base') ?>
<?= $this->section('title') ?>Detail Produk<?= $this->endSection() ?>
<?= $this->section('content') ?>

<div class="container my-4">
    <h1 class="text-center">Checkout</h1>

    <form action="<?= site_url('pesanan/buatPesanan') ?>" method="POST">
        <!-- Alamat Pengiriman -->
        <div class="card p-4 mb-4" style="background-color: #f9eaea;">
            <h2 class="card-title">Alamat Pengiriman</h2>
            <div class="mb-3">
                <label for="id_user" class="form-label">Nama</label>
                <input type="text" class="form-control" id="id_user" name="id_user" value="<?= esc($nama) ?>" readonly>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email:</label>
                <input type="email" id="email" name="email" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="telepon" class="form-label">Nomor Telepon:</label>
                <input type="text" id="telepon" name="telepon" class="form-control" required>
            </div>

            <div class="row">
                <div class="col-md-4 mb-3">
                    <label for="provinsi" class="form-label">Provinsi:</label>
                    <select id="provinsi" name="provinsi" class="form-select" required>
                        <option value="">Pilih Provinsi</option>
                        <option value="Jawa Barat">Jawa Barat</option>
                    </select>
                </div>

                <div class="col-md-4 mb-3">
                    <label for="kota" class="form-label">Kota/Kabupaten:</label>
                    <select id="kota" name="kota" class="form-select" required>
                        <option value="">Pilih Kota</option>
                        <option value="Subang">Subang</option>
                    </select>
                </div>

                <div class="col-md-4 mb-3">
                    <label for="kecamatan" class="form-label">Kecamatan:</label>
                    <select id="kecamatan" name="kecamatan" class="form-select" required>
                        <option value="">Pilih Kecamatan</option>
                        <option value="Subang">Subang</option>
                    </select>
                </div>
            </div>

            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat:</label>
                <textarea id="alamat" name="alamat" class="form-control" rows="3" required></textarea>
            </div>
        </div>

        <!-- Pesanan Anda -->
        <div class="card p-4 mb-4" style="background-color: #f9eaea;">
            <h2 class="card-title">Pesanan Anda</h2>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Nama Produk</th>
                            <th>Harga</th>
                            <th>Jumlah</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($keranjangItems as $item): ?>
                            <tr>
                                <td><?= esc($item['nama_produk']) ?></td>
                                <td>Rp <?= number_format($item['harga'], 0, ',', '.') ?></td>
                                <td><?= $item['jumlah'] ?></td>
                                <td>Rp <?= number_format($item['harga'] * $item['jumlah'], 0, ',', '.') ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>

            <h3 class="text-end">Total Harga: Rp
                <?php
                $totalHarga = array_sum(array_map(function ($item) {
                    return $item['harga'] * $item['jumlah'];
                }, $keranjangItems));
                echo number_format($totalHarga, 0, ',', '.');
                ?></h3>

            <div class="mb-3">
                <label for="id_pengiriman" class="form-label">Opsi Pengiriman</label>
                <?php foreach ($kurir as $k): ?>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" name="id_pengiriman" id="pengiriman_<?= $k['id_pengiriman'] ?>" value="<?= $k['id_pengiriman']; ?>" required>
                        <label class="form-check-label" for="pengiriman_<?= $k['id_pengiriman'] ?>">
                            <?= esc($k['nama_pengiriman']); ?> - Rp <?= number_format($k['nominal'], 0, ',', '.'); ?>
                        </label>
                    </div>
                <?php endforeach; ?>
            </div>

            <div class="mb-3">
                <label for="metode_pembayaran" class="form-label">Metode Pembayaran</label>
                <div class="form-check">
                    <input type="radio" class="form-check-input" name="metode_pembayaran" id="transfer" value="transfer" required>
                    <label class="form-check-label" for="transfer">Transfer Bank</label>
                </div>
                <div class="form-check">
                    <input type="radio" class="form-check-input" name="metode_pembayaran" id="cod" value="cod">
                    <label class="form-check-label" for="cod">COD - Bayar di tempat</label>
                </div>
            </div>
        </div>

        <!-- Catatan dan Submit -->
        <div class="mb-3">
            <label for="catatan" class="form-label">Catatan Pesanan (Opsional):</label>
            <textarea id="catatan" name="catatan" class="form-control" rows="3"></textarea>
        </div>

        <button type="submit" class="btn btn-danger w-100">Buat Pesanan</button>
    </form>
</div>

<?= $this->endSection() ?>