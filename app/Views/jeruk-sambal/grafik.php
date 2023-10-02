<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="card card-w68 mx-auto">
        <h5 class="card-header text-center bg-success">Grafik Suhu Dan Gas</h5>
        <div class="card-body">
            <canvas id="temperatureChart"></canvas>
        </div>
    </div>
</div>


<?= $this->endSection(); ?>