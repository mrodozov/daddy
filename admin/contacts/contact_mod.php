<?php
require(getenv('PROJECT_PATH').'/admin/login/session_check.php');
require(getenv('PROJECT_PATH').'/mysql/mysql.php');
if (isset($_GET["id"])) {$id=$_GET["id"];}
if ($_POST) 
{
  $id=$_POST["id"];
  $query="update contacts set contact_name='".$_POST["name"]."',phone='".$_POST["phone"]."',email='".$_POST["email"]."' where contact_id=".$id."";
  $result=mysql_query($query);
}
$query1="select * from contacts where contact_id=".$id."";
$result1=mysql_query($query1);
$row1=mysql_fetch_array($result1);
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN" "http://www.w3.org/TR/html4/frameset.dtd">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<html>
<head>
<title> Корекция на контакта </title>
<link  rel="stylesheet" type="text/css" href="http:/daddy/css/main.css"/>
</head>
<body>
<a href="http:/daddy/admin/contacts/contact.php">Лист с контакти</a><br>
<form name="proba" method="post" action="contact_mod.php" enctype="multipart/form-data">
Име<br>
<input type="text" name="name" value="<?php echo $row1["contact_name"];?>" maxlenght="20"><br>
телефон<br>
<input type="text" name="phone" value="<?php echo $row1["phone"];?>" maxlenght="20"><br>
email<br>
<input type="text" name="email" value="<?php echo $row1["email"];?>" maxlenght="20"><br>
<input type="hidden" name="id" value="<?php echo $id;?>">
<input type="submit" name="submit" value="Запази"><br>
</form>
</body>
</html>