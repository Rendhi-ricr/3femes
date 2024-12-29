<?= $this->extend('layouts/back/base') ?>
<?= $this->section('title') ?>Dashboard<?= $this->endSection() ?>
<?= $this->section('content') ?>
<div class="container-fluid p-0">

    <div class="mb-3">
        <div class="row">
            <div class="col-md-6">
                <h1 class="h2 d-inline align-middle">Dashboard</h1>
            </div>
        </div>
    </div>

    <!-- Card Total Data -->
    <div class="row">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Produk</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">50</div>
                        </div>
                        <!-- <div class="col-auto">
                            <i class="fas fa-new fa-2x text-gray-300"></i>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Annual) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Terjual</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">20</div>
                        </div>
                        <!-- <div class="col-auto">
                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<?= $this->endSection() ?>