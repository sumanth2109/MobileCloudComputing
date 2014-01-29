<?php 
include "../connect.php";
if(!(isset($_SESSION['admin'])))
{
header("Location:login.php");
echo 'If you are not redirected to login page <a href="signin.php">Click toProceed to the Admin  login page</a>.';
exit(); 
}


$create = mysql_query(" ALTER TABLE Books MODIFY COLUMN rating  varchar(5)");    
if (!$create) {	print("Could not ALTER TABLE :" . mysql_error());	}

$create = mysql_query(" ALTER TABLE Business MODIFY COLUMN rating  varchar(5)");    
if (!$create) {	print("Could not ALTER TABLE :" . mysql_error());	}

$create = mysql_query(" ALTER TABLE Comics MODIFY COLUMN rating  varchar(5)");    
if (!$create) {	print("Could not ALTER TABLE :" . mysql_error());	}

$create = mysql_query(" ALTER TABLE Communication MODIFY COLUMN rating  varchar(5)");    
if (!$create) {	print("Could not ALTER TABLE :" . mysql_error());	}

$create = mysql_query(" ALTER TABLE Education MODIFY COLUMN rating  varchar(5)");    
if (!$create) {	print("Could not ALTER TABLE :" . mysql_error());	}

$create = mysql_query(" ALTER TABLE Entertainment MODIFY COLUMN rating  varchar(5)");    
if (!$create) {	print("Could not ALTER TABLE :" . mysql_error());	}

$create = mysql_query(" ALTER TABLE Finance MODIFY COLUMN rating  varchar(5)");    
if (!$create) {	print("Could not ALTER TABLE :" . mysql_error());	}

$create = mysql_query(" ALTER TABLE Health MODIFY COLUMN rating  varchar(5)");    
if (!$create) {	print("Could not ALTER TABLE :" . mysql_error());	}

$create = mysql_query(" ALTER TABLE Libraries MODIFY COLUMN rating  varchar(5)");    
if (!$create) {	print("Could not ALTER TABLE :" . mysql_error());	}

$create = mysql_query(" ALTER TABLE Lifestyle MODIFY COLUMN rating  varchar(5)");    
if (!$create) {	print("Could not ALTER TABLE :" . mysql_error());	}

$create = mysql_query(" ALTER TABLE LiveWallpaper MODIFY COLUMN rating  varchar(5)");    
if (!$create) {	print("Could not ALTER TABLE :" . mysql_error());	}

$create = mysql_query(" ALTER TABLE Media MODIFY COLUMN rating  varchar(5)");    
if (!$create) {	print("Could not ALTER TABLE :" . mysql_error());	}

$create = mysql_query(" ALTER TABLE Medical MODIFY COLUMN rating  varchar(5)");    
if (!$create) {	print("Could not ALTER TABLE :" . mysql_error());	}

$create = mysql_query(" ALTER TABLE Music MODIFY COLUMN rating  varchar(5)");    
if (!$create) {	print("Could not ALTER TABLE :" . mysql_error());	}

$create = mysql_query(" ALTER TABLE News MODIFY COLUMN rating  varchar(5)");    
if (!$create) {	print("Could not ALTER TABLE :" . mysql_error());	}

$create = mysql_query(" ALTER TABLE Personalization MODIFY COLUMN rating  varchar(5)");    
if (!$create) {	print("Could not ALTER TABLE :" . mysql_error());	}

$create = mysql_query(" ALTER TABLE Photography MODIFY COLUMN rating  varchar(5)");    
if (!$create) {	print("Could not ALTER TABLE :" . mysql_error());	}

$create = mysql_query(" ALTER TABLE Shopping MODIFY COLUMN rating  varchar(5)");    
if (!$create) {	print("Could not ALTER TABLE :" . mysql_error());	}

$create = mysql_query(" ALTER TABLE Productivity MODIFY COLUMN rating  varchar(5)");    
if (!$create) {	print("Could not ALTER TABLE :" . mysql_error());	}

$create = mysql_query(" ALTER TABLE Social MODIFY COLUMN rating  varchar(5)");    
if (!$create) {	print("Could not ALTER TABLE :" . mysql_error());	}

$create = mysql_query(" ALTER TABLE Sports MODIFY COLUMN rating  varchar(5)");    
if (!$create) {	print("Could not ALTER TABLE :" . mysql_error());	}

$create = mysql_query(" ALTER TABLE Tools MODIFY COLUMN rating  varchar(5)");    
if (!$create) {	print("Could not ALTER TABLE :" . mysql_error());	}

$create = mysql_query(" ALTER TABLE Transportation MODIFY COLUMN rating  varchar(5)");    
if (!$create) {	print("Could not ALTER TABLE :" . mysql_error());	}

$create = mysql_query(" ALTER TABLE Travel MODIFY COLUMN rating  varchar(5)");    
if (!$create) {	print("Could not ALTER TABLE :" . mysql_error());	}

$create = mysql_query(" ALTER TABLE Weather MODIFY COLUMN rating  varchar(5)");    
if (!$create) {	print("Could not ALTER TABLE :" . mysql_error());	}

$create = mysql_query(" ALTER TABLE Widgets MODIFY COLUMN rating  varchar(5)");    
if (!$create) {	print("Could not ALTER TABLE :" . mysql_error());	}

$create = mysql_query(" ALTER TABLE Games MODIFY COLUMN rating  varchar(5)");    
if (!$create) {	print("Could not ALTER TABLE :" . mysql_error());	}

$create = mysql_query(" ALTER TABLE Navigation MODIFY COLUMN rating  varchar(5)");    
if (!$create) {	print("Could not ALTER TABLE :" . mysql_error());	}

$create = mysql_query(" ALTER TABLE Photo MODIFY COLUMN rating  varchar(5)");    
if (!$create) {	print("Could not ALTER TABLE :" . mysql_error());	}

$create = mysql_query(" ALTER TABLE Utilities MODIFY COLUMN rating  varchar(5)");    
if (!$create) {	print("Could not ALTER TABLE :" . mysql_error());	}


?>