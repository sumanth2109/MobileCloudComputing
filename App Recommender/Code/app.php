<?php session_start(); 
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
		<link href="css/app.css" rel="stylesheet" type="text/css"></head>
	<body>
<center>
		<div id="header">
			<span class="button1">App Recommender<img src="images/logo.png" width="50" height="50" style="border:0px;"/>
			<a href="choose1.php?cat=<?php 	$table = ($_GET['cat']);  echo $table; ?>" class="button2" style="float:right;">Back</a>
			</span><br><br>
		</div>
		
		<div id="data">
		
		<?php
echo '<br>Welcome <b>'. $_SESSION['user_name'] .'</b>';
						$table = ($_GET['cat']);
						$app = ($_GET['app']);
						
						$sql = "SELECT * FROM $table WHERE appname='$app' ";
					//	echo $table. ' Category<br><br>';
			$result=mysql_query($sql) or print(mysql_error());
			while($row1 = mysql_fetch_array($result))
			{

									echo'<br>App Name:<b> '.$row1['appname']
						.'</b><br>Rating:<b> '.$row1['rating']
						.'</b><br>Recommenders:<b> '.$row1['recommenders']
						.'</b><br>5 Star Rating:<b> '.$row1['rate5']
						.'</b><br>4 Star Rating:<b> '.$row1['rate4']
						.'</b><br>3 Star Rating:<b> '.$row1['rate3']
						.'</b><br>2 Star Rating:<b> '.$row1['rate2']
						.'</b><br>1 Star Rating:<b> '.$row1['rate1']
						.'</b><br>Review 1:<b> '.$row1['review1']
						.'</b><br>Review 2:<b> '.$row1['review2']
						.'</b><br>Review 3:<b> '.$row1['review3'].'</b>';
						
			//echo '<a href="app.php?cat='.$table.'&app='.$row['appname'].'">'.$row['appname'].'</a><br>';
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
				</div><br>';	*/
			}
			?>
					</div>

		<div id="footer">
			<a href="index.php" class="button2" style="float:left;">Home</a>
			<a href="signout.php" class="button2" style="float:right;">Sign Out</a><br><br>
		</div>

		</body>
	</html>