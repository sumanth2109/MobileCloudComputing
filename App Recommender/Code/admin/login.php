<?php include '../connect.php';
echo '<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1" />
          <title>App Recommender</title>
		<link href="../css/style.css" rel="stylesheet" type="text/css">
   </head>
	<body>';


if(isset($_SESSION['admin']) && $_SESSION['admin'] == true)
{
	echo '<center>
		<div id="header">
			<span class="button1">App Recommender<img src="../images/logo.png" width="50" height="50" style="border:0px;"/></span><br><br>
		</div><div id="data">You are already signed in, you can <a href="signout.php">sign out</a> if you want.</center></div>';
}
else
{
	if($_SERVER['REQUEST_METHOD'] != 'POST')
	{
		echo '<center>
		<div id="header">
			<span class="button1">App Recommender<img src="../images/logo.png" width="50" height="50" style="border:0px;"/></span><br><br>
		</div>
		<div id="data">
		<br><br>	<form method="post" action=""><h1>Admin Login</h1>
			Username: <input type="text" name="user_name" class="field1" /><br /><br />
			Password: <input type="password" name="user_pass" class="field1"><br /><br />
			<input type="submit" value="Sign in" class="button2"/>
		 </form></div></center>';
	}
	else
	{
		
	     if( ($_POST['user_name']==$admin) and ($_POST['user_pass']==$pass) )
			{				$_SESSION['admin'] = true;

							echo '<center>
								<div id="header">
									<span class="button1">App Recommender<img src="../images/logo.png" width="50" height="50" style="border:0px;"/></span><br><br>
								</div>
								<div id="data">
								<br><br>';
							header("Location: admin.php");
							echo "<script> window.setTimeout('"; echo 'window.location="admin.php"; '; echo "',1000);</script>";
							echo '<center>Welcome, ' . $_SESSION['user_name'] . '. <br /><br>You will be redirected in a second. <br>If not click link below.
							<br><a href="admin.php">Proceed to the App Recommender Page</a><br><br></div></center>.';
}
else
{
echo '<center>	
		<div id="header">
			<span class="button1">App Recommender<img src="../images/logo.png" width="50" height="50" style="border:0px;"/></span><br><br>
		</div>
		<div id="data">
		<br><br>	<form method="post" action=""><h1>Admin Login</h1>Wrong username and Password Combination<br><br>
			Username: <input type="text" name="user_name" class="field1" /><br /><br />
			Password: <input type="password" name="user_pass" class="field1"><br /><br />
			<input type="submit" value="Sign in" class="button2"/>
		 </form></div></center>';
}

}
}
 ?>
 </body>
 </html>