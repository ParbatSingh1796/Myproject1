<?php
	/* Variable to store data entered in form */
	$email=$_POST["email"];
	$passwo=$_POST["passw"];
	$cpassw=$_POST["cpassw"];
	if($passwo==$cpassw){
		/* If new password and conform password matched */
		/* connection to database */
		$user='root';
		$passw='';
		$db='mm';
		$visit=0;
	    $con=new mysqli('localhost',$user,$passw,$db)or die("Unable to connect");
	    /* Query to save password */
		mysqli_query($con,"insert into data values ('$email',$passwo,$visit)");
		/* send to login.php page */
		header("location:Login.php");
	}
	else{
		/* If new password and conform password not matched send error code to createpass.php  */
		header("location:createpass.php?err=1");
	}
?>