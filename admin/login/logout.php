<?php
session_start();
session_destroy();
header("Location:http:/daddy/admin/login/login.php");
?>