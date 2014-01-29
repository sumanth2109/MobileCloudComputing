<?php

include '../connect.php';
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
  ?>