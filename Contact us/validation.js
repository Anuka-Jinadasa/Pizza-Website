function validateForm()

{
	
	var username,phone;
	
	
	username = document.reachUs.fname.value;
	phone = document.reachUs.phno.value;
	
if(username == "" || phone == "")
{
		
		alert("Fill all the given fields");
	
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