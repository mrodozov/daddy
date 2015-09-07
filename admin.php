<?php
require(getenv('PROJECT_PATH').'/admin/login/session_check.php');
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN" "http://www.w3.org/TR/html4/frameset.dtd">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<html>
<head>
<title> Администраторско меню </title>
<link  rel="stylesheet" type="text/css" href="http://127.0.0.1/daddy/css/main.css" />
</head>
<body>
<ul>
<a href="http:/daddy/admin/products/products.php">Продукти </a><br>
<a href="http:/daddy/admin/categories/categories.php">Категории </a><br>
<a href="http:/daddy/admin/orders/orders.php">Заявки </a><br>
<a href="http:/daddy/admin/services/services.php">Услуги </a><br>
<a href="http:/daddy/admin/contacts/contact.php">Контакти </a><br>
<a href="http:/daddy/admin/messages/messages.php">Съобщения </a><br>
<a href="http:/daddy/admin/login/logout.php">Logout(test) </a><br>
</body>
</html>
