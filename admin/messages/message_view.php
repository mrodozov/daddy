<?php
require(getenv('PROJECT_PATH').'/admin/login/session_check.php');
require(getenv('PROJECT_PATH').'/mysql/mysql.php');
if (isset($_GET["id"]))
{
  $id=$_GET["id"];
}
$query1="select * from messages where message_id=".$id."";
$result1=mysql_query($query1);
$row1=mysql_fetch_array($result1);
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN" "http://www.w3.org/TR/html4/frameset.dtd">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<html>
<head>
<title> Съобщение </title>
<link  rel="stylesheet" type="text/css" href="http:/daddy/css/main.css"/>
</head>
<body>
<a href="http:/daddy/admin/messages/messages.php">Лист със съобщения</a><br>
<form name="proba" method="post" action="orders_view.php" enctype="multipart/form-data">
<?php
echo "Име <br><h4> ".$row1["m_name"]." </h4><br>";
echo "e-mail <br>".$row1["email"]."<br>";
echo "Телефон <br>".$row1["back_contact"]."<br>";
echo "Дата <br>".$row1["date"]."<br>";
echo "Съобщение <br>".$row1["message"]."<br>";

?>
</form>
</body>
</html>