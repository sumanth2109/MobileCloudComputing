<?php
$server	    = 'RepYaCity.db.10737671.hostedresource.com';
$username	= 'RepYaCity';
$password	= 'Projectweb2@';
$database	= 'RepYaCity';
$userstable='users';

mysql_connect($server, $username, $password) or die(mysql_error());
mysql_select_db($database) or die(mysql_error());

adddata("data/Books.txt");
adddata("data/Business.txt");
adddata("data/Comics.txt");
adddata("data/Communication.txt");
adddata("data/Education.txt");
adddata("data/Entertainment.txt");
adddata("data/Finance.txt");
adddata("data/Health.txt");
adddata("data/Libraries.txt");
adddata("data/Lifestyle.txt");
adddata("data/LiveWallpaper.txt");
adddata("data/Media.txt");
adddata("data/Medical.txt");
adddata("data/Music.txt");
adddata("data/News.txt");
adddata("data/Personalization.txt");
adddata("data/Photography.txt");
adddata("data/Productivity.txt");
adddata("data/Shopping.txt");
adddata("data/Social.txt");
adddata("data/Sports.txt");
adddata("data/Tools.txt");
adddata("data/Transportation.txt");
adddata("data/Travel.txt");
adddata("data/Weather.txt");
adddata("data/Widgets.txt");
adddata("data/Games.txt");

function adddata($filename)
{
echo '<br><br><br><b syle="color:red;">'.$filename.' category</b><br>';
$file = fopen($filename, "r") or exit("Unable to open file!");
while(!feof($file))
 {
   $intr=fgets($file);
 // echo $intr; 
  $intr1= explode(",",$intr);
 $N = count($intr1);
//$var2="('$name','$rate','$desc','$image','$lnk','$devp','','')";	//Field should be left blank if no data corresponding to above var
	$value='';//$value='"(';		
		for($i=0; $i < $N; $i++)
			{
			if($i==$N-1){
						$table=$intr1[$i];
						}
			else{
						 $value.= "'".$intr1[$i]."',";;
			}
			}
		//	echo $value.'<br><br>';
			$value= '('.substr($value,0,strlen($value)-1).')';
		//	echo $value;
			
		//	$value.=')"';
//echo $value."<br><br>".$table;

//old values(appname,rating,appdisc,imageurl,applink,col1,col2,col3)

$sql="INSERT INTO $table (appname,rating,recommenders,rate5,rate4,rate3,rate2,rate1,review1,review2,review3)
 VALUES  $value";
mysql_query($sql) or die(mysql_error());
 print($intr1[0]." Application Successfully added.<br><br>");
  }
  fclose($file);
 } 
  ?>