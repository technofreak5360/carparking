<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="" action="admin.php" method="GET">
      <input type="button" name="search" value="search">
    </form>


</body>
</html>
<?php
$con=mysqli_connect("localhost","root","yadav@1153","booking");
	//mysql_select_db("search");

	if(isset($_GET['search'])){

	$get_value = $_GET['user_query'];

	if($get_value==''){

		header('location:admin.php');
	exit();
	}

	$result_query = "select * from nbooking  ";

	$run_result=$con->query($result_query);

	if(mysqli_num_rows($run_result)<1){

	echo "<center><b>Oops! sorry, nothing was found in the database!</b></center>";
	exit();

	}

	while($row_result=mysqli_fetch_array($run_result)){

		$Name=$row_result['name'];
		$checkin=$row_result['checkin'];
		$carnum=$row_result['carnumber'];
		$checkout=$row_result['checkout'];

	echo "<div class='results'>

		<h2>$Name</h2>
		<h3>$carnum</h3>
		<h3>$checkin</h3>
		<h3>$checkout</h3>

		</div>";

		}
}


?>
