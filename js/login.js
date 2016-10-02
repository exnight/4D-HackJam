function login_validate(form) {
if (form.username.value=="Username") { 
if (form.password.value=="Password") {              
alert("Login Successful");
return true
} else {
alert("Invalid Password")
return false
}
} else {  alert("Invalid UserID")
return false
}
}
