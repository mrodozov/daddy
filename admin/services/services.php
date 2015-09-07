<?php
require(getenv('PROJECT_PATH').'/admin/login/session_check.php');
require(getenv('PROJECT_PATH').'/mysql/mysql.php');
$query="select * from services"; //v sluchay che iskam da se pokazva main samo se maha where klauzata ot query-to
$result=mysql_query($query);
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN" "http://www.w3.org/TR/html4/frameset.dtd">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<html>
<head>
<title> Услуги </title>
<link  rel="stylesheet" type="text/css" href="http:/daddy/css/main.css"/>
</head>
<body>
<a href="http:/daddy/admin.php">Администраторско меню</a><br>
<a href="http:/daddy/admin/services/services_add.php">Добавете нова услуга</a><br>
<?php
while ($row=mysql_fetch_array($result))
  {
    echo "<h4>".$row["service_name"]."</h4>
    <ul>
    <li> <a href=\"http:/daddy/admin/services/services_mod.php?id=".$row["service_id"]."\">Корекция</a></li>
    <li> <a href=\"http:/daddy/admin/services/services_del.php?id=".$row["service_id"]."\">Изтрий</a></li>
    </ul>
    <br>";
  }
?>
</body>
</html>