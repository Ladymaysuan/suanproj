<?php  

	include_once ('config.php');
	session_start();
	$title = "Coffee Love";
	include_once ('header.php');
	

?>

<style>
	.title{
		color:white;
	}
	
</style>
<div id="head">	
	
<center>
	<h1 id="title" style="font-family:bickham scripts; color:white; font-size: 100px;">Coffee Love</h1>
</center>
 
<center>
<input id="login" type="button" name="" value="Log In" onclick="login()">
<input id="signin" type="button" name="" value="Sign Up" onclick="signup()">
<input id="about" type="button" name="" value="About Us" onclick="about()" ></center>

</div>
</div>
	

<script type="text/javascript" src="js/scripts.js"></script>
<?php include_once ('footer.php'); ?>
