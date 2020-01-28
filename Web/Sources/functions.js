/*Method for validating Login form*/
function validateForm() {
  var password = document.forms["loginForm"]["formPswd"].value;
  var username = document.forms["loginForm"]["formName"].value;
  if (password == "" && username == "") {
    alert("Username and Password must be filled out!, please check it out.");
    return false;
  } else if (username == "") {
    alert("Username must be filled out!");
    return false;
  } else if (password == "") {
    alert("Password must be filled out!");
    return false;
  }
  return true;
}
