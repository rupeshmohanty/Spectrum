<?php
include('config.php');
session_start();
if (!isset($_SESSION['email'])) {
	header('Location:index.php');
}
$email=$_SESSION['email'];
$theme=$_SESSION['theme'];
$link1=$_POST['link1'];
$solution1="INSERT INTO task1(email,theme,link1) VALUES('$email','$theme','$link1') WHERE email='$email' AND theme='$theme'";
$solution_result1=mysqli_query($con,$solution1) or die(mysqli_error($con));
?>