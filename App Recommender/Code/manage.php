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
		<br><br>Welcome <b><?php echo $_SESSION['user_name'] ;
		echo '</b><br><br>';
	if($_SERVER['REQUEST_METHOD'] != 'POST')
	{	
			echo'</b><center>Choose Your Interests <br>
			<span id="manage" style="text-align:left;">
                        <form method="post" action="">
				<input type="checkbox" name="cat[]" value="Games">Games<br>
				<input type="checkbox" name="cat[]" value="Books">Books<br>
				<input type="checkbox" name="cat[]" value="Business">Business<br>
				<input type="checkbox" name="cat[]" value="Comics">Comics<br>
				<input type="checkbox" name="cat[]" value="Communication">Communication<br>
				<input type="checkbox" name="cat[]" value="Education">Education<br>
				<input type="checkbox" name="cat[]" value="Entertainment">Entertainment<br>
				<input type="checkbox" name="cat[]" value="Finance">Finance<br>
				<input type="checkbox" name="cat[]" value="Health">Health & Fitness<br>
				<input type="checkbox" name="cat[]" value="Libraries">Libraries<br>
				<input type="checkbox" name="cat[]" value="Lifestyle">Lifestyle<br>
				<input type="checkbox" name="cat[]" value="LiveWallpaper">LiveWallpaper<br>
				<input type="checkbox" name="cat[]" value="Media">Media<br>
				<input type="checkbox" name="cat[]" value="Medical">Medical<br>
				<input type="checkbox" name="cat[]" value="Music">Music<br>
				<input type="checkbox" name="cat[]" value="News">News<br>
				<input type="checkbox" name="cat[]" value="Personalization">Personalization<br>
				<input type="checkbox" name="cat[]" value="Photography">Photography<br>
				<input type="checkbox" name="cat[]" value="Productivity">Productivity<br>
				<input type="checkbox" name="cat[]" value="Shopping">Shopping<br>
				<input type="checkbox" name="cat[]" value="Social">Social Networking<br>
				<input type="checkbox" name="cat[]" value="Sports">Sports<br>
				<input type="checkbox" name="cat[]" value="Tools">Tools<br>
				<input type="checkbox" name="cat[]" value="Transportation">Transportation<br>
				<input type="checkbox" name="cat[]" value="Travel">Travel<br>
				<input type="checkbox" name="cat[]" value="Weather">Weather<br>
				<input type="checkbox" name="cat[]" value="Widgets">Widgets<br>

				<input type="submit" class="button2"></center><br>';
			
			}
			else{
			$cat = $_POST['cat'];
            $N = count($cat);
			$intr='';
echo 'Your Preferences has been saved successfully. We wll mail you top rated apps weekly<br><br><br>';
		if ($debug==1) {	echo("<p>You selected $N catogirie(s):<br> ");	}	
			for($i=0; $i < $N; $i++)
			{
			 $intr.= $cat[$i].'@';
		if ($debug==1) {		echo($cat[$i] . "<br>");}
			}
			
			
			$name=$_SESSION['user_name'];
			$sql="UPDATE mailintrests  SET user_intrests='$intr' where user_name='$name' ";
mysql_query($sql) or print(mysql_error());			
			
}
		?>	
		</div><div id="footer">
			<a href="index.php" class="button2" style="float:left;">Home</a>
			<a href="signout.php" class="button2" style="float:right;">Sign Out</a><br><br>
		</div>
</div></center></body></html>	