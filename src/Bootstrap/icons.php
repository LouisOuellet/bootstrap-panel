<?php
$files = scandir(dirname(__FILE__,3) . "/vendor/twbs/bootstrap-icons/icons");
$icons = [];
foreach($files as $key => $name){
  if(!in_array($name,['.','..'])){ $icons[] = str_replace('.svg','',$name); }
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/dist/css/BSPanel.css">
    <link rel="stylesheet" href="/vendor/twbs/bootstrap-icons/font/bootstrap-icons.css">
    <title>Icons</title>
  </head>
  <body>
    <div class="row g-0 row-cols-6">
      <?php foreach($icons as $icon){ ?>
        <div class="col">
          <div class="text-center"><i class="bi-<?= $icon ?> fs-1"></i></div>
          <div class="text-center"><?= $icon ?></div>
        </div>
      <?php } ?>
    </div>
    <script src="/vendor/components/jquery/jquery.min.js"></script>
    <script src="/vendor/twbs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/dist/js/script.js"></script>
  </body>
</html>
