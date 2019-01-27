<?php
	$email=$_COOKIE["login"];
	$fname=$_POST["fname"];
	$lname=$_POST["lname"];
	$qual=$_POST["qual"];
	$adr=$_POST["adr"];
	$mob=$_POST["mob"];
	$user='root';
    $passw='';
	$db='mm';
	        
    $con=new mysqli('localhost',$user,$passw,$db)or die("Unable to connect");
	mysqli_query($con,"update profile set Fname='$fname',Lname='$lname',Quali='$qual',Address='$adr',Mob='$mob' where Email='$email'");
	header("location:profile.php?succ=1");
	
	?>