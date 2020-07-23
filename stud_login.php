<?php
session_start();
include('config.php');
$email=$_POST['email'];
$password=md5($_POST['password']);
$stud_login="SELECT * FROM temp_register WHERE email='$email' AND password='$password'";
$stud_login_result=mysqli_query($con,$stud_login) or die(mysqli_error($con));
if (mysqli_num_rows($stud_login_result)==1) {
	header('Location:profile.php');
}
else{
	echo "<script>
		alert('The username or password is invalid!');
	</script>";
	header('Location:form.php');
}
$_SESSION['email']=$email;
$_SESSION['password']=$password;
?>