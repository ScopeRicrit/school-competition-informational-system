let signUpForm = document.forms[0];

// Mengupdate opsi-opsi kelas setiap pergantian kelas.
signUpForm.major.addEventListener("change", updateClassOptions);

function updateClassOptions() {
  let selectedMajor = signUpForm.major.value;
  
  for (const classOption of signUpForm.class.options) {
    classOption.style.display = "none";
  } 

  signUpForm.class.options[0].style.display = "block";
  signUpForm.class.value = "";

  for (const classOption of document.getElementsByClassName(selectedMajor)) {
    classOption.style.display = "block";
  }
}


// Prosedur validasi data siswa secara klien sebelum divalidasi di server.
signUpForm.submit_button.addEventListener("click", clientValidation);

function clientValidation() {
  setValidityText("");

  student_data = [
    signUpForm.nis.value, 
    signUpForm.name.value,
    signUpForm.major.value,
    signUpForm.class.value,
    signUpForm.password.value,
    signUpForm.password_confirm.value
  ];

  if (!allFieldInputted(student_data)) {
    setValidityText("Semua field wajib diisi");
    return;
  }

  if (!matchingPasswordConfirmation(student_data[4], student_data[5])) {
    setValidityText("Password harus sesuai dengan konfirmasi password");
    return;
  }

  if (!lengthyPassword(student_data[4])) {
    setValidityText("Password harus memiliki minimal 8 karakter");
    return;
  } 

  signUpForm.submit();
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

// Memeriksa apakah password itu sesuai dengan konfirmasi password.
function matchingPasswordConfirmation(password, confirmation) {
  return password == confirmation;
}

// Memeriksa apakah password minimum 8 karakter.
function lengthyPassword(password) {
  return password.length >= 8;
}

function setValidityText(message) {
  document.getElementById("validation_text").innerText = message;
}
