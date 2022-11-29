<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="<?= base_url('css/bootstrap.min.css') ?>" rel="stylesheet" >
    <link rel="stylesheet" href="<?= base_url('css/dataTables.bootstrap5.min.css') ?>"/>

    <!-- Jquery dan Bootstrap JS -->
    <script src="<?= base_url('js/jquery-3.5.1.js') ?>"></script>
    <script src="<?= base_url('js/bootstrap.min.js') ?>"></script>
  </head>

  <body>
    <?= $this->include('layout/navbar') ?>

    <?= $this->renderSection('content') ?>

    <script src="<?= base_url('js/jquery.dataTables.min.js') ?>"></script>
    <script src="<?= base_url('js/dataTables.bootstrap5.min.js') ?>"></script>
  </body>
</html>