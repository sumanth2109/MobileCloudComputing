<?php 
include "../connect.php";
if(!(isset($_SESSION['admin'])))
{
header("Location:login.php");
echo 'If you are not redirected to login page <a href="signin.php">Click toProceed to the Admin  login page</a>.';
exit(); 
}


$create = mysql_query(" CREATE TABLE users (
  user_id int(8) NOT NULL AUTO_INCREMENT,
  user_name varchar(30) NOT NULL,
  user_pass varchar(255) NOT NULL,
  user_email varchar(255) NOT NULL,
  user_date   DATETIME NOT NULL,
  user_level int(8) NOT NULL,
  PRIMARY KEY (user_id)
)");    
if (!$create) {	print("Could not create table :" . mysql_error());	}


$create = mysql_query(" CREATE TABLE mailintrests (
  user_name varchar(30) NOT NULL,
  user_email varchar(255) NOT NULL,
  user_intrests varchar(2048),
  PRIMARY KEY (user_name)
)");    
if (!$create) {	print("Could not create table :" . mysql_error());	}

$create = mysql_query(" CREATE TABLE Books(
sno int(8) not null AUTO_INCREMENT,
appname varchar(255) not null,
rating varchar(3) not null,
recommenders int(8),
rate5 varchar(1024),
rate4 varchar(1024),
rate3 varchar(1024),
rate2 varchar(1024),
rate1 varchar(1024),
review1 varchar(1024),
review2 varchar(1024),
review3 varchar(1024),
col1 varchar(1024),
col2 varchar(1024),
col3 varchar(1024),
col4 varchar(1024),
col5 varchar(1024),
 PRIMARY KEY (sno)
)");    
if (!$create) {	print("Could not create table :" . mysql_error());	}

$create = mysql_query(" CREATE TABLE Business(
sno int(8) not null AUTO_INCREMENT,
appname varchar(255) not null,
rating varchar(3) not null,
recommenders int(8),
rate5 varchar(1024),
rate4 varchar(1024),
rate3 varchar(1024),
rate2 varchar(1024),
rate1 varchar(1024),
review1 varchar(1024),
review2 varchar(1024),
review3 varchar(1024),
col1 varchar(1024),
col2 varchar(1024),
col3 varchar(1024),
col4 varchar(1024),
col5 varchar(1024),
 PRIMARY KEY (sno)
)");    
if (!$create) {	print("Could not create table :" . mysql_error());	}

$create = mysql_query(" CREATE TABLE Comics(
sno int(8) not null AUTO_INCREMENT,
appname varchar(255) not null,
rating varchar(3) not null,
recommenders int(8),
rate5 varchar(1024),
rate4 varchar(1024),
rate3 varchar(1024),
rate2 varchar(1024),
rate1 varchar(1024),
review1 varchar(1024),
review2 varchar(1024),
review3 varchar(1024),
col1 varchar(1024),
col2 varchar(1024),
col3 varchar(1024),
col4 varchar(1024),
col5 varchar(1024),
 PRIMARY KEY (sno)
)");    
if (!$create) {	print("Could not create table :" . mysql_error());	}

$create = mysql_query(" CREATE TABLE Communication(
sno int(8) not null AUTO_INCREMENT,
appname varchar(255) not null,
rating varchar(3) not null,
recommenders int(8),
rate5 varchar(1024),
rate4 varchar(1024),
rate3 varchar(1024),
rate2 varchar(1024),
rate1 varchar(1024),
review1 varchar(1024),
review2 varchar(1024),
review3 varchar(1024),
col1 varchar(1024),
col2 varchar(1024),
col3 varchar(1024),
col4 varchar(1024),
col5 varchar(1024),
 PRIMARY KEY (sno)
)");    
if (!$create) {	print("Could not create table :" . mysql_error());	}

$create = mysql_query(" CREATE TABLE Education(
sno int(8) not null AUTO_INCREMENT,
appname varchar(255) not null,
rating varchar(3) not null,
recommenders int(8),
rate5 varchar(1024),
rate4 varchar(1024),
rate3 varchar(1024),
rate2 varchar(1024),
rate1 varchar(1024),
review1 varchar(1024),
review2 varchar(1024),
review3 varchar(1024),
col1 varchar(1024),
col2 varchar(1024),
col3 varchar(1024),
col4 varchar(1024),
col5 varchar(1024),
 PRIMARY KEY (sno)
)");    
if (!$create) {	print("Could not create table :" . mysql_error());	}

