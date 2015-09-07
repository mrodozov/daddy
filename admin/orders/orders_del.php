<?php
require(getenv('PROJECT_PATH').'/admin/login/session_check.php');
require(getenv('PROJECT_PATH').'/mysql/mysql.php');
$id=$_GET["id"];
$query="delete from orders where order_id=".$id."";
$query1="delete from pictures where product_id=".$id." and product_type=2";
$query2="select picture_name from pictures where product_id=".$id." and product_type=2";
$result2=mysql_query($query2);
while ($row=mysql_fetch_array($result2)){
  $picture_= getenv('PROJECT_PATH').'/pictures/'.$row["picture_name"];
  system("rm $picture_");
}
$result=mysql_query($query);
$result1=mysql_query($query1);
header("Location:orders.php");
?>