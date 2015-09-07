<?php
require(getenv('PROJECT_PATH').'/mysql/mysql.php');
if(isset($_GET["start"])){$start=$_GET["start"];}
else{$start=0;}
if (isset($_GET["name"]))
{
  $oname=$_GET["name"];
  $query3="select order_id from orders where order_name='".$oname."'";
  $result3=mysql_query($query3);
  $row3=mysql_fetch_array($result3);
  $id=$row3["order_id"];
}
if (isset($_GET["id"])){$id=$_GET["id"];}
if ($_POST)
{
  $id=$_POST["id"];
  $uploaddir = getenv('PROJECT_PATH').'/pictures/';
  $fileName = $id.'_2_'. basename($_FILES['img']['name']);
  $uploadfile = $uploaddir . $fileName;
  // tuk moje da se sloji validator za nalichnostta na snimka sys syshtite parametri
  if ($_FILES['img']['name'])
  {
    if (move_uploaded_file($_FILES['img']['tmp_name'], $uploadfile))
    {
      $query="insert into pictures values ('','".$id."','".$fileName."','2')";
      $result=mysql_query($query);
      $msg = "Чертеж/снимка ".$_FILES['img']['name']." бе прикачен(а) <br>";
    }
    else {$msg ="Picture uploading failed !<br>";}
  }
  else {$msg = "Не е избран чертеж(снимка) за прикачване !<br>";}
}
$query1="select * from pictures where product_id=".$id." and product_type=2";
$result1=mysql_query($query1);
$query2="select order_name from orders where order_id=".$id."";
$result2=mysql_query($query2);
$row2=mysql_fetch_array($result2);
$query4="select id,picture_name from pictures where product_id=".$id." and product_type=2 limit ".$start.",3";
$result4=mysql_query($query4);
$next=$start+3;
$prev=$start-3;
$rows1=mysql_num_rows($result1);
$rows4=mysql_num_rows($result4);
$num=ceil($rows1/3);
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN" "http://www.w3.org/TR/html4/frameset.dtd">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<html>
<head>
<title> Добавяне на чертежи (снимки) </title>
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
	<li><a href="http:/daddy/view/orders_mod.php?id=<?php echo "$id";?>">Корекция</a></li>
	<li><a href="http:/daddy/view/orders_finalview.php?id=<?php echo "$id";?>"> Продължете </a></li>
      </ul>
     </div>
    <div id="pagerleft_bottom">
      <a href="http:/daddy/view/contacts_view.php">ЕВРОРЕМОНТ-ГГ ООД <br>гр. Пловдив <br>бул."Кукленскo шосе 20" <br>e-mail eurorem@abv.bg <br>телефон 0878695577</a>
    </div> 
  </div>
  <div id="pager_F_P_C_main">
<?php echo "<h4> ".$row2["order_name"]." </h4><br>"; ?>
<form name="proba" method="post" action="orders_addpics.php" enctype="multipart/form-data">
<input type="file" name="img" value=""><br>
<input type="submit" name="submit" value="Прикачи"><br>
<input type="hidden" name="id" value="<?php echo $id?>"><br>
<?php if (!empty($msg)) {echo $msg;} ?>
</form>
    <br><div style="text-align:justify;padding-right:15px">Тук можете да прикачите чертежите/снимките които желаете да получим. Чертежите/снимките които са били прикачени се показват от дясната страна и също могат да бъдат коригирани</div>
  </div>
  <div id="pager_F_P_C_adv" style="float:left;text-align:center">
  Чертежи
<?php
  for($i = 0;$i < $rows4 ;$i++)
  {
    $picture_name=mysql_result($result4,$i,1);
    $picture_id=mysql_result($result4,$i,0);
    echo "<img src=\"http:/daddy/pictures/".$picture_name."\" style=\"width:150px;height:110px;margin:4px;padding:2px;\"/><br>";
    echo "<a href=\"http:/daddy/view/orders_delpics.php?pid=".$picture_id."&id=".$id."&start=".$start."\"> Изтрий </a><br>";
  }
  {
    if($start > 0){ echo "<a href=\"http:/daddy/view/orders_addpics.php?id=".$id."&start=".$prev."\">Назад     </a>";}
    else{echo "Назад     ";}
    if($next/3 < $num){echo "<a href=\"http:/daddy/view/orders_addpics.php?id=".$id."&start=".$next."\">Напред</a>";}
    else{echo "Напред";}
  }
?>
  </div>
  </div>
</div>
</body>
</html>