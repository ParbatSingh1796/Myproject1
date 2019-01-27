<?php
  if(isset($_GET["err"])){
    /* If conform password is not matched  */
  	echo "<script type='text/javascript'>alert('Conform password carefully')</script>";
  }
  /* variable to store Email-id of user  */
  $email=$_GET["mail"]
?>
<html>
  <head>
    <style>
    	form {
        border: 3px solid #f1f1f1;
        position: absolute;
        top: 100px;
        right: 470px;
        font-size: 20px;
        width: 400px;
      }
      input[type=email], input[type=password] {
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
      .container {
        padding: 16px;
      }
    </style>
  </head>
  <body>
    <!-- Form will send data to savepassword.php page -->
    <form  action="savepassword.php" method="post">
    	<div class="container">
      	Enter Password :<input type="password" name="passw"  required=required><br><br>
      	Conform Password :<input type="password" name="cpassw" required=required><br><br>
      	Email:<input type="email" name="email" value="<?php echo $email; ?>" readonly><br>
    	  <button type="submit">Save Password</button>
      </div>
    </form>
  </body>
</html>
