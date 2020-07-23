<?php
include('config.php');
error_reporting(0);
session_start();
if (!isset($_SESSION['email'])) {
	header('Location:index.php');
}
$email=$_SESSION['email'];
$password=$_SESSION['password'];
$intern="SELECT * FROM temp_register WHERE email='$email' AND password='$password'";
$intern_result=mysqli_query($con,$intern) or die(mysqli_error($con));
$intern_row=mysqli_fetch_assoc($intern_result);
?>


<!DOCTYPE HTML>
<html>
	<head>
		<title>Spectrum Internship Drive</title>
		<link rel="icon" href="images/sitelogo.jpg">
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />

		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="stylesheet" type="text/css" href="assets/css/achievements.css">
		<link rel="stylesheet" type="text/css" href="assets/css/style.css">
		<link rel="stylesheet" type="text/css" href="assets/css/news-events-tabs.css">
		<link rel="stylesheet" type="text/css" href="assets/css/swiper.min.css">
		<link rel="stylesheet" type="text/css" href="assets/css/modal.css">

		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" integrity="sha384-KA6wR/X5RY4zFAHpv/CnoG2UW1uogYfdnP67Uv7eULvTveboZJg0qUpmJZb5VqzN" crossorigin="anonymous">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	    <link rel="stylesheet" type="text/css" href="assets/css/social_media.css">
	    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	  	<link href="https://fonts.googleapis.com/css?family=Hind+Siliguri" rel="stylesheet">
	  	<link rel="stylesheet" type="text/css" href="assets/css/blog.css">
	</head>
	<body class="subpage">

		<!-- Header -->
			<header id="header">
				<div class="inner">
					<a href="index.php" class="logo">Spectrum</a>
					<nav id="nav">
						<a href="index.php">Home</a>
						<a href="contact_us.html">Contact Us</a>
						<a href="#">Welcome <?php echo $intern_row['uname']; ?></a>
						<a href="logout.php">Logout</a>
					</nav>
					<a href="#navPanel" class="navPanelToggle"><span class="fa fa-bars"></span></a>
				</div>
			</header><br/>

<?php
$theme=$intern_row['theme'];
$pdf="SELECT * FROM projects WHERE theme='$theme'";
$pdf_result=mysqli_query($con,$pdf) or die(mysqli_error($con));
$pdf_row=mysqli_fetch_assoc($pdf_result);
$wd1=$pdf_row['wd1'];
$wd2=$pdf_row['wd2'];
$wd3=$pdf_row['wd3'];
?>

<div class="container-fluid">
    <div class="row">

        <div class="col-md-10 col-md-offset-1">
            <div class="alert alert-primary alert-dismissible fade in text-center" role="alert">
                <strong>Login Successful!</strong><br/>
                Welcome <?php echo $intern_row['name']; ?>
            </div>
        </div>

  </div>
</div>

<table class="table" style="align-items: center;">
  <thead>
    <tr>
      <th scope="col">Theme</th>
      <th scope="col">Task 1</a></th>
      <th scope="col">Task 2</a></th>
      <th scope="col">Task 3</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"><?php echo $theme; ?></th>
      <td><a href="projects/<?php echo $theme; ?>/<?php echo $wd1; ?>" target="_blank">Click here to view the file</a></td>
      <td><a href="projects/<?php echo $theme; ?>/<?php echo $wd2; ?>" target="_blank">Click here to view the file</a></td>
      <td><a href="projects/<?php echo $theme; ?>/<?php echo $wd3; ?>" target="_blank">Click here to view the file</a></td>
    </tr>
  </tbody>
</table><br/>

<?php
$_SESSION['theme']=$theme;
$_SESSION['email']=$email;
?>




<form style="position: relative;left: 35%;top: 50%;" method="post" action="submit1.php">
<input style="width: 500px;" type="text" id="link1" name="link1" placeholder="Github Link For Stage1">
<input type="submit" id="myBtn1" name="form1" value="Submission 1">
</form><br><br>

<form style="position: relative;left: 35%;top: 50%;" method="post" action="submit2.php">
<input style="width: 500px;" type="text" id="link2" name="link2" placeholder="Github Link For Stage2">
<input type="submit" id="myBtn2" name="form2" value="Submission 2">
</form><br><br>


<form style="position: relative;left: 35%;top: 50%;" method="post" action="submit3.php">
<input style="width: 500px;" type="text" id="link3" name="link3" placeholder="Github Link For Stage3">
<input type="submit" id="myBtn3" name="form3" value="Submission 3">
</form><br><br>


<script>
var x = new Date(); //Today's date
var y1 = new Date('2020-5-06'); //Next date of Final Date For Submission of task1
var y2 = new Date('2020-4-25'); //Next date of Final Date For Submission of task 2
var y3 = new Date('2020-4-25'); //Next date of Final Date For Submission of task3
if (x<=y1) {
  document.getElementById("myBtn1").disabled = false;
}
else {
  document.getElementById("myBtn1").disabled = true;
}

if (x<=y2) {
  document.getElementById("myBtn2").disabled = false;
}
else {
  document.getElementById("myBtn2").disabled = true;
}


if (x<=y3) {
  document.getElementById("myBtn3").disabled = false;
}
else {
  document.getElementById("myBtn3").disabled = true;
}

</script>






<!--============== Footer area=============-->
<footer id="footer">
				<div class="inner">
					<div class="flex">
						<div class="copyright">
							&copy; Untitled. Design: <a href="https://templated.co">TEMPLATED</a>. Images: <a href="https://unsplash.com">Unsplash</a>.
						</div>
						<ul class="icons">
							<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
							<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
							<li><a href="#" class="icon fa-linkedin"><span class="label">linkedIn</span></a></li>
							<li><a href="#" class="icon fa-pinterest-p"><span class="label">Pinterest</span></a></li>
							<li><a href="#" class="icon fa-vimeo"><span class="label">Vimeo</span></a></li>
						</ul>
					</div>
				</div>
			</footer>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
			<!--external scripts-->
			<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	</body>
</html>
<?php 
if($_SERVER["REQUEST_METHOD"]=="POST")
{
if ( $_POST['form1']) { 
$link1 = $_POST['link1'];
$submission="INSERT INTO task1 VALUES('$email','$link1')";
$register_result=mysqli_query($con,$submission) or die(mysqli_error($con));
} 

elseif ( $_POST['form2']) { 
$link2 = $_POST['link2']; 
$submission="INSERT INTO task2 VALUES('$email','$link2')";
$submission_result=mysqli_query($con,$submission) or die(mysqli_error($con));
} 

elseif ( $_POST['form3']) { 
$link3 = $_POST['link3'];
$submission="INSERT INTO task3 VALUES('$email','$link3')";
$submission_result=mysqli_query($con,$submission) or die(mysqli_error($con));
} 
}

 ?>
 