$create = mysql_query(" CREATE TABLE Entertainment(
sno int(8) not null AUTO_INCREMENT,
appname varchar(255) not null,
rating varchar(3) not null,
recommenders int(8),
rate5 varchar(1024),
rate4 varchar(1024),
rate3 varchar(1024),
rate2 varchar(1024),
rate1 varchar(1024),
review1 varchar(1024),
review2 varchar(1024),
review3 varchar(1024),
col1 varchar(1024),
col2 varchar(1024),
col3 varchar(1024),
col4 varchar(1024),
col5 varchar(1024),
 PRIMARY KEY (sno)
)");    
if (!$create) {	print("Could not create table :" . mysql_error());	}

$create = mysql_query(" CREATE TABLE Finance(
sno int(8) not null AUTO_INCREMENT,
appname varchar(255) not null,
rating varchar(3) not null,
recommenders int(8),
rate5 varchar(1024),
rate4 varchar(1024),
rate3 varchar(1024),
rate2 varchar(1024),
rate1 varchar(1024),
review1 varchar(1024),
review2 varchar(1024),
review3 varchar(1024),
col1 varchar(1024),
col2 varchar(1024),
col3 varchar(1024),
col4 varchar(1024),
col5 varchar(1024),
 PRIMARY KEY (sno)
)");    
if (!$create) {	print("Could not create table :" . mysql_error());	}

$create = mysql_query(" CREATE TABLE Health(
sno int(8) not null AUTO_INCREMENT,
appname varchar(255) not null,
rating varchar(3) not null,
recommenders int(8),
rate5 varchar(1024),
rate4 varchar(1024),
rate3 varchar(1024),
rate2 varchar(1024),
rate1 varchar(1024),
review1 varchar(1024),
review2 varchar(1024),
review3 varchar(1024),
col1 varchar(1024),
col2 varchar(1024),
col3 varchar(1024),
col4 varchar(1024),
col5 varchar(1024),
 PRIMARY KEY (sno)
)");    
if (!$create) {	print("Could not create table :" . mysql_error());	}

$create = mysql_query(" CREATE TABLE Libraries(
sno int(8) not null AUTO_INCREMENT,
appname varchar(255) not null,
rating varchar(3) not null,
recommenders int(8),
rate5 varchar(1024),
rate4 varchar(1024),
rate3 varchar(1024),
rate2 varchar(1024),
rate1 varchar(1024),
review1 varchar(1024),
review2 varchar(1024),
review3 varchar(1024),
col1 varchar(1024),
col2 varchar(1024),
col3 varchar(1024),
col4 varchar(1024),
col5 varchar(1024),
 PRIMARY KEY (sno)
)");    
if (!$create) {	print("Could not create table :" . mysql_error());	}

$create = mysql_query(" CREATE TABLE Lifestyle(
sno int(8) not null AUTO_INCREMENT,
appname varchar(255) not null,
rating varchar(3) not null,
recommenders int(8),
rate5 varchar(1024),
rate4 varchar(1024),
rate3 varchar(1024),
rate2 varchar(1024),
rate1 varchar(1024),
review1 varchar(1024),
review2 varchar(1024),
review3 varchar(1024),
col1 varchar(1024),
col2 varchar(1024),
col3 varchar(1024),
col4 varchar(1024),
col5 varchar(1024),
 PRIMARY KEY (sno)
)");    
if (!$create) {	print("Could not create table :" . mysql_error());	}

$create = mysql_query(" CREATE TABLE LiveWallpaper(
sno int(8) not null AUTO_INCREMENT,
appname varchar(255) not null,
rating varchar(3) not null,
recommenders int(8),
rate5 varchar(1024),
rate4 varchar(1024),
rate3 varchar(1024),
rate2 varchar(1024),
rate1 varchar(1024),
review1 varchar(1024),
review2 varchar(1024),
review3 varchar(1024),
col1 varchar(1024),
col2 varchar(1024),
col3 varchar(1024),
col4 varchar(1024),
col5 varchar(1024),
 PRIMARY KEY (sno)
)");    
if (!$create) {	print("Could not create table :" . mysql_error());	}

