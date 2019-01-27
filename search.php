<?php
	
	if(isset($_GET["no"])){
		/* If no match found for given data */
		echo "<script type='text/javascript'>alert('No match found')</script>";
	}
	if(!isset($_COOKIE["login"])){
		/* If cookie is not set send to index.php page  */
	header("location:index.php");
	}
	else{
		/* If cookie is set then enter data to form for search  */
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
						input[type=text], select{
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
					<form action="search_db.php" method="post">
						<!-- send data to search_db.php page -->
						<div class="container">
							I'm Looking for...<br><br>
							Relegion :<select name="country">
										<option value="Hindu">Hindu</option>
										<option value="Jain">Jain</option>
										<option value="Buddhism">Buddhism</option>
										<option value="Sikh">Sikh</option>
										<option value="Muslim">Muslim</option>
										<option value="Chrestian">Chrestian</option>
									</select><br><br>
							Caste :<input type="text" name="caste" placeholder="Rajput" required=required><br><br>		
							Gender :<input type="radio" name="gender" value="Male"  checked=checked> Male
									<input type="radio" name="gender" value="Female" > Female <br><br>
							<button type="submit" value="Let's search">Let's search</button>
						</div>
					</form>
				</body>
			</html>
<?php
	/* end of else condition  */
	}
?>