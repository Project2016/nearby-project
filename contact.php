<?php include('header.php'); ?>

<div id="container">
<div id="content">
<div id="contentleft">
<h1>Contact Us</h1>
<p></p>
<?php 
$action=$_REQUEST['action']; 
if ($action=="")    /* display the contact form */ 
    { 
    ?> 
		<!DOCTYPE html>
<html>
<head >
<meta http-equiv="X-UA-Compatible" content="IE=8" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="robots" content="index,follow" />

<title>Advanced Software engineering</title>
<link rel="stylesheet" type="text/css" href="contact_s.css" />
</head>
<body>
    <form  action="" method="POST" enctype="multipart/form-data"> 
    <input type="hidden" name="action" value="submit"> 
    Your name:<br> 
    <input name="name" type="text" value="" size="30"/><br> 
    Your email:<br> 
    <input name="email" type="text" value="" size="30"/><br> 
    Your message:<br> 
    <textarea name="message" rows="7" cols="30"></textarea><br> 
    <input type="submit" value="Send email"/> 
    </form> 
	</body>
	</html>
    <?php 
    }  
else                /* send the submitted data */ 
    { 
    $name=$_REQUEST['name']; 
    $email=$_REQUEST['email']; 
    $message=$_REQUEST['message']; 
    if (($name=="")||($email=="")||($message=="")) 
        { 
        echo "All fields are required, please fill <a href=\"\">the form</a> again."; 
        } 
    else{ 
        
       
    }
    
        $to="norah.b.alotaibi@gmail.com";
        $subject="Message sent using your contact form"; 
        
        $name=$_POST['name'];
        $email=$_POST['email'];
        $message=$_POST['message'];
        
        $message="Hi my name is  $name : $message emmail $email";
        $from="From: $name<$email>\r\nReturn-path: $email"; 
    
        mail($to, $subject, $message, $from); 
        echo "Email sent!"; 
         
    }   
?> 
</div><!--contentleft-->


<?php include('sidebar.php'); ?>
</div><!--content-->
</div><!--container-->

<?php include('footer.php'); ?>
