<?php include 'connect.php';?>
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
	<div id="data">

<?php
if(isset($_SESSION['signed_in']) && $_SESSION['signed_in'] == true)
{
	echo '<center>You are already signed in, you can <a href="signout.php">sign out</a> if you want.</div>
		 <div id="footer">
			 <a style="float:left;" href="signup.php" class="button2"> Create Account<a>
			 <a style="float:right;" href="forgot.php" class="button2">Forgot Password?</a>
		 </div>
		 </center></center>';
}
else
{
	if($_SERVER['REQUEST_METHOD'] != 'POST')
	{
		echo '
			<br><br>	<form method="post" action="">
			Username: <input type="text" name="user_name" class="field1" /><br /><br />
			Password: <input type="password" name="user_pass" class="field1"><br /><br />
			<input type="submit" value="Sign in" class="button2"/>
			</form>
		 </div>
		 <div id="footer">
			 <a style="float:left;" href="signup.php" class="button2"> Create Account<a>
			 <a style="float:right;" href="forgot.php" class="button2">Forgot Password?</a>
		 </div>
		 </center>';
	}
	else
	{
		$errors = array(); 
		
		if(strlen($_POST['user_name']) <1)
		{
			$errors[] = 'The username field must not be empty.';
		}
		
		if(strlen($_POST['user_pass']) <1)
		{
			$errors[] = 'The password field must not be empty.';
		}
		
		if(!empty($errors)) 
		{
			echo '
			<form method="post" action="">';
			echo '<ul style="list-style:none;font-size:13px;margin-left: -15px;">Check the errors below..';
			foreach($errors as $key => $value)
			{
				echo '<li style=color:red;">' . $value . '</li>'; 
			}
			echo '</ul>';
			echo '	Username: <input type="text" name="user_name" class="field1" /><br /><br />
			Password: <input type="password" name="user_pass" class="field1"><br /><br />
			<input type="submit" value="Sign in" class="button2"/>
			</form>
		</div>
		<div id="footer">
			 <a style="float:left;" href="signup.php" class="button2"> Create Account<a>
			 <a style="float:right;" href="forgot.php" class="button2">Forgot Password?</a>
		</div>
		</center>';
		 
		}
		else
		{
			$sql = "SELECT 	user_id,user_name,user_level  FROM	$userstable WHERE user_name = '" . mysql_real_escape_string($_POST['user_name']) . "' 	AND user_pass = '" . sha1($_POST['user_pass']) . "'";
						
			$result = mysql_query($sql);
			if(!$result)
			{
				echo 'Something went wrong while signing in. Please try again later.';
			}
			else
			{
				if(mysql_num_rows($result) == 0)
				{
		echo '
			<br><br><i style="color:red;font-size:13px;"><u><b>Error:</b></u>You have supplied a wrong user/password combination. Please try again.</i><br><br>	
			<form method="post" action="">
			Username: <input type="text" name="user_name" class="field1" /><br /><br />
			Password: <input type="password" name="user_pass" class="field1"><br /><br />
			<input type="submit" value="Sign in" class="button2"/>
			</form>
		 </div>
		 <div id="footer">
			 <a style="float:left;" href="signup.php" class="button2"> Create Account<a>
			 <a style="float:right;" href="forgot.php" class="button2">Forgot Password?</a>
		 </div>
		 </center>';
			}
				else
				{
					while($row = mysql_fetch_assoc($result))
					{
						if($row['user_level']=="2") 
						{
							echo 'Your account has encountered some critical problem.Please Wait till problem is solved';
						}
						else{
							$_SESSION['signed_in'] = true;
							$_SESSION['user_id'] 	= $row['user_id'];
							$_SESSION['user_name'] 	= $row['user_name'];
							$_SESSION['user_level'] = $row['user_level'];

								
								echo "<script> window.setTimeout('"; echo 'window.location="index.php"; '; echo "',1000);</script>";
								echo '<center>Welcome, ' . $_SESSION['user_name'] . '. <br /><br>You will be redirected in a second. <br>If not click link below.
								<br><br><br><a href="index.php" class="button2">Proceed to the App Recommender Page</a><br><br>
							</div>
			<div id="footer"><br><br>
				<a  href="index.php" class="button2"> Proceed<a>
			</div>
							</center>
';
						}
					}
				}
			}
		}
	}
}
 ?>

 </body>
 </html>