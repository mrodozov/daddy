<?php
require(getenv('PROJECT_PATH').'/admin/login/session_check.php');
require(getenv('PROJECT_PATH').'/mysql/mysql.php');
if (isset($_GET["id"])) {$id=$_GET["id"];}
if ($_POST) 
{
  $id=$_POST["id"];
  $query="update category set category_name='".$_POST["name"]."',category_description='".$_POST["description"]."' where category_id=".$id."";
  $result=mysql_query($query);
}
$query1="select * from category where category_id=".$id."";
$result1=mysql_query($query1);
$row1=mysql_fetch_array($result1);
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN" "http://www.w3.org/TR/html4/frameset.dtd">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<html>
<head>
<title> Корекция на категорията </title>
<link  rel="stylesheet" type="text/css" href="http:/daddy/css/main.css"/>
</head>
<body>
<a href="http:/daddy/admin/categories/categories.php">Категории</a><br>
<form name="proba" method="post" action="categories_mod.php" enctype="multipart/form-data">
Име<br>
<input type="text" name="name" value="<?php echo $row1["category_name"];?>" maxlenght="20"><br>
Описание<br>
<textarea name="description" rows="5" cols="23"><?php echo $row1["category_description"]?></textarea><br>
<input type="hidden" name="id" value="<?php echo $id;?>">
<input type="submit" name="submit" value="Запази"><br>
</form>
</body>
</html>