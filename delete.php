<?php
	/* Use login cookie to delete account  */
	$email=$_COOKIE["login"];
	$user='root';
	$passw='';
	$db='mm';
	/* connection to database(mm)  */
	$con=new mysqli('localhost',$user,$passw,$db)or die("Unable to connect");
	/* Query to delete user data  */
	mysqli_query($con,"delete from data where Email='$email'");
	/* send to index page with message (Your account deleted successfully)  */
	header("location:index.php?del=1");
?>