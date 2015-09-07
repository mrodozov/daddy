<?php
require(getenv('PROJECT_PATH').'/mysql/mysql.php');
$id=$_GET["id"];
if(!isset($_GET["start"])){$start_p=0;}
else{$start_p=$_GET["start"];}
$query="select products.product_name,product_description,category.category_id,category_name from products,category where products.product_id=".$id." and products.category_id=category.category_id;";
$query_pics="select picture_name from pictures where product_id=".$id." and product_type=1";
$query_pics_2="select picture_name from pictures where product_id=".$id." limit ".$start_p.",4";
$result=mysql_query($query);
$result_pics=mysql_query($query_pics);
$rows=mysql_num_rows($result_pics);
$num=ceil($rows/4);
$result_pics_2=mysql_query($query_pics_2);
$rows_p=mysql_num_rows($result_pics_2);
$next=$start_p+4;
$prev=$start_p-4;
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
 <li class="selected"><a href="http:/daddy/view/portfolio.php">Портфолио </a></li>
 <li><a href="http:/daddy/view/services_view.php">Услуги </a></li>
 <li><a href="http:/daddy/view/proecting.php">Проектиране </a></li>
 <li><a href="http:/daddy/view/orders_add.php">Запитване за проект</a></li>
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
	    <li><a href="http:/daddy/view/products.php">Само машини</a></li>
	    <li><a href="http:/daddy/view/products.php?cat_id=8">Само детайли</a></li>
	    <li><a href="http:/daddy/view/products.php?cat_id=10">Само обработки</a></li>
	  </ul>
      </div>
      <div id="pagerleft_bottom">
      <a href="http:/daddy/view/contacts_view.php">ЕВРОРЕМОНТ-ГГ ООД <br>гр. Пловдив <br>бул."Кукленскo шосе 20" <br>e-mail eurorem@abv.bg <br>телефон 0878695577</a>
      </div>  
    </div>
  <div id="pager_F_P_C_main">
<?php
while($row=mysql_fetch_array($result))
{
  echo "<div style=\"text-align:center;\"><h4>".$row["product_name"]."</h4>";
  echo "Категория<br><a href=\"http:/daddy/view/products.php?cat_id=".$row["category_id"]."\">".$row["category_name"]."</a><br>";
  echo "<br></div><div style=\"text-align:justify;\">".$row["product_description"].";</div>";
}
?>
  </div>
  <div id="pager_F_P_C_adv" style="height:500px;float:left;padding:0px 10px 0px 10px;text-align:center;width:359px;">
    <div style="heigh:240px;width:339px">
<?php
for($i = 0; $i < $rows_p; $i++)
{
  $pic_path=mysql_result($result_pics_2,$i,0);
  echo "<img src=\"http:/daddy/pictures/".$pic_path."\" style=\"width:150px;height:110px;margin:2px;padding:2px;border:1px solid #ccc;\"/><br></a>";
}
  // снимките трябва да са линкове към снимка
  if($start_p > 0){ echo "<a href=\"http:/daddy/view/products_details.php?start=".$prev."&id=".$id."\">Назад     </a>";}
  else{echo "Назад     ";}
  if($next/4 < $num){echo "<a href=\"http:/daddy/view/products_details.php?start=".$next."&id=".$id."\">Напред</a>";}
  else{echo "Напред";}
?> 
  </div>
</div>
</body>
</html>
