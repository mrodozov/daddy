<?php
require(getenv('PROJECT_PATH').'/admin/login/session_check.php');
require(getenv('PROJECT_PATH').'/mysql/mysql.php');
$query="select * from messages";
$result=mysql_query($query);
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN" "http://www.w3.org/TR/html4/frameset.dtd">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<html>
<head>
<title> Съобщения </title>
<link  rel="stylesheet" type="text/css" href="/daddy/css/main.css"/>
</head>
<body>
<a href="http:/daddy/admin.php">Администраторско меню</a><br>
<form name="proba" method="post" action="messages.php" enctype="multipart/form-data">
<?php
while ($row=mysql_fetch_array($result))
  {
    echo "<h4>".$row["m_name"]."</h4>
    ".$row["back_contact"]."<br>
    <ul class=\"actions\">
    <li> <a href=\"http:/daddy/admin/messages/message_view.php?id=".$row["message_id"]."\">Прегледай</a></li>
    <li> <a href=\"http:/daddy/admin/messages/message_del.php?id=".$row["message_id"]."\">Изтрий</a></li>
    </ul>
    <br>";
  }
?>
</form>
</body>
</html>