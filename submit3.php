<?php
include('config.php');
session_start();
if (!isset($_SESSION['email'])) {
	header('Location:index.php');
}
$email=$_SESSION['email'];
$theme=$_SESSION['theme'];
$link3=$_POST['link3'];
$solution3="INSERT INTO task1(email,theme,link3) VALUES('$email','$theme','$link3') WHERE email='$email' AND theme='$theme'";
$solution_result3=mysqli_query($con,$solution3) or die(mysqli_error($con));
?>