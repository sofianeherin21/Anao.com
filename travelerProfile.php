<?php
include ("connection.php");
session_start();
if(!isset($_SESSION["email"])){
	$username="";
}
else{
	$username=$_SESSION["email"];
}

echo "email:".$username;

$sql = "SELECT * FROM traveler_basic where email='$username'";
       
   	$result=mysqli_query($conn,$sql);
	$row=mysqli_fetch_assoc($result);
    $name=$row['username'];
    $id=$row['trav_id'];
	
echo "email:".$name;

?>


<html>
<head>
<title>Traveler panel</title>
<link href='css/admin.css' rel='stylesheet' type='text/css'>
</head>
<body>
<div id='header'>
<center><img src='images/trav.png' id='adminLogo' ></br>Welcome <?php echo $id ?> to the Traveler Panel</center>
</div>
<div id='slider2'>
  <ul>
	     <li><a href='travStates.php'>Change States</a></li>
		 <li><a href='showCart.php'>Choose Carts</a></li>
	     <li><a href='travelerBView.php'>View Customers details</a></li>
	     <li><a href='logout.php'>Log out</a></li>
  </ul>
</div>

</body>
</html>