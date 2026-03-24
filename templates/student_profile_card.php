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
    $nis = "?",
    $att_number = "???",
    $class = "???",
    $major = "???",
    $profile_pic = "../../assets/images/default_pfp.jpg",
    $profile_description = "[Tidak ada deskripsi]",
    $joined_comps = [],
    $created_on = "??/??/??",
    $viewed_by_owner = false
  ) {
    $entries = "";
    
    foreach ($joined_comps as $comp) {
      $entries .= joined_comps_html($comp["name"], $comp["icon"]);
    }

    // Tes Entri
    $entries .= joined_comps_html("Tanding Catur Daerah Bali");
    $entries .= joined_comps_html("Kontes Web Developer");
    $entries .= joined_comps_html("Perlombaan Basket");
    
    $edit_profile_button = "";
    if ($viewed_by_owner) {
      $edit_profile_button = <<<HTML
        <a id="edit_profile" href="../student_profile_edit/student_profile_edit.php">Edit Profil</a> 
      HTML;
    }

    $html = <<<HTML
      <div id="student_profile">
        <section>
          <figure>
            <img src="$profile_pic" alt="pfp.png">    
            <figcaption><h1>$name</h1></figcaption>
            $edit_profile_button
          </figure>
          <div id="student_datas">
            <div id="student_creds">
              <p>NIS</p>
              <p>: $nis</p>
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
          width: 50%;
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

        #student_profile figure {
          width: 40%;
        }

        #student_profile figure img {
          height: 150px;
        }

        #student_profile #student_datas {
          width: 60%;
        }

        #student_profile #student_creds {
          display: grid;
          grid-template-columns: 30% 70%;
        }

        #student_profile #student_creds > * {
          text-align: left;
        }

        #student_profile #edit_profile {
          display: block;
          background-color: orange;
          padding: 5px 0;
        }

        #student_profile #description {
          max-width: 100%;
          text-align: left;
          margin-top: 10px;
          text-indent: 1em;
          word-wrap: break-word;
        }

        #student_profile h3 {
          padding: 10px
        }

        #student_profile #comp_list {
          display: flex;
          flex-direction: column;
        }

        #student_profile .comp_entry {
          display: flex;
          align-items: center;
          justify-content: left;
          margin: 5px 10px;
          gap: 10px;
        }

        #student_profile .comp_entry img {
          width: 40px;
        }
      </style>
    HTML;

    echo $html;
  }
?>
