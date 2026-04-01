
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
        @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600;700&family=DM+Sans:wght@300;400;500;600&display=swap');

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
          --shadow-md:  0 8px 28px rgba(15,32,68,0.15);
          --radius:     14px;
        }

        /* ── Card Wrapper ── */
        #student_profile_edit {
          margin: 0 auto;
          width: 90%;
          max-width: 620px;
          background-color: var(--white);      /* Ganti dari merah */
          padding: 0;
          border-radius: var(--radius);
          box-shadow: var(--shadow-md);
          border: 1px solid rgba(42,82,160,0.08);
          overflow: hidden;
          font-family: 'DM Sans', sans-serif;
        }

        /* ── Header card ── */
        #student_profile_edit h1 {
          margin: 0;
          font-family: 'Playfair Display', serif;
          font-size: 1.3rem;
          font-weight: 700;
          color: var(--white);
          background: linear-gradient(135deg, var(--navy-mid) 0%, var(--blue) 100%);
          padding: 22px 28px 8px;
          line-height: 1.2;
        }

        #student_profile_edit h2 {
          margin: 0;
          font-size: 0.85rem;
          font-weight: 400;
          color: rgba(255,255,255,0.62);
          background: linear-gradient(135deg, var(--navy-mid) 0%, var(--blue) 100%);
          padding: 0 28px 22px;
          font-family: 'DM Sans', sans-serif;
        }

        /* ── Form ── */
        #student_profile_edit form {
          padding: 24px 28px 28px;
        }

        #student_profile_edit fieldset {
          border: none;
          padding: 0;
          display: grid;
          gap: 12px 16px;
          grid-template-columns: 1fr 3fr;
          align-items: center;
        }

        /* Label */
        #student_profile_edit label {
          width: 100%;
          text-align: right;
          font-size: 0.8rem;
          font-weight: 600;
          color: var(--text-muted);
          text-transform: uppercase;
          letter-spacing: 0.4px;
        }

        /* Input file */
        #student_profile_edit input[type="file"] {
          font-size: 0.85rem;
          color: var(--text-muted);
          font-family: 'DM Sans', sans-serif;
          cursor: pointer;
        }

        /* Textarea deskripsi */
        #student_profile_edit textarea {
          width: 100%;
          padding: 10px 13px;
          border: 1.5px solid rgba(42,82,160,0.16);
          border-radius: 9px;
          font-family: 'DM Sans', sans-serif;
          font-size: 0.9rem;
          color: var(--text);
          background: var(--bg);
          resize: vertical;
          outline: none;
          transition: border-color 0.18s, box-shadow 0.18s, background 0.18s;
          line-height: 1.6;
        }

        #student_profile_edit textarea:focus {
          border-color: var(--blue);
          background: var(--white);
          box-shadow: 0 0 0 3px rgba(42,82,160,0.10);
        }

        /* ── Baris tombol (Batalkan + Ubah) ── */
        /* Span kosong agar tombol mulai di kolom ke-2 */
        #student_profile_edit button,
        #student_profile_edit input[type="submit"] {
          width: fit-content;
          padding: 9px 22px;
          border-radius: 9px;
          font-family: 'DM Sans', sans-serif;
          font-size: 0.875rem;
          font-weight: 600;
          cursor: pointer;
          border: none;
          transition: background 0.18s, transform 0.15s;
        }

        /* Tombol Batalkan */
        #student_profile_edit button {
          background: transparent;
          border: 1.5px solid rgba(42,82,160,0.20);
          color: var(--text-muted);
        }

        #student_profile_edit button:hover {
          border-color: var(--navy);
          color: var(--navy);
        }

        /* Link kembali di dalam tombol Batalkan */
        #student_profile_edit button a.return_link {
          color: inherit;
          text-decoration: none;
          font-size: inherit;
          font-weight: inherit;
        }

        /* Tombol Submit (Ubah) */
        #student_profile_edit input[type="submit"] {
          background: var(--blue);
          color: var(--white);
          box-shadow: 0 3px 12px rgba(42,82,160,0.22);
        }

        #student_profile_edit input[type="submit"]:hover {
          background: var(--navy-mid);
          transform: translateY(-1px);
        }
      </style>
    HTML;

    echo $html;
  }
?>
