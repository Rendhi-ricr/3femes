<?= $this->extend('layouts/back/base') ?>
<?= $this->section('title') ?>Edit Produk<?= $this->endSection() ?>
<?= $this->section('content') ?>
<div class="container-fluid p-0">

    <div class="mb-3">
        <div class="row">
            <div class="col-md-6">
                <h1 class="h3 d-inline align-middle">Edit Produk</h1>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">

            <div class="card">
                <!-- Form edit produk -->
                <form action="<?= base_url('admin/produk/update/' . $produk['id_produk']) ?>" method="post" enctype="multipart/form-data">
                    <!-- Tambahkan CSRF protection -->
                    <?= csrf_field() ?>

                    <div class="card-body">
                        <!-- Nama Produk -->
                        <div class="form-group">
                            <label for="nama_produk">Nama Produk <span class="text-danger">*</span></label>
                            <input type="text" class="form-control mb-3" id="nama_produk" name="nama_produk" placeholder="Masukkan nama produk" value="<?= esc($produk['nama_produk']) ?>" required>
                        </div>

                        <!-- Deskripsi -->
                        <div class="form-group">
                            <label for="deskripsi">Deskripsi <span class="text-danger">*</span></label>
                            <textarea name="deskripsi" id="deskripsi" class="form-control mb-3" placeholder="Masukkan deskripsi produk" required><?= esc($produk['deskripsi']) ?></textarea>
                        </div>

                        <!-- Harga Produk -->
                        <div class="form-group">
                            <label for="harga">Harga Produk <span class="text-danger">*</span></label>
                            <input type="number" class="form-control mb-3" id="harga" name="harga" placeholder="Masukkan harga produk" value="<?= esc($produk['harga']) ?>" required min="0" step="100">
                        </div>

                        <!-- Kategori -->
                        <div class="form-group">
                            <label for="kategori">Kategori Makanan <span class="text-danger">*</span></label>
                            <select name="kategori" class="form-control" id="kategori" required>
                                <option value="" disabled>Pilih Kategori</option>
                                <option value="Cireng Isi" <?= $produk['kategori'] == 'Cireng Isi' ? 'selected' : '' ?>>Cireng Isi</option>
                                <option value="Keripik Pisang" <?= $produk['kategori'] == 'Keripik Pisang' ? 'selected' : '' ?>>Keripik Pisang</option>
                                <option value="Banana Boat" <?= $produk['kategori'] == 'Banana Boat' ? 'selected' : '' ?>>Banana Boat</option>
                            </select>
                        </div>

                        <!-- Qty -->
                        <div class="form-group">
                            <label for="qty">Qty <span class="text-danger">*</span></label>
                            <input type="number" class="form-control mb-3" id="qty" name="qty" placeholder="Masukkan jumlah produk" value="<?= esc($produk['qty']) ?>" required min="1">
                        </div>

                        <!-- Upload Gambar -->
                        <div class="form-group">
                            <label for="gambar">Foto</label>
                            <input type="file" class="form-control mb-3" id="gambar" name="gambar" accept="image/*" onchange="previewImage(event)">
                            <!-- Preview gambar -->
                            <img id="preview" src="<?= base_url('produk/' . $produk['gambar']) ?>" class="img-thumbnail mt-3" alt="Preview Gambar" style="max-width: 200px;">
                            <small class="form-text text-muted">Biarkan kosong jika tidak ingin mengganti gambar.</small>
                        </div>
                    </div>

                    <!-- Tombol Simpan -->
                    <div class="card-footer text-right">
                        <button type="submit" class="btn btn-primary">
                            Simpan Perubahan
                        </button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>

<!-- Script Preview Gambar -->
<script>
    function previewImage(event) {
        const preview = document.getElementById('preview');
        const file = event.target.files[0];

        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                preview.src = e.target.result;
                preview.classList.remove('d-none');
            };
            reader.readAsDataURL(file);
        }
    }
</script>

<?= $this->endSection() ?>