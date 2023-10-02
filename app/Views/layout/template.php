<!doctype html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>

<body class="bg-img" style="background-image: url('img/Kebunku.jpg');">

    <nav class="navbar navbar-dark bg-black gbs position-sticky max-in mb-3">

        <div class="container-fluid position-relative">
            <button class="menu" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                <!-- <span class="navbar-toggler-icon"></span> -->
                <h3>Jeruk Sambal</h3>
            </button>
            <a class="btn btn-success" href="#">Log-Admin</a>
        </div>

        <div class="collapse list-menu" id="navbarToggleExternalContent" data-bs-theme="dark">
            <div class="bg-black p-4 mt-1 gbs width">
                <a class="text-warning h4 td-none" href="<?= base_url() ?>">Menu</a>
                <a class="nav-link active" aria-current="page" href="<?= base_url('beranda') ?>">Beranda</a>
                <a class="nav-link" href="<?= base_url('data-gas'); ?>">Data gas</a>
                <a class="nav-link" href="<?= base_url('data-suhu'); ?>">Data suhu</a>
                <a class="nav-link" href="<?= base_url('grafik'); ?>">Grafik</a>
            </div>
        </div>
    </nav>

    <?= $this->renderSection('content'); ?>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>

</html>