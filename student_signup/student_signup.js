let signUpForm = document.forms[0];

signUpForm.s_major.addEventListener("change", updateClassOptions);

updateClassOptions();

function updateClassOptions() {
  let selectedMajor = signUpForm.s_major.value;
  let classList = {
    "": [],
    "RPL": ["X RPL 1", "X RPL 2"],
    "DKV": ["X DKV 1", "X DKV 2"],
    "TKJ": ["X TKJ 1", "X TKJ 2"]
  };
  
  signUpForm.s_class.innerHTML = "";
  
  classList[selectedMajor].forEach(function(item) {
    signUpForm.s_class.innerHTML += `<option value="${item}">${item}</option>`;
  })
}

signUpForm.submit_button.addEventListener("click", clientValidation);

function clientValidation() {
  setValidityText("");

  student_data = [
    signUpForm.s_nis.value, 
    signUpForm.s_name.value,
    signUpForm.s_major.value,
    signUpForm.s_class.value,
    signUpForm.s_password.value,
    signUpForm.s_password_confirm.value
  ];

  if (!allFieldInputted(student_data)) {
    setValidityText("Semua field wajib diisi.");
  }
}

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