$create = mysql_query(" CREATE TABLE Media(
sno int(8) not null AUTO_INCREMENT,
appname varchar(255) not null,
rating varchar(3) not null,
recommenders int(8),
rate5 varchar(1024),
rate4 varchar(1024),
rate3 varchar(1024),
rate2 varchar(1024),
rate1 varchar(1024),
review1 varchar(1024),
review2 varchar(1024),
review3 varchar(1024),
col1 varchar(1024),
col2 varchar(1024),
col3 varchar(1024),
col4 varchar(1024),
col5 varchar(1024),
 PRIMARY KEY (sno)
)");    
if (!$create) {	print("Could not create table :" . mysql_error());	}

$create = mysql_query(" CREATE TABLE Medical(
sno int(8) not null AUTO_INCREMENT,
appname varchar(255) not null,
rating varchar(3) not null,
recommenders int(8),
rate5 varchar(1024),
rate4 varchar(1024),
rate3 varchar(1024),
rate2 varchar(1024),
rate1 varchar(1024),
review1 varchar(1024),
review2 varchar(1024),
review3 varchar(1024),
col1 varchar(1024),
col2 varchar(1024),
col3 varchar(1024),
col4 varchar(1024),
col5 varchar(1024),
 PRIMARY KEY (sno)
)");    
if (!$create) {	print("Could not create table :" . mysql_error());	}

$create = mysql_query(" CREATE TABLE Music(
sno int(8) not null AUTO_INCREMENT,
appname varchar(255) not null,
rating varchar(3) not null,
recommenders int(8),
rate5 varchar(1024),
rate4 varchar(1024),
rate3 varchar(1024),
rate2 varchar(1024),
rate1 varchar(1024),
review1 varchar(1024),
review2 varchar(1024),
review3 varchar(1024),
col1 varchar(1024),
col2 varchar(1024),
col3 varchar(1024),
col4 varchar(1024),
col5 varchar(1024),
 PRIMARY KEY (sno)
)");    
if (!$create) {	print("Could not create table :" . mysql_error());	}

$create = mysql_query(" CREATE TABLE News(
sno int(8) not null AUTO_INCREMENT,
appname varchar(255) not null,
rating varchar(3) not null,
recommenders int(8),
rate5 varchar(1024),
rate4 varchar(1024),
rate3 varchar(1024),
rate2 varchar(1024),
rate1 varchar(1024),
review1 varchar(1024),
review2 varchar(1024),
review3 varchar(1024),
col1 varchar(1024),
col2 varchar(1024),
col3 varchar(1024),
col4 varchar(1024),
col5 varchar(1024),
 PRIMARY KEY (sno)
)");    
if (!$create) {	print("Could not create table :" . mysql_error());	}

$create = mysql_query(" CREATE TABLE Personalization(
sno int(8) not null AUTO_INCREMENT,
appname varchar(255) not null,
rating varchar(3) not null,
recommenders int(8),
rate5 varchar(1024),
rate4 varchar(1024),
rate3 varchar(1024),
rate2 varchar(1024),
rate1 varchar(1024),
review1 varchar(1024),
review2 varchar(1024),
review3 varchar(1024),
col1 varchar(1024),
col2 varchar(1024),
col3 varchar(1024),
col4 varchar(1024),
col5 varchar(1024),
 PRIMARY KEY (sno)
)");    
if (!$create) {	print("Could not create table :" . mysql_error());	}

$create = mysql_query(" CREATE TABLE Photography(
sno int(8) not null AUTO_INCREMENT,
appname varchar(255) not null,
rating varchar(3) not null,
recommenders int(8),
rate5 varchar(1024),
rate4 varchar(1024),
rate3 varchar(1024),
rate2 varchar(1024),
rate1 varchar(1024),
review1 varchar(1024),
review2 varchar(1024),
review3 varchar(1024),
col1 varchar(1024),
col2 varchar(1024),
col3 varchar(1024),
col4 varchar(1024),
col5 varchar(1024),
 PRIMARY KEY (sno)
)");    
if (!$create) {	print("Could not create table :" . mysql_error());	}

