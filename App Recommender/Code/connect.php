<?php 
session_start();

//sql and database information
$server	    = 'RepYaCity.db.10737671.hostedresource.com';
$username	= 'RepYaCity';
$password	= 'Projectweb2@';
$database	= 'RepYaCity';
$userstable='users';

$filename='data.txt';

//admin config
$admin='koushik';  //admin username
$pass='r';		//admin password


$website='repyacity.com';    	
$company_name='App Recommender ';
$from='sumanth2109@gmail.com';
$host='repyacity.com/test1';	//webaddress folder in which the forgot pw link is present



//App display mechanism
$sort = "rating";   //Sort by  rating,appname,col1 (rating,name,devolopr)
$order= "DESC";    //sort by oreder  ASC,DESC (Asscending,descending)
$limit = 2;		//No.of apps to be shown in a page. 


//mailing
$noa=2;	//number of apps to be sent in mail
$debug=0;    //Show the sending mail info,some errors used for debugging.

$debug=0;
error_reporting(E_NONE);
//Do not edit from below
//if ($debug!=1) 
//{	error_reporting(E_ERROR);	}
//else{  error_reporting(E_ALL); }

if(!mysql_connect($server, $username, $password))
{
 	exit('Error: could not establish database connection');
}
if(!mysql_select_db($database))
{
 	exit('Error: could not select the database');
}
?>