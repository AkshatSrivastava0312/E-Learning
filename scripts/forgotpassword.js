function fncSubmit()
{
	if(document.ChangePasswordForm.email.value == "")
	{
	alert('Please input Email');
	document.ChangePasswordForm.email.focus();
	return false;
	} 
if(document.ChangePasswordForm.newpass.value == "")
{
alert('Please input New Password');
document.ChangePasswordForm.newpass.focus(); 
return false;
} 

if(document.ChangePasswordForm.conpass.value == "")
{
alert('Please input Confirm Password');
document.ChangePasswordForm.conpass.focus(); 
return false;
} 

if(document.ChangePasswordForm.newpass.value != document.ChangePasswordForm.conpass.value)
{
alert('Confirm Password Not Match');
document.ChangePasswordForm.conpass.focus(); 
return false;
} 
document.ChangePasswordForm.submit();
}