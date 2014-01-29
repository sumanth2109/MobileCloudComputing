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
    /*the form hasn't been posted yet, display it
	  note that the action="" will cause the form to post to the same page it is on */
    
	
echo '<center>		<div id="header">
			<span class="button1">App Recommender<img src="images/logo.png" width="50" height="50" style="border:0px;"/></span>
		</div>
		
		<div id="data">

		<br>	<form method="post" action="">
		Username: <input type="text" name="user_name" class="field1" /><br /><br />
 		Password: <input type="password" name="user_pass" class="field1"><br /><br />
		Password again: <input type="password" name="user_pass_check" class="field1"><br /><br />
		E-mail: <input type="email" name="user_email" class="field1"><br />
 		<center><input type="submit" value="Signup"  class="button2"/></br><br>
		</form></div>
<div id="footer">
<a style="float:left;" href="signin.php" class="button2"> Login<a>
<a style="float:right;" href="forgot.php" class="button2">Forgot Password?</a></div></center>';
}
else
{
    /* so, the form has been posted, we'll process the data in three steps:
		1.	Check the data
		2.	Let the user refill the wrong fields (if necessary)
		3.	Save the data 
	*/
	$errors = array(); /* declare the array for later use */
	
	if(strlen($_POST['user_name']) >0)
	{
		$count=0;
		$user=$_POST['user_name'];
		$sql="SELECT * FROM $userstable WHERE user_name='$user'";
		$result=mysql_query($sql);
		$count=mysql_num_rows($result);
		if($count>0){
			 $errors[] = 'Entered Username already exists, Please choose another username.';
			//the user name exists
		}
		if(!ctype_alnum($_POST['user_name']))
		{
			$errors[] = 'Username contains only letters and digits.';
		}
		if(strlen($_POST['user_name']) > 30)
		{
			$errors[] = 'Username cannot be longer than 30 characters.';
		}
	}
	else
	{
		$errors[] = 'The username field must not be empty.';
	}
	
	
	if(isset($_POST['user_pass']))
	{
		if($_POST['user_pass'] != $_POST['user_pass_check'])
		{
			$errors[] = 'Two passwords did not match.';
		}
	}
	if(strlen($_POST['user_pass']) <1)
	{
		$errors[] = 'Password field cannot be empty.';
	}

	if(strlen($_POST['user_email']) <1)
	{
		$errors[] = 'Email should not be empty.';
	}

	if(!empty($errors)) /*check for an empty array, if there are errors, they're in this array (note the ! operator)*/
	{

		echo '<center>		<div id="header">
			<span class="button1">App Recommender<img src="images/logo.png" width="50" height="50" style="border:0px;"/></span>
		</div>
		
		<div id="data">

		<br>	<form method="post" action="">';
		echo '<ul style="list-style:none;text-align:left;font-size:13px;margin-left: -15px;margin-top:-10px;">Check the errors below..';
			foreach($errors as $key => $value)
			{
				echo '<li style=color:red;">' . $value . '</li>'; 
			}
			echo '</ul>
			Username: <input type="text" name="user_name" class="field1"  value="'.$_POST['user_name'].'"/><br /><br />
 		Password: <input type="password" name="user_pass" class="field1"><br /><br />
		Password again: <input type="password" name="user_pass_check" class="field1"><br /><br />
		E-mail: <input type="email" name="user_email"  value="'.$_POST['user_email'].'" class="field1"><br />
 		<center><input type="submit" value="Signup"  class="button2"/><br>
		</form></div>
<div id="footer">
<a style="float:left;" href="signin.php" class="button2"> Login<a>
<a style="float:right;" href="forgot.php" class="button2">Forgot Password?</a></div></center>';
		

	}
	else
	{
		//the form has been posted without, so save it
		//notice the use of mysql_real_escape_string, keep everything safe!
		//also notice the sha1 function which hashes the password
		$sql = "INSERT INTO  $userstable(user_name, user_pass, user_email ,user_date,user_level)
			VALUES('" . mysql_real_escape_string($_POST['user_name']) . "','" . sha1($_POST['user_pass']) . "', '" . mysql_real_escape_string($_POST['user_email']) . "',NOW(),0)";
		$result = mysql_query($sql);
		$sql1="INSERT INTO  mailintrests(user_name,user_email)
		VALUES('" . mysql_real_escape_string($_POST['user_name']) . "', '" . mysql_real_escape_string($_POST['user_email']) . "')";
		$result1 = mysql_query($sql1);
		if(!$result1)
		{
			echo 'Something went wrong while registering. Please try again later.';
		}
		elseif(!$result)
		{
			//something went wrong, display the error
			echo 'Something went wrong while registering. Please try again later.';
			//echo mysql_error(); //debugging purposes, uncomment when needed
		}
		else {
			   // THIS EMAIL IS THE SENDER EMAIL ADDRESS
			//   $from = $company_email_address;
			   $email=$_POST['user_email'];
			   $name=$_POST['user_name'];
			   
			   $subject = 'Welcome to App Recommender';

			   $headers      = "From: $company_name <$from>\r\n";
				$headers   .= "Content-type: text/html; charset=iso-8859-1\r\n";
				$headers   .= "Message-ID: <".time().rand(1,1000)."@".$_SERVER['SERVER_NAME'].">". "\r\n";   
$message = <<<EOF

  <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
   <html xmlns="http://www.w3.org/1999/xhtml">
   <head>
  <title>System</title>
   </head>
      <body>
<p style="font-family:verdana;">Hello <b> $name</b></p>,<br>
Thank you for registrering to App Recommender updates.<br>
We will mail you The top rated apps in your intrested catogiries weekly.
      </body>
   </html>
EOF;
		 if(!mail($email, $subject, $message, $headers))
		echo "mail failed";
		
		}
		echo '<center>		
			<div id="header">
			<span class="button1">App Recommender<img src="images/logo.png" width="50" height="50" style="border:0px;"/></span><br><br>
			</div><div id="data"><br>
			Hello <b>' . mysql_real_escape_string($_POST['user_name']) . '</b>,<br>
			Succesfully registered.  <br><br></div>
			<div id="footer"><br><a href="signin.php" class="button2"> Login Now<a></div></center>';
		}
	}



?>
