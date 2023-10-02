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
                    <th>Suhu</th>
                </tr>
            </thead>
            <tbody>

                <!-- const gas = [5, 19, 40, 98]; -->
                <tr>
                    <td>1</td>
                    <td>2023-10-01</td>
                    <td>10&#8451</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>2023-10-02</td>
                    <td>20&#8451</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>2023-10-03</td>
                    <td>12&#8451</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>2023-10-04</td>
                    <td>27&#8451</td>
                </tr>
            </tbody>
        </table>

    </div>
</div>
</div>


<?= $this->endSection(); ?>