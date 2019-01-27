
<html>
  <head>
    <title>Welcome to registration page</title>
    <style type="text/css">
    /* style for text area */
      textarea {
          width: 100%;
          height: 150px;
          padding: 12px 20px;
          box-sizing: border-box;
          border: 2px solid #ccc;
          border-radius: 4px;
          background-color: #f8f8f8;
          font-size: 16px;
          resize: none;
      }
      /* style for input type text and select */
      input[type=text], select {
          width: 100%;
          padding: 12px 20px;
          margin: 8px 0;
          display: inline-block;
          border: 1px solid #ccc;
          border-radius: 4px;
          box-sizing: border-box;
      }
      /* Style for submit button */
      input[type=submit] {
          width: 100%;
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
      /* form Style */
      form {
        border: 3px solid #f1f1f1;
        position: absolute;
        top: 50px;
        right: 470px;
        font-size: 20px;
        width: 450px;
        background-color:  #9999ff;
      }
      /* style for user avater */
      img.avatar {
        width: 40%;
        border-radius: 50%;
      }
      .imgcontainer {
        text-align: center;
        margin: 24px 0 12px 0;
        width: 400px;
      }
      /* Add padding to containers */
      .container {
        padding: 16px;
      }
    </style>
  </head>
  <body>
	 <div  class="container" >
			<form  action="register.php" method="post">
        <!-- form data will be sent to register.php page -->
	      <div class="imgcontainer">
          <img src="avater.png" alt="Avatar" class="avatar">
        </div>
        <div class="container">
  	      <?php
    	      if(isset($_GET["alr"])){
              /*this code will execute if entered Email-id already registerd */
		      ?>
              <span style="color:red; font-size: 2x; font-style: italic;">! This Email-Id already registered</span><br>
          <?php
		        }
	        ?>
          <!-- required data for registeration -->
        	First Name :<input type="text" name="fname" placeholder="Parbat" required=required><br><br>
        	Last Name :<input type="text" name="lname" placeholder="Singh" required=required><br><br>
        	Gender :<input type="radio" name="gender" value="Male"  checked=checked> Male
        			    <input type="radio" name="gender" value="Female" > Female <br><br>
        	Date of birth :<input type="date" name="dob" required=required><br><br>
        	Qualification :<select name="quali">
                    				<option value="Postgradute">PG</option>
                    				<option value="Undergradute">UG</option>
                    				<option value="matric">10+2</option>
                    				<option value="secondary">10</option>
                    				<option value="Illiterate">illitrate</option>
        				          </select><br><br>
        	Relegion :<select name="relegion">
              				<option value="Hindu">Hindu</option>
              				<option value="Jain">Jain</option>
              				<option value="Buddhism">Buddhism</option>
              				<option value="Sikh">Sikh</option>
              				<option value="Muslim">Muslim</option>
              				<option value="Chrestian">Chrestian</option>
        				    </select><br><br>
        	Caste :<input type="text" name="caste" placeholder="Rajput" required=required><br><br>
        	Address:<textarea rows=5 cols=100 name="addr" required=required></textarea><br><br>
        	Mobile:<input type="text" name="mob" placeholder="9045678475" required=required><br><br>
        	Email :<input type="text" name="email" placeholder="abc123@gmail.com" required=required>
          <input type="submit" value="Register">
        </div>
      </form>
		</div>
  </body>
</html>