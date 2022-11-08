<?php
$colors = ["light","dark","primary","secondary","info","warning","success","danger","gray","blue","indigo","purple","pink","red","orange","yellow","green","teal","cyan"];
$tints = [100,200,300,400,500,600,700,800,900];
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/dist/css/dashly.css">
    <link rel="stylesheet" href="/vendor/twbs/bootstrap-icons/font/bootstrap-icons.css">
    <title>Colors - Dashly</title>
  </head>
  <body>
    <div class="row g-0 row-cols-6">
      <?php foreach($colors as $color){ ?>
        <div class="col">
          <div class=" p-2 bg-<?= $color ?>"><?= $color ?></div>
          <?php foreach($tints as $tint) { ?>
            <div class=" p-2 bg-<?= $color ?>-<?= $tint ?>"><?= $color ?>-<?= $tint ?></div>
          <?php } ?>
        </div>
      <?php } ?>
    </div>
    <div class="row g-0 row-cols-6">
      <?php foreach($colors as $color){ ?>
        <div class="col">
          <div class="text-center"><a href="#" class="link-<?= $color ?>">Link <?= $color ?></a></div>
          <div class="text-center"><span class="text-<?= $color ?>">Text <?= $color ?></span></div>
          <div class="text-center"><span class="glow-<?= $color ?>">Glow <?= $color ?></span></div>
        </div>
      <?php } ?>
    </div>
    <script src="/vendor/components/jquery/jquery.min.js"></script>
    <script src="/vendor/twbs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/dist/js/script.js"></script>
  </body>
</html>
