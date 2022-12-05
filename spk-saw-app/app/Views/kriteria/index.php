<?= $this->extend('layout/page_layout') ?>

<?= $this->section('content') ?>

<div class="container">
    <br>
<h1>Halaman Data Kriteria</h1>

<a href="<?= base_url('kriteria/add') ?>" class="btn btn-primary">Tambah Data Kriteria</a>
<br>
<br>

    <div class="row">
        <div class="col">
        <table id="example" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>Id Kriteria</th>
                <th>Nama Kriteria</th>
                <th>Tipe</th>
                <th>Bobot</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Kedisiplinan</td>
                <td>B</td>
                <td>2</td>
                <td><a href ="#" class="btn btn-warning"> Edit </a> | <a href="#" class="btn btn-danger">Hapus</a></td>
            </tr>
            <tr>
                <td>2</td>
                <td>Kinerja</td>
                <td>C</td>
                <td>2</td>
                <td><a href ="#" class="btn btn-warning"> Edit </a> | <a href="#" class="btn btn-danger">Hapus</a></td>
            </tr>
            <tr>
        </tbody>
        </table>
        </div>
    </div>
</div>

<script>
    $(document).ready(function () {
    $('#example').DataTable();
});
</script>

<?= $this->endSection() ?>