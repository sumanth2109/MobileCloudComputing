<?php 
include "../connect.php";
if(!(isset($_SESSION['admin'])))
{
header("Location:login.php");
echo 'If you are not redirected to login page <a href="signin.php">Click toProceed to the Admin  login page</a>.';
exit(); 
}
?> 
	<!DOCtype html>
	<html>
	<head>
         <title>App Recommender</title>
		  <meta name="viewport" content="width=device-width, initial-scale=1" />
		<link href="../css/style.css" rel="stylesheet" type="text/css">
	</head>
	<center>

		<div id="header">
			<span class="button1">App Recommender<img src="../images/logo.png" width="50" height="50" style="border:0px;"/></span>
		</div>
		<div id="data">
<?php			
echo'<br><center>
					<a target="_blank" href="tables.php" class="button2">Create Tables</a><span style="margin:left:50px"></span>
					<a target="_blank" href="addapp.php" class="button2">Add App</a><span style="margin:left:50px"></span><br><br><br>
					<a target="_blank" href="mailer.php" class="button2">Send Mails</a><span style="margin:left:50px"></span>
					<a target="_blank" href="v2.php" class="button2">Show Users</a><span style="margin:left:50px"></span><br><br><br>
					<a target="_blank" href="v1.php" class="button2">Show User Interests</a><span style="margin:left:50px"></span>
					<a target="_blank" href="addfile.php" class="button2">Upload Datafile</a><br><br><br>
					<a target="_blank" href="loaddata.php"  class="button2">Load data From uploaded file</a>';
	
	echo '<h1>Welcome '.$admin.'</h1></center>
	<p>For the first time create tables.A blank page means Tables created successfully</p>
	<p>To load application data to database "Upload  Datafile" first. Then Click "Load data From uploaded file"</p>
	<p>Click "send mails" to send mails to all users in their categories.Enabling debug mode will show you mail data.</p>
	<p>"Show users" will show you all registered users."Show User Interests" shows user interests.</p>
	';
/*	$choice=$_GET['id'];

	switch($choice)
	{
		case 'ct': include 'tables.php';
		case 'sm': include 'mailer.php'; break;
		case 'si' :	$table ='mailintrests';
					$rownos=array("user_name","user_email","user_intrests");
					$rowheads=array("Name","Email","Interests");
					include 'v1.php'; break;
		case 'su' :	$table ='mailintrests';
					$rownos=array("user_id","user_name","user_email","user_date");
					$rowheads=array("S.N.O","Name","Email","Password","Registration Date");
					include 'v1.php'; break;
		default:echo "<h1>Welcome ".$admin."</h1>";
	}
	
	*/  ?>
			<div id="footer">
			<a href="signout.php" class="button2" style="">Sign Out</a><br>
		</div>
	