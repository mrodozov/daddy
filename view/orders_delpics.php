<?php
require(getenv('PROJECT_PATH').'/mysql/mysql.php');
$id=$_GET["id"];
$pid=$_GET["pid"];
$start=$_GET["start"];
$query="delete from pictures where id=".$pid."";
$query2="select picture_name from pictures where id=".$pid."";
$result2=mysql_query($query2);
$result=mysql_query($query);
$row=mysql_fetch_array($result2);
$picture_=getenv('PROJECT_PATH').'/pictures/'.$row["picture_name"];
system("rm $picture_");
header("Location:orders_addpics.php?id=".$id."&start=".$start."")
?>