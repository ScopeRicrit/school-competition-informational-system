
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
            <a href="../home/home.php">
              <img id="logo" src="../../assets/images/logo_scis.png" alt="logo-scis.png">
            </a>
            <a href="../home/home.php">Beranda</a>
            <a href="../comps/comps.php">Perlombaan</a>
            <a href="../students/students.php">Siswa</a>
          </nav>

          <nav id="user_menu">
            <span id="signed_account">
              <a id="profile_pic" href="profile">
                <img src="$profile_pic" alt="pfp.jpg">
              </a>
            </span>
            <a href="../student_login/student_login.php">Login</a>
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
  :root {
    --navy:       #0f2044;
    --navy-mid:   #1a3260;
    --blue:       #2a52a0;
    --gold:       #e6b94a;
    --gold-light: #f5d98a;
    --bg:         #eceef4;
    --white:      #ffffff;
    --text:       #1a1f2e;
    --text-muted: #5a6278;
    --shadow-sm:  0 2px 8px rgba(15,32,68,0.10);
    --shadow-md:  0 6px 24px rgba(15,32,68,0.14);
  }

  header * {
    margin: auto 0;
    font-family: 'DM Sans', sans-serif;
  }

  header {
    background-color: var(--white);
    margin: 0;
    border-bottom: 1px solid rgba(42,82,160,0.10);
    box-shadow: var(--shadow-sm);
    position: sticky;
    top: 0;
    z-index: 100;
  }

  header nav,
  header span {
    display: flex;
  }

  header #root_nav {
    justify-content: space-between;
    align-items: center;
    padding: 0 28px;
    height: 64px;
  }

  header #primary_nav {
    gap: 32px;
    align-items: center;
  }

  header #primary_nav a {
    text-decoration: none;
    color: var(--text-muted);
    font-size: 0.9rem;
    font-weight: 500;
    letter-spacing: 0.2px;
    transition: color 0.18s;
    position: relative;
  }

  /* Garis bawah hover */
  header #primary_nav a:not(:has(img))::after {
    content: '';
    position: absolute;
    left: 0;
    bottom: -4px;
    width: 0;
    height: 2px;
    background: var(--gold);
    border-radius: 2px;
    transition: width 0.22s ease;
  }

  header #primary_nav a:not(:has(img)):hover {
    color: var(--navy);
  }

  header #primary_nav a:not(:has(img)):hover::after {
    width: 100%;
  }

  header #user_menu {
    gap: 14px;
    align-items: center;
  }

  header span {
    gap: 10px;
    align-items: center;
  }

  /* Logo SCIS */
  header #logo {
    height: 46px;
    transition: opacity 0.18s;
  }

  header #logo:hover {
    opacity: 0.85;
  }

  /* Foto profil bulat */
  header #profile_pic {
    display: flex;
    align-items: center;
  }

  header #profile_pic img {
    height: 36px;
    width: 36px;
    border-radius: 50%;
    object-fit: cover;
    object-position: top;
    border: 2.5px solid var(--gold);
    transition: box-shadow 0.18s, transform 0.18s;
  }

  header #profile_pic img:hover {
    box-shadow: 0 0 0 3px rgba(230,185,74,0.35);
    transform: scale(1.05);
  }

  /* Tombol Login */
  header #user_menu > a[href*="login"] {
    padding: 8px 20px;
    background: var(--blue);
    color: var(--white) !important;
    border-radius: 8px;
    font-size: 0.875rem;
    font-weight: 600;
    text-decoration: none;
    transition: background 0.18s;
  }

  header #user_menu > a[href*="login"]:hover {
    background: var(--navy-mid);
  }

    </style>
  HTML;

    echo $html;
  }
?>
