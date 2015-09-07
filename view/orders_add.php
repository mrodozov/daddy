<?php
require(getenv('PROJECT_PATH').'/mysql/mysql.php');
$field_err='Моля попълнете всички полета';
$today=date("Y-m-d");
if ($_POST)
{
  if ($_POST["name"])
  {
    if ($_POST["description"])
    {
      if ($_POST["email"])
      {
	if ($_POST["phone"])
	{
	$query1="insert into orders values('','".$_POST["name"]."','".$_POST["email"]."','".$_POST["phone"]."','".$_POST["description"]."','".$today."')";
	$result1=mysql_query($query1);
	header("Location:http:orders_addpics.php?name=".$_POST["name"]."");
	}
	else ;// Skip for now //echo "$field_err <br>";
      }
      else;// Skip for now // echo "$field_err <br>";
    }
    else ;// Skip for now //echo "$field_err <br>";
  }
  else ;// Skip for now //echo "$field_err <br>";
}
?> 
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN" "http://www.w3.org/TR/html4/frameset.dtd">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<html>
<head>
<title> Нова заявка(запитване) </title>
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
      <ul>
	<li><a href="http:/daddy/view/proecting.php">Още информация</a></li>
      </ul>
    </div>
    <div id="pagerleft_bottom">
      <a href="http:/daddy/view/contacts_view.php">ЕВРОРЕМОНТ-ГГ ООД <br>гр. Пловдив <br>бул."Кукленскo шосе 20" <br>e-mail eurorem@abv.bg <br>телефон 0878695577</a>
    </div>
  </div>
<div id="pager_F_P_C_main">
<form name="proba" method="post" action="orders_add.php" enctype="multipart/form-data">
Име  <?//pomisli za drug design ?>
<input class="text_field" type="text" name="name" value="<?php if($_POST){if (isset($_POST["name"])){echo $_POST["name"];}}?>" maxlenght="20"><?php if ($_POST){if (!$_POST["name"]){$err_name = "Името липсва !";}}?>
e-mail
<input class="text_field" type="text" name="email" value="<?php if($_POST){if (isset($_POST["email"])){echo $_POST["email"];}}?>" maxlenght="20"><?php if ($_POST){if (!$_POST["email"]){ $err_email ="email-а липсва !";}}?>
Телефон
<input class="text_field" type="text" name="phone" value="<?php if($_POST){if (isset($_POST["phone"])){echo $_POST["phone"];}}?>" maxlenght="20"><?php if ($_POST){if (!$_POST["phone"]){$err_phone = "Телефона липсва !";}}?>
Описание
<textarea class="textarea" name="description" rows="5" cols="23"><?php if($_POST){if (isset($_POST["description"])){echo $_POST["description"];}}?></textarea><?php if ($_POST){if (!$_POST["description"]){$err_desc = "Описанието е празно !";}}?>
<br><input type="submit" name="submit" value="Продължете "><br>
<?php
if (!empty($err_name)){
  echo $err_name;echo "<br>";
}
if (!empty($err_email)){
  echo $err_email;echo "<br>";
}
if (!empty($err_phone)){
  echo $err_phone;echo "<br>";
}
if (!empty($err_desc)){
  echo $err_desc;echo "<br>";
}
?>
</form>
</div>
<div id="pager_F_P_C_main" style="padding-left:0px;">
  <div style="text-align:justify;">Формата за проекти представлява форма в която вие можете да опишете запитването си за изработка на продукт, без значение дали той е цяла машина,детайл или услуга която желаете да бъде извършена. Формата се състои от две части - в първата част описвате всичко което смятате че е необходимо като технически характеристики и описания. В случай че желаете да промените или да добавите информация формата предоставя възможност за корекция. Не се притеснявайте да добавяте ако нямате технически познания - просто опишете какво ви е нужно и ние ще ви изпратим нашето предложение.</div>
</div>
</div>
</body>
</html>