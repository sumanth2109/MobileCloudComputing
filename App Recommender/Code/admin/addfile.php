<?php 
include "../connect.php";
if(!(isset($_SESSION['admin'])))
{
header("Location:login.php");
echo 'If you are not redirected to login page <a href="signin.php">Click toProceed to the Admin  login page</a>.';
exit(); 
}
?> 
	<!DOCtype html>
	<html>
	<head>
         <title>App Recommender</title>
		  <meta name="viewport" content="width=device-width, initial-scale=1" />
		<link href="../css/style.css" rel="stylesheet" type="text/css">
	</head>
	<center>

		<div id="header">
			<span class="button1">App Recommender<img src="../images/logo.png" width="50" height="50" style="border:0px;"/></span>
		</div>
		<div id="data">
<?php			

if($_SERVER['REQUEST_METHOD'] != 'POST')
{
echo '<form action="" method="post" enctype="multipart/form-data"><br>
Select File to upload(Text file with Size limit 2 mb): <br>
<input type="file" accept="text/plain" name="file" class="button2" ><br><br>
<input type="submit" name="submit" class="button2" ><br><br>
';
}
else{
$filename1 = basename($_FILES['file']['name']);
$ext = substr($filename, strrpos($filename1, '.') +1);
echo $ext;
if (($ext=="txt") && ($_FILES["file"]["size"] < 2000000))
  {
  if ($_FILES["file"]["error"] > 0)
    {
    echo "Error: " . $_FILES["file"]["error"] . "<br />";
    }
  else
    {
     move_uploaded_file($_FILES['file']['tmp_name'],$filename);
	 echo "File saved ".$filename;
/*     $fileread = $newname;
    //reading a file
$file = fopen($fileread, "r") or exit("Unable to open file!");

//Output a line of the file until the end is reached
while(!feof($file))
  {
      //inserting each data into table
      $insert = "insert into $name (serial,data,used) values('','fgets($file)','0')";
      $query = mysqli_query($connect,$insert);
      if($query)
      {
          echo "cool";
      }
  }
  */
  }
  }
  else{echo 'Invalid file';}
  }
  ?>
  			<div id="footer">
			<a href="signout.php" class="button2" style="">Sign Out</a><br>
		</div> 