<?php
        include 'connect.php';
if($_SERVER['REQUEST_METHOD'] != 'POST')
{

	echo 'page forbidden';
}	
else
{
	$mypassword=$_POST['oldpassword'];
	$new=sha1($_POST['newpwd']);
	$new1=sha1($_POST['newpwdcfm']);
	$userid=$_POST['username'];
	if($new==$new1)
	{
			$result1 = mysql_query("UPDATE $userstable SET user_pass='$new' WHERE user_name='$userid' and user_pass='$mypassword'");
			if(!$result1)
			{
				echo 'Something went wrong while updating your details. Please try again later.';
			}
			else
			{
				echo 'Password changed successfully.You can <a href="signin.php"> Signin </a> to the forum now.';
			}
		
	}
	
	else 
	{
	echo "Entered new passwords does not match";
	}	
}
echo '	</div></div>'; ?>