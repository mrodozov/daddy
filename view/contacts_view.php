<?php
require(getenv('PROJECT_PATH').'/mysql/mysql.php');
$today=date("Y-m-d");
//$query="select * from contacts";
//$err_msg='Моля попълнете всички полета';
if(isset($_GET["tnx"])){$msg='Съобщението беше изпратено. Благодарим ви!';}
if ($_POST)
{
  if ($_POST["name"])
  {
    if ($_POST["phone"])
    {
      if($_POST["message"])
      {
	$query1="insert into messages values('','".$_POST["name"]."','".$_POST["email"]."','".$_POST["phone"]."','".$_POST["message"]."','".$today."')";
	$result1=mysql_query($query1);
	header("Location:http:contacts_view.php?tnx=1");
      }
    }
  }
}

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
 <li><a href="http:/daddy/view/services_view.php">Услуги </a></li>
 <li><a href="http:/daddy/view/proecting.php">Проектиране </a></li>
 <li><a href="http:/daddy/view/orders_add.php">Запитване за проект</a></li>
 <li class="selected"><a href="http:/daddy/view/contacts_view.php">Контакти </a></li>
</ul>
</div>
</div>
<div class="advnav">
</div>
<div class="pager">
  <div id="pagerleft">
    <div id="pagerleft_top">
      <ul>
	<li><a href="http:/daddy/view/forus.php">За нас </a></li>
      </ul>
    </div>
    <div id="pagerleft_bottom">
      <a href="http:/daddy/view/contacts_view.php">ЕВРОРЕМОНТ-ГГ ООД <br>гр. Пловдив <br>бул."Кукленскo шосе 20" <br>e-mail eurorem@abv.bg <br>телефон 0878695577</a>
    </div>  
  </div>
  <div id="pager_F_P_C_main" style="text-align:left;">
<?php if (!empty($msg)) {echo $msg;} ?>
  <form name="proba" method="post" action="contacts_view.php" enctype="multipart/form-data">
    Форма за контакти<br>
    Име 
    <input class="text_field" type="text" name="name" value="<?php if($_POST){if (isset($_POST["name"])){echo $_POST["name"];}}?>" maxlenght="20"><?php if ($_POST){if (!$_POST["name"]){$err_name = "Името липсва !";}}?>
    e-mail
    <input class="text_field" type="text" name="email" value="<?php if($_POST){if (isset($_POST["email"])){echo $_POST["email"];}}?>" maxlenght="20">
    Телефон
    <input class="text_field" type="text" name="phone" value="<?php if($_POST){if (isset($_POST["phone"])){echo $_POST["phone"];}}?>" maxlenght="20"><?php if ($_POST){if (!$_POST["phone"]){$err_phone = "Телефонът липсва !";}}?>
    Съобщение
    <textarea class="textarea" name="message" rows="5" cols="23"><?php if($_POST){if (isset($_POST["message"])){echo $_POST["message"];}}?></textarea><?php if ($_POST){if (!$_POST["message"]){$err_msg = "Съобщението е празно !";}}?><br>
    <input type="submit" name="submit" value="Изпрати">
    <br><?php if (!empty($err_name)) {echo $err_name;}?><br>
    <?php if (!empty($err_phone)) {echo $err_phone;}?><br>
    <?php if (!empty($err_msg)) {echo $err_msg;}?><br>
  </form>
  <br>За запитвания относно проекти можете да използвате
  <a href="http:/daddy/view/orders_add.php">формата за проекти</a><br><br>
  </div>
  <div id="pager_F_P_C_adv" style="float:left;">
        ЕВРОРЕМОНТ-ГГ - ООД<br>град Пловдив<br>Кукленско Шосе 20<br>eurorem@abv.bg<br>телефони<br>0889999999    009900990<br>
    <h4>Google maps координати<h4>
    <a href="http://maps.google.com/maps?q=42.120052,+24.762019&num=1&t=h&vps=1&jsv=202c&sll=42.120147,24.760069&sspn=0.016554,0.032015&hl=en&ie=UTF8&geocode=FXSzggIdo9Z5AQ&split=0"><img src="http:/daddy/pictures/pagepics/plovdiv.jpg" style="width:200px;height:170px;border:0;padding-top:2px;" /></a>
  </div>
<?php
?>
</div>
</body>
</html>
