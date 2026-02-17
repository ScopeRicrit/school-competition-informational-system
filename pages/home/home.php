<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Beranda | CIS Skensa</title>
  <link rel="stylesheet" href="home.css">
  
  <?php
    // Impor fungsi dari file PHP lain.
    require_once "../../templates/top_bar/top_bar.php";
    require_once "../../templates/bottom_bar/bottom_bar.php";

    top_bar_css();
    bottom_bar_css();
  ?>
</head>
<body>
  <?php top_bar_html(); ?>
  <main>
    <img id="skensa_logo" src="../../assets/images/logo_skensa.png" alt="logo_skensa.png">
    <h2>SMK Negeri 1 Denpasar</h2>
    <h3>Competition Informational System</h3>
    <p>Menginformasikan perlombaan akademik dan non-akademik untuk siswa.</p>
  </main>
  <?php bottom_bar_html(); ?>
</body>
</html>