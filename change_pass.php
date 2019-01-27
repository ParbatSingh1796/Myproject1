<?php
	if(!isset($_COOKIE["login"])){
		/* If cookie is not set then send to index.php page */
		header("location:index.php");
	}
	else{
		/* If cookie is set then execute below all code */ 
		$email=$_COOKIE["login"];
		if(empty($_POST["cp"])||empty($_POST["np"])||empty($_POST["rp"])){
			/* If anyone field is empty then send error code to changepassword.php page(All fields required to fill)  */
			header("location:changepassword.php?err=1");
	}
		else{
			/* If all fields contain some data then execute below code for validation */
			/* Database connection  */
			$user='root';
	        $passw='';
	        $db='mm';
	        $con=new mysqli('localhost',$user,$passw,$db)or die("Unable to connect");
	        /* Variable to store data which send from changepassword.php(form)  */
			$cp=$_POST["cp"];
			$np=$_POST["np"];
			$rp=$_POST["rp"];
			if($np==$rp){
				/* If new password and conform password matched  */
				$rs=mysqli_query($con,"select * from data where email='$email'");
				/* $rs store data of user(email,password)  */
				if($r=mysqli_fetch_array($rs)){
					if($r["Password"]==$cp){
						/* If stored password match with entered current password  */
						/* update password of data table of Entered Email-Id   */
						mysqli_query($con,"update data set Password='$np' where Email='$email'");
						/* Now go to login page for login with new password  */
						header("location:login.php?succ=1");
					}
					else{
						/* If entered current password not matched with stored password ,send error code to changepassword.php page  */
						header("location:changepassword.php?invalid=1");
					}
				}
				else{
					/* If no data found for user  */
					header("location:logout.php");
				}
			}
			else{
				/* If new password and conform password not matched,send error code to changepassword.php page  */
				header("location:changepassword.php?missmatch=1");
			}
		}
	}
?>
				