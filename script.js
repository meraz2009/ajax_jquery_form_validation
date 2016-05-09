// JavaScript Document

$('document').ready(function()
{ 
     /* validation */
	 $("#register-form").validate({
      rules:
	  {
			username: {
		    required: true,
			minlength: 3
			},
			password: {
			required: true,
			minlength: 3,
			maxlength: 15
			},
			cpassword: {
			required: true,
			equalTo: '#password'
			},
			email: {
            required: true,
            email: true
            },
		  country:{
			required:true
		  },
		  gender:{
			  required:true
		  },
		  'hobby[]':{
			  required:true,
			  minlength: 1,
		  },
		  term_service:{
			  required:true
		  }


	   },
	/*	 rules: {
			 hobby: {
				 required: true,
				 minlength: 1
			 },
		 },*/
	/*	 $('#register-form').validate( {
			 rules: {
				 list: {
					 required: true,
					 minlength: 1
				 }
			 }
		 });*/

       messages:
	   {
            username: "please enter user name",
            password:{
                      required: "please provide a password",
                      minlength: "password at least have 8 characters"
                     },
            email: "please enter a valid email address",
			cpassword:{
						required: "please retype your password",
						equalTo: "password doesn't match !"
					  },
		   country:{
			   required:"please select a country",
		   },
		 gender:{
			   required:"please checked gender button",
		   },
		   'hobby[]':
			        "please selects at least one hobby",

		   term_service:{
			   required:"please selects term and sevice box",
		   }
       },
	   submitHandler: submitForm	
       });

// register event on form, not submit button
	$('#subscribeForm').submit(onSubmit)
	   /* validation */
	   
	   /* form submit */
	   function submitForm()
	   {		
				var data = $("#register-form").serialize();

				
				$.ajax({
				
				type : 'POST',
				url  : 'register.php',
				data : data,
				beforeSend: function()
				{	
					$("#error").fadeOut();
					$("#btn-submit").html('<span class="glyphicon glyphicon-transfer"></span> &nbsp; sending ...');
				},
				success :  function(data)
						   {						
								if(data==1){
									
									$("#error").fadeIn(1000, function(){
											
											
											$("#error").html('<div class="alert alert-danger"> <span class="glyphicon glyphicon-info-sign"></span> &nbsp; Sorry email already taken !</div>');
											
											$("#btn-submit").html('<span class="glyphicon glyphicon-log-in"></span> &nbsp; Create Account');
										
									});
																				
								}
								else if(data=="registered")
								{
									
									$("#btn-submit").html('<img src="btn-ajax-loader.gif" /> &nbsp; Signing Up ...');
									setTimeout('$(".form-signin").fadeOut(500, function(){ $(".signin-form").load("success.php"); }); ',5000);
									
								}
								else{
										
									$("#error").fadeIn(1000, function(){
											
						$("#error").html('<div class="alert alert-danger"><span class="glyphicon glyphicon-info-sign"></span> &nbsp; '+data+' !</div>');
											
									$("#btn-submit").html('<span class="glyphicon glyphicon-log-in"></span> &nbsp; Create Account');
										
									});
											
								}
						   }
				});
				return false;
		}
	   /* form submit */
	   
	   
	 

});