<?php
require(getenv('PROJECT_PATH').'/admin/login/session_check.php');
require(getenv('PROJECT_PATH').'/mysql/mysql.php');
if (isset($_GET["id"]))
{
  $id=$_GET["id"];
}
$query1="select * from pictures where product_id=".$id." and product_type=2";
$result1=mysql_query($query1);
$query2="select * from orders where order_id=".$id."";
$result2=mysql_query($query2);
$row2=mysql_fetch_array($result2);
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN" "http://www.w3.org/TR/html4/frameset.dtd">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<html>
<head>
<title> Заявка </title>
<link  rel="stylesheet" type="text/css" href="http:/daddy/css/main.css"/>
</head>
<body>
<a href="http:/daddy/admin/orders/orders.php">Лист със заявки</a><br>
<form name="proba" method="post" action="orders_view.php" enctype="multipart/form-data">
<?php
echo "Име <br><h4> ".$row2["order_name"]." </h4><br>";
echo "Описание <br>".$row2["description"]."<br>";
echo "e-mail <br>".$row2["email"]."<br>";
echo "Телефон <br>".$row2["phone"]."<br>";
echo "Дата <br>".$row2["date"]."<br>";
echo "Чертежи(снимки) <br>";
 while ($row1=mysql_fetch_array($result1))
  {
      echo "<img src=\"http:/daddy/pictures/".$row1["picture_name"]."\" style=\"width:180px;height:150px;margin:4px;padding:2px;border:1px solid #ccc;\"/><br><br>";
  }
?>
</form>
</body>
</html>