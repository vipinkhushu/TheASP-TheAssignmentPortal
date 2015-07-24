$(document).ready(function(){

	$('#user_check').on('keyup',function(e){
		var query_string = $(this).val();
		if(query_string.indexOf(' ')!=-1){
			$('#result_user').html('<div class="alert alert-danger alert-dismissible fade in" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button><strong>Username </strong>Can\'t have Spaces</div>');
			$('#login-submit').attr('disabled', 'disabled');
			$('#login-submit').attr('value', 'Choose another Username');
			$('#name_check').attr('disabled', 'disabled');
			$('#email_check').attr('disabled', 'disabled');
			$('#password_check').attr('disabled', 'disabled');
			$('#phone_check').attr('disabled', 'disabled');	
			$('#type_check').attr('disabled', 'disabled');	
	$('#college_check').attr('disabled', 'disabled');	
$('#vip1').removeClass('form-group has-success has-feedback').addClass('form-group has-error has-feedback');	
			}
		else if(query_string.length==0){
			$('#result_user').html('');
$('#login-submit').attr('disabled', 'disabled');
			$('#login-submit').attr('value', 'Choose another Username');
			$('#name_check').attr('disabled', 'disabled');
			$('#email_check').attr('disabled', 'disabled');
			$('#password_check').attr('disabled', 'disabled');
			$('#phone_check').attr('disabled', 'disabled');	
			$('#type_check').attr('disabled', 'disabled');	
	$('#college_check').attr('disabled', 'disabled');
$('#vip1').removeClass('form-group has-success has-feedback').addClass('form-group has-error has-feedback');		
			}
		else if(query_string.length<5){
			$('#result_user').html('<div class="alert alert-danger alert-dismissible fade in" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>Minimum Length Of <strong>Username</strong> Is 5</div>');
$('#login-submit').attr('disabled', 'disabled');
			$('#login-submit').attr('value', 'Choose another Username');
			$('#name_check').attr('disabled', 'disabled');
			$('#email_check').attr('disabled', 'disabled');
			$('#password_check').attr('disabled', 'disabled');
			$('#phone_check').attr('disabled', 'disabled');	
			$('#type_check').attr('disabled', 'disabled');	
	$('#college_check').attr('disabled', 'disabled');
$('#vip1').removeClass('form-group has-success has-feedback').addClass('form-group has-error has-feedback');	
			}
		else{
		$.ajax({
			type: "POST",
			url: "user_valid.php",
			data: { name:query_string },
			success: function(data)
			{
				if(data=='exist')
				{
					$('#result_user').html('<div class="alert alert-danger alert-dismissible fade in" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>This <strong>Username</strong> Is Already Taken</div>');
$('#login-submit').attr('disabled', 'disabled');
			$('#login-submit').attr('value', 'Choose another Username');
			$('#name_check').attr('disabled', 'disabled');
			$('#email_check').attr('disabled', 'disabled');
			$('#password_check').attr('disabled', 'disabled');
			$('#phone_check').attr('disabled', 'disabled');	
			$('#type_check').attr('disabled', 'disabled');	
	$('#college_check').attr('disabled', 'disabled');
$('#vip1').removeClass('form-group has-success has-feedback').addClass('form-group has-error has-feedback');			
				}
				else
				{
					
					$('#result_user').html('<div class="alert alert-success alert-dismissible fade in" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>Congrats, <strong>'+query_string+'</strong> Is Available</div></span>');
					$('#login-submit').attr('value', 'Register');
					$('#login-submit').removeAttr('disabled');
		
			$('#name_check').removeAttr('disabled');
			$('#email_check').attr('disabled', 'disabled');
			$('#password_check').attr('disabled', 'disabled');
			$('#phone_check').attr('disabled', 'disabled');	
			$('#type_check').attr('disabled', 'disabled');	
	$('#college_check').attr('disabled', 'disabled');
$('#vip1').addClass('form-group has-success has-feedback').removeClass('form-group has-error has-feedback');	
	
				}				
				}
			});
		}
	
});





	$('#email_check').on('keyup',function(e){
		var query_string = $(this).val();
		
		if(query_string.indexOf(' ')!=-1){
			$('#result_user').html('<div class="alert alert-danger alert-dismissible fade in" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button><strong>E-Mail </strong>Can\'t have Spaces</div>');
$('#login-submit').attr('disabled', 'disabled');
			$('#login-submit').attr('value', 'Correct Your E-Mail');
			
		
			$('#password_check').attr('disabled', 'disabled');
			$('#phone_check').attr('disabled', 'disabled');	
			$('#type_check').attr('disabled', 'disabled');	
	$('#college_check').attr('disabled', 'disabled');
	$('#vip2').removeClass('form-group has-success has-feedback').addClass('form-group has-error has-feedback');			

			}
		
		else{
		$.ajax({
			type: "POST",
			url: "email_valid.php",
			data: { name:query_string },
			success: function(data)
			{
				if(data=='exist')
				{
				
					$('#result_user').html('<div class="alert alert-danger alert-dismissible fade in" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>This <strong>Email</strong> Is Already registered</div>');
$('#login-submit').attr('disabled', 'disabled');
					$('#login-submit').attr('value', 'Correct Your E-Mail');
			
			$('#vip2').removeClass('form-group has-success has-feedback').addClass('form-group has-error has-feedback');			

			$('#password_check').attr('disabled', 'disabled');
			$('#phone_check').attr('disabled', 'disabled');	
			$('#type_check').attr('disabled', 'disabled');	
	$('#college_check').attr('disabled', 'disabled');
				}
				else
				{
					$('#result_user').html('');
					$('#login-submit').attr('value', 'Register');
					$('#login-submit').removeAttr('disabled');

			
		
			$('#password_check').removeAttr('disabled');
			$('#phone_check').attr('disabled', 'disabled');	
			$('#type_check').attr('disabled', 'disabled');	
	$('#college_check').attr('disabled', 'disabled');
		$('#vip2').addClass('form-group has-success has-feedback').removeClass('form-group has-error has-feedback');			

				}				
				}
			});
		}
	
});





$('#name_check').on('keyup',function(e){
		var query_string = $(this).val();
		if(query_string.length==0){
			$('#result_user').html('');
			$('#login-submit').attr('disabled', 'disabled');
			$('#email_check').attr('disabled', 'disabled');
			$('#password_check').attr('disabled', 'disabled');
			$('#phone_check').attr('disabled', 'disabled');	
			$('#type_check').attr('disabled', 'disabled');	
	$('#college_check').attr('disabled', 'disabled');
		$('#vip3').removeClass('form-group has-success has-feedback').addClass('form-group has-error has-feedback');			

			}
		else if(query_string.length<5){
			$('#result_user').html('<div class="alert alert-danger alert-dismissible fade in" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>Minimum Length Of <strong>Full Name</strong> is 5</div>');
			$('#login-submit').attr('disabled', 'disabled');
			$('#login-submit').attr('value', 'Correct Your Full Name');
			$('#email_check').attr('disabled', 'disabled');
			$('#password_check').attr('disabled', 'disabled');
			$('#phone_check').attr('disabled', 'disabled');	
			$('#type_check').attr('disabled', 'disabled');	
	$('#college_check').attr('disabled', 'disabled');
			$('#vip3').removeClass('form-group has-success has-feedback').addClass('form-group has-error has-feedback');			
			}
		else
				{
					$('#result_user').html('');
					$('#login-submit').attr('value', 'Register');
					$('#login-submit').removeAttr('disabled');
			
					$('#vip3').removeClass('form-group has-success has-feedback').addClass('form-group has-error has-feedback');			

			$('#email_check').removeAttr('disabled');
			$('#password_check').attr('disabled', 'disabled');
			$('#phone_check').attr('disabled', 'disabled');	
			$('#type_check').attr('disabled', 'disabled');	
	$('#college_check').attr('disabled', 'disabled');
			$('#vip3').addClass('form-group has-success has-feedback').removeClass('form-group has-error has-feedback');			

				}	
});


	
	
	$('#password_check').on('keyup',function(e){
		var query_string = $(this).val();
		if(query_string.length==0){
			$('#result_user').html('');
			$('#login-submit').attr('disabled', 'disabled');
			$('#phone_check').attr('disabled', 'disabled');	
			$('#type_check').attr('disabled', 'disabled');	
	$('#college_check').attr('disabled', 'disabled');
					$('#vip4').removeClass('form-group has-success has-feedback').addClass('form-group has-error has-feedback');			

			}
		else if(query_string.length<8){
			$('#result_user').html('<div class="alert alert-danger alert-dismissible fade in" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>Minimum Length Of <strong>Password</strong> Should Be 8 Characters</div>');
	$('#login-submit').attr('value', 'Correct Your Password');
			$('#login-submit').attr('disabled', 'disabled');
							$('#vip4').removeClass('form-group has-success has-feedback').addClass('form-group has-error has-feedback');			

			
			$('#phone_check').attr('disabled', 'disabled');	
			$('#type_check').attr('disabled', 'disabled');	
	$('#college_check').attr('disabled', 'disabled');
			}
		else if(query_string.indexOf(' ')!=-1){
			$('#result_user').html('<div class="alert alert-danger alert-dismissible fade in" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button><strong>Password </strong>Can\'t have Spaces</div>');
			$('#login-submit').attr('value', 'Correct Your Password');
			$('#login-submit').attr('disabled', 'disabled');
							$('#vip4').removeClass('form-group has-success has-feedback').addClass('form-group has-error has-feedback');			

			
			$('#phone_check').attr('disabled', 'disabled');	
			$('#type_check').attr('disabled', 'disabled');	
	$('#college_check').attr('disabled', 'disabled');
			}
		else
				{$('#result_user').html('');
			$('#login-submit').attr('value', 'Register');
					$('#login-submit').removeAttr('disabled');
					
					
		
								$('#vip4').addClass('form-group has-success has-feedback').removeClass('form-group has-error has-feedback');			

			$('#phone_check').removeAttr('disabled', 'disabled');	
			$('#type_check').attr('disabled', 'disabled');	
	$('#college_check').attr('disabled', 'disabled');
				}	
});
	
	
	$('#phone_check').on('keyup',function(e){
		var query_string = $(this).val();
		if(query_string.length==0){
			$('#result_user').html('');
			
			$('#login-submit').attr('disabled', 'disabled');
		
	$('#vip5').removeClass('form-group has-success has-feedback').addClass('form-group has-error has-feedback');			

		
			$('#type_check').attr('disabled', 'disabled');	
	$('#college_check').attr('disabled', 'disabled');
			}
		else if(!$.isNumeric(query_string)){
			$('#result_user').html('<div class="alert alert-danger alert-dismissible fade in" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>Only Numbers Are Allowed In <strong>Phone Numbers</strong></div>');
	$('#vip5').removeClass('form-group has-success has-feedback').addClass('form-group has-error has-feedback');			

			$('#login-submit').attr('value', 'Change Phone Number');
			$('#login-submit').attr('disabled', 'disabled');	
			$('#type_check').attr('disabled', 'disabled');	
	$('#college_check').attr('disabled', 'disabled');
			}
			
		else if(query_string.length!=10){
			$('#result_user').html('<div class="alert alert-danger alert-dismissible fade in" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>Length Of <strong>Phone Number</strong> Should Be 10</div>');
				$('#login-submit').attr('value', 'Change Phone Number');
			$('#login-submit').attr('disabled', 'disabled');	
			$('#type_check').attr('disabled', 'disabled');	
	$('#college_check').attr('disabled', 'disabled');
		$('#vip5').removeClass('form-group has-success has-feedback').addClass('form-group has-error has-feedback');			

			}
		else
				{
					$('#result_user').html('');
					$('#login-submit').attr('value', 'Register');
					$('#login-submit').removeAttr('disabled');
					$('#college_check').removeAttr('disabled');
							$('#type_check').removeAttr('disabled');
			$('#type1_check').removeAttr('disabled');
					
		$('#vip5').addClass('form-group has-success has-feedback').removeClass('form-group has-error has-feedback');			

	$('#batch_check').attr('disabled', 'disabled');	
	
				}	
});
	
	
$('#college_check').on('change',function(e){
		var query_string = $(this).val();
		if(query_string.length==0){
			$('#result_user').html('');
			$('#login-submit').attr('disabled', 'disabled');
						$('#type_check').removeAttr('disabled');
			$('#type1_check').removeAttr('disabled');
			
			}
		else if(query_string.length<5){
			$('#result_user').html('<div class="alert alert-danger alert-dismissible fade in" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>Minimum Length Of <strong>College Name</strong> is 4</div>');
			
				$('#login-submit').attr('value', 'Correct Your College\'s Name');
			$('#login-submit').attr('disabled', 'disabled');	
						$('#type_check').removeAttr('disabled');
			$('#type1_check').removeAttr('disabled');
	
			}
		else
				{
					$('#result_user').html('');
					$('#login-submit').attr('value', 'Register');
					$('#login-submit').removeAttr('disabled');	
			$('#type_check').removeAttr('disabled');
			$('#type1_check').removeAttr('disabled');
				}	
});
	
$('#type_check').on('change',function(e){
		var query_string = $(this).val();
	
		if(query_string.length==4){
$('#to_hide').removeClass('hide');
	$('#1to_hide').removeClass('hide');
	$('#2to_hide').removeClass('hide');	
		
			}
			
});
	
	
	
$('#type1_check').on('change',function(){
		var query_string = $(this).val();
	
		if(query_string.length==7){
$('#to_hide').addClass('hide');
	$('#1to_hide').addClass('hide');
	$('#2to_hide').addClass('hide');
			}
			
});	
		$('#course_check').blur(function(){
		var query_string = $(this).val();
		if(query_string=="#"){
			$('#result_user').html('<div class="alert alert-danger alert-dismissible fade in" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>Please select proper option from <strong>Course Name</strong> List</div>');
			$('#login-submit').attr('disabled', 'disabled');
					$('#login-submit').attr('value', 'Choose Correct Course');
			}
		
		else
				{$('#result_user').html('');
			$('#login-submit').attr('value', 'Register');
					$('#login-submit').removeAttr('disabled');
				}	
});
	
	$('#batch_check').on('change',function(e){
		var query_string = $(this).val();
		if(query_string.length==0){
			$('#result_user').html('');
			$('#login-submit').attr('disabled', 'disabled');
						$('#vip7').removeClass('form-group has-success has-feedback').addClass('form-group has-error has-feedback');			

			}
		else if(query_string.indexOf(' ')!=-1){
			$('#result_user').html('<div class="alert alert-danger alert-dismissible fade in" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button><strong>Batch </strong>Can\'t have Spaces</div>');
			$('#login-submit').attr('disabled', 'disabled');
			
			$('#vip7').removeClass('form-group has-success has-feedback').addClass('form-group has-error has-feedback');			

			$('#login-submit').attr('value', 'Remove Spaces From batch');
			}
		else
				{$('#result_user').html('');
			$('#login-submit').attr('value', 'Register');
					$('#login-submit').removeAttr('disabled');
					$('#batch_check').removeAttr('disabled');
								$('#vip7').addClass('form-group has-success has-feedback').s('form-group has-error has-feedback');			

				}	
});
	
	
	$('#rollno_check').on('change',function(e){
		var query_string = $(this).val();
		if(query_string.length==0){
			$('#result_user').html('');
			$('#login-submit').attr('disabled', 'disabled');
						$('#vip6').removeClass('form-group has-success has-feedback').addClass('form-group has-error has-feedback');			

			}
		else if(query_string.indexOf(' ')!=-1){
			$('#result_user').html('<div class="alert alert-danger alert-dismissible fade in" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button><strong>Batch </strong>Can\'t have Spaces</div>');
			$('#login-submit').attr('disabled', 'disabled');
			
			$('#vip6').removeClass('form-group has-success has-feedback').addClass('form-group has-error has-feedback');			

			$('#login-submit').attr('value', 'Remove Spaces From batch');
			}
		else
				{$('#result_user').html('');
			$('#login-submit').attr('value', 'Register');
					$('#login-submit').removeAttr('disabled');
					$('#batch_check').removeAttr('disabled');
								$('#vip6').addClass('form-group has-success has-feedback').s('form-group has-error has-feedback');			

				}	
});
	
	
	
	
	
});