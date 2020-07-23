<?php
    include('../config.php');
    session_start();
    if(!isset($_SESSION['regd_no'])) {
        header('index.php');
    }
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Spectrum Internship Drive</title>
		<link rel="icon" href="images/sitelogo.jpg">
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />

		<link rel="stylesheet" href="../assets/css/main.css" />
		<link rel="stylesheet" type="text/css" href="../assets/css/achievements.css">
		<link rel="stylesheet" type="text/css" href="../assets/css/style.css">
		<link rel="stylesheet" type="text/css" href="../assets/css/news-events-tabs.css">
		<link rel="stylesheet" type="text/css" href="../assets/css/swiper.min.css">
		<link rel="stylesheet" type="text/css" href="../assets/css/modal.css">

		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" integrity="sha384-KA6wR/X5RY4zFAHpv/CnoG2UW1uogYfdnP67Uv7eULvTveboZJg0qUpmJZb5VqzN" crossorigin="anonymous">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	    <link rel="stylesheet" type="text/css" href="../assets/css/social_media.css">
	    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	  	<link href="https://fonts.googleapis.com/css?family=Hind+Siliguri" rel="stylesheet">
	  	<link rel="stylesheet" type="text/css" href="../assets/css/blog.css">
	</head>
	<body class="subpage">

		<!-- Header -->
			<header id="header">
				<div class="inner">
					<a href="../" class="logo">Spectrum</a>
					<nav id="nav">
						<a href="../">Home</a>
						<a href="../contact_us.html">Contact Us</a>

					</nav>
					<a href="#navPanel" class="navPanelToggle"><span class="fa fa-bars"></span></a>
				</div>
			</header>

            <?php
                $regd_no = $_SESSION['regd_no'];
                $search = "SELECT * FROM verify WHERE regd_no='$regd_no'";
                $search_result = mysqli_query($con,$search) or die(mysqli_error($con));
                $row = mysqli_fetch_assoc($search_result);
            ?>
            <!-- Form area for entering your registration number -->
            <div class="container text-center mt-4">
                <div class="card" style="display:inline-block">
                    <div class="card-title">
                        <h1 class="display-4">
                            Status : <?php echo $row['status']; ?>
                        </h1>
                    </div>
                    <div class="card-body">
                        <p class="lead">Name: <?php echo $row['name']; ?></p>
                        <p class="lead">Registration No. : <?php echo $row['regd_no']; ?></p>
                        <a href="../certificates/<?php echo $row['name'] ?>.pdf" class="btn btn-success">Download certificate</a>  
                        <a href="back.php" class="btn btn-primary">Go back to the main page!</a> 
                    </div>
                </div>
            </div><br>


            <!--==================== Footer ========================-->
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

	</body>
</html>