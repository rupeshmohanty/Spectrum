<?php
include('config.php');
$fname=$_POST['fname'];
$email=$_POST['email'];
$branch=$_POST['branch'];
$year=$_POST['year'];
$msg=$_POST['message'];

$contact="INSERT INTO contact_us(fname,email,branch,year,message) VALUES('$fname','$email','$branch','$year','$msg')";
$contact_result=mysqli_query($con,$contact) or die(mysqli_error($con));

echo '<script type="text/javascript">
alert("You response has been recorded!");
</script>';
header('Location:contact_us.html');
?>