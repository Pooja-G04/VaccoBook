 function validate()       
   {
    if( document.login-form.Name.value == "" )          
       {
       	alert( "Please provide your name!" );
       	document.login-form.Name.focus() ;            
       	return false;  
       }

    if( document.login-form.password.value == "" )          
       {
       	alert( "Please provide your password!" );
       	document.login-form.password.focus() ;            
       	return false;  
       }

    if( document.login-form.email.value == "" )          
    	{             
    	 alert( "Please provide your Email!" );             
    	 document.login-form.email.focus() ;             
    	 return false;          
    	}
    	return true;
   }

