<?php
        include 'connect.php';
echo '<html>
    <head>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>App Recommender</title>
		<link href="css/style.css" rel="stylesheet" type="text/css">
   </head>
	<body>';
if($_SERVER['REQUEST_METHOD'] != 'POST')
{
	echo '<center>
		<div id="header">
		<span class="button1">App Recommender<img src="images/logo.png" width="50" height="50" style="border:0px;"/></span><br>
		</div>
		<div id="data">
		<br>	<form method="post" action="">
		 <center><h2>Forget Password?</h2>
		 Input Your Username:<input type="text" maxlength="50" name="name" class="field1">
		<br><input type="submit" class="button2" value="Submit"><br><br>
		<a class="button1" href="signup.php"> Create Account<a><br><br><br>
		<a class="button1" href="signin.php">Log In</a><br><br>
		</div></center>';
}
else
{
	$name1=mysql_real_escape_string($_POST['name']);
	$sql = "SELECT 	* FROM $userstable	WHERE user_name='$name1'";
	$result = mysql_query($sql) or print(mysql_error());
	if(mysql_num_rows($result) == 0)
	{
		echo '<center>
		<div id="header">
		<span class="button1">App Recommender<img src="images/logo.png" width="50" height="50" style="border:0px;"/></span><br><br>
		</div>
		<div id="data">
		<form method="post" action="">
		 <center><b style="font-size:13px;color:red;">User Name not found.Please enter correct Username.</b><br><h2>Forget Password?</h2>
		 Input Your Username:<input type="text" maxlength="50" name="name" class="field1">
		<br><input type="submit" class="button2" value="Submit"><br><br>
		<a class="button1" href="signup.php"> Create Account<a><br><br><br>
		<a class="button1" href="signin.php">Log In</a><br><br>
		</div></center>';
	}
	else
	{
		$subject = "Change your password";
		//$headers = "From: ".$website;
		$headers = "From: App Recommender \r\nReply-To: sumanth2109@gmail.com";
		while($row = mysql_fetch_array($result))
	  {
			  $to =$row['user_email'];
			  $link='http://'.$host.'/changelostpassword.php?id='.$row['user_pass'].'&user='.$row['user_name'];
	  }
$message = 'You have requested that you have forgot your password.
Change Your password immediately by clicking link  below or copy and paste link in your browser.
 '.$link;
//<br><br><a target="_blank" href="'.$link.'">'.$link.'</a>

//			echo $subject."<br>".$message."<br>".$headers."<br>";
			//mail($to,$subject,$message,$headers);
			$mail_sent = @mail( $to, $subject, $message, $headers );
			echo '<center>
		<div id="header">
		<span class="button1">App Recommender<img src="images/logo.png" width="50" height="50" style="border:0px;"/></span><br><br>
		</div>
		<br><div id="data"><br><br>	';
			echo $mail_sent ? "Mail sent to $to.Please Check your mail." : "Mail sending failed due to an error in our mail servers.Please try after some time";
			//echo "Mail sent to ".$row['user_email'] . "<br>";
			echo '
Password reset link is sent to your mail.<br><br></div></center>';
	}
}
echo '	</div></div>';
 ?>