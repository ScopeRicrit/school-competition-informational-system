<?php
  function return_link_js() {
    $html = <<<HTML
      <script>
        // Kita ingin link ini untuk kembali ke halaman sebelumnya
        
        const returnLinks = document.getElementsByClassName('return_link');
        for (let index = 0; index < returnLinks.length; index++) {
          returnLinks[index].setAttribute('href', document.referrer);
          // Atribut href memperbolehkan fitur browser seperti: 
          //  - Hover untuk melihat alamat link
          //  - Klik kanan dan copy alamat link
          //  - Klik kanan dan buka di tab baru
          
          // Namun, kita href backlinknya tidak digunakan untuk navigasi langsung. 
          // Karena browsernya melihatnya sebagai link biasa dan 
          // menyisipkan halaman terkini di histori.
          // 
          // Jadi dalam urutan halaman A-B-C-D, 
          // pengguna hanya dapat mundur ke C sebelum "mundur" ke D lagi.  
          // 
          // Untuk itu, metode berikut akan memuat link sebelumnya di history.
          returnLinks[index].onclick = function() {
            history.back();
            return false;
          }
        }
      </script>
    HTML;

    echo $html;
  }
?>