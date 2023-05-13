function formValidator(){
// Make quick references to our fields
var firstname = document.getElementById('firstname');
var addr = document.getElementById('addr');
var zip = document.getElementById('zip');
var state = document.getElementById('state');
var username = document.getElementById('username');
var email = document.getElementById('email');
// Check each input in the order that it appears in the form!
if(isAlphabet(firstname, "Please enter only letters for your name")){
if(isAlphanumeric(addr, "Numbers and Letters Only for Address")){
if(isNumeric(zip, "Please enter a valid zip code")){
if(madeSelection(state, "Please Choose a State")){
if(lengthRestriction(username, 6, 8)){
if(emailValidator(email, "Please enter a valid email address")){
return true;
}
}
}
}
}
}
return false;
}