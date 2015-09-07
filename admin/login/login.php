<?php
if (!empty($_POST)){
  require(getenv('PROJECT_PATH').'/mysql/mysql.php');
  $name=$_POST["username"];
  $pass=$_POST["password"];
  $query = "select * from login where username='".$name."' and password='".$pass."'";
  $result=mysql_query($query);
  $check=mysql_num_rows($result);
  if($check==1){
    session_start();
    $_SESSION["nameok"]=$name;
    header("Location:http:/daddy/admin.php");
  }
  else{
    $error='Няма съвпадение ! Опитайте отново';
  }
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN" "http://www.w3.org/TR/html4/frameset.dtd">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<html>
<head>
<title> Login </title>
<link  rel="stylesheet" type="text/css" href="http://127.0.0.1/daddy/css/main.css"/>
</head>
<body>
<form name="proba" method="post" action="login.php" enctype="multipart/form-data">
Потребител
<input class="text_field" type="text" name="username" value="">
Парола
<input class="text_field" type="password" name="password" value="">
<input type="submit" name="submit" value="Влез">
<?php
  if (isset($error)){
    echo "<br> $error";
  }
?>
</form>
</body>
</html>