/*Method for validating Login form*/
function validateLogin() {
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

function validateForm() {
  var username = document.forms["dataForm"]["userName"].value;
  var phoneNo = document.forms["dataForm"]["phone"].value;
  var email = document.forms["dataForm"]["emailId"].value;
  var comment = document.forms["dataForm"]["comments"].value;
  if (username == "" || phoneNo == "" || email == "" || comment == "") {
    alert("All fields must be filled, Please check again.");
    return false;
  }
  /*
  else if (username==) {
    alert("Name of the User must be filled out!");
    return false;
  } else if (phoneNo == "") {
    alert("Phone No. must be filled out!");
    return false;
  } else if (email == "") {
    alert("Email must be filled out!");
    return false;
  } else if ((comment = "")) {
    alert("Comment box must be filled out. At least a single line!");
  }
  */
  return true;
}
