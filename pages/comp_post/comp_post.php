<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $post["title"] ?? "???"; ?> | CIS Skensa</title>
  <link rel="stylesheet" href="comp_post.css">
  
  <?php
    // Impor fungsi dari file PHP lain.
    require_once "../../templates/top_bar.php";
    require_once "../../templates/bottom_bar.php";
    require_once "../../templates/comp_post_card.php";
    require_once "../../templates/return_link.php";
    
    top_bar_css();
    bottom_bar_css();
    comp_post_card_css();
  ?>
</head>
<body>
  <?php top_bar_html(); ?>
  <main>
    <?php comp_post_card_html(); ?>
  </main>
  <?php bottom_bar_html(); ?>
  <?php return_link_js(); ?>
</body>
</html>
