<?= $this->extend('layouts/back/base') ?>
<?= $this->section('title') ?>Data Laporan<?= $this->endSection() ?>
<?= $this->section('content') ?>
<div class="container-fluid p-0">

    <div class="mb-3">
        <div class="row">
            <div class="col-md-6">
                <h1 class="h3 d-inline align-middle">Data Laporan</h1>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">

            <div class="card">
                <div class="card-body">
                    <div class="row mb-3">
                        <div class="col-md-2">
                            <select name="bulan" class="form-control" id="bulan">
                                <option value="">Bulan</option>
                                <option value="Januari">Januari</option>
                                <option value="February">February</option>
                                <option value="Maret">Maret</option>
                                <option value="April">April</option>
                                <option value="Mei">Mei</option>
                                <option value="Juni">Juni</option>
                                <option value="Juli">Juli</option>
                                <option value="Agustus">Agustus</option>
                                <option value="September">September</option>
                                <option value="Oktober">Oktober</option>
                                <option value="November">November</option>
                                <option value="Desember">Desember</option>
                            </select>
                        </div>
                        <div class="col-md-2">
                            <select name="tahun" class="form-control" id="tahun">
                                <option value="">Tahun</option>
                                <option value="2024">2024</option>
                                <option value="2023">2023</option>
                                <option value="2022">2022</option>
                                <option value="2021">2021</option>
                                <option value="2020">2020</option>

                            </select>
                        </div>
                        <div class="col-md-2">
                            <button class="btn btn-primary btn-sm">Cari</button>
                            <button class="btn btn-success btn-sm">Download</button>
                        </div>
                    </div>
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
                                    <th>Status</th>
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