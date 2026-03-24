<?php
  // Tautan Eksternal
  function external_links_html(
    $title = "???",
    $link = NULL,
  ) {
    // Lihat skrip Top Bar atau Bottom Bar untuk penjelasan Heredoc String.
    if ($link) {
      $html = <<<HTML
        <a href="$link">
          <h3 class="external_links">$title</h3>
        </a>
      HTML;
    }
    return $html;
  }

  // Competition Post Card / Kartu Postingan Kompetisi
  function comp_post_card_html(
    $title = "???",
    $major = "???",
    $post_description = "[Tidak ada deskripsi]",
    $thumbnail_path = "../../assets/images/default_comp_thumbnail.jpg",
    $external_links = [],
    $starts_on = "??/??/??",
    $ends_on = "??/??/??",
    $overseer = "Anonim",
    $viewed_by_owner = false
  ) {
    $link_elements = "";
    
    foreach ($external_links as $external_link) {
      $link_elements .= external_links_html($external_link["title"], $external_link["link"]);
    }

    $edit_post_button = "";

    if ($viewed_by_owner) {
      $edit_post_button = <<<HTML
        <a id="edit_post" href="">Edit Postingan</a> 
      HTML;
    }

    $html = <<<HTML
      <div id="comp_post_card">
        <img id="thumbnail" src="$thumbnail_path" alt="default_comp_thumbnail.jpg">
        <a class="return_link">
          <img src="../../assets/images/return_icon.png" alt="return_icon.png">
        </a>
        <h1>$title</h1>
        <h3>$major</h3>
        $link_elements
        <h3>Guru Pendamping: $overseer</h3>
        <h3>Dilaksanakan: $starts_on - $ends_on</h3>
        $edit_post_button
        <p>$post_description</p>
      </div>
    HTML;

    echo $html;
  }

  // Elemen <style> harus dicetak di dalam elemen <head> untuk bisa bekerja.
  function comp_post_card_css() {
    $html = <<<HTML
      <style>
        #comp_post_card * {
          margin-top: 0;
          margin-bottom: 0;
        }

        #comp_post_card {
          margin: auto auto;
          background-color: red;
          width: 50%;
          min-height: 500px;
          padding: 10px;
        }

        #comp_post_card h1 {
          margin-top: -55px;
        }
          
        #comp_post_card #thumbnail {
          max-width: 100%;
        }

        #comp_post_card .return_link {
          width: 60px;
          height: 60px;
          margin: 0;
          position: relative;
          right: 90px;
          bottom: 200px;
          background-color: orange;
          border-radius: 100%;

          display: flex;
          justify-content: center; 
          align-items: center;
        }

        #comp_post_card .return_link img {
          max-width: 70%;
          max-height: 70%;
          margin: auto;
        }

        #comp_post_card .external_links {
          text-overflow: ellipsis ;
        }

        #comp_post_card #edit_post {
          display: block;
          background-color: orange;
          padding: 5px 0;
          margin: 10px 20%;
          text-align: center;
        }

        #comp_post_card p {
          margin-top: 10px;
          text-indent: 1em;
          word-wrap: break-word;
          max-width: 100%;
        } 
      </style>
    HTML;

    echo $html;
  }
?>
