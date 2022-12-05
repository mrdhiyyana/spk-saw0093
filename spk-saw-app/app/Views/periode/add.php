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
.ui-datepicker-calender {
  display: none;
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
<h1>Input Periode</h1>
<br>
  <form action="/action_page.php">
    <div class="row">
      <div class="col-25">
        <label for="tahun">Tahun</label>
      </div>
      <div class="col-75">
        <input type="date" id="tahun" name="tahun" placeholder="Perode Tahun..">
      </div>
    </div>
    
    <br>
    <div class="row">
    <div class="col-100">
      <input type="submit" value="Submit">
    </div>
  </form>
</div>
<script>
    $(function () {
    $("#datepicker").datepicker({date_Format: 'yy'});
});
</script>
<?= $this->endSection() ?>