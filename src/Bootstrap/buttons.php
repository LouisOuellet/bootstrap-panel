<?php
$colors = ["light","dark","primary","secondary","info","warning","success","danger","gray","blue","indigo","purple","pink","red","orange","yellow","green","teal","cyan"];
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/dist/css/BSPanel.css">
    <link rel="stylesheet" href="/vendor/twbs/bootstrap-icons/font/bootstrap-icons.css">
    <title>Buttons</title>
  </head>
  <body>
    <div class="row g-0 row-cols-6">
      <?php foreach($colors as $color){ ?>
        <div class="col">
          <button type="button" class="w-100 btn btn-<?= $color ?>"><?= $color ?></button>
          <button type="button" class="w-100 btn btn-outline-<?= $color ?>"><?= $color ?></button>
        </div>
      <?php } ?>
    </div>
    <script src="/vendor/components/jquery/jquery.min.js"></script>
    <script src="/vendor/twbs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/dist/js/script.js"></script>
  </body>
</html>
