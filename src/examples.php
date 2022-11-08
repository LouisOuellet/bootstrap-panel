<?php
$files = scandir(dirname(__FILE__,2) . "/src");
$pages = [];
foreach($files as $key => $name){
  if(!in_array($name,['.','..','BSPanel.php','examples.php','example.php'])){ $pages[] = $name; }
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/dist/css/hyper-dark.css">
    <link rel="stylesheet" href="/vendor/twbs/bootstrap-icons/font/bootstrap-icons.css">
    <title>Examples</title>
  </head>
  <body>
    <div class="row g-2 row-cols-4">
      <?php foreach($pages as $page){ ?>
        <div class="col py-2">
          <a href="<?= $page ?>" class="w-100 btn btn-primary"><?= $page ?></a>
        </div>
      <?php } ?>
    </div>
    <script src="/vendor/components/jquery/jquery.min.js"></script>
    <script src="/vendor/twbs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/dist/js/script.js"></script>
  </body>
</html>
