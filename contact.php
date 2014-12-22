<?php
		
		if($_POST["submit"]) {
			
			$result='<div class="alert alert-success">Form submitted</div>';
			
			if (!$_POST["name"]) {
				
				$error="<br />Please enter your name.";
				
			}
			
			if (!$_POST["email"]) {
				
				$error.="<br />Please enter your email."; // .= appends this error message to the previous one 
				
			}
			
			if (!$_POST["subject"]) {
				
				$error.="<br />Please enter a subject.";
				
			}
			
			if (!$_POST["comment"]) {
				
				$error.="<br />Please enter your comment or question.";
				
			}
			
			if ($_POST['email']!="" AND !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){ 
			    
				$error.="<br />Please enter a valid email address";
				 
			
			}
			
			if ($error) {
				
				$result='<div class="alert alert-danger"><strong>There were error(s) in your form: '.$error.'</strong></div>';
				
				
			} else {
			
				if (mail("hobbibeck@gmail.com", "Comment from website!", "Name: ".$_POST['name']."
					
					Email: ".$_POST['email']."
				
					Comment: ".$_POST['comment'])) {
						
						$result='<div class="alert alert-success"><strong>Thank you!</strong></div>';
						
					} else {
						
						$result='<div class="alert alert-danger"><strong>There was an error sending your message. Please try again later.</strong></div>';
						
					}
			
				}
				
			}
		
		
?>