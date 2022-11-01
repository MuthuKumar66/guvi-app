//Using jQuery check validatin 
$('document').ready(function()
{ 
     /* start validation using jQuery */
  $("#login-form").validate({
      rules:
   {
   //For use password using id
   password: {
   required: true,
   },
   //For use user_email using id
   user_email: {
            required: true,
            email: true
            },
    }
	//For use message using idmessages:
    {
            password:{
                      required: "please enter your Good password(strong)"
                     },
            user_email: "please enter your Business email address",
       },
	   //Submit form
    submitHandler: submitForm 
       });  
    /* End validation using jQuery */
    
    /* Simple login Form submit */
    function submitForm()
    {  
	//All obejct cretaed using form id(login-form)
   var data = $("#login-form").serialize();
    
	//request client(browser to server data send)
   $.ajax({
    
   type : 'POST',//using POST - GET - PUT or DELETE method
   url  : 'login_process.php', // data send url
   data : data, // all data varible send
   beforeSend: function()
   { 
    $("#error").fadeOut(5000);//jquery function
    $("#btn-login").html('<span class="glyphicon glyphicon-transfer"></span> sending The data ...'); 
   },
   //if data send server successfully retrive respnse
   success :  function(response)
      {      
     if(response=="ok"){
         //if response success so 
      $("#btn-login").html('<img src="loader_btn-ajax-loader_img01.gif" Signing In ... ');
	  //loader images in process
      setTimeout(' window.location.href = "home.php"; ',6000);
	  //redirect url in this page
     }
     else{
         
      $("#error").fadeIn(1000, function(){      
    $("#error").html('<div class="alert alert-danger"> <span class="glyphicon glyphicon-info-sign"></span>  '+response+' !</div>');
		//Error display for sign in
           $("#btn-login").html('<span class="glyphicon glyphicon-log-in"></span>   Sign In');
         });
     }
     }
   });
    return false;
  }
    /* End AJAX using login FORM submit */
});