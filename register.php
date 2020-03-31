<!DOCTYPE HTML>
<html>
	<head>
		<title>Register</title>
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
						<a href="#two">Team</a>
						<a href="#three">Projects</a>
						<a href="#blog">Blog</a>
						<a href="https://docs.google.com/forms/d/e/1FAIpQLScP7xq1G0GnZFgWvs4FzAFcEUT5y2ridVtIaIeHWoTyFEmH4w/viewform?usp=sf_link">Contact Us</a>

					</nav>
					<a href="#navPanel" class="navPanelToggle"><span class="fa fa-bars"></span></a>
				</div>
			</header>


<div class="container-fluid">
    <div class="container">
      <h2 class="text-center" id="title">Spectrum Internship Drive</h2>
      <h3 class="text-center" id="title">Register here for the internship</h3>
      <hr>
      <div class="row">
        <div class="col-md-5">
          <form role="form" method="post" action="signup.php" enctype="multipart/form-data">
            <fieldset>              
              <p class="text-uppercase pull-center"> SIGN UP.</p> 
              <div class="form-group">
                <input type="text" name="fname" id="fname" class="form-control input-lg" placeholder="Full name" required>
              </div>
              <div class="form-group">
                <input type="text" name="uname" id="uname" class="form-control input-lg" placeholder="Username" required>
              </div>

              <div class="form-group">
                <input type="email" name="email" id="email" class="form-control input-lg" placeholder="Email Address" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required>
              </div>
              <div class="form-group">
                <input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
  title="Must contain at least one  number and one uppercase and lowercase letter, and at least 8 or more characters" required>
              </div>
                <div class="form-group">
                <input type="password" name="password" id="password" class="form-control input-lg" placeholder="Confirm Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
  title="Must contain at least one  number and one uppercase and lowercase letter, and at least 8 or more characters" required>
              </div>
              <div class="form-group">
                <input type="number" name="age" id="age" class="form-control input-lg" placeholder="Age" pattern="[0-9]" required>
              </div>

              <div class="form-group">
                <input type="file" name="dp" id="dp" class="form-control input-lg" placeholder="Insert Image" required>
              </div>

              <div class="form-check">
                <label class="form-check-label">
                  <input type="checkbox" class="form-check-input" onclick="chk(this)" required>
                  By Clicking register you agree to our <a href="#">policy & terms</a>
                </label>
                </div>
              <div>
                    <input type="submit" id="b" class="btn btn-lg btn-primary" value="Register" style="background-color: #5385c1;">
              </div>
            </fieldset>
          </form>
        </div>
        
        <div class="col-md-2">
          <!-------null------>
        </div>
        
        <div class="col-md-5">
            <form role="form" method="post" action="login.php">
            <fieldset>              
              <p class="text-uppercase"> Login (Only for Admins)</p> 
                
              <div class="form-group">
                <input type="text" name="uname" id="uname" class="form-control input-lg" placeholder="Username" required>
              </div>
              <div class="form-group">
                <input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password" required>
              </div>
              <div>
                <input type="submit" class="btn btn-md btn-primary" value="Sign In" style="background-color: #5385c1">
              </div>
                 
            </fieldset>
        </form> 
        </div>
      </div>
    </div>
  </div>
</section><br>
		

		<!-- Footer -->
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