$create = mysql_query(" CREATE TABLE Shopping(
sno int(8) not null AUTO_INCREMENT,
appname varchar(255) not null,
rating varchar(3) not null,
recommenders int(8),
rate5 varchar(1024),
rate4 varchar(1024),
rate3 varchar(1024),
rate2 varchar(1024),
rate1 varchar(1024),
review1 varchar(1024),
review2 varchar(1024),
review3 varchar(1024),
col1 varchar(1024),
col2 varchar(1024),
col3 varchar(1024),
col4 varchar(1024),
col5 varchar(1024),
 PRIMARY KEY (sno)
)");    
if (!$create) {	print("Could not create table :" . mysql_error());	}

$create = mysql_query(" CREATE TABLE Productivity(
sno int(8) not null AUTO_INCREMENT,
appname varchar(255) not null,
rating varchar(3) not null,
recommenders int(8),
rate5 varchar(1024),
rate4 varchar(1024),
rate3 varchar(1024),
rate2 varchar(1024),
rate1 varchar(1024),
review1 varchar(1024),
review2 varchar(1024),
review3 varchar(1024),
col1 varchar(1024),
col2 varchar(1024),
col3 varchar(1024),
col4 varchar(1024),
col5 varchar(1024),
 PRIMARY KEY (sno)
)");    
if (!$create) {	print("Could not create table :" . mysql_error());	}

$create = mysql_query(" CREATE TABLE Social(
sno int(8) not null AUTO_INCREMENT,
appname varchar(255) not null,
rating varchar(3) not null,
recommenders int(8),
rate5 varchar(1024),
rate4 varchar(1024),
rate3 varchar(1024),
rate2 varchar(1024),
rate1 varchar(1024),
review1 varchar(1024),
review2 varchar(1024),
review3 varchar(1024),
col1 varchar(1024),
col2 varchar(1024),
col3 varchar(1024),
col4 varchar(1024),
col5 varchar(1024),
 PRIMARY KEY (sno)
)");    
if (!$create) {	print("Could not create table :" . mysql_error());	}

$create = mysql_query(" CREATE TABLE Sports(
sno int(8) not null AUTO_INCREMENT,
appname varchar(255) not null,
rating varchar(3) not null,
recommenders int(8),
rate5 varchar(1024),
rate4 varchar(1024),
rate3 varchar(1024),
rate2 varchar(1024),
rate1 varchar(1024),
review1 varchar(1024),
review2 varchar(1024),
review3 varchar(1024),
col1 varchar(1024),
col2 varchar(1024),
col3 varchar(1024),
col4 varchar(1024),
col5 varchar(1024),
 PRIMARY KEY (sno)
)");    
if (!$create) {	print("Could not create table :" . mysql_error());	}

$create = mysql_query(" CREATE TABLE Tools(
sno int(8) not null AUTO_INCREMENT,
appname varchar(255) not null,
rating varchar(3) not null,
recommenders int(8),
rate5 varchar(1024),
rate4 varchar(1024),
rate3 varchar(1024),
rate2 varchar(1024),
rate1 varchar(1024),
review1 varchar(1024),
review2 varchar(1024),
review3 varchar(1024),
col1 varchar(1024),
col2 varchar(1024),
col3 varchar(1024),
col4 varchar(1024),
col5 varchar(1024),
 PRIMARY KEY (sno)
)");    
if (!$create) {	print("Could not create table :" . mysql_error());	}

$create = mysql_query(" CREATE TABLE Transportation(
sno int(8) not null AUTO_INCREMENT,
appname varchar(255) not null,
rating varchar(3) not null,
recommenders int(8),
rate5 varchar(1024),
rate4 varchar(1024),
rate3 varchar(1024),
rate2 varchar(1024),
rate1 varchar(1024),
review1 varchar(1024),
review2 varchar(1024),
review3 varchar(1024),
col1 varchar(1024),
col2 varchar(1024),
col3 varchar(1024),
col4 varchar(1024),
col5 varchar(1024),
 PRIMARY KEY (sno)
)");    
if (!$create) {	print("Could not create table :" . mysql_error());	}

$create = mysql_query(" CREATE TABLE Travel(
sno int(8) not null AUTO_INCREMENT,
appname varchar(255) not null,
rating varchar(3) not null,
recommenders int(8),
rate5 varchar(1024),
rate4 varchar(1024),
rate3 varchar(1024),
rate2 varchar(1024),
rate1 varchar(1024),
review1 varchar(1024),
review2 varchar(1024),
review3 varchar(1024),
col1 varchar(1024),
col2 varchar(1024),
col3 varchar(1024),
col4 varchar(1024),
col5 varchar(1024),
 PRIMARY KEY (sno)
)");    
if (!$create) {	print("Could not create table :" . mysql_error());	}

