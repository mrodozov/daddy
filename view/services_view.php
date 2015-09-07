<?php
require(getenv('PROJECT_PATH').'/mysql/mysql.php');
$query="select * from services";
$result=mysql_query($query);
?> 
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN" "http://www.w3.org/TR/html4/frameset.dtd">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<html>
<head>
<title> Здрасти батка , как я караш </title>
<link  rel="stylesheet" type="text/css" href="http:/daddy/css/main.css" />
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
 <li class="selected"><a href="http:/daddy/view/services_view.php">Услуги </a></li>
 <li><a href="http:/daddy/view/proecting.php">Проектиране </a></li>
 <li><a href="http:/daddy/view/orders_add.php">Запитване за проект</a></li>
 <li><a href="http:/daddy/view/contacts_view.php">Контакти </a></li>
</ul>
</div>
</div>
<div class="advnav">
</div>
<div class="pager">
<form name="proba" method="post" action="services_view.php" enctype="multipart/form-data">
  <div id="pagerleft">
    <div id="pagerleft_top">
      <ul>
	<li><a href="http:/daddy/view/services_view.php">Обща информация</a></li>
	<li><a href="http:/daddy/view/contacts_view.php">Питайте за услуга</a></li>
      </ul>
    </div>
    <div id="pagerleft_bottom">
      <a href="http:/daddy/view/contacts_view.php">ЕВРОРЕМОНТ-ГГ ООД <br>гр. Пловдив <br>бул."Кукленскo шосе 20" <br>e-mail eurorem@abv.bg <br>телефон 0878695577</a>
    </div>
  </div>
  <div id="pager_F_P_C_adv" style="float:left;padding:0px 0px 0px 0px;width:180;background:none">
  <div id="centered_links">
    <ul>
<?php
while($row=mysql_fetch_array($result))
{
  $serv_id=$row["service_id"];
  echo "<li><a href=\"http:/daddy/view/services_view.php?id=$serv_id\">".$row["service_name"]."</a></li>";
  if($_GET)
  {
    if($serv_id==$_GET["id"])
      {
	$serv_name=$row["service_name"];
	$serv_descr=$row["service_description"];
      }
  }
}
?>
    </ul>
  </div>
  </div>
  <div id="pager_F_P_C_main">
<?php
if($_GET)
{
  echo "<div style=\"text-align:center;\">Услуга<h4>$serv_name</h4>Описание<br><br></div><div style=\"text-align:justify;\">$serv_descr</div>";
}
else{echo "<div style=\"text-align:justify;\">  Фирмата предлага следните услуги.Детайлите на всяка услуга се показват в дясната част. За да направите запитване за някоя от услугите използвайте <a href=\"http:/daddy/view/contacts_view.php\"> формата за контакт </a></div>
";}
?>
  </div>
</form>
</div>
</body>
</html>
