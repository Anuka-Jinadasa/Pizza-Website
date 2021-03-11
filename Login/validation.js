function inputValidation(){
			
	//variables
	var x = document.getElementById('email').value;
	var y = document.getElementById('pwd').value;
			
	if(x == "" || y == "")
	{
		alert('Please fill in the all feilds');
		return false;
	}
	else
	{
		return true;
	}
}
		