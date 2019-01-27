<?php
	/* Variable to store received data from reg.php page  */
	$fname=$_POST["fname"];
	$lname=$_POST["lname"];
	$gender=$_POST["gender"];
	$dob=$_POST["dob"];
	$quali=$_POST["quali"];
	$country=$_POST["relegion"];
	$caste=$_POST["caste"];
	$addr=$_POST["addr"];
	$mob=$_POST["mob"];
	$email=$_POST["email"];
	/* connection to database  */
	$user='root';
	$passw='';
	$db='mm';
    $con=new mysqli('localhost',$user,$passw,$db)or die("Unable to connect");
    /* Query to check if Entered Email-id is not registered already  */
	$rs=mysqli_query($con,"select * from data where Email='$email'");
	$r=mysqli_fetch_array($rs);
	if($r["Email"]==$email){
		/* If enterd Email-id already registered then send error code to reg.php  */
			header("location:reg.php?alr=1");
	}

	else{
		/* If entered Email-id not registered then register new user  */
		mysqli_query($con,"insert into profile values ('$fname','$lname','$gender','$dob','$quali','$country','$caste','$addr','$mob','$email')");
		/* Send user to create password  */
		header("location:createpass.php?mail=$email");
	}
?>
	