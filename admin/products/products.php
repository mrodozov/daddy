<?php
require(getenv('PROJECT_PATH').'/admin/login/session_check.php');
require(getenv('PROJECT_PATH').'/mysql/mysql.php');
$query="select * from products";
$result=mysql_query($query);
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN" "http://www.w3.org/TR/html4/frameset.dtd">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<html>
<head>
<title> Продукти </title>
<link  rel="stylesheet" type="text/css" href="http:/daddy/css/main.css"/>
</head>
<body>
<a href="http:/daddy/admin.php">Администраторско меню</a><br>
<a href="http:/daddy/admin/products/products_add.php">Добавете нов продукт</a><br>
<form name="proba" method="post" action="products.php" enctype="multipart/form-data">
<?php
while ($row=mysql_fetch_array($result))
  {
    $query1="select picture_name,min(id) from pictures where product_id=".$row["product_id"]." and product_type=1";
    $result1=mysql_query($query1);
    $row1=mysql_fetch_array($result1);
    echo "<h4>".$row["product_name"]."</h4>
    <ul class=\"actions\">
    <li> <a href=\"http:/daddy/admin/products/products_addpics.php?id=".$row["product_id"]."\">Добавете снимки</a></li>
    <li> <a href=\"http:/daddy/admin/products/products_mod.php?id=".$row["product_id"]."\">Корекция</a></li>
    <li> <a href=\"http:/daddy/admin/products/products_del.php?id=".$row["product_id"]."\">Изтрий</a></li>
    </ul>
    <br>";
    echo "<img src=\"http:/daddy/pictures/".$row1["picture_name"]."\" style=\"width:180px;height:150px;margin:4px;padding:2px;border:1px solid #ccc;\"/><br>";
  }
?>
</form>
</body>
</html>