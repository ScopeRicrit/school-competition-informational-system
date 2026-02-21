<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Beranda | CIS Skensa</title>
  <link rel="stylesheet" href="comp.css">
  
  <?php
    // Impor fungsi dari file PHP lain.
    require_once "../../templates/top_bar/top_bar.php";
    require_once "../../templates/bottom_bar/bottom_bar.php";
    require_once "../../templates/comp_grid/comp_grid.php";

    top_bar_css();
    bottom_bar_css();
    comp_grid_css();
  ?>
</head>
<body>
  <?php top_bar_html(); ?>
  <main>
    <?php comp_grid_html(); ?>
  </main>
  <?php bottom_bar_html(); ?>
</body>
</html>