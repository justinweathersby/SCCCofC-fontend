<?php

$to="demo@company.com";/*Your Email*/

$subject="Message from the website";

$date=date("l, F jS, Y");
$time=date("h:i A");
$name=$_REQUEST['name'];
$email=$_REQUEST['email'];

$msg="
		Message sent from website on date:  $date, hour: $time.\n
		Name:  $name\n
		Email: $email\n
		Phone: $phone\n
		Phone: subject\n
	";

	if($name=="") {
		echo "<div class='alert alert-danger'>
			<a class='close' data-dismiss='alert'>×</a>
			<strong>Warning!</strong> Please fill the name field.
		</div>";

	} else if($email=="") {
		echo "<div class='alert alert-danger'>
			<a class='close' data-dismiss='alert'>×</a>
			<strong>Warning!</strong> Please fill the email field.
		</div>";

	} else {
		mail($to,$subject,$msg,"From:".$email);
		echo "<div class='alert alert-success'>
			<a class='close' data-dismiss='alert'>×</a>
			<strong>Thank you for your request, we will contact you soon. </strong>
		</div>";
	}
?>
