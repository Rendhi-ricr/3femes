<?= $this->extend('layouts/back/base') ?>
<?= $this->section('title') ?>Data Pembayaran<?= $this->endSection() ?>
<?= $this->section('content') ?>
<div class="container-fluid p-0">

    <div class="mb-3">
        <div class="row">
            <div class="col-md-6">
                <h1 class="h3 d-inline align-middle">Data Pembayaran</h1>
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
                                    <th>Tanggal</th>
                                    <th>No Pesanan</th>
                                    <th>Nama Pengguna</th>
                                    <th>Produk</th>
                                    <th>Pengiriman</th>
                                    <th>Metode Pembayaran</th>
                                    <th>Total Bayar</th>
                                    <th>Bukti Pembayaran</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td><button class="btn btn-primary btn-sm">Lihat Foto</button></td>
                                    <td>
                                        <button class="btn btn-success btn-sm">Verify</button>
                                    </td>
                                </tr>
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