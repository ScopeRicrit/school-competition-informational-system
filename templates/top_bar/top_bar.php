<?php
  // Top Bar / Header
  // Bilah navigasi di bagian paling atas halaman web.
  function top_bar_html(
    $profile_pic = "../../assets/images/default_pfp.jpg",
  ) {  
    // Heredoc String merupakan sejenis sintaks string yang menetapkan warna kode html di VS Code.
    // Ia diketik dengan tiga tanda panah kiri dan nama bebas.
    // Seperti string double quoted (""), ia dapat disisipkan variabel untuk fleksibilitas.
    $html = <<<HTML
      <header>
        <nav id="root_nav">
          <nav id="primary_nav">  
            <a href="home">
              <img id="logo" src="../../assets/images/logo_lms.png" alt="logo-scis.png">
            </a>
            <a href="../../pages/home/home.php">Beranda</a>
            <a href="../../pages/comp/comps.php">Perlombaan</a>
            <a href="students">Siswa</a>
          </nav>

          <nav id="user_menu">
            <span id="signed_account">
              <a id="profile_pic" href="profile">
                <img src="$profile_pic" alt="pfp.jpg">
              </a>
            </span>
            <a href="login">Login</a>
          </nav>
        </nav>
      </header>
    HTML;

    echo $html;
  }

  // Elemen <style> harus dicetak di dalam elemen <head> untuk bisa bekerja.
  function top_bar_css() {
    $html = <<<HTML
      <style>
        header * {
          margin: auto 0;
        }
        
        header {
          background-color: white;
          margin: 0;
        }

        header nav, header span {
          display: flex;
        }
        
        header #root_nav {
          justify-content: space-between;
          padding: 0 20px;
        }

        header #primary_nav {
          gap: 30px;
        }
        
        header #user_menu {
          gap: 10px;
        }

        header span {
          gap: 10px;
        }

        header #login_button {
          padding: 8px 16px;
        }

        header #logo {
          height: 50px;
        }

        header #profile_pic img {
          height: 30px;
        }
      </style>
    HTML;

    echo $html;
  }
?>
