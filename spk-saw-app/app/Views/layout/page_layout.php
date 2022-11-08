<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="<?=base_url('css/bootstrap.min.css') ?>" rel="stylesheet" >
  </head>
  <body>
    <?= $this->include('layout/navbar') ?>

    <?= $this->renderSection('content') ?>

    <script src="<?=base_url('js/bootstrap.min.js') ?>"></script>
  </body>
</html>