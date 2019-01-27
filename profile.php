<?php

	if(isset($_GET["succ"])){
		/* show message if user's profile update successfully */
		echo "<script type='text/javascript'>alert('Profile updated successfully')</script>";
	}
	if(isset($_GET["no"])){
		/* show message if no search match found */
		echo "<script type='text/javascript'>alert('No match found')</script>";
	}
	if(!isset($_COOKIE["login"])){
		/* If cookie is not set then login again */
		header("location:index.php");
	}
	else{
		/* variable to store cookie(Email-id) of user */
		$email=$_COOKIE["login"];
		/* connection to database(mm) */ 
		$user='root';
		$passw='';
		$db='mm';
	    $con=new mysqli('localhost',$user,$passw,$db)or die("Unable to connect");
	    /* Query will retrive information of given Email-id */
		$rs=mysqli_query($con,"select * from profile where Email='$email'");
		if($r=mysqli_fetch_array($rs)){
			/* If date is found then this code will execute */
?>
			<!DOCTYPE html>
			<html>
				<head>
					<title>User Profile</title>
					<style>
						/* Add padding to containers */
				        .container {
				          padding: 16px;
				        }
				    </style>
				</head>
				<body >
					<div class="container">
						<!-- profile of user  -->
						First Name :  <?php echo $r[0];?><br><br>
						Last Name  :  <?php echo $r[1];?><br><br>
						Gender    :  <?php echo $r[2];?><br><br>
						Date of birth     :  <?php echo $r[3];?><br><br>
						Qualification      :  <?php echo $r[4];?><br><br>
						Relegion      :  <?php echo $r[5];?><br><br>
						Caste      :  <?php echo $r[6];?><br><br>
						Address      :  <?php echo $r[7];?><br><br>
						Mobile No.     :  <?php echo $r[8];?><br><br>
						Email     :  <?php echo $r[9];?><br><br>
				   	</div> 
					<pre><a href="edit.php"><!-- link to edit profile -->Edit profile</a>    <a href="changepassword.php"><!-- link to change password  -->Change Password</a>    <a href="search.php"><!-- link to search profile -->Search</a>   <a href="logout.php"><!-- click to log out -->Logout</a>   <a href="delete.php"><!--click to delete profile -->Delete</a> </pre>
				</body>
			</html>
<?php
		}
		else{
			/* If no data found for entered email then send to index.php */
			header("location:index.php");
		}
	}
?>
	