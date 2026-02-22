<?php
  // Competition Card / Postingan
  function comp_card_html(
    $name = "Perlombaan Tak Ternama",
    $thumbnail = "../../assets/images/wide_card_placeholder.png",
    $major = "???",
    $opened = true
  ) {
    $status_message = "Terbuka";
    $status_class = "opened";
    if ($opened == false) {
      $status_message = "Tertutup";
      $status_class = "closed";
    }
    
    $html = <<<HTML
      <a class="comp_card" href="posting">
        <figure>
          <img src="$thumbnail" alt="thumbnail.png">
          <figcaption id="name"><b>$name</b></figcaption>
          <p class="major">$major</p>
          <p class="status $status_class">$status_message</p>
        </figure>
      </a>
    HTML;

    return $html; 
  }
  
  // Competition Grid
  // Penataan kompetisi
  function comp_grid_html() {
    // Tes Kartu
    $cards = "";
    $cards .= comp_card_html();
    $cards .= comp_card_html();
    $cards .= comp_card_html();

    // Lihat skrip Top Bar atau Bottom Bar untuk penjelasan Heredoc String.
    $html = <<<HTML
      <div id="comp_grid">
        $cards
      </div>
    HTML;
    echo $html;
  }

  // Elemen <style> harus dicetak di dalam elemen <head> untuk bisa bekerja.
  function comp_grid_css() {
    $html = <<<HTML
      <style>
        #comp_grid * {
          margin: auto auto;
        }

        #comp_grid {
          margin: 0 auto;
          width: 80%;
          padding: 10px;
          min-height: 100vh;
          background-color: red;
          display: grid;
          gap: 10px;
          grid-template-columns: repeat(auto-fill, 320px);
          justify-content: center;
          align-content: baseline;
        }

        .comp_card * {
          text-align: left;
        }

        .comp_card {
          background-color: orange;
          height: fit-content;
          width: 100%;
          aspect-ratio: 1 / 0.5;
          text-decoration: none;
          color: unset;
        }

        .comp_card figure {
          display: grid;
          padding: 10px;
          justify-content: space-between;
          grid-template-areas: 
          "card_thumb card_thumb"
          "card_name card_name"
          "card_major card_status";
        }

        .comp_card img {
          grid-area: card_thumb;
          max-height: 120px;
        }

        .comp_card figcaption {
          grid-area: card_name;
          font-size: 1.2em;
          overflow-wrap: normal;
          width: 100%;
        }

        .comp_card #major {
          grid-area: card_major;
          width: 100%;
        }

        .comp_card #status {
          grid-area: card_status;
          width: fit-content;
          padding: 2px 5px;
          margin-right: 0;
        }

        .comp_card .opened {
          background-color: green;
        }

        .comp_card .closed {
          background-color: grey;
        }
      </style>
    HTML;

    echo $html;
  }
?>

