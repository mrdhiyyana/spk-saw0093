<?= $this->extend('layout/page_layout') ?>

<?= $this->section('content') ?>

<div class="container">
    <br>
<h1>Halaman Data Karyawan</h1>

<a href="<?= base_url('periode/add') ?>" class="btn btn-primary">Tambah Periode</a>
<br>
<br>

    <div class="row">
        <div class="col">
        <table id="example" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>Id</th>
                <th>Tahun</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>2021</td>
                <td><a href ="#" class="btn btn-warning"> Edit </a> | <a href="#" class="btn btn-danger">Hapus</a></td>
            </tr>
            <tr>
                <td>2</td>
                <td>2022</td>
                <td><a href ="#" class="btn btn-warning"> Edit </a> | <a href="#" class="btn btn-danger">Hapus</a></td>
            </tr>
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