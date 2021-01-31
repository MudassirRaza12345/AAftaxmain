<?php
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['Phone'];
$msg=$_POST['Message'];
	if(empty($name)||empty($email)||empty($phone)||empty($msg)){
		echo "Please fill out these fields";
	}
	else {
		$to='mudassirraza12345@gmail.com ';  
		$subject='Form Submission';
		$message="Name :".$name."\n"."Phone :".$phone."\n"."Wrote the following :"."\n\n".$msg;
		$headers="From: ".$email;

		mail($to, $subject, $message, $headers);
		
			echo "<script type="text/javascript">alert('your message sent successfully');
			window.history.log(-1) ;
			</script>";
		
	}




		
		 
	
?>
 