<?php
require(getenv('PROJECT_PATH').'/admin/login/session_check.php');
require(getenv('PROJECT_PATH').'/mysql/mysql.php');
$query="select * from orders";
$result=mysql_query($query);
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN" "http://www.w3.org/TR/html4/frameset.dtd">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<html>
<head>
<title> Заявки </title>
<link  rel="stylesheet" type="text/css" href="http:/daddy/css/main.css"/>
</head>
<body>
<a href="http:/daddy/admin.php">Администраторско меню</a><br>
<form name="proba" method="post" action="orders.php" enctype="multipart/form-data">
<?php
while ($row=mysql_fetch_array($result))
  {
    $query1="select picture_name,min(id) from pictures where product_id=".$row["order_id"]." and product_type=2";
    $result1=mysql_query($query1);
    $row1=mysql_fetch_array($result1);
    echo "<h4>".$row["order_name"]."</h4>
    <ul class=\"actions\">
    <li> <a href=\"http:/daddy/admin/orders/orders_view.php?id=".$row["order_id"]."\">Прегледай</a></li>
    <li> <a href=\"http:/daddy/admin/orders/orders_del.php?id=".$row["order_id"]."\">Изтрий</a></li>
    </ul>
    <br>";
    echo "<img src=\"http:/daddy/pictures/".$row1["picture_name"]."\" style=\"width:180px;height:150px;margin:4px;padding:2px;border:1px solid #ccc;\"/><br>";
  }
?>
</form>
</body>
</html>