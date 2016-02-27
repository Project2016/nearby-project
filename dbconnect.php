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


?>

