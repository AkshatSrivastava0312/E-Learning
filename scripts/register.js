function validate(){
if(document.myForm.fstname.value=="")
	{
	alert("please provide your first name!");
	document.myForm.fstname.focus();
	return false;
	}
if(document.myForm.lstname.value=="")
{
alert("please provide your last name!");
document.myForm.lstname.focus();
return false;
	}
if(document.myForm.uname.value=="")
{
alert("please provide your email!");
document.myForm.uname.focus();
return false;
}
if(document.myForm.pass.value=="")
{
alert("please provide your password!");
document.myForm.pass.focus();
return false;
}
return(true);
}