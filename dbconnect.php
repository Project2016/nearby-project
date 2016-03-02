<?php
if(!mysql_connect("localhost","root","norah"))
{
     die('oops connection problem ! --> '.mysql_error());
}
if(!mysql_select_db("shopnearme"))
{
     die('oops database selection problem ! --> '.mysql_error());
}
?>