$create = mysql_query(" CREATE TABLE Weather(
sno int(8) not null AUTO_INCREMENT,
appname varchar(255) not null,
rating varchar(3) not null,
recommenders int(8),
rate5 varchar(1024),
rate4 varchar(1024),
rate3 varchar(1024),
rate2 varchar(1024),
rate1 varchar(1024),
review1 varchar(1024),
review2 varchar(1024),
review3 varchar(1024),
col1 varchar(1024),
col2 varchar(1024),
col3 varchar(1024),
col4 varchar(1024),
col5 varchar(1024),
 PRIMARY KEY (sno)
)");    
if (!$create) {	print("Could not create table :" . mysql_error());	}

$create = mysql_query(" CREATE TABLE Widgets(
sno int(8) not null AUTO_INCREMENT,
appname varchar(255) not null,
rating varchar(3) not null,
recommenders int(8),
rate5 varchar(1024),
rate4 varchar(1024),
rate3 varchar(1024),
rate2 varchar(1024),
rate1 varchar(1024),
review1 varchar(1024),
review2 varchar(1024),
review3 varchar(1024),
col1 varchar(1024),
col2 varchar(1024),
col3 varchar(1024),
col4 varchar(1024),
col5 varchar(1024),
 PRIMARY KEY (sno)
)");    
if (!$create) {	print("Could not create table :" . mysql_error());	}

$create = mysql_query(" CREATE TABLE Games(
sno int(8) not null AUTO_INCREMENT,
appname varchar(255) not null,
rating varchar(3) not null,
recommenders int(8),
rate5 varchar(1024),
rate4 varchar(1024),
rate3 varchar(1024),
rate2 varchar(1024),
rate1 varchar(1024),
review1 varchar(1024),
review2 varchar(1024),
review3 varchar(1024),
col1 varchar(1024),
col2 varchar(1024),
col3 varchar(1024),
col4 varchar(1024),
col5 varchar(1024),
 PRIMARY KEY (sno)
)");    
if (!$create) {	print("Could not create table :" . mysql_error());	}

$create = mysql_query(" CREATE TABLE Navigation(
sno int(8) not null AUTO_INCREMENT,
appname varchar(255) not null,
rating varchar(3) not null,
recommenders int(8),
rate5 varchar(1024),
rate4 varchar(1024),
rate3 varchar(1024),
rate2 varchar(1024),
rate1 varchar(1024),
review1 varchar(1024),
review2 varchar(1024),
review3 varchar(1024),
col1 varchar(1024),
col2 varchar(1024),
col3 varchar(1024),
col4 varchar(1024),
col5 varchar(1024),
 PRIMARY KEY (sno)
)");    
if (!$create) {	print("Could not create table :" . mysql_error());	}

$create = mysql_query(" CREATE TABLE Photo(
sno int(8) not null AUTO_INCREMENT,
appname varchar(255) not null,
rating varchar(3) not null,
recommenders int(8),
rate5 varchar(1024),
rate4 varchar(1024),
rate3 varchar(1024),
rate2 varchar(1024),
rate1 varchar(1024),
review1 varchar(1024),
review2 varchar(1024),
review3 varchar(1024),
col1 varchar(1024),
col2 varchar(1024),
col3 varchar(1024),
col4 varchar(1024),
col5 varchar(1024),
 PRIMARY KEY (sno)
)");    
if (!$create) {	print("Could not create table :" . mysql_error());	}

$create = mysql_query(" CREATE TABLE Utilities(
sno int(8) not null AUTO_INCREMENT,
appname varchar(255) not null,
rating varchar(3) not null,
recommenders int(8),
rate5 varchar(1024),
rate4 varchar(1024),
rate3 varchar(1024),
rate2 varchar(1024),
rate1 varchar(1024),
review1 varchar(1024),
review2 varchar(1024),
review3 varchar(1024),
col1 varchar(1024),
col2 varchar(1024),
col3 varchar(1024),
col4 varchar(1024),
col5 varchar(1024),
 PRIMARY KEY (sno)
)");    
if (!$create) {	print("Could not create table :" . mysql_error());	}


?>
