<?php
require(getenv('PROJECT_PATH').'/mysql/mysql.php');
if(isset($_GET["start"])){$start=$_GET["start"];}
else{$start=0;}
$id=$_GET["id"];
$query="select * from orders where order_id=".$id."";
$query1="select id from pictures where product_id=".$id." and product_type=2";
$query2="select picture_name from pictures where product_id=".$id." and product_type=2 limit ".$start.",3";
$result=mysql_query($query);
$result1=mysql_query($query1);
$result2=mysql_query($query2);
$row=mysql_fetch_array($result);
$next=$start+3;
$prev=$start-3;
$rows1=mysql_num_rows($result1);
$rows2=mysql_num_rows($result2);
$num=ceil($rows1/3);
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN" "http://www.w3.org/TR/html4/frameset.dtd">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<html>
<head>
<title> Преглед на заявката </title>
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
	<li><a href="http:/daddy/view/orders_mod.php?id=<?php echo "$id";?>">Корекция</a></li>
	<li><a href="http:/daddy/view/orders_addpics.php?id=<?php echo "$id";?>">Корекция чертежи</a></li>
	<li><a href="http:/daddy/index.php">Завършете</a><?php // tova shte vodi drugade ?></li>
      </ul>
    </div>
    <div id="pagerleft_bottom">
      <a href="http:/daddy/view/contacts_view.php">ЕВРОРЕМОНТ-ГГ ООД <br>гр. Пловдив <br>бул."Кукленскo шосе 20" <br>e-mail eurorem@abv.bg <br>телефон 0878695577</a>
    </div>
  </div>
  <div id="pager_F_P_C_main">
<form name="proba" method="post" action="orders_mod.php" enctype="multipart/form-data">

<?php 
echo "Име <br><h2> ".$row["order_name"]." </h2><br>";
echo "Описание <br><div style=\"text-align:justify\">".$row["description"]."</div><br>";
echo "e-mail <br>".$row["email"]."<br>";
echo "телефон <br>".$row["phone"]."<br>";
echo "Дата <br>".$row["date"]."<br>";
?> 
</form>
  </div>
  <div id="pager_F_P_C_adv" style="float:left;text-align:center;">
<?php
echo "Чертежи (снимки) <br>";
for($i = 0;$i < $rows2 ;$i++)
{
  $picture_name=mysql_result($result2,$i,0);
  echo "<img src=\"http:/daddy/pictures/".$picture_name."\" style=\"width:160px;height:135px;margin:4px;padding:2px;\"/><br>";
}
    if($start > 0){ echo "<a href=\"http:/daddy/view/orders_finalview.php?id=".$id."&start=".$prev."\">Назад     </a>";}
    else{echo "Назад     ";}
    if($next/3 < $num){echo "<a href=\"http:/daddy/view/orders_finalview.php?id=".$id."&start=".$next."\">Напред</a>";}
    else{echo "Напред";}
?>
  </div>
</div>
</body>
</html>