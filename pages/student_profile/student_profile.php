<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Beranda | CIS Skensa</title>
  <link rel="stylesheet" href="student_profile.css">
  
  <?php
    // Impor fungsi dari file PHP lain.
    require_once "../../templates/top_bar.php";
    require_once "../../templates/bottom_bar.php";
    require_once "../../templates/student_profile_card.php";

    top_bar_css();
    bottom_bar_css();
    student_profile_card_css();
  ?>
</head>
<body>
  <?php top_bar_html(); ?>
  <main>
    <?php student_profile_card_html(); ?>
  </main>
  <?php bottom_bar_html(); ?>
</body>
</html>
