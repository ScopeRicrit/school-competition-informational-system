<?php
  // Bottom Bar / Footer
  // Bilah navigasi di bagian paling bawah halaman web.
  function bottom_bar_html($title = "Default Title", $desc = "Default Description", $img = "/images/fallback.jpg") {
    // Heredoc String merupakan sejenis sintaks string yang menetapkan warna kode html di VS Code.
    // Ia diketik dengan tiga tanda panah kiri dan nama bebas.
    // Seperti string double quoted (""), ia dapat disisipkan variabel untuk fleksibilitas.
    $html = <<<HTML
      <footer>
        <a id="globe_icon" href="https://smkn1denpasar.sch.id/">
          <img src="../../assets/images/social_icons/globe.png" alt="globe_icon.png">
        </a>

        <a id="fb_icon" href="http://facebook.com/smknegeri1denpasar">
          <img src="../../assets/images/social_icons/fb.png" alt="facebook_icon.png">
        </a>

        <p>Anda belum login (masuk)</p>

        <a id="yt_icon" href="https://youtube.com/@smkn1denpasar">
          <img src="../../assets/images/social_icons/yt.png" alt="youtube_icon.png">
        </a>

        <a id="ig_icon" href="https://instagram.com/smkn1denpasar/">
          <img src="../../assets/images/social_icons/ig.png" alt="instagrampng">
        </a>
      </footer>
    HTML;

    echo $html;
  }

  // Elemen <style> harus dicetak di dalam elemen <head> untuk bisa bekerja.  
  function bottom_bar_css() {
    $html = <<<HTML
      <style>
        footer * {
          margin: auto 0;
          color: white;
          bottom: 0;
        }

        footer {
          margin: 0;
          background-color: #232325;
          display: flex;
          justify-content: space-evenly;
          height: 80px;
        }

        footer a {
          height: 50px;   
          border-radius: 100%;
          aspect-ratio: 1/1;
          display: flex;
          justify-content: center;
          align-items: center;
        }

        footer img {
          height: 25px;
          margin: auto auto;
        }

        footer #globe_icon {
          background-color: #1F466F;
        }

        footer #fb_icon {
          background-color: #1877F2;
        }
        
        footer #yt_icon {
          background-color: #B2071D;
        }

        footer #ig_icon {
          background-color: #D300C5;
        }
      </style>
    HTML;

    echo $html;
  }
?>