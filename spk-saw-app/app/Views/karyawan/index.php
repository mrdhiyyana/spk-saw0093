<?= $this->extend('layout/page_layout') ?>

<?= $this->section('content') ?>



<div class="container">
<h1>Halaman Data Karyawan</h1>

<a href="<?= base_url('karyawan/add') ?>" class="btn btn-primary">Tambah Data Karyawan</a>
<br>
<br>

    <div class="row">
        <div class="col">
        <table id="example" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Age</th>
                <th>Start date</th>
                <th>Salary</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Tiger Nixon</td>
                <td>System Architect</td>
                <td>Edinburgh</td>
                <td>61</td>
                <td>2011-04-25</td>
                <td>$320,800</td>
            </tr>
            <tr>
                <td>Garrett Winters</td>
                <td>Accountant</td>
                <td>Tokyo</td>
                <td>63</td>
                <td>2011-07-25</td>
                <td>$170,750</td>
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