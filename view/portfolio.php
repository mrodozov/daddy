<?php // all pictures in divs with background
require(getenv('PROJECT_PATH').'/mysql/mysql.php');
if(!isset($_GET["machines"])){$start_m=0;}
else{$start_m=$_GET["machines"];}
if(!isset($_GET["details"])){$start_d=0;}
else{$start_d=$_GET["details"];}
if(!isset($_GET["service"])){$start_s=0;}
else{$start_s=$_GET["service"];}
$query="select category_id from category where category_name='Детайли'";
$query1="select category_id from category where category_name='Обработки и ремонти'";
$result=mysql_query($query);
$result1=mysql_query($query1);
$row=mysql_fetch_array($result);
$row1=mysql_fetch_array($result1);
$cat_id1=$row["category_id"];
$cat_id2=$row1["category_id"];
$query_machines="select product_id,product_name from products where category_id<>".$cat_id1." and category_id<>".$cat_id2." limit ".$start_m.",3";
$result_machines=mysql_query($query_machines);
$query_details="select * from products where category_id=".$cat_id1." limit ".$start_d.",3";
$result_details=mysql_query($query_details);
$query_service="select * from products where category_id=".$cat_id2." limit ".$start_s.",3";
$result_service=mysql_query($query_service);
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
<form name="proba" method="post" action="portfolio.php" enctype="multipart/form-data">
  <div id="pagerleft">
    <div id="pagerleft_top">
      <ul>
	<li><a href="http:/daddy/view/products.php">Всички категории</a></li>
      </ul>
    </div>
    <div id="pagerleft_bottom">
      <a href="http:/daddy/view/contacts_view.php">ЕВРОРЕМОНТ-ГГ ООД <br>гр. Пловдив <br>бул."Кукленскo шосе 20" <br>e-mail eurorem@abv.bg <br>телефон 0878695577</a>
    </div>
  </div>
  <div id="pager_F_P_C_adv" style="float:left;">
    <div id="centered_links"><ul><li><a href="http:/daddy/view/products.php">Машини</a></li></ul>
<?php
$query_machines_2="select product_id from products where category_id<>".$cat_id1." and category_id<>".$cat_id2."";
$result_machines_2=mysql_query($query_machines_2);
$rows_m_2=mysql_num_rows($result_machines_2);
$num_m=ceil($rows_m_2/3);
$rows_m=mysql_num_rows($result_machines);
for($i = 0;$i < $rows_m ; $i++)
{
  $m_id=mysql_result($result_machines,$i,0);
  $m_name=mysql_result($result_machines,$i,1);
  $query_m_1="select picture_name,min(id) from pictures where product_id=".$m_id." and product_type=1";
  $result_m_1=mysql_query($query_m_1);
  $row_m_1=mysql_fetch_array($result_m_1);
  echo "<a class=\"picture\" href=\"http:/daddy/view/products_details.php?id=".$m_id."\">".$m_name."<br>"; //link kym shtaygite da byde
  echo "<img src=\"http:/daddy/pictures/".$row_m_1["picture_name"]."\" /><br></a>";
  
}
  $next_m=$start_m+3;
  $prev_m=$start_m-3;
  if($start_m > 0){ echo "<a href=\"http:/daddy/view/portfolio.php?machines=".$prev_m."&details=".$start_d."&service=".$start_s."\">Назад     </a>";}
  else{echo "Назад     ";}
  if($next_m/3 < $num_m){echo "<a href=\"http:/daddy/view/portfolio.php?machines=".$next_m."&details=".$start_d."&service=".$start_s."\">Напред</a>";}
  else{echo "Напред";}
?>
    
    </div>
  </div>
  <div id="pager_F_P_C_adv" style="float:left;">
    <div id="centered_links"><ul><li><a href="http:/daddy/view/products.php?cat_id=<?php echo $cat_id1?>">Детайли</a></li></ul>
<?php
$query_details_2="select * from products where category_id=".$cat_id1."";
$result_details_2=mysql_query($query_details_2);
$rows_d_2=mysql_num_rows($result_details_2);
$num_d=ceil($rows_d_2/3);
$rows_d=mysql_num_rows($result_details);
for($i = 0;$i < $rows_d ; $i++)
{
  $d_id=mysql_result($result_details,$i,0);
  $d_name=mysql_result($result_details,$i,1);
  $query_d_1="select picture_name,min(id) from pictures where product_id=".$d_id." and product_type=1";
  $result_d_1=mysql_query($query_d_1);
  $row_d_1=mysql_fetch_array($result_d_1);
  echo "<a class=\"picture\" href=\"http:/daddy/view/products_details.php?id=".$d_id."\">".$d_name."<br>"; //link kym shtaygite da byde
  echo "<img src=\"http:/daddy/pictures/".$row_d_1["picture_name"]."\" <br></a>";
  
}
  $next_d=$start_d+3;
  $prev_d=$start_d-3;
  if($start_d > 0){ echo "<a href=\"http:/daddy/view/portfolio.php?details=".$prev_d."&machines=".$start_m."&service=".$start_s."\">Назад     </a>";}
  else{echo "Назад     ";}
  if($next_d/3 < $num_d){echo "<a href=\"http:/daddy/view/portfolio.php?details=".$next_d."&machines=".$start_m."&service=".$start_s."\">Напред</a>";}
  else{echo "Напред";}
?>
    </div>
  </div>
  <div id="pager_F_P_C_adv" style="float:left;padding-right:29px;">
    <div id="centered_links"><ul><li><a href="http:/daddy/view/products.php?cat_id=<?php echo $cat_id2?>">Обработки и ремонти</a></li></ul>
<?php
$query_service_2="select product_id from products where category_id=".$cat_id2."";
$result_service_2=mysql_query($query_service_2);
$rows_s_2=mysql_num_rows($result_service_2);
$num_s=ceil($rows_s_2/3);
$rows_s=mysql_num_rows($result_service);
for($i = 0;$i < $rows_s ; $i++)
{
  $s_id=mysql_result($result_service,$i,0);
  $s_name=mysql_result($result_service,$i,1);
  $query_s_1="select picture_name,min(id) from pictures where product_id=".$s_id." and product_type=1";
  $result_s_1=mysql_query($query_s_1);
  $row_s_1=mysql_fetch_array($result_s_1);
  echo "<a class=\"picture\" href=\"http:/daddy/view/products_details.php?id=".$s_id."\">".$s_name."<br>"; //link kym shtaygite da byde
  echo "<img src=\"http:/daddy/pictures/".$row_s_1["picture_name"]."\" /><br></a>";
  
}
  $next_s=$start_s+3;
  $prev_s=$start_s-3;
  if($start_s > 0){ echo "<a href=\"http:/daddy/view/portfolio.php?service=".$prev_s."&details=".$start_d."&machines=".$start_m."\">Назад     </a>";}
  else{echo "Назад     ";}
  if($next_s/3 < $num_s){echo "<a href=\"http:/daddy/view/portfolio.php?service=".$next_s."&details=".$start_d."&machines=".$start_m."\">Напред</a>";}
  else{echo "Напред";}
?>
    </div>
  </div>
</form>
</div>
</body>
</html>
