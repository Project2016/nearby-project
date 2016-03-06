<?php include('header.php'); ?>

<div id="container">
<div id="content">
<h1>Thank you for visiting us  </h1>
<?php
session_start();
include_once 'dbconnect.php';

if(!isset($_SESSION['user']))
{
 header("Location: test.php");
}
$res=mysql_query("SELECT * FROM users WHERE user_id=".$_SESSION['user']);
$userRow=mysql_fetch_array($res);
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Welcome - <?php echo $userRow['email']; ?></title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<div id="header">

 <div id="left">
    <label><h1>You can Sign Out from the link below </h1></label>
    </div>
    <div id="right">
     <div id="content">
      <h2>   Hi </h2> <?php echo $userRow['username']; ?>&nbsp; <font face="Times New Roman" color="Blue">We wish you enjoy our Nearby shops Website</font>
		 <p><a href="logout.php?logout">Sign Out</a></p>
        </div>
    </div>
</div>
</body>
</html>
</div><!--content-->
</div><!--container-->

<?php include('footer.php'); ?>