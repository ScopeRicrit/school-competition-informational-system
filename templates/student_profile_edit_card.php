<?php
  function student_profile_edit_card_html(
    $nis = "?????", $name = "Anonim", $att_number = -1, $class = "? ??? ?"
  ) {
    $html = <<<HTML
      <div id="student_profile_edit">
        <h1>$nis - $name</h1>
        <h2>$att_number / $class</h2>
        <form>
          <fieldset>
            <label for="new_pfp">Foto Profil</label>
            <input type="file" accept="image/*" name="new_pfp" id="new_pfp">
            <label for="description">Deskripsi</label>
            <textarea rows="10" name="description" id="description"></textarea>
            <button><a class="return_link">Batalkan</a></button>
            <input type="submit" value="Ubah">
          </fieldset>
        </form>
      </div>  
    HTML;

    echo $html;
  }

  function student_profile_edit_card_css() {
    $html = <<<HTML
      <style>
        #student_profile_edit {
          margin: auto auto;
          width: 50%;
          background-color: red;
          padding: 20px;
        }

        h1 {
          margin: 0 auto;
        }

        h2 {
          margin-top: 0;
        }

        #student_profile_edit fieldset {
          display: grid;
          gap: 10px;
          grid-template-columns: 1fr 4fr;
          justify-content: start;
        }
          
        #student_profile_edit label {
          width: 100%;
          text-align: right;
        }

        #student_profile_edit button, #student_profile_edit input[type = "submit"] {
          width: fit-content;
          padding: 0 20px;
        }
      </style>
    HTML;

    echo $html;
  }
?>