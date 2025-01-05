<?= $this->extend('layouts/back/base') ?>
<?= $this->section('title') ?>Tambah Produk<?= $this->endSection() ?>
<?= $this->section('content') ?>
<div class="container-fluid p-0">

    <div class="mb-3">
        <div class="row">
            <div class="col-md-6">
                <h1 class="h3 d-inline align-middle">Tambah Produk</h1>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">

            <div class="card">
                <form action="<?= base_url('admin/produk/simpan') ?>" method="post" enctype="multipart/form-data">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="nama_produk">Nama Produk</label>
                            <input type="text" class="form-control mb-3" id="nama_produk" name="nama_produk" placeholder="Masukkan nama produk">
                        </div>
                        <div class="form-group">
                            <label for="deskripsi">Deskripsi</label>
                            <textarea name="deskripsi" id="deskripsi" class="form-control mb-3" placeholder="Masukan deskripsi produk"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="harga">Harga Produk</label>
                            <input type="number" class="form-control mb-3" id="harga" name="harga" placeholder="Masukkan nama harga produk">
                        </div>
                        <div class="form-group">
                            <label for="kategori">Kategori Makanan</label>
                            <select name="kategori" class="form-control" id="kategori">
                                <option value="">Pilih Kategori</option>
                                <option value="Cireng Isi">Cireng Isi</option>
                                <option value="Keripik Pisang">Keripik Pisang</option>
                                <option value="Banana Boat">Banana Boat</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="qty">Qty</label>
                            <input type="number" class="form-control mb-3" id="qty" name="qty" placeholder="Masukkan nama qty">
                        </div>
                        <div class="form-group">
                            <label for="gambar">Foto</label>
                            <input type="file" class="form-control mb-3" id="gambar" name="gambar" accept="image/*">
                            <img id="preview" class="img-preview d-none" alt="Preview Gambar">
                        </div>
                    </div>

                    <div class="card-footer text-right">
                        <button type="submit" class="btn btn-primary">
                            Simpan
                        </button>
                    </div>
                </form>
            </div>
            <!-- Modal -->
        </div>
    </div>
</div>

<?= $this->endSection() ?>