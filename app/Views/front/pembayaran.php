<?= $this->extend('layouts/front/base') ?>
<?= $this->section('title') ?>Pembayaran<?= $this->endSection() ?>
<?= $this->section('content') ?>
<style>
    .step {
        display: flex;
        justify-content: center;
        margin: 20px 0;
    }

    .step .circle {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        background-color: #8c0000;
        color: white;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 18px;
    }

    .step span {
        margin-top: 10px;
    }

    .table th,
    .table td {
        vertical-align: middle;
    }
</style>

<!-- Steps -->
<div class="step text-center">
    <div class="me-4 text-center">
        <div class="circle">1</div>
        <span>Pemesanan</span>
    </div>
    <div class="me-4 text-center">
        <div class="circle bg-white text-dark border">2</div>
        <span>Pembayaran</span>
    </div>
    <div class="text-center">
        <div class="circle bg-white text-dark border">3</div>
        <span>Pemesanan Selesai</span>
    </div>
</div>

<!-- Table -->
<div class="container mb-5">
    <table class="table">
        <thead>
            <tr>
                <th>Produk</th>
                <th>Harga</th>
                <th>Jumlah</th>
                <th>Total</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    <div class="d-flex align-items-center">
                        <img src="keripik.jpg" alt="Keripik Chocolate" class="me-2" width="50">
                        <div>
                            <strong>Keripik Chocolate</strong><br>
                            <small>50 gram</small>
                        </div>
                    </div>
                </td>
                <td>Rp 5.000</td>
                <td><input type="number" value="2" class="form-control" style="width: 60px;"></td>
                <td>Rp 10.000</td>
                <td><button class="btn btn-danger btn-sm">X</button></td>
            </tr>
            <tr>
                <td>
                    <div class="d-flex align-items-center">
                        <img src="banana.jpg" alt="Banana Chocolate" class="me-2" width="50">
                        <div>
                            <strong>Banana Chocolate</strong><br>
                            <small>topping: keju</small>
                        </div>
                    </div>
                </td>
                <td>Rp 10.000</td>
                <td><input type="number" value="1" class="form-control" style="width: 60px;"></td>
                <td>Rp 10.000</td>
                <td><button class="btn btn-danger btn-sm">X</button></td>
            </tr>
        </tbody>
    </table>
    <div class="text-end">
        <button class="btn btn-danger">Pembayaran →</button>
    </div>
</div>

<?= $this->endSection() ?>