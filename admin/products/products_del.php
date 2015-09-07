<?php
require(getenv('PROJECT_PATH').'/admin/login/session_check.php');
require(getenv('PROJECT_PATH').'/mysql/mysql.php');
$path=getenv('PROJECT_PATH');
$id=$_GET["id"];
$query="delete from products where product_id=".$id."";
$query1="delete from pictures where product_id=".$id." and product_type=1";
$query2="select picture_name from pictures where product_id=".$id." and product_type=1";
$result2=mysql_query($query2);
$result=mysql_query($query);
$result1=mysql_query($query1);
while ($row=mysql_fetch_array($result2)){
  $picture_=$path.'/pictures/'.$row["picture_name"];
  system("rm $picture_");
}
header("Location:products.php");
?>