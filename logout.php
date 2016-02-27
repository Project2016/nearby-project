<?php include('header.php'); ?>

<div id="container">
<div id="content">
<h1>Sign Out</h1>
<?php
session_start();

if(!isset($_SESSION['user']))
{
 header("Location: index.php");
}
else if(isset($_SESSION['user'])!="")
{
 header("Location: Search.php");
}

if(isset($_GET['logout']))
{
 session_destroy();
 unset($_SESSION['user']);
 header("Location: login.php");
}
?>
</div><!--content-->
</div><!--container-->

<?php include('footer.php'); ?>