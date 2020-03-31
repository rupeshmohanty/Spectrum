<?php
session_start();
include('config.php');
$fname=$_POST['fname'];
$email=$_POST['email'];
$branch=$_POST['branch'];
$year=$_POST['year'];
$regd_no=$_POST['registration_no'];
$skills=$_POST['skills'];
$image=$_FILES['image']['name'];
$loc="user_image/".$image;
$fields=$_POST['fields'];
$projects=$_POST['projects'];
$achieve=$_POST['achieve'];

$duplicate="SELECT * FROM register WHERE email='$email' AND fname='$fname'";
$duplicate_result=mysqli_query($con,$duplicate) or die(mysqli_error($con));
if (mysqli_num_rows($duplicate_result)==1) {
	echo '<script type="text/javascript">
	alert("Email already registered!!!");
	</script>';
	header('Location:form.php');
}
else{
	$register="INSERT INTO register(fname,email,branch,year,registration_no,skills,image,fields,projects,achieve) VALUES('$fname','$email','$branch','$year','$regd_no','$skills','$image','$fields','$projects','$achieve');";
	$register_result=mysqli_query($con,$register) or die(mysqli_error($con));
	move_uploaded_file($_FILES['image']['tmp_name'],$loc);
	header('Location:success.php');
}
?>
