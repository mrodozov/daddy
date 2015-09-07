<?php
require(getenv('PROJECT_PATH').'/admin/login/session_check.php');
require(getenv('PROJECT_PATH').'/mysql/mysql.php');
$id=$_GET["id"];
    $query="delete from services where service_id=".$id."";
    $result=mysql_query($query);
    header("Location:services.php");
?>