<?php 

session_start();
session_unset($_SESSION["uname"]);
session_unset($_SESSION["PHPSESSID"]);
session_destroy();
setcookie("PHPSESSID","",time()-1);
header('location:form.php');
exit();

 ?>