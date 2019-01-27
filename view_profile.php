<?php
	$fname=$_GET["id"];
	
    $user='root';
	$passw='';
	$db='mm';
    $con=new mysqli('localhost',$user,$passw,$db)or die("Unable to connect");
	$rs=mysqli_query($con,"select * from profile where Fname='$fname'");
	if($r=mysqli_fetch_array($rs)){
	?>
<body bgcolor=#b2cecf>
	First Name :<?php echo $r[0];?><br><br>
	Last Name  :<?php echo $r[1];?><br><br>
	Gender    :<?php echo $r[2];?><br><br>
	Date of birth     :<?php echo $r[3];?><br><br>
	Qualification      :<?php echo $r[4];?><br><br>
	Relegion      :<?php echo $r[5];?><br><br>
	Caste      :<?php echo $r[6];?><br><br>
	Address      :<?php echo $r[7];?><br><br>
	Mobile No.     :<?php echo $r[8];?><br><br>
	Email     :<?php echo $r[9];?><br><br>
</body>
<?php
	}
else{
echo "<script type='text/javascript'>alert('No data found')</script>";
}
?>