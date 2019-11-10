<?php
$Name=$_POST['name'];
$Email=$_POST['email'];
$Phone=$_POST['phnum'];
$carnum=$_POST['carnum'];
$parking=$_POST['parking'];
$checkin=$_POST['from'];
$checkout=$_POST['to'];
$link = mysqli_connect("localhost", "root", "yadav@1153", "booking");

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Attempt insert query execution
$sql = "INSERT INTO nbooking (name,email,phone,carnumber,parkingType,checkin,checkout) VALUES ('$Name','$Email',$Phone,'$carnum','$parking','$checkin','$checkout')";
if(mysqli_query($link, $sql)){
  echo "<script>alert('please fill all the fields!')</script>";

} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

// Close connection
mysqli_close($link);
header('location:service.html');
?>
