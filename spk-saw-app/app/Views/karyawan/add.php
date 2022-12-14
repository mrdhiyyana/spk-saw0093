<?= $this->extend('layout/page_layout') ?>

<?= $this->section('content') ?>

<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #0000FF;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #6495ED;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}
.col-100 {
  float: right;
  width: 100%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, .col-100, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>

<div class="container">
<h1>Input Data Karyawan</h1>
<br>
  <form action="/action_page.php">
    <div class="row">
      <div class="col-25">
        <label for="nip">NIP</label>
      </div>
      <div class="col-75">
        <input type="text" id="nip" name="nip" placeholder="Nomor Induk Pegawai..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="nama">Nama</label>
      </div>
      <div class="col-75">
        <input type="text" id="nama" name="nama" placeholder="Nama Lengkap..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="jekel">Jenis Kelamin</label>
      </div>
      <div class="col-75">
       <label><input type="radio" name="jenis_kelamin" value="L" /> Laki-laki</label>
            <label><input type="radio" name="jenis_kelamin" value="P" /> Perempuan</label>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="alamat">Alamat</label>
      </div>
      <div class="col-75">
        <textarea id="alamat" name="alamat" placeholder="Alamat Lengkap.." style="height:200px"></textarea>
      </div>
    </div>
     <div class="row">
      <div class="col-25">
        <label for="no_hp">No. Handphone</label>
      </div>
      <div class="col-75">
        <input type="text" id="no_hp" name="no_hp" placeholder="No. Handphone..">
      </div>
    </div>
    <br>
    <div class="row">
    <div class="col-100">
      <input type="submit" value="Submit">
    </div>
  </form>
</div>

<?= $this->endSection() ?>