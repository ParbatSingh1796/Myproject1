
<?php
  /* this will show message when user change password from change_pass.php successfully*/
  if(isset($_GET["succ"])){
  	echo "<script type='text/javascript'>alert('Password changed successfully , Now you can login with your new password')</script>";
    }
?>

<!DOCTYPE html>
<html>
  <head>
	 <title>Login</title>
	 <style type="text/css">
		 /* Bordered form */
      form {
          border: 3px solid #f1f1f1;
          position: absolute;
          top: 100px;
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
      /* Center the avatar image inside this container */
      .imgcontainer {
        text-align: center;
        margin: 24px 0 12px 0;
        width: 400px;
      }

      /* Avatar image */
      img.avatar {
        width: 40%;
        border-radius: 50%;
      }

      /* Add padding to containers */
      .container {
        padding: 16px;
      }
    </style>
  </head>
  <body>
    <!-- Login form start from here data will be sent to check.php page -->
    <form action="check.php" method="post">
      <!-- class for user avater -->
 	    <div class="imgcontainer">
        <img src="avater.png" alt="Avatar" class="avatar">
      </div>
      <div class="container">
        <label for="email"><b>Email</b></label>
        <input type="text" placeholder="Email-Id" name="email" required>
        <!-- below code will execute if entered email-id is not registered -->
        <?php
          if(isset($_GET["attempt"])){
		    ?>
            <span style="color:red; font-size: 2x; font-style: italic;">! Invalid Email-Id</span><br>
        <?php
          }
        ?>
        <label for="pass"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="pass" required>
        <!-- below code will show message if entered password is not correct -->
        <?php
          if(isset($_GET["invalid"])){
		    ?>
            <span style="color:red; font-size: 2x; font-style: italic;">! Invalid password</span><br>
        <?php
            }
        ?>
        <button type="submit">Login</button>
      </div>
    </form>
    <!-- end of login form --> 
  </body>
</html>