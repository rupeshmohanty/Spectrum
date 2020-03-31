<?php

session_start();
if(!isset($_SESSION["email"])){
	header("Location:form.php");
}

?>

<?php
$email=$_SESSION['email'];
include('config.php');
$admin="SELECT * FROM login WHERE email='$email';";
$admin_result=mysqli_query($con,$admin) or die(mysqli_error($con));
$rows=mysqli_fetch_assoc($admin_result);
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

	    <link rel="stylesheet" type="text/css" href="assets/css/social_media.css">
	    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	  	<link href="https://fonts.googleapis.com/css?family=Hind+Siliguri" rel="stylesheet">
	  	<link rel="stylesheet" type="text/css" href="assets/css/blog.css">
	</head>
	<body class="subpage">

		<!-- Header -->
			<header id="header">
				<div class="inner">
					<a href="index.html" class="logo">Spectrum</a>
					<nav id="nav">
						<a href="index.html">Home</a>
						<a href="https://docs.google.com/forms/d/e/1FAIpQLScP7xq1G0GnZFgWvs4FzAFcEUT5y2ridVtIaIeHWoTyFEmH4w/viewform?usp=sf_link">Contact Us</a>
						<a href="#">Welcome <?php echo $rows['email']; ?></a>
						<a href="logout.php">Logout</a>
					</nav>
					<a href="#navPanel" class="navPanelToggle"><span class="fa fa-bars"></span></a>
				</div>
			</header><br/>

			<!--Tabular data containing information about all the users-->
			<table class="table">
			  <thead>
			    <tr>
			      <th scope="col">Full Name</th>
			      <th scope="col">Email</th>
			      <th scope="col">Branch</th>
			      <th scope="col">Year</th>
			      <th scope="col">Registration No.</th>
			      <th scope="col">Skills</th>
			      <th scope="col">Image</th>
			      <th scope="col">Fields of interest:</th>
			      <th scope="col">Projects you have worked before</th>
			      <th scope="col">What do you want to achieve from this internship?</th>
			    </tr>
			  </thead>


			<?php
			$user="SELECT * FROM register";
			$user_result=mysqli_query($con,$user) or die(mysqli_error($con));
			while ($user_row=mysqli_fetch_assoc($user_result)) {
				
			?>

			
			  <tbody>
			    <tr>
			      <td><?php echo $user_row['fname']; ?></td>
			      <td><?php echo $user_row['email']; ?></td>
			      <td><?php echo $user_row['branch']; ?></td>
			      <td><?php echo $user_row['year']; ?></td>
			      <td><?php echo $user_row['registration_no']; ?></td>
			      <td><?php echo $user_row['skills']; ?></td>
			      <td><?php echo $user_row['image']; ?></td>
			      <td><?php echo $user_row['fields']; ?></td>
			      <td><?php echo $user_row['projects']; ?></td>
			      <td><?php echo $user_row['achieve']; ?></td>
			    </tr>
			    <tr>
			   </tr>
			</tbody>
		</table>



			<?php
				}
			?>

			

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>


