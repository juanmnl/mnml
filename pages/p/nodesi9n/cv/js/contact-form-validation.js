$(document).ready(function(){
	$("#contactform").validate({
		rules: {
			name: "required",
			email: {
				required: true,
				email: true
			},
			subject: "required",
			message: {
				required: true,
				minlength: 10
			}
		},
		messages: {
			name: "Please enter your name.",
			subject: "Please enter a subject.",
			email: {
				required: "Please enter your email address.",
				email: "This is not a valid email address format."
			},
			message: {
				required: "Please enter a message.",
				minlength: "Message must have at least 10 characters."
			}
		}
	});
	
	function checkForm() {
		if (!$('#contactform').valid()) {
			return false;
		}
		else {
			return true;
		}
	}
		
	$("#contactform").ajaxForm({
		beforeSubmit: checkForm,
		type: "POST",
		url: "contact-form-process.php",
		data: $("#contactform").serialize(),
		success: function(msg){
			$("#contactformnote").ajaxComplete(function(event, request, settings){
				if(msg == 'OK') // Message Sent? Show the 'Thank You' message and hide the form
				{
					result = '<div class="formsuccess">Your message has been sent. Thank you!</div><p>You may now close this window.</p>';
					$("#fields").hide();
				}
				else
				{
					result = '<div class="formerror">' + msg +'</div>';
				}
				$(this).html(result);
			});
		}
	});
});