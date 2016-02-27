<?php
if(!mysql_connect("localhost","root",""))
{
     die('oops connection problem ! --> '.mysql_error());
}
if(!mysql_select_db("dbtest"))
{
     die('oops database selection problem ! --> '.mysql_error());
}

// alternate PHP DB CODE. RECOMMEND THIS 
/*<?php
// create database 
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "***";//check your own databse 
$dbname = "ShopNearMe"; // the name should be same 
$connection =mysqli_connect($dbhost, $dbuser,$dbpass, $dbname);

//$con=mysqli_connect("localhost","root","Yes");
//mysqli_select_db("ShopNearMe",$con);


// test my database connection 

if(mysqli_connect_errno())
{
die("datbase connection fail :" .
mysqli_connect_error() .
" ( " . mysqli_connect_errno() . " ) "
);


}
?>


<html lang="en">
	<head>
		<title>databaser</title>
	</head>
	<body>
hgyjhbjhbhj
	</body>
</html>

<?php 
//close databse 
mysqli_close($con);

?> 
*/

// this is MYSQL code for database 
/*

create table student(
	name varchar(50) NOT NULL,
	mail varchar(50),
	phone varchar(20),
	password varchar(20) NOT NULL,
	address varchar(100) NOT NULL,
	location_lat float,
	location_lng float,
	PRIMARY KEY (mail)
);

create table shop(
	shopid int AUTO_INCREMENT,
	shopname varchar(50) NOT NULL,
	phone varchar(20),
	address varchar(100) NOT NULL,
	location_lat float,
	location_lng float,
	PRIMARY KEY (shopid)
);

create table category(
	cateid int AUTO_INCREMENT,
	catename varchar(30),
	PRIMARY KEY (cateid)
);

create table shop_category(
	shop int references shop(shopid),
	category int references category(cateid),
	PRIMARY KEY (shop,category)	
);

//TWo more fields are added 


*/
/*

CREATE TABLE `category` (
  `cateid` int(11) NOT NULL,
  `catename` varchar(30) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;


CREATE TABLE `shop` (
  `shopid` int(11) NOT NULL,
  `shopname` varchar(50) NOT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `address` varchar(100) NOT NULL,
  `location_lat` float DEFAULT NULL,
  `location_lng` float DEFAULT NULL,
  `catename` varchar(30) DEFAULT NULL,
  `zipcode` int(5) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;


*/


?>

