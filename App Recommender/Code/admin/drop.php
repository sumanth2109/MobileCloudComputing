<?php 
include "../connect.php";
if(!(isset($_SESSION['admin'])))
{
header("Location:login.php");
echo 'If you are not redirected to login page <a href="signin.php">Click toProceed to the Admin  login page</a>.';
exit(); 
}

$create = mysql_query(" DROP TABLE users ");    
if (!$create) {	print("Could not create table :" . mysql_error());	}

$create = mysql_query(" DROP TABLE Books");    
if (!$create) {	print("Could not create table :" . mysql_error());	}


$create = mysql_query(" DROP TABLE Business");    
if (!$create) {	print("Could not create table :" . mysql_error());	}

$create = mysql_query(" DROP TABLE Education");    
if (!$create) {	print("Could not create table :" . mysql_error());	}

$create = mysql_query(" DROP TABLE Entertainment");    
if (!$create) {	print("Could not create table :" . mysql_error());	}

$create = mysql_query(" DROP TABLE Finance");    
if (!$create) {	print("Could not create table :" . mysql_error());	}

$create = mysql_query(" DROP TABLE Games");    
if (!$create) {	print("Could not create table :" . mysql_error());	}

$create = mysql_query(" DROP TABLE Health ");    
if (!$create) {	print("Could not create table :" . mysql_error());	}

$create = mysql_query(" DROP TABLE Lifestyle");    
if (!$create) {	print("Could not create table :" . mysql_error());	}

$create = mysql_query(" DROP TABLE Medical");    
if (!$create) {	print("Could not create table :" . mysql_error());	}

$create = mysql_query(" DROP TABLE Music");    
if (!$create) {	print("Could not create table :" . mysql_error());	}

$create = mysql_query(" DROP TABLE Navigation");    
if (!$create) {	print("Could not create table :" . mysql_error());	}

$create = mysql_query(" DROP TABLE News");    
if (!$create) {	print("Could not create table :" . mysql_error());	}

$create = mysql_query(" DROP TABLE Photo ");    
if (!$create) {	print("Could not create table :" . mysql_error());	}

$create = mysql_query(" DROP TABLE Productivity");    
if (!$create) {	print("Could not create table :" . mysql_error());	}

$create = mysql_query(" DROP TABLE Social ");    
if (!$create) {	print("Could not create table :" . mysql_error());	}

$create = mysql_query(" DROP TABLE Sports ");    
if (!$create) {	print("Could not create table :" . mysql_error());	}

$create = mysql_query(" DROP TABLE Travel ");    
if (!$create) {	print("Could not create table :" . mysql_error());	}

$create = mysql_query(" DROP TABLE Utilities ");    
if (!$create) {	print("Could not create table :" . mysql_error());	}

$create = mysql_query(" DROP TABLE Weather ");    
if (!$create) {	print("Could not create table :" . mysql_error());	}


$create = mysql_query(" DROP TABLE mailintrests ");    
if (!$create) {	print("Could not create table :" . mysql_error());	}

?>