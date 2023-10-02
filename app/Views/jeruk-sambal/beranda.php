<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="card card-w75 mx-auto">
        <h5 class="card-header text-center bg-success">Beranda</h5>
        <div class="card-body p-3">
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="col">
                    <div class="card h-100">
                        <div class="card-body">
                            <h2 class="card-title text-center h1 text-primary"><i class="bi bi-thermometer-half"></i></h2>
                            <p class="card-text text-center">Cick link di bawah ini untuk melihat data lengkapnya...</p>
                        </div>
                        <div class="card-footer d-flex justify-content-center">
                            <a href="<?= base_url('data-suhu'); ?>" class="btn btn-success">Selengkapnya...</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <div class="card-body">
                            <h2 class="card-title text-center h1 text-danger"><i class="bi bi-fuel-pump"></i></h2>
                            <p class="card-text text-center">Cick link di bawah ini untuk melihat data lengkapnya...</p>
                        </div>
                        <div class="card-footer d-flex justify-content-center">
                            <a href="<?= base_url('data-gas'); ?>" class="btn btn-success">Selengkapnya...</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <div class="card-body">
                            <canvas id="temperatureChart"></canvas>
                        </div>
                        <div class="card-footer d-flex justify-content-center">
                            <a href="<?= base_url('grafik'); ?>" class="btn btn-success">Selengkapnya...</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?= $this->endSection(); ?>