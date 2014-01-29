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
			<span class="button1">App Recommender<img src="images/logo.png" width="50" height="50" style="border:0px;"/></span><br><br>
		</div>
		<div id="data"><br><br>
		
<?php
function display(){
	echo'<center><form action="" method="post">
	<br>Enter old password:<input type="password" name="oldpassword" maxlenth="16" class="field1"><br>
	<br>Enter new password:<input type="password" name="newpwd" maxlenth="16" class="field1"><br>
	<br>Confirm new password:<input type="password" name="newpwdcfm" maxlenth="16" class="field1"><br>
	<br><input type="submit" value="change password" class="button2">
	</form> </center>';
	}
if($_SERVER['REQUEST_METHOD'] != 'POST')
{
display();
}
else
{
//$errors = array(); 
	$mypassword=sha1($_POST['oldpassword']);
	$new=sha1($_POST['newpwd']);
	$new1=sha1($_POST['newpwdcfm']);
	 
	if($new==$new1)
	{
		$userid=$_SESSION['user_name'];
		$sql="SELECT * FROM $userstable WHERE user_name='$userid' and user_pass='$mypassword'";
		$result=mysql_query($sql);
		if(!$result)
		{
			$errors[]= 'Something went wrong while retrieving Your details . Please try again later.';
		}
		else
		{
			$count=mysql_num_rows($result);
			if($count==1)
			{
				$result1 = mysql_query("UPDATE $userstable SET user_pass='$new' WHERE user_name='$userid'");
				if(!$result1)
				{
					echo 'Something went wrong while retrieving your details. Please try again later.';
					 display();
				}
				else
				{
					echo '<br><br><br><br><b style="color:red;"> Password changed successfully</b><br><br><br><br>';
					//display();
				}
			}
			else 
			{
				echo '<b style="color:red;">You entered Wrong Password</b>';
				display();
			}
		}
	}
	else 
	{
	echo '<b style="color:red;">Entered new passwords does not match</b>';
		display();
	}
	}
?>
		</div><div id="footer">
			<a href="index.php" class="button2" style="float:left;">Home</a>
			<a href="signout.php" class="button2" style="float:right;">Sign Out</a><br><br>
		</div>
	</div>
	
	</div>
</center>	