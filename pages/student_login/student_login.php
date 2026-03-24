<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    <title>Masuk Akun | SCIS Skensa</title>
    <link rel="stylesheet" href="student_login.css">
  </head>

  <body>
    <main>
      <h1>Masuk Akun</h1>
      <form id="login_form" action="student_login_validator.php" method="post">
        <fieldset>
          <figure>
            <img id="scis_logo" src="../../assets/images/logo_scis.png" alt="logo_scis.png">
          </figure>
          <legend><b>Data Siswa</b></legend>
          <div id="form_container">
            <label for="nis">NIS <span>*</span></label>
            <input type="number" name="nis" id="nis">
            
            <label for="password">Kata Sandi <span>*</span></label>
            <input type="password" name="password" id="password">
          </div>
          <p id="validation_text"></p>
          <input id="submit_button" type="button" value="Masuk">
        </fieldset>
      </form>  
    </main>
  </body>

  <script src="student_login.js" defer></script>
</html>
