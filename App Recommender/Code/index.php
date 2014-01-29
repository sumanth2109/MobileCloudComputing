<?php include 'connect.php';
if(!(isset($_SESSION['signed_in'])))
{
header("Location:signin.php");
echo 'If you are not redirected to login page <a href="signin.php">Click toProceed to the Admin  login page</a>.';
exit(); 
}
?> 
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
			<span class="button1">App Recommender<img src="images/logo.png" width="50" height="50" style="border:0px;"/></span>
		</div>
		<div id="data">
		<br><br>Welcome <b><?php echo $_SESSION['user_name'] ;?></b><br><br>
		<a href="choose.php" class="button2">Choose Category</a><br><br><br>
		<a href="manage.php" class="button2"> Manage Interests</a><br><br><br>
		</div>
		<div id="footer">
			<a href="profile.php" class="button2" style="float:left;">Profile</a>
			<a href="signout.php" class="button2" style="float:right;">Sign Out</a><br>
		</div>
	
	
	</div>
</center>
	