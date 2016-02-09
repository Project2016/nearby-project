<?php include('header.php'); ?>
<div id="container">
<div id="content">
<div id="contentleft">
<html>
 <head>
 <title>Search Engine</title>
 </head><body><form action="search.php" method="get">

Search Engine:<input type="text" name="value" placeholder="Search Anything here">
 <input type="submit" name="search" value="Search Now">

</form>
 <hr>
<?php
 @mysql_connect("localhost","root","");
 mysql_select_db("mysql");

if(isset($_GET['search'])){

$search_value = $_GET['value'];

$query = "select * from sites where site_keywords like '%$search_value%'";

$run = mysql_query($query);



while($row = mysql_fetch_array($run)){

 $title = $row['site_title'];
 $link = $row['site_link'];
     
 $desc = $row['site_desc'];

echo "<h1>$title</h1><a href='$link'>$link</a><p>$desc</p>";

}

}

?>
 </body>
 </html>
</div><!--contentleft-->

<?php include('sidebar.php'); ?>

</div><!--content-->
</div><!--container-->

<?php include('footer.php'); ?>


