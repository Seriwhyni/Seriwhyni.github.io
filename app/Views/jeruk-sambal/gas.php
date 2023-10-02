<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="card card-w68 mx-auto">
        <h5 class="card-header text-center bg-success">Data Suhu</h5>
        <table class="table">
            <thead class="table-light">
                <tr>
                    <th>No</th>
                    <th>Tanggal dan Waktu</th>
                    <th>suhu</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>2023-10-01</td>
                    <td>5.5</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>2023-10-02</td>
                    <td>19.5</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>2023-10-03</td>
                    <td>40.5</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>2023-10-04</td>
                    <td>98.9</td>
                </tr>
            </tbody>
        </table>

    </div>
</div>
</div>


<?= $this->endSection(); ?>