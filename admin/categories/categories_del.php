<?php
require(getenv('PROJECT_PATH').'/admin/login/session_check.php');
require(getenv('PROJECT_PATH').'/mysql/mysql.php');
$id=$_GET["id"];
if ($id!=1)
  {
    $query="delete from category where category_id=".$id."";
    $query1="update products set category_id=1 where category_id=".$id."";
    $result=mysql_query($query);
    $result1=mysql_query($query1);
    header("Location:categories.php");
  }
else{header("Location:categories.php");}
?>