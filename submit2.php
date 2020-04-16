<?php
include('config.php');
session_start();
if (!isset($_SESSION['email'])) {
	header('Location:index.php');
}
$email=$_SESSION['email'];
$theme=$_SESSION['theme'];
$link2=$_POST['link2'];
$solution2="INSERT INTO task2(email,theme,link2) VALUES('$email','$theme','$link2') WHERE email='$email' AND theme='$theme'";
$solution_result2=mysqli_query($con,$solution2) or die(mysqli_error($con));
?>