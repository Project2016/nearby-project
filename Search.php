<?php include('header.php'); ?>

<div id="container">
<div id="content">
<div id="contentleft">
<h1>Search</h1>
<?php
$output=NULL;
if(isset($_POST['submit']))
{
   $mysql= NEW mysqli("localhost", "root","root", "shopnearme", 8889);
    $search1= $mysql->real_escape_string($_POST['name'] );
    $search2=$mysql->real_escape_string($_POST['name2'] );
   $result= $mysql->query("SELECT * FROM shop WHERE catename LIKE '%$search1%' AND zipcode LIKE '%$search2%'");
   
   if($result->num_rows > 0){
       
       while($rows=$result->fetch_assoc())
{
	$cata1=$rows['catename'];
	$name=$rows['shopname'];
        $address=$rows['address'];
	$zipcode=$rows['zipcode'];
        $phone=$rows['phone'];
       $output .= "Catagory: $cata1 <br/> Shop Name: $name<br/> Address: $address <br/> Zip Code: $zipcode <br/> Phone Number: $phone<br/> <br/><hr>"; 
   } 
 
}
 else {
   $out="No result found!"; 
 }
}  
?>

<form method="POST" >
Search Engine:<input type="text" name="name" placeholder="Search for restaurants,coffee shop,etc.">
<input type="text" name="name2" placeholder="Near Zip code ">
 <input type="submit" name="submit" value="Search Now">
</form>
<?php echo $output; ?> 
</div><!--contentleft-->
<?php include('sidebar.php'); ?>
</div><!--content-->
</div><!--container-->

<?php include('footer.php'); ?>



