<?php
	
       if(isset($_GET["invalid"])){
       	/* If current entered password not correct */
		echo "<script type='text/javascript'>alert('Invalid current password')</script>";
	}
       if(isset($_GET["err"])){
       	/* If any field is empty */
		echo "<script type='text/javascript'>alert('All fields required to fill')</script>";
	}
       if(isset($_GET["missmatch"])){
       	/* If new password and conform password not match  */
		echo "<script type='text/javascript'>alert('New password missmatched')</script>";
	}
	if(!isset($_COOKIE["login"])){
		/* If cookie is not set  */
		header("location:index.php");
	}
	else{
		/* If cookie is present then authenticate to change password  */
?>
		<!DOCTYPE html>
		<html>
			<head>
				<title></title>
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
				<form action="change_pass.php" method="post">
					<div class="container">
						Current password: <input type="password" name="cp">
						New password: <input type="password" name="np">
						Conform new password: <input type="password" name="rp">
						<button type="submit" value="Change password">Save</button>
					</div>
				</form>
			</body>
		</html>
<?php
	}
?>