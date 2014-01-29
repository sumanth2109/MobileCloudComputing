<?php
        include 'connect.php';
	$user=mysql_real_escape_string($_GET['user']);	
	$password=mysql_real_escape_string($_GET['id']);
	$sql = "SELECT 	* FROM $userstable	WHERE user_pass='$password' and user_name='$user'";
$result = mysql_query($sql);
if(!$result)
{
	echo 'Did not found the user.Invalid Link';
}
else
{
	
	while($row = mysql_fetch_assoc($result))
	{
	echo '<center><div style="width:500px;margin:auto;padding:10px;"><h2>Change Lost Password</h2>
					Hello '.$row['user_name'].'<br><br><form action="changecomplete.php" method="post">
	<input type="hidden" name="username" value="'.$row['user_name'].'"><input type="hidden" name="oldpassword" value="'.$password.'">
	Enter new password:<input type="password" name="newpwd" maxlenth="16">
	<br>Confirm new password:<input type="password" name="newpwdcfm" maxlenth="16">
	<br><input type="submit" value="change password">
	</form> </div>';
	}
}

echo '	</div></div>';  ?>