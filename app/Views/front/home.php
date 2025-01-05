<?= $this->extend('layouts/front/base') ?>
<?= $this->section('title') ?>Home<?= $this->endSection() ?>
<?= $this->section('content') ?>
<!-- Banner -->
<!-- Banner -->
<div class="container-fluid d-flex justify-content-center align-items-center my-3">
    <img src="<?= base_url('img/banner.png') ?>" alt="Banner" style="width:100%; height:700px;">
</div>
<!-- end banner -->


<!-- text -->
<div class="container text-center my-3">
    <p class="fs-4">3 Femmes adalah brand kuliner yang berkomitmen untuk menghadirkan makanan berkualitas tinggi dengan cita rasa yang unik dan inovatif. Terinspirasi dari tiga perempuan yang memiliki semangat kewirausahaan, 3 Femmes hadir untuk menciptakan produk-produk yang tidak hanya lezat tetapi juga bernilai gizi. Produk unggulan kami, seperti cireng isi, keripik pisang, dan banana boat, dibuat dari bahan pilihan dan diproses secara higienis. Kami berupaya memberikan cita rasa yang memanjakan dan menyehatkan, dengan kualitas dan kreativitas di setiap sajian.</p>
</div>
<!-- end text -->

<!-- Produk Terlaris -->
<div class="container mt-5">
    <h2 class="text-center">Produk Terlaris</h2>
    <div class="row d-flex justify-content-center">
        <div class="col-md-3">
            <div class="card" style="width: 18rem;">
                <img src="<?= base_url('img/produk/cireng.png') ?>" class="card-img-top custom-card-img" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Cireng Isi</h5>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card" style="width: 18rem;">
                <img src="<?= base_url('img/produk/pisang.png') ?>" class="card-img-top custom-card-img" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Keripik Pisang</h5>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card" style="width: 18rem;">
                <img src="<?= base_url('img/produk/banana.png') ?>" class="card-img-top custom-card-img" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Banana Boat</h5>
                </div>
            </div>
        </div>
    </div>
    <div class="text-center my-5">
        <a href="<?= base_url('produk') ?>" class="btn fs-4 text-white" style="background: #900909; border-radius: 20px;">Lihat Produk</a>
    </div>

</div>

<!-- end Produk Terlaris -->

<!-- Keunggulan kami -->
<div class="container my-5">
    <h2 class="text-center">Keunggulan Kami</h2>
    <div class="row d-flex justify-content-center">
        <div class="col-md-3">
            <div class="text-center">
                <p class=" fs-1 mt-4">
                    <i class="bi bi-award-fill"></i>
                </p>
                <h4>
                    Produk berkualitas tinggi dengan bahan terbaik.
                </h4>
            </div>
        </div>
        <div class="col-md-3">
            <div class="text-center">
                <p class=" fs-1 mt-4">
                    <i class="bi bi-stopwatch"></i>
                </p>
                <h4>
                    Pengiriman tepat waktu untuk kepuasan pelanggan.
                </h4>
            </div>
        </div>
        <div class="col-md-3">
            <div class="text-center">
                <p class=" fs-1 mt-4">
                    <i class="bi bi-heart"></i>
                </p>
                <h4>
                    Cita rasa lezat dan unik di setiap sajian.
                </h4>
            </div>
        </div>
    </div>
</div>
<!-- end Keunggulan kami -->

<?= $this->endSection() ?>