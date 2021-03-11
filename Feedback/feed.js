function validate(){
	
	var fname, mail, phno, order, msg;
	
	
	fname = document.formfeed.fullname.value;
	mail = document.formfeed.email.value;
	order = document.formfeed.orderno.value;
	msg = document.formfeed.message.value;
	
	phno = document.getElementById('phone').value;
	
	
	
	
	
	if(fname == "" || mail == "" || order =="" ||msg ==""){
		
		alert("Fill all the mandatory fields");
		return false;
		
	}
	if(phno.length == 0){
		alert("Fill all the mandatory fields");
		return false;
	}
	
	if(phno.length != 10){
		alert("Enter valid phone number");
		return false;
	}
	
	if(!phno.match(/^[0-9]{10}$/)){
		
		alert("Enter valid phone number");
		return false;
	}
	
	else{
		
		alert("Feedback submitted successfully");
		return true;
		
	}
}
