<?php session_start(); ?>
<!DOCtype html>
<html>
    <head>
 <meta name="viewport" content="width=device-width, initial-scale=1" />
         <title>App Recommender</title>
		<link href="css/style.css" rel="stylesheet" type="text/css">
    </head>
	<body>
	
	<center>
		<div id="header">
			<span class="button1">App Recommender<img src="images/logo.png" width="50" height="50" style="border:0px;"/></span><br><br>
		</div>
		<br><br><div id="data">
		<?php
 include 'connect.php';
echo '<center><h2>Sign out</h2></center>';
if($_SESSION['signed_in'] == true)
{
	$_SESSION['signed_in'] = NULL;
	$_SESSION['user_name'] = NULL;
	$_SESSION['user_id']   = NULL;

	echo '<center>Succesfully signed out, Thank you for visiting.';
	echo '<br><br> <a href="signin.php" class="button2">Signin again.</a></center>';
}
else
{
	echo 'You are not signed in. Would you <a href="signin.php">like to</a>?';
}
   ?>
   
   				<br><br><br>

		</div><center><div id="footer"><br><a href="signin.php" class="button2">Proceed</a><br><br></div></center>
			</div>
	</body>
</html>