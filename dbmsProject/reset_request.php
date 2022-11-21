<?php

if(isset($_POST['request_submit'])){

	$selector = bin2hex(random_bytes(8));
	$token = random_bytes(16);

	$url = 'dbmsProject/reset_page.php?selector=' . $selector . '&validator=' . bin2hex()$token; 
	$expires = date('U') + 1800;

	require "connect.php";

	$userEmail = $_POST['reset-email'];
	$sql = "DELETE FROM pwdreset WHERE pwdrestEmail=?";

	$stmt = mysqli_stmt_init($con);
	if(!mysqli_stmt_prepare($stmt, $sql )){
		echo "there was an error";
		exit();
	}
	else{
			mysqli_stmt_bind_param($stmt, 's', $userEmail);
			mysqli_stmt_execute($stmt);
	}


	$sql = "Insert INTO pwdReset (pwdResetEmail, pwdResetSelector, pwdresetToken, pwdResetExpires) values (?);";

	$stmt = mysqli_stmt_init($con)
	if(!mysqli_stmt_prepare($stmt, $sql )){
		echo "there was an error";
		exit();
	}
	else{
			$hashToken = password_hash($token, PASSWORD_DEFAULT)
			mysqli_stmt_bind_param($stmt, 'ssss', $userEmail, $selector, $hashToken, $expires);
			mysqli_stmt_execute($stmt);
	}

	mysqli_stmt_close($stmt);
	mysqli_close();

	$to = $userEmail;
	$subject = "Reset your password for cruise system admin";
	$message = "<p> this is the email for your password reset. the link to reset your password. Do not share this mail. if not requested for reset, please ignore it.</p>"; 
	$message. = "<p>Here is the link to set your password: <br>"
	$message. = '<a href="' .$url .'" >' .$url.  '</a></p>';

	$headers = "<From: manasa1579@gmail.com>\r\n";
	$headers. = "Reply-to: aahna3801@gmail.com\r\n";
	$headers. = "content-type: text/html\r\n"

	mail($to, subject, $message, $headers);

	header("Location:forgot_page.php?reset=sucess");
}
else{
	header('Location:login_page.php');
}

?>