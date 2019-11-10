<?php
$parking=$_POST['parking'];
$name=$_POST['usr'];
$number=$_POST['num'];
$comp="parking: ".$parking." Name: ".$name."  Number: ".$number;
	// Authorisation details.
	$username = "mintu08.yadav@gmail.com";
	$hash = "f9ac07209599b64aded1c5922797ef2ef719afcb002b6bb7829a1d927f70df3c";

	// Config variables. Consult http://api.textlocal.in/docs for more info.
	$test = "0";

	// Data for text message. This is the text message data.
	$sender = "TXTLCL"; // This is who the message appears to be from.
	$numbers = "8628808560"; // A single number or a comma-seperated list of numbers
	$message = "$comp";
	// 612 chars or less
	// A single number or a comma-seperated list of numbers
	$message = urlencode($message);
	$data = "username=".$username."&hash=".$hash."&message=".$message."&sender=".$sender."&numbers=".$numbers."&test=".$test;
	$ch = curl_init('http://api.textlocal.in/send/?');
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$result = curl_exec($ch); // This is the result from the API
	curl_close($ch);

  header('location:index.html');

?>
