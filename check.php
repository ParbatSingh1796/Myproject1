<?php
	/* variable to store Email-id and password sent from login.php page */
	$email=$_POST["email"];
	$pass=$_POST["pass"];
	/* connection to database */
	$user='root';
	$passw='';
	$db='mm';
	$con=new mysqli('localhost',$user,$passw,$db)or die("Unable to connect");
	/* query will return all column value if Email-Id found */
	$rs=mysqli_query($con,"select * from data where Email='$email'");
	/*  Now match password with enterd and stored password*/
	if($r=mysqli_fetch_array($rs)){
		if($r["Password"]==$pass){
			/* If password matched then go to profile page and set cookie */
			setcookie("login",$email,time()+3600);
			/* count Number of visit in profile */
			$visit=mysqli_query("select Visit from data where Email='$email'");
			$value=mysqli_fetch_array($visit);
			$value[0]=$value[0]+1;
			mysqli_query("update data set Visit=$value[0] where Email='$email'");
			header("location:profile.php");
			}
		else{
			/*If password not match with stored password then send error code to login.php page (Incorrect password) */
			header("location:login.php?invalid=1");
		}
	}
	else{
		/* If entered Email-id is not registered then send error code to login.php page (You are not registered, please register first) */
		header("location:login.php?attempt=1");
	}
?>