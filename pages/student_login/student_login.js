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

  if (!moreThanZeroNumber(student_data[0])) {
    setValidityText("NIS harus lebih dari 0");
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

// Memeriksa apakah input bilangan lebih dari 0.
function moreThanZeroNumber(number) {
  return number > 0;
}


function setValidityText(message) {
  document.getElementById("validation_text").innerText = message;
}
