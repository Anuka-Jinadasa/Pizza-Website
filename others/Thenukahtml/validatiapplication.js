function validat(){
		var titel, fname,address,contact,mail,nic,date,civ,edu,prof;
		
		titel=document.getElementById("gen").value;
		fname=document.getElementById("fullname").value;
		address=document.getElementById("address").value;
		contact=document.getElementById("phone").value;
		mail=document.getElementById("email").value;
		nic=document.getElementById("nic").value;
		date=document.getElementById("bday").value;
		civ=document.getElementById("civil").value;
		edu=document.getElementById("emessage").value;
		prof=document.getElementById("pmessage").value;
		
		
		if(titel == ""|| fname ==""||address ==""||contact==""||mail==""||nic==""||date==""||civ==""||edu==""||prof==""){
			
			alert("Fill all the given Details");
			return false;
			
		}
	else{
		
		alert("Your application is submited successfully");
		return true;
	}
	
}