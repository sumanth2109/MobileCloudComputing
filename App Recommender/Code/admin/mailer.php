
<?php 
include "../connect.php";
if(!(isset($_SESSION['admin'])))
{
header("Location:login.php");
echo 'If you are not redirected to login page <a href="signin.php">Click toProceed to the Admin  login page</a>.';
exit(); 
}
echo '<!DOCTYPE html>
<html>
<head>
<style>
body{
font-family:verdana;
font-size:13px;
}
.head{
text-decoration:underline;
margin-right:10px;
}
</style>
</head><body>';
$result = mysql_query("SELECT * FROM mailintrests") or die(mysql_error());

$subject = 'Top Apps This Week';
$headers      = "From: $company_name <$from>\r\n";
$headers   .= "Content-type: text/html; charset=iso-8859-1\r\n";
$headers   .= "Message-ID: <".time().rand(1,1000)."@".$_SERVER['SERVER_NAME'].">". "\r\n";   

while($row = mysql_fetch_array($result))
{
  $message='<h1>App Recommender</h1>Hello <b>'.$row['user_name'].'</b><br><br><br>
  App Recommender recommends the following apps for you based on your interests.
<br><br>Below is the list of Top rated apps in the categories You Intrested.';
  $to =$row['user_email'];
  $intr=$row['user_intrests'];
 			//			echo"</p>".$intr;
			$pref=explode("@",$intr);
			//print_r ($pref);
			$N = count($pref)-1;
			for($i=0; $i < $N; $i++)
			{
					$table = $pref[$i];
					$message.= '<br><br><br><b style="color:red;">'.$table.'</b>';
					$sql1 = "SELECT * FROM $table ORDER BY $sort $order";
					$count1=0;
					//			print ($sql);
					$result1=mysql_query($sql1) or print(mysql_error());
					while($row1 = mysql_fetch_array($result1))
					{
						if($count1>=$noa) {break;}

						$message.='<br><br><br>App Name:<b> '.$row1['appname']
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
						$count1++;

						}
			}
						$name=$row['user_name'];
$message.='<br>The Recommendations are done based on your interest and the uniqueness of the application along with the feedback from other users. 
<br>You can make the best use of them by downloading them from the Google Play store. 
<br>
<br>You are receiving this email because you have Registered for the App Recommender.
<br>For any further information please do not hesitate to contact us through App Recommender.
';
$message1 = <<<EOF

  <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
   <html xmlns="http://www.w3.org/1999/xhtml">
   <head>
  <title>System</title>
   </head>
      <body>

<div style="border: 1px ;box-shadow: rgb(128, 128, 128) 1px 1px 5px, rgb(128, 128, 128) -1px 1px 5px; border-radius:20px; padding:50px; margin:50px auto;"> $message</div>
      </body>
   </html>
EOF;
			if(!mail($to, $subject, $message1, $headers))
			{echo "mail failed to ".$to;}
		echo '<div style="border: 1px ;box-shadow: rgb(128, 128, 128) 1px 1px 5px, rgb(128, 128, 128) -1px 1px 5px;border-radius:20px;padding:50px;margin:50px;width:100%;margin:auto;"><b class="head">Mail To:</b>'.$to.'<br><br><b class="head">Headers:</b>'.$headers.'<br><br><b class="head">Subject:</b>'.$subject.'<br><br><b class="head">Message</b>'.$message.'</div>';

}
?>