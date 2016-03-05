<?php include('header.php'); ?>

<div id="container">
<div id="content">
<div id="contentleft">
<h1>Search</h1>
<?php
$output=NULL;
if(isset($_POST['submit']))
{
    if(isset($_GET['go'])){ 
   if(preg_match("/[A-Z  | a-z]+/", $_POST['name']) && preg_match("/[0-9]/", $_POST['name2']) ){
    $mysql= NEW mysqli("localhost", "root","norah", "shopnearme", 8889);
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
   $output ="No Information about catagory found!"; 
 }
} 
    else {
   echo "Please enter the following information:<br/> 1-Catagory name: supermarket , mall , restaurant , coffee shop <br/> 2-Zip Code"; 
    }
}
}
?>
<style> 
input[type=text] {
    width: 100%;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    font-size: 16px;
    background-color: white;
    background-image: url('searchicon.png');
    background-position: 10px 10px; 
    background-repeat: no-repeat;
    padding: 12px 20px 12px 40px;
}
input[type=button], input[type=submit], input[type=reset] {
    background-color: #808080;
    border: none;
    color: white;
    padding: 16px 32px;
    text-decoration: none;
    margin: 4px 2px;
    cursor: pointer;
</style>
<form method="POST" action="Search.php?go" >
Search Engine:<input type="text" name="name" placeholder="Search for restaurants,coffee shop,etc.">
<input type="text" name="name2" placeholder="Near Zip code ">
 <input type="submit" name="submit" value="Search Now">
</form>
<?php echo $output; ?> 
</div><!--contentleft-->
<?php include('Ssidebar.php'); ?>
</div><!--content-->
</div><!--container-->

<?php include('footer.php'); ?>



