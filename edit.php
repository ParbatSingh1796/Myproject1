<?php
	if(isset($_GET["err"])){
		/* message if any field is empty */
		echo "<script type='text/javascript'>alert('Fill all field')</script>";
	}
	else{
		/* variable to store login cookie */
		$email=$_COOKIE["login"];
		/* connection to database */
	    $user='root';
	    $passw='';
	    $db='mm';
	    $con=new mysqli('localhost',$user,$passw,$db)or die("Unable to connect");
	    $rs=mysqli_query($con,"select * from profile where Email='$email'");
	    /* $rs store data of given Email-Id */
	    if($r=mysqli_fetch_array($rs)){
?>		
		<!-- If data found then below all html code will execute -->
			<!DOCTYPE html>
			<html>
				<head>
					<title>Edit your profile</title>
					<style type="text/css">
						form {
			  				border: 3px solid #f1f1f1;
			  				position: absolute;
			    			top: 30px;
			    			right: 470px;
			    			font-size: 20px;
			    			width: 400px;
			  			}

						/* Full-width inputs */
						input[type=text], input[type=password] {
						  width: 100%;
						  padding: 12px 20px;
						  margin: 8px 0;
						  display: inline-block;
						  border: 1px solid #ccc;
						  box-sizing: border-box;
						}

						/* Set a style for all buttons */
						button {
						  background-color: #4CAF50;
						  color: white;
						  padding: 14px 20px;
						  margin: 8px 0;
						  border: none;
						  cursor: pointer;
						  width: 100%;
						}

						/* Add a hover effect for buttons */
						button:hover {
						  opacity: 0.8;
						}
						/* Add padding to containers */
						.container {
						  padding: 16px;
						}
					</style>
				</head>
				<body>
					<form method="post" action="update.php">
						<div class="container">
							<!--by default Form's field contain already present data of user's profile -->
							First Name :<input type="text" name="fname" value="<?php echo $r[0];?>" required><br><br>
							Last Name  :<input type="text" name="lname" value="<?php echo $r[1];?>" required><br><br>
							Qualification    :<input type="text" name="qual"   value="<?php echo $r[4];?>" required><br><br>
							Mobile     :<input type="text" name="mob"   value="<?php echo $r[8];?>" required><br><br>
							Address :<input type="text" name="adr" value="<?php echo $r[7];?>" required><br><br>
							<button type="submit" value="Save">Save</button>
			  		 	</div>
					</form>
				</body>
			</html>
<?php
		}
		else{
			/* If no data found */
			header("location:profile.php");
		}
	}
?>