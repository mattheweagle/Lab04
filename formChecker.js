function validateFields(){
  var inputs = document.getElementsByTagName('input');
  var radioChecked = false;
  var textFieldsFilled = true;
  var amountsFilled = true;
  var emailReg = /\S+@\S+\.\S+/;
  var username = document.getElementById("username").value;
  if(!emailReg.test(username)){
	  alert("username must be an email");
	  return false;
  }
  for (var i=0; i<inputs.length; i++) {
    if (inputs[i].type == 'text' && !inputs[i].value) {
      textFieldsFilled = false;
    }
	if (inputs[i].type == 'number' && !inputs[i].value || inputs[i].value < 0) {
      amountsFilled = false;
    } 
    if (inputs[i].type == 'radio' && inputs[i].checked) {
      radioChecked = true;
    } 
  }
  if(radioChecked == true && textFieldsFilled == true && amountsFilled == true){
	return true;
	
  }
	alert("error submiting");
	return false;
}
