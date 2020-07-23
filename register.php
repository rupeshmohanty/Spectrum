<?php
include('config.php');
session_start();
$name=mysqli_escape_string($con,strip_tags($_POST['name']));
$uname=mysqli_escape_string($con,strip_tags($_POST['uname']));
$password=md5(mysqli_escape_string($con,strip_tags($_POST['password'])));
$cpassword=md5(mysqli_escape_string($con,strip_tags($_POST['password'])));
$email=mysqli_escape_string($con,strip_tags($_POST['email']));
$branch=mysqli_escape_string($con,strip_tags($_POST['branch']));
$year=mysqli_escape_string($con,strip_tags($_POST['year']));
$regd_no=mysqli_escape_string($con,strip_tags($_POST['registration_no']));
$skills=mysqli_escape_string($con,strip_tags($_POST['skills']));
$resume=$_FILES['resume']['name'];
$loc="resume/".$resume;
$theme=mysqli_escape_string($con,strip_tags($_POST['theme']));
$projects=mysqli_escape_string($con,strip_tags($_POST['projects']));
$achieve=mysqli_escape_string($con,strip_tags($_POST['achieve']));

$duplicate="SELECT * FROM temp_register WHERE email='$email' AND uname='$uname'";
$duplicate_result=mysqli_query($con,$duplicate) or die(mysqli_error($con));
if (mysqli_num_rows($duplicate_result)==1) {
	echo "<script>
		alert('The email id already exists!!');
	</script>";
	header('Location:form.php');
}
else{
	if(strcmp($password,$cpassword)!=0){
		echo "<script>
		alert('The email id already exists!!');
		</script>";
		header('Location:form.php');
	}
	else{
		$register="INSERT INTO temp_register(name,uname,password,email,branch,year,registration_no,skills,resume,theme,projects,achieve) VALUES('$name','$uname','$password','$email','$branch','$year','$regd_no','$skills','$resume','$theme','$projects','$achieve')";
		$register_result=mysqli_query($con,$register) or die(mysqli_error($con));
		move_uploaded_file($_FILES['resume']['tmp_name'],$loc);
		header('Location:success.php');
	}
}
$_SESSION['uname']=$uname;
?>