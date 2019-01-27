<?php
	/* variable declaration to store data sent from search form of index.php */
	$country=$_POST["country"];
	$caste=$_POST["caste"];
	$gender=$_POST["gender"];
	/* connection to mm database which contain profile(Fname,Lname,Gender,Dob,Quali,Religion,Caste,Address,Mob,Email) and data(Email,password) table */
	$user='root';
	$passw='';
	$db='mm';
    $con=new mysqli('localhost',$user,$passw,$db)or die("Unable to connect");
    $rs=mysqli_query($con,"select * from profile where Gender='$gender' AND Religion='$country' AND Caste='$caste'");
    /* above quary will search profile for given detail in search form of index.php */
    $result=mysqli_num_rows($rs);
	if($result>0){
		/* this code will execute if any profile found with given detail */
		echo $result;
		/* above echo will show number of match found */
		echo "\t";
		echo "Match found";
		echo "<br><br>";
		while($r=mysqli_fetch_array($rs)){
			$name=$r[0];
			/* this while loop will print profile first name and link to see complete profile of this name(view_profile.php page) */ 
	 		echo $name." "."<a href='view_profile.php?id=".$r[0]."'>View Profile</a>";
	  		echo "<br><br>";	
	  	}
	}

	else{
		/* if no match found then this code will execute , send to profile.php page s  */
	  	header("location:profile.php?no=1");
	}
?>
	  
	  
	
	
	
	
	


	
				
	