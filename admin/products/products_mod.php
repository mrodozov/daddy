<?php
require(getenv('PROJECT_PATH').'/admin/login/session_check.php');
require(getenv('PROJECT_PATH').'/mysql/mysql.php');
if (isset($_GET["id"])) {$id=$_GET["id"];}
if ($_POST) 
{
  $id=$_POST["id"];
  $query="update products set product_name='".$_POST["name"]."',product_description='".$_POST["description"]."',category_id='".$_POST["category"]."' where product_id=".$id."";
  $result=mysql_query($query);
}
$query1="select products.product_name,product_description,category.category_id,category_name from products,category where products.category_id=category.category_id and product_id=".$id."";
$result1=mysql_query($query1);
$row1=mysql_fetch_array($result1);
$query2="select * from category";
$result2=mysql_query($query2);
if(isset($_POST["submit"]))
{ 
  header("Location:http:products.php");
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN" "http://www.w3.org/TR/html4/frameset.dtd">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<html>
<head>
<title> Корекция на продукт </title>
<link  rel="stylesheet" type="text/css" href="http:/daddy/css/main.css"/>
</head>
<body>
<a href="http:/daddy/admin/products/products.php">Лист с продукти</a><br>
<form name="proba" method="post" action="products_mod.php" enctype="multipart/form-data">
Име<br>
<input type="text" name="name" value="<?php echo $row1["product_name"];?>" maxlenght="20"><br>
Описание<br>
<textarea name="description" rows="5" cols="23"><?php echo $row1["product_description"]?></textarea><br>
Категория<br>
<select name="category">
<?php
while ($row2=mysql_fetch_array($result2))
  {
    if($row2["category_id"]!=$row1["category_id"])
    {
      echo "<option value=".$row2["category_id"].">".$row2["category_name"]."</option>";
    }
    else
    {
      echo "<option selected=".$row2["category_name"]." value=".$row2["category_id"].">".$row2["category_name"]."</option>";
    }
  }
?>
</select><br>
<input type="hidden" name="id" value="<?php echo $id;?>">
<input type="submit" name="submit" value="Запази"><br>
</form>
</body>
</html>