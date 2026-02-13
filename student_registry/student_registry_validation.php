<?php
  require_once "../sql/sql_bridge.php";
  
  // Memeriksa apakah nis siswa baru sesuai dengan nis yang telah tercatat.
  function nis_matching($nis) {
    $match_rows = select_sql(
      "SELECT $nis = nis FROM students_table;"
    );
    if (array_sum($match_rows) > 0) {
      return true;
    }
    return false;
  }

  // Memeriksa apakah nomor absen siswa baru sesuai dengan nomor absen yang telah tercatat di kelas yang sama.
  function att_number_matching($att_number, $class) {
    $match_rows = select_sql(
      "SELECT $att_number = att_number FROM students_table WHERE class = '$class';"
    );
    if (array_sum($match_rows) > 0) {
      return true;
    }
    return false;
  }
  
  function usable_att_number($class) {
    $last_att_number = select_sql(
      "SELECT MAX(att_number) FROM `students_table` WHERE class = '$class';"
    );
    return $last_att_number[0] + 1;
  }

  function create_account() {
    $nis = $_POST["nis"];
    $full_name = $_POST["full_name"];
    $att_number = $_POST["att_number"];
    $class = $_POST["class"];
    $password = $_POST["password"];

    $success = execute_sql("
      INSERT INTO students_table 
        (nis, full_name, att_number, class, acc_password)
      VALUES 
        ('$nis', '$full_name', '$att_number', '$class', '$password');
      ");
  
    if ($success) {
      header("Location: ../profile.html"); 
      exit;
    }
  
    header("Location: ../failure.html"); 
    exit;
  }

  $validity = true;

  if (nis_matching($_POST["nis"])) {
    $validation_text = "NIS ini telah didaftarkan";
    $validity = false;
  }
  
  if (att_number_matching($_POST["att_number"], $_POST["class"])) {
    $usable_att_number = usable_att_number($_POST['class']);
    $validation_text = "Absen ini telah terambil dalam kelasnya. Nomor yang valid adalah $usable_att_number";
    $validity = false;
  }
?>

<form hidden id="fail_form" action="student_signup.php" method="post">
  <input type="number" name="nis" id="nis", value="<?php echo $_POST["nis"]?>">
  <input type="text" name="full_name" id="full_name", value="<?php echo $_POST["full_name"]?>">
  <input type="text" name="major" id="major", value="<?php echo $_POST["major"]?>">
  <input type="text" name="class" id="class", value="<?php echo $_POST["class"]?>">
  <input type="text" name="att_number" id="att_number", value="<?php echo $_POST["att_number"]?>">
  <input type="text" name="password" id="password", value="<?php echo $_POST["password"]?>">
  <input type="text" name="password_confirm" id="password_confirm", value="<?php echo $_POST["password_confirm"]?>">
  <input type="text" name="validation_text" id="validation_text", value="<?php echo $validation_text ?? "" ?>">
</form>

<?php 
  if ($validity) {
    create_account();
  } else {
    echo "
      <script type='text/javascript'>
        document.getElementById('fail_form').submit();
      </script>
    ";
  }
?>

