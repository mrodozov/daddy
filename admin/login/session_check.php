
<?php
//this file is required in mysql.php for easy inculing

session_start();
if(!isset($_SESSION["nameok"])){
  header("location:http:/daddy/admin/login/login.php");

/*var_dump($_SESSION["nameok"]); // this two line were used for 
session_destroy();               // debugging.  */

}
?>