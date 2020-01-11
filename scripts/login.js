 function validate(){
  if(document.myform.mail.value=="")
	  {
	  alert("Please provide your email.");
	  document.myform.mail.focus();
	  return false;
	  
	  }
  if(document.myform.passw.value=="")
	  {
	  alert("Please provide Your password");
	  document.myform.passw.focus();
	  return false;
	  }
  return(true);
  }