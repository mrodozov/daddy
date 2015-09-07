<?php
require(getenv('PROJECT_PATH').'/mysql/mysql.php');
if(isset($_GET["start"])){$start=$_GET["start"];}
else{$start=0;}
$query="select category_id,category_name from category";
if(isset($_GET["cat_id"]))
{
  $cat_id=$_GET["cat_id"];
  $query1="select category_name,category_description from category where category_id=".$cat_id."";
  $query2="select product_id from products where category_id=".$cat_id."";
  $query3="select product_id,product_name from products where category_id=".$cat_id." limit ".$start.",3";
}
else
{
  $query_1="select category_id from category where category_name='Детайли' or category_name='Обработки и ремонти'";
  $result_1=mysql_query($query_1);
  $cat_1=mysql_result($result_1,0,0);
  $cat_2=mysql_result($result_1,1,0); 
  $query1="select category_name,category_description from category";
  $query2="select product_id from products where category_id<>".$cat_1." and category_id<>".$cat_2."";
  $query3="select product_id,product_name from products where category_id<>".$cat_1." and category_id<>".$cat_2." limit ".$start.",3";
} //да знаеш че това е много грешно :-) ама за сега карай
$result=mysql_query($query);
$result1=mysql_query($query1);
$result2=mysql_query($query2);
$result3=mysql_query($query3);
$row1=mysql_fetch_array($result1);
$rows2=mysql_num_rows($result2);
$rows3=mysql_num_rows($result3);
if(isset($_GET["cat_id"]))
{
  $c_name=$row1["category_name"];
  $c_desc=$row1["category_description"];
}
else
{
  $c_name='Всички машини';
  $c_desc='Всички';
}
$next=$start+3;
$prev=$start-3;
$num=ceil($rows2/3);
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
<form name="proba" method="post" action="services_view.php" enctype="multipart/form-data">
  <div id="pagerleft">
    <div id="pagerleft_top">
      <ul>
	<li><a href="http:/daddy/view/portfolio.php">Към портфолио</a></li>
	<li><a href="http:/daddy/view/proecting.php">Проектиране</a></li>
      </ul>
    </div>
    <div id="pagerleft_bottom">
      <a href="http:/daddy/view/contacts_view.php">ЕВРОРЕМОНТ-ГГ ООД <br>гр. Пловдив <br>бул."Кукленскo шосе 20" <br>e-mail eurorem@abv.bg <br>телефон 0878695577</a>
    </div>
  </div>
  <div id="pager_F_P_C_adv" style="float:left;padding:0px 20px 0px 0px;background:none;">
    <div id="centered_links">
      <ul>
	<li><a href="http:/daddy/view/products.php">Всички машини</a></li>
	<?php
	while($row=mysql_fetch_array($result))
	{
	echo "<li><a href=\"http:/daddy/view/products.php?cat_id=".$row["category_id"]."\">".$row["category_name"]."</a></li>";
	}
	?>
      </ul>
    </div>
  </div>
  <div id="pager_F_P_C_main" style="width:260px;padding:0px 20px 0px 20px;">
    <div style="text-align:center;">
      <?php echo "<h4>$c_name</h4>"?>
    </div>
    <div style="text-align:justify;font-size:110%;">
      <?php echo "$c_desc"?>
    </div>
  </div>
  <div id="pager_F_P_C_adv" style="float:left;padding:0px 10px 0px 10px;text-align:center;">
<?php
for($i = 0;$i < $rows3 ;$i++)
  {
    $prod_name=mysql_result($result3,$i,1);
    $prod_id=mysql_result($result3,$i,0);
    $query4="select picture_name,min(id) from pictures where product_id=".$prod_id." and product_type=1";
    $result4=mysql_query($query4);
    $row_p=mysql_fetch_array($result4);
    $picture_path=$row_p["picture_name"];
    echo "<a class=\"picture\" href=\"http:/daddy/view/products_details.php?id=".$prod_id."\">".$prod_name."<br>"; //link kym shtaygite da byde
    echo "<img src=\"http:/daddy/pictures/".$picture_path."\" /><br></a>";
  }
  if(isset($_GET["cat_id"]))
    {
      if($start > 0){ echo "<a href=\"http:/daddy/view/products.php?start=".$prev."&cat_id=".$cat_id."\">Назад     </a>";}
      else{echo "Назад     ";}
      if($next/3 < $num){echo "<a href=\"http:/daddy/view/products.php?start=".$next."&cat_id=".$cat_id."\">Напред</a>";}
      else{echo "Напред";}
    }
  else
    {
      if($start > 0){ echo "<a href=\"http:/daddy/view/products.php?start=".$prev."\">Назад     </a>";}
      else{echo "Назад     ";}
      if($next/3 < $num){echo "<a href=\"http:/daddy/view/products.php?start=".$next."\">Напред</a>";}
      else{echo "Напред";}
    }
?>
  </div>
</form>
</div>
</body>
</html>
