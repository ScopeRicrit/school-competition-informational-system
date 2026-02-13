<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    <title>Tambahkan Siswa Baru</title>
    <link rel="stylesheet" href="student_signup.css">
  </head>

  <body>
    <main>
      <h1>Tambahkan Siswa</h1>
      <form action="student_signup_validator.php" method="post">
        <fieldset>
          <legend><b>Data Siswa</b></legend>
          <div id="form_container">
            <label for="nis">NIS <span>*</span></label>
            <input type="number" name="nis" id="nis"
            value = "<?php echo $_POST["nis"] ?? ""; ?>">

            <label for="full_name">Nama <span>*</span></label>
            <input type="text" name="full_name" id="full_name"
            value="<?php echo $_POST["full_name"] ?? ""; ?>">
            
            <label for="major">Jurusan <span>*</span></label>
            <select name="major" id="major">
              <?php $major = $_POST["major"] ?? null; ?>
              <option value="">-- Pilih Jurusan --</option>
              <option <?php echo $major == "RPL" ? "selected" : ""; ?>
                value="RPL">Rekayasa Perangkat Lunak</option>
              <option <?php echo $major == "DKV" ? "selected" : ""; ?>
                value="DKV">Desain Komunikasi Visual</option>
              <option <?php echo $major == "TKJ" ? "selected" : ""; ?>
                value="TKJ">Teknik Komputer dan Jaringan</option>
            </select>
          

            
            <label for="class">Kelas <span>*</span></label>
            <select name="class" id="class">
              <?php
                require_once "sql_source.php";

                $preselected_class = $_POST['class'] ?? null;
                $class_rows = select_sql(
                  "SELECT class_id, major_id FROM class_table;"
                ); 

                echo "<option value=''>-- Pilih Kelas --</option>";

                foreach ($class_rows as $class_row) {
                  $class_data = $class_row["class_id"];
                  $major_data = $class_row["major_id"];
                  $option_html = "<option";
                  if ($preselected_class == $class_data) {
                    $option_html .= " selected";
                  }
                  
                  if ($major != $major_data) {
                    $option_html .= " hidden";
                  }

                  $option_html .= " class='class_options $major_data' value='$class_data'>$class_data</option>";
                  echo $option_html;
                }
              ?>
            </select>
            
            <label for="att_number">No. Absen <span>*</span></label>
            <input type="number" name="att_number" id="att_number"
            value="<?php echo $_POST["att_number"] ?? ""; ?>">

            <label for="password">Kata Sandi <span>*</span></label>
            <input type="text" placeholder="12345678" name="password" id="password"
            value="<?php echo $_POST["password"] ?? "12345678"; ?>">

            <label for="password_confirm">Konfirmasi Sandi <span>*</span></label>
            <input type="text" placeholder="12345678" name="password_confirm" id="password_confirm"
            value="<?php echo $_POST["password_confirm"] ?? "12345678"; ?>">
          </div>
          <p id="validation_text"><?php echo $_POST["validation_text"] ?? ""; ?></p>
          <input id="submit_button" type="button" value="Tambahkan">
        </fieldset>
      </form>  
    </main>
  </body>

  <script src="student_signup.js" defer></script>
</html>
