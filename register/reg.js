function validateForm(){
	
	var email, password, username, retypepw, phone, address;
	
	email = document.regForm.email.value;
	password = document.regForm.passw.value;
	username = document.regForm.usrname.value;
	retypepw = document.regForm.repasswd.value;
	phone = document.regForm.phoneNo.value;
	address = document.regForm.adrs.value;
	
	
	if(email == "" || password == "" || username == "" || retypepw == "" || phone == "" || address ==""){
		
		alert("Fill all the given fields");
	
	return false;	
	}
	
	else if(password.length < 8){
		
		alert("Password is too short");
	return false;
	}
	
	else if(password != retypepw){
		
		alert("Passwords are not matching");
	return false;	
	}
	
	else if(phone.length != 10 || !phone.match(/^[0-9]{10}$/)){
		
		alert("Give valid phone number");
	return false;	
	}
	
	else{
		
		alert("Register Form submitted successfully");
	
	return true;	
	}
}
	
	
	