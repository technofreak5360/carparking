<?php
$Name = filter_input(INPUT_POST,'name');
$Phone = filter_input(INPUT_POST,'phnum');
$Email = filter_input(INPUT_POST,'email');
$Checkin = filter_input(INPUT_POST,'from');
$Checkout = filter_input(INPUT_POST,'to');
$carnum = filter_input(INPUT_POST,'carnum');
$parking = filter_input(INPUT_POST,'parking');
if(!empty($Name)|| !empty($Phone)||!empty($Email) || !empty($Checkin) || !empty($Checkout) || !empty($carnum) || !empty($parking) )
{
	$host = "localhost";
	$dbusername = "root";
	$dbpassword = "yadav@1153";
	$dbname = "booking";

	$conn = new mysqli ($host,$dbusername,$dbpassword,$dbname);
	if(mysqli_connect_error())
	{
		die('connect Error('. mysqli_connect_error().')'.mysqli_connect_error());
	}
	else
	{
		$sql = "INSERT INTO nbooking (name,email,phone,carnumber,parkingType,checkin,checkout)
		values ('$Name','$Email',$Phone,$carnum,'$parking','$Checkin','$Checkout')";


		if($conn->query($sql)){
      echo "alert('parking Booked Successfully')";
		}
		else
		{
			echo "Error: ".$sql."<br>". $conn->error;
		}
		$conn->close();
	}

}
header('location:index.html');
?>
