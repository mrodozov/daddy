<?php
require(getenv('PROJECT_PATH').'/admin/login/session_check.php');
require(getenv('PROJECT_PATH').'/mysql/mysql.php');
$field_err='Моля попълнете всички полета !';
if ($_POST)
{
  if ($_POST["name"])
  {
    if ($_POST["phone"])
    {
      if ($_POST["email"])
      {
	$query1="insert into contacts values('','".$_POST["name"]."','".$_POST["phone"]."','".$_POST["email"]."')";
	$result1=mysql_query($query1);
	header("Location:http:contact.php");
      }
    }
    else echo "$field_err <br>";
  }
  else echo "$field_err <br>";
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN" "http://www.w3.org/TR/html4/frameset.dtd">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<html>
<head>
<title> Добавете нов контакт </title>
<link  rel="stylesheet" type="text/css" href="http:/daddy/css/main.css"/>
</head>
<body>
<a href="http:/daddy/admin/contacts/contact.php">Лист с контакти</a><br>
<form name="proba" method="post" action="contact_add.php" enctype="multipart/form-data">
Име<br>
<input type="text" name="name" value="<?php if($_POST){if (isset($_POST["name"])){echo $_POST["name"];}}?>" maxlenght="20"><?php if ($_POST){if (!$_POST["name"]){echo "Името липсва";}}?><br>
Телефон<br>
<input type="text" name="phone" value="<?php if($_POST){if (isset($_POST["phone"])){echo $_POST["phone"];}}?>" maxlenght="20"><?php if ($_POST){if (!$_POST["phone"]){echo "Телефонът липсва";}}?><br>
email<br>
<input type="text" name="email" value="<?php if($_POST){if (isset($_POST["email"])){echo $_POST["email"];}}?>" maxlenght="20"><?php if ($_POST){if (!$_POST["email"]){echo "email-а липсва";}}?><br>
<input type="submit" name="submit" value="Добави"><br>
</form>                                                
</body>
</html>