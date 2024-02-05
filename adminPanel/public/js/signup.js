function validationForm() {

  document.getElementById("error-message").innerHTML = "";

  var password = document.getElementById("password").value;
  var retypedPassword = document.getElementById("retap-password").value;

  if (password !== retypedPassword) {
    document.getElementById("error-message").innerHTML =
      "Passwords do not match.";
    return false;
  }
  return true;
}

function togglePasswordVisibility() {
  var passwordInput = document.getElementById("password");
  var toggleIcon = document.getElementById("togglePassword");

  if (passwordInput.type === "password") {
    passwordInput.type = "text";
    toggleIcon.innerHTML = '<i class="fa fa-eye-slash" aria-hidden="true"></i>';
  } else {
    passwordInput.type = "password";
    toggleIcon.innerHTML = '<i class="fa fa-eye aria-hidden="true"></i>';
  }
}
