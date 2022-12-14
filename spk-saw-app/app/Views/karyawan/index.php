<?= $this->extend('layout/page_layout') ?>

<?= $this->section('content') ?>



<div class="container">
    <br>
<h1>Halaman Data Karyawan</h1>

<a href="<?= base_url('karyawan/add') ?>" class="btn btn-primary">Tambah Data Karyawan</a>
<br>
<br>

    <div class="row">
        <div class="col">
        <table id="example" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>Id</th>
                <th>NIP</th>
                <th>Nama</th>
                <th>Jenis Kelamin</th>
                <th>Alamat</th>
                <th>No. Hp</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>A00001</td>
                <td>Luthfiana Agatha</td>
                <td>P</td>
                <td>Pekalongan</td>
                <td>089157946801</td>
                <td><a href ="#" class="btn btn-warning"> Edit </a> | <a href="#" class="btn btn-danger">Hapus</a></td>
            </tr>
            <tr>
                <td>2</td>
                <td>A00002</td>
                <td>Naufal Mubarok</td>
                <td>L</td>
                <td>Batang</td>
                <td>085648259456</td>
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