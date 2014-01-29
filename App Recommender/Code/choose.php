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
	<body>
<center>
		<div id="header">
			<span class="button1">App Recommender<img src="images/logo.png" width="50" height="50" style="border:0px;"/></span><br><br>
		</div>
		<br><br>Welcome <b><?php 		error_reporting(E_ERROR);		echo $_SESSION['user_name'] ; ?>	</b>
		<div id="data">
		<span id="choose" style="text-align:left;">	Choose a category click Show Apps<br><br>
			<form method="get" action="choose1.php">
				<input type="radio" name="cat" value="Games" checked>Games<br>
				<input type="radio" name="cat" value="Books">Books<br>
				<input type="radio" name="cat" value="Business">Business<br>
				<input type="radio" name="cat" value="Comics">Comics<br>
				<input type="radio" name="cat" value="Communication">Communication<br>
				<input type="radio" name="cat" value="Education">Education<br>
				<input type="radio" name="cat" value="Entertainment">Entertainment<br>
				<input type="radio" name="cat" value="Finance">Finance<br>
				<input type="radio" name="cat" value="Health">Health & Fitness<br>
				<input type="radio" name="cat" value="Libraries">Libraries<br>
				<input type="radio" name="cat" value="Lifestyle">Lifestyle<br>
				<input type="radio" name="cat" value="LiveWallpaper">LiveWallpaper<br>
				<input type="radio" name="cat" value="Media">Media<br>
				<input type="radio" name="cat" value="Medical">Medical<br>
				<input type="radio" name="cat" value="Music">Music<br>
				<input type="radio" name="cat" value="News">News<br>
				<input type="radio" name="cat" value="Personalization">Personalization<br>
				<input type="radio" name="cat" value="Photography">Photography<br>
				<input type="radio" name="cat" value="Productivity">Productivity<br>
				<input type="radio" name="cat" value="Shopping">Shopping<br>
				<input type="radio" name="cat" value="Social">Social Networking<br>
				<input type="radio" name="cat" value="Sports">Sports<br>
				<input type="radio" name="cat" value="Tools">Tools<br>
				<input type="radio" name="cat" value="Transportation">Transportation<br>
				<input type="radio" name="cat" value="Travel">Travel<br>
				<input type="radio" name="cat" value="Weather">Weather<br>
				<input type="radio" name="cat" value="Widgets">Widgets<br>
	<input type="submit" class="button2"></span>
		</div>

		<div id="footer">
			<a href="index.php" class="button2" style="float:left;">Home</a>
			<a href="signout.php" class="button2" style="float:right;">Sign Out</a><br><br>
		</div>

		</body>
	</html>