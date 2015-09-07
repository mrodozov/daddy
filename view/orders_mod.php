<?php
require(getenv('PROJECT_PATH').'/mysql/mysql.php');
if (isset($_GET["id"])) {$id=$_GET["id"];}
$field_err='Моля попълнете всички полета !';
if ($_POST)
{
  $id=$_POST["id"];
  if ($_POST["name"])
  {
    if ($_POST["description"])
    {
      if ($_POST["email"])
      {
	if ($_POST["phone"])
	{
	$query1="update orders set order_name='".$_POST["name"]."',description='".$_POST["description"]."',email='".$_POST["email"]."',phone='".$_POST["phone"]."' where order_id=".$id."";
	$result1=mysql_query($query1);
	header("Location:http:orders_addpics.php?id=".$_POST["id"]."");
	}
	else echo "$field_err <br>";
      }
      else echo "$field_err <br>";
    }
    else echo "$field_err <br>";
  }
  else echo "$field_err <br>";
}
$query="select * from orders where order_id=".$id."";
$result=mysql_query($query);
$row=mysql_fetch_array($result);
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN" "http://www.w3.org/TR/html4/frameset.dtd">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<html>
<title> Корекция на заявка </title>
<link  rel="stylesheet" type="text/css" href="http:/daddy/css/main.css" />
<head>
</head>
<body>
<div id="header">
  <div id="logocontainer">
    <img src="http:/daddy/pictures/pagepics/logo/logotest"/>
 </div>
<div class="mainnav">
<ul>
 <li><a href="http:/daddy/index.php">Начало </a></li>
 <li><a href="http:/daddy/view/forus.php">За нас </a></li>
 <li><a href="http:/daddy/view/portfolio.php">Портфолио </a></li>
 <li><a href="http:/daddy/view/services_view.php">Услуги </a></li>
 <li><a href="http:/daddy/view/proecting.php">Проектиране </a></li>
 <li class="selected"><a href="http:/daddy/view/orders_add.php">Запитване за проект</a></li>
 <li><a href="http:/daddy/view/contacts_view.php">Контакти </a></li>
</ul>
</div>
</div>
<div class="advnav">
</div>
<div class="pager">
  <div id="pagerleft">      
    <div id="pagerleft_top">
    </div>
    <div id="pagerleft_bottom">
      <a href="http:/daddy/view/contacts_view.php">ЕВРОРЕМОНТ-ГГ ООД <br>гр. Пловдив <br>бул."Кукленскo шосе 20" <br>e-mail eurorem@abv.bg <br>телефон 0878695577</a>
    </div>
  </div>
  <div id="pager_F_P_C_main">
<h4>Корекция на запитването</h4>
<form name="proba" method="post" action="orders_mod.php" enctype="multipart/form-data">
Име<br>
<input type="text" name="name" value="<?php if ($_POST){echo $_POST["name"];}else {echo $row["order_name"];}?>" maxlenght="20"><?php if ($_POST){if (!$_POST["name"]){echo "Името липсва";}}?><br>
Описание<br>
<textarea name="description" rows="5" cols="23"><?php if ($_POST){echo $_POST["description"];}else {echo $row["description"];}?></textarea><?php if ($_POST){if (!$_POST["description"]){echo "Описанието липсва";}}?><br>
email<br>
<input type="text" name="email" value="<?php if ($_POST){echo $_POST["email"];}else {echo $row["email"];}?>" maxlenght="20"><?php if ($_POST){if (!$_POST["email"]){echo "email-а липсва";}}?><br>
Телефон<br>
<input type="text" name="phone" value="<?php if ($_POST){echo $_POST["phone"];}else {echo $row["phone"];}?>" maxlenght="20"><?php if ($_POST){if (!$_POST["phone"]){echo "Телефона липсва";}}?><br>
<input type="hidden" name="id" value="<?php echo $id;?>"><br>
<input type="submit" name="submit" value="Запази/Към чертежите"><br>
</form>
  </div>
  <div id="pager_F_P_C_adv">
  </div>
</div>
</body>
</html>