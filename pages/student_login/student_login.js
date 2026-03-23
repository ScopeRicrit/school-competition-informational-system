let loginForm = document.forms["login_form"];

// Prosedur validasi data siswa secara klien sebelum divalidasi di server.
loginForm.submit_button.addEventListener("click", clientValidation);

function clientValidation() {
  setValidityText("");

  student_data = [
    loginForm.nis.value, 
    loginForm.password.value,
  ];

  if (!allFieldInputted(student_data)) {
    setValidityText("Semua field wajib diisi");
    return;
  }

  loginForm.submit();
}

// Memeriksa apakah semua input formulir sudah terisi.
function allFieldInputted(inputs) {
  let validity = true;

  inputs.forEach(input => {
    if (input == "") {
      validity = false;
    }
  });
  
  return validity;
}

function setValidityText(message) {
  document.getElementById("validation_text").innerText = message;
}
