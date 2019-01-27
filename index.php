
<?php
  /* this will show message when user account deleted successfully*/
	if(isset($_GET["del"])){
		  echo "<script type='text/javascript'>alert('Your account deleted successfully')</script>";
	}
  /*this will show message when user successfully registered*/
	if(isset($_GET["succ"])){
		  echo "<script type='text/javascript'>alert('You are registered successfully')</script>";
	}
  /*this will show message when user already registered with enterd email-id*/
	if(isset($_GET["reg"])){
		  echo "<script type='text/javascript'>alert('You are already registered')</script>";
	}
?>
<!-- php code end here  -->
  <!--Bootstrap library -->
<link rel="stylesheet" href="bootstrap.min.css">

<!-- jQuery library -->
<script src="jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="bootstrap.min.js"></script>
<!DOCTYPE html>
<html>
  <head>
    <title>Welcome to shaadi.com </title>
    <style >
      /* style for input type text and select  */
        input[type=text], select {
          width: 20%;
          padding: 12px 20px;
          margin: 8px 0;
          display: inline-block;
          border: 1px solid #ccc;
          border-radius: 4px;
          box-sizing: border-box;

      }
      /* style for input type text and select  */

      input[type=submit] {
          width: 20%;
          background-color: #4CAF50;
          color: white;
          padding: 14px 20px;
          margin: 8px 0;
          border: none;
          border-radius: 4px;
          cursor: pointer;
      }
      input[type=submit]:hover {
          background-color: #45a049;
      }
      /* style for form class  */
      .form{
         height: 768px;
         background-image: url("marriage1.jpg");
         padding: 20px;
      }
      /* background color for form and position of search form  */
      .formcolor{
        border-radius: 5px;
        background-color: gray;
        height: 140px;
        width: 900px;
        position: absolute;
        bottom: -100px;
        left: 300px;
      }
      .searchform{
        border-radius: 5px;
        height: 80px;
        width: 800px;
        position: absolute;
        bottom: -100px;
        left: 350px;
        color: black;
        font-weight: 600;
      }
      /* style for register link and position  */
      .reg{
        position: absolute;
          top: 20px;
          right: 76px;
          color: black;
          font-weight: 600;
        }
      /* style for login link and position  */
      .log{
        position: absolute;
          top: 20px;
          right: 160px;
          color: black;
          font-weight: 500;
        }
      a{
        color: white;
      }
      .marriage{
        position: absolute;
          top: 30px;
          left: 76px;
          color: white;
          font-weight: 600;
          font-family: "Georgia", Times, serif;
          font-size: 40px;
        }
      .com{
        position: absolute;
          top: 60px;
          left: 76px;
          color: white;
          font-weight: 600;
          font-family: "Georgia", Times, serif;
          font-size: 35px;
      }
      .heart{
        position: absolute;
          top: 70px;
          left: 170px;
          font-size: 30px;
          color: white;
        }
    </style>
  </head>
  <!-- style and head teg end here  -->
  <!-- body part start here  -->
  <body>
  	<div class="form">
      <!-- class for heart symbol  -->
  		<div class="heart">
  			&#10084
  		</div>
  		<div class="marriage">
  		  Shaadi
  	  </div>
  	  <div class="com">
  		  .com
  	  </div>
      <!-- link for login  -->
  	  <div class="log">
        <h4><a href="login.php">Login</a></h4>
      </div>
      <!-- link for register  -->
      <div class="reg">
  		   <h4><a href="reg.php">Register</a></h4>
  	  </div>
  	  <div class="formcolor"></div>
  		<h2 style=" position: absolute;bottom: -15px;left: 400px; color: white;font-weight: 600;">I'm looking for....</h2>
      <!-- search for start here  -->
  		<div class="searchform">
  		  <form action="search_db.php" method="post">
  		     Relegion :<select name="country">
          				     <option value="Hindu">Hindu</option>
          				     <option value="Jain">Jain</option>
          				     <option value="Buddhism">Buddhism</option>
          				     <option value="Sikh">Sikh</option>
          				     <option value="Muslim">Muslim</option>
          				     <option value="Chrestian">Chrestian</option>
  				          </select>
  		    Caste :<input type="text" name="caste" placeholder="Rajput" required=required>		
  		    Gender :<input type="radio" name="gender" value="Male"  checked=checked> Male
  			  <input type="radio" name="gender" value="Female" > Female 
  		    <input type="submit" value="Let's search">
  	    </form>
        <!-- form send data to search_db page  -->
  	  </div>
    </div>
  </body>
</html>
				
				
			

