	<?php 
error_reporting(E_NONE);
session_start();
include 'connect.php';
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
			<span class="button1">App Recommender<img src="images/logo.png" width="50" height="50" style="border:0px;"/></span><br><br>
		</div>
		<br><br>Welcome <b><?php 		echo $_SESSION['user_name'] ; ?>	</b>
		<div id="data">
		<br>Below is the list of best Apps in 
		<?php
						$table = ($_GET['cat']);
						$sql = "SELECT * FROM $table ORDER BY $sort $order";
						echo $table. ' Category<br><br>';
			$result=mysql_query($sql) or print(mysql_error());
			while($row = mysql_fetch_array($result))
			{

			echo '<a href="app.php?cat='.$table.'&app='.$row['appname'].'">'.$row['appname'].'</a><br>';
	/*		echo '</b><br><div id="apptab">
				<div id="apphead">'.$row['appname'].'</div>
				<div   style="float:left;margin:10px;">
					<a target="_blank" href="'.$row['applink'].'"><img src="'.$row['imageurl'].'" width="100" height="100" alt="App Image"></a>
				</div>
				<div style="padding:10px;">
				<b style="color:red;">Link: </b><a target="_blank" href="'.$row['applink'].'" title="Click link to goto application page">Play store link</a>  <br> <br>  
				<b style="color:red;">Rating: </b>'.$row['rating'].'  <br> <br>  
				<b style="color:red;">Developer: </b> <span style="width:500px">'.$row['col1'].'</span><br> <br> 
				<b style="color:red;">Description: </b> <span style="width:500px">'.$row['appdisc'].' </span><br> <br> 
				</div>
				</div><br>';
				*/
			}
			
			?>
					</div>

		<div id="footer">
			<a href="index.php" class="button2" style="float:left;">Home</a>
			<a href="signout.php" class="button2" style="float:right;">Sign Out</a><br><br>
		</div>

		</body>
	</html>