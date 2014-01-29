<?php 
include "../connect.php";
if(!(isset($_SESSION['admin'])))
{
header("Location:login.php");
echo 'If you are not redirected to login page <a href="signin.php">Click toProceed to the Admin  login page</a>.';
exit(); 
}

$table ='mailintrests';
$rownos=array("user_name","user_email","user_intrests");
$rowheads=array("Name","Email","Interests");

//No need to edit below
$sql = "SELECT * FROM $table";
$result = mysql_query($sql);
if(!$result){	print 'Error reading data from database.Try again later<br><br>';}

echo '<table border="1" style="border-collapse:collapse;"><tr>';
foreach ($rowheads as $value) {   echo '<th style="background:#b40e1f;color:white;width:300px;">'.$value.'</th>';  }
echo '</tr>';
while($row = mysql_fetch_array($result)) { 
echo'<tr>';
 foreach ($rownos as $value1) 
{  
echo '<td>'.$row[$value1]. '</td>';  
} 
echo '</tr>';
}
echo '</table>';
?>