<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="card text-center p-5 bg-mydark">
        <div class="card-body">
            <h3 class="card-title">Website Monitoring Jeruk Sambal</h5>
                <p class="card-text">Memonitoring Suhu dan Gas Pada Jeruk Sambal</p>
                <a href="<?= base_url('beranda') ?>" class="btn btn-success">Beranda</a>
        </div>
    </div>
</div>


<?= $this->endSection(); ?>