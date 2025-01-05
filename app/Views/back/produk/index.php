<?= $this->extend('layouts/back/base') ?>
<?= $this->section('title') ?>Data Produk<?= $this->endSection() ?>
<?= $this->section('content') ?>
<div class="container-fluid p-0">

    <div class="mb-3">
        <div class="row">
            <div class="col-md-6">
                <h1 class="h3 d-inline align-middle">Data Produk</h1>
            </div>
            <div class="col-md-6">
                <div class="text-end">
                    <a href="<?= base_url('admin/produk/tambah') ?>" class="btn btn-primary"><i class="ti ti-plus ti-sm"></i> Tambah</a>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">

            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Produk</th>
                                    <th>Deskripsi</th>
                                    <th>Harga</th>
                                    <th>Kategori</th>
                                    <th>Qty</th>
                                    <th>Foto</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($produk as $p) :
                                ?>
                                    <tr>
                                        <td><?= $no++; ?></td>
                                        <td><?= $p['nama_produk']; ?></td>
                                        <td><?= $p['deskripsi']; ?></td>
                                        <td>Rp. <?= number_format($p['harga'], 0, ',', '.'); ?></td>
                                        <td><?= $p['kategori']; ?></td>
                                        <td><?= $p['qty']; ?></td>
                                        <td><img src="<?= base_url('produk/' . $p['gambar']) ?>" alt=":<?= $p['nama_produk'] ?>" style="width: 200px; heigh:10px;"></td>
                                        <td>
                                            <a href="<?= base_url('admin/produk/edit/' . $p['id_produk']) ?>" class="btn btn-primary btn-sm">Edit</a>
                                            <a href="<?= base_url('admin/produk/delete/' . $p['id_produk']) ?>" class="btn btn-danger btn-sm">Hapus</a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- Modal -->
        </div>
    </div>
</div>
<?= $this->endSection() ?>