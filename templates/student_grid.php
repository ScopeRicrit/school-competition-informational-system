<?php
  // Student Card / Kartu Tautan Siswa
  function student_card_html(
    $name = "Anonim",
    $att_number = "???",
    $class = "???",
    $profile_pic = "../../assets/images/default_pfp.jpg",
  ) {
    $html = <<<HTML
      <a class="student_card" href="student">
        <figure>
          <img src="$profile_pic" alt="pfp.png">
          <figcaption>
            <b>$name</b>
            <p class="att_num">$att_number</p>
            <p class="class">$class</p>
          </figcaption>
        </figure>
      </a>
    HTML;

    return $html;
  }
  
  // Student Grid
  // Penataan siswa
  function student_grid_html() {
    // Tes Kartu
    $cards = "";
    $cards .= student_card_html("I Wayan Aditya Pramata", 10, "X RPL 1");
    $cards .= student_card_html("Anak Agung Rahyanadi", 1, "X RPL 1");
    $cards .= student_card_html("Yomaharu Wariyui", 30, "X RPL 1");

    // Lihat skrip Top Bar atau Bottom Bar untuk penjelasan Heredoc String.
    $html = <<<HTML
      <div id="student_grid">
        $cards
      </div>
    HTML;
    echo $html;
  }

  // Elemen <style> harus dicetak di dalam elemen <head> untuk bisa bekerja.
  function student_grid_css() {
    $html = <<<HTML
      <style>
        #student_grid > * {
          margin: auto auto;
        }

        #student_grid {
          margin: 0 auto;
          width: 80%;
          padding: 10px;
          min-height: 100vh;
          background-color: green;
          display: grid;
          gap: 10px;
          grid-template-columns: repeat(auto-fill, 330px);
          justify-content: center;
          align-content: baseline;
        }

        .student_card {
          width: 100%;
          text-decoration: none;
        }

        .student_card * {
          text-align: left;
          width: 100%;
          color: black;
        }

        .student_card figure {
          margin: auto auto;
          background-color: lime;
          display: grid;
          grid-template-columns: 80px 1fr;
          gap: 10px;
        }

        .student_card figcaption {
          padding: 10px 0;
        }

        .student_card figcaption > * {
          margin: unset;
        }

        .student_card img {
          width: 80px;
          aspect-ratio: 1/1;
          object-fit: cover;
          object-position: top;
          border-radius: 50%;
        }
      </style>
    HTML;

    echo $html;
  }
?>