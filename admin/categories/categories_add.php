<?php
require(getenv('PROJECT_PATH').'/admin/login/session_check.php');
require(getenv('PROJECT_PATH').'/mysql/mysql.php');
$field_err='Моля попълнете всички полета !';
if ($_POST)
{
  if ($_POST["name"])
  {
    if ($_POST["description"])
    {
      $query1="insert into category values('','".$_POST["name"]."','".$_POST["description"]."')";
      $result1=mysql_query($query1);
      header("Location:http:categories.php");
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
<title> Добавяне на категория </title>
<link  rel="stylesheet" type="text/css" href="http:/daddy/css/main.css"/>
</head>
<body>
<a href="http:/daddy/admin/categories/categories.php">Категории</a><br>
<form name="proba" method="post" action="categories_add.php" enctype="multipart/form-data">
Име<br>
<input type="text" name="name" value="<?php if($_POST){if (isset($_POST["name"])){echo $_POST["name"];}}?>" maxlenght="20"><?php if ($_POST){if (!$_POST["name"]){echo "Името липсва";}}?><br>
Описание<br>
<textarea name="description" rows="5" cols="23"><?php if($_POST){if (isset($_POST["description"])){echo $_POST["description"];}}?></textarea><?php if ($_POST){if (!$_POST["description"]){echo "Описанието липсва";}}?><br>
<input type="submit" name="submit" value="Добави"><br>
</form>
</body>
</html>