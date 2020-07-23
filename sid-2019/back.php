<?php 

session_start();
session_unset($_SESSION["regd_no"]);
session_unset($_SESSION["PHPSESSID"]);
session_destroy();
setcookie("PHPSESSID","",time()-1);
header('location:index.php');
exit();

 ?>