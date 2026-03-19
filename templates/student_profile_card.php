<?php
  // Entri Kompetisi yang diikuti
  function joined_comps_html(
    $name = "???",
    $icon = "../../assets/images/default_comp_icon.jpg",
  ) {
    // Lihat skrip Top Bar atau Bottom Bar untuk penjelasan Heredoc String.
    $html = <<<HTML
      <a class="comp_entry">
        <img src="$icon" alt="comp_icon.jpg">
        <p>$name</p>
      </a>
    HTML;
    return $html;
  }

  // Student Profile Card / Kartu Profile Siswa
  function student_profile_card_html(
    $name = "Anonim",
    $id = "?",
    $att_number = "???",
    $class = "???",
    $major = "???",
    $profile_pic = "../../assets/images/default_pfp.jpg",
    $profile_description = "[Tidak ada deskripsi]",
    $joined_comps = [],
    $created_on = "??/??/??"
  ) {
    $entries = "";
    
    foreach ($joined_comps as $comp) {
      $entries .= joined_comps_html($comp["name"], $comp["icon"]);
    }

    // Tes Entri
    $entries .= joined_comps_html("Tanding Catur Daerah Bali");
    $entries .= joined_comps_html("Kontes Web Developer");
    $entries .= joined_comps_html("Perlombaan Basket");
    
    $html = <<<HTML
      <div id="student_profile">
        <section>
          <figure>
            <img src="$profile_pic" alt="pfp.png">    
            <figcaption><h1>$name</h1></figcaption>
            <a id="edit_profile" href="">Edit Profil</a>
          </figure>
          <div id="student_datas">
            <div id="student_creds">
              <p>ID</p>
              <p>: $id</p>
              <p>Nomor Absen</p>
              <p>: $att_number</p>
              <p>Kelas</p>
              <p>: $class</p>
              <p>Jurusan</p>
              <p>: $major</p>
              <p>Tanggal Daftar</p>
              <p>: $created_on</p>
            </div>
            <p id="description">$profile_description</p>
          </div>
        </section>
        <h3>Mengikuti lomba</h3>
        <div id="comp_list">
          
        </div>
      </div>
    HTML;

    echo $html;
  }

  // Elemen <style> harus dicetak di dalam elemen <head> untuk bisa bekerja.
  function student_profile_card_css() {
    $html = <<<HTML
      <style>
        #student_profile {
          background-color: red;
          width: 700px;
          min-height: 100vh;
          margin: 10px auto 10px;
          padding: 40px 40px;
        }

        #student_profile * {
          text-align: center;
          margin: 0 0;
        }

        #student_profile section {
          display: flex;
          gap: 10px;
          flex-direction: row;
        }

        #student_profile > div {
          display: flex;
          gap: 10px;
          flex-direction: column;
        }

        figure {
          width: 40%;
        }

        figure img {
          height: 150px;
        }

        #student_datas {
          width: 60%;
        }

        #student_creds {
          display: grid;
          grid-template-columns: 30% 70%;
        }

        #student_creds > * {
          text-align: left;
        }

        #edit_profile {
          display: block;
          background-color: orange;
          padding: 5px 0;
        }

        #description {
          max-width: 100%;
          text-align: left;
          margin-top: 10px;
          text-indent: 1em;
          word-wrap: break-word;
        }

        h3 {
          padding: 10px
        }

        #comp_list {
          display: flex;
          flex-direction: column;
        }

        .comp_entry {
          display: flex;
          align-items: center;
          justify-content: left;
          margin: 5px 10px;
          gap: 10px;
        }

        .comp_entry img {
          width: 40px;
        }
      </style>
    HTML;

    echo $html;
  }
?>