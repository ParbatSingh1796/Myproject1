<?php
	/* Destroy cookie and send to index page  */
	setcookie("login","",time()-1);
	header("location:index.php");
?>