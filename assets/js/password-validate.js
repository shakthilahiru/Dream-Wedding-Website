function val_a(){
if(frm1.password.value == "")
{
	alert("Enter the Password.");
	frm1.password.focus(); 
	return false;
}
if((frm1.password.value).length < 8)
{
	alert("Password should be minimum 8 characters.");
	frm1.password.focus();
	return false;
}

if((frm1.password.value).length > 20)
{
	alert("Password should be maximum 20 characters.");
	frm1.password.focus();
	return false;
}

if(frm1.confirmpassword.value == "")
{
	alert("Enter the Confirmation Password.");
	return false;
}
if(frm1.confirmpassword.value != frm1.password.value)
{
	alert("Password confirmation does not match.");
	return false;
}

return true;
}

function val_b(){
if(frm2.password.value == "")
{
	alert("Enter the Password.");
	frm2.password.focus(); 
	return false;
}
if((frm2.password.value).length < 8)
{
	alert("Password should be minimum 8 characters.");
	frm2.password.focus();
	return false;
}

if((frm2.password.value).length > 20)
{
	alert("Password should be maximum 20 characters.");
	frm2.password.focus();
	return false;
}

if(frm2.confirmpassword.value == "")
{
	alert("Enter the Confirmation Password.");
	return false;
}
if(frm2.confirmpassword.value != frm2.password.value)
{
	alert("Password confirmation does not match.");
	return false;
}

return true;
}