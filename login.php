<?php
session_start();
$con=mysqli_connect("3.6.182.76","admin_spectrum","spectrum","admin_spectrumDB") or die(mysqli_error($con));
$email=mysqli_real_escape_string($con,strip_tags($_POST['email']));
$password=mysqli_real_escape_string($con,strip_tags($_POST['password']));
echo $password;
$login="SELECT * FROM login WHERE email='$email' AND password='$password';";
$login_result=mysqli_query($con,$login) or die(mysqli_error($con));
if(mysqli_num_rows($login_result)==1){
	echo '<script type="text/javascript">You have logged in to your account!</script>';
	header('Location:table.php');
}
else{
	header('Location:alogin.php');
}

$_SESSION['email']=$email;
?>
