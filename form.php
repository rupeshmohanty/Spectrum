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
					<a href="index.php" class="logo">Spectrum</a>
					<nav id="nav">
						<a href="index.php">Home</a>
						<a href="contact_us.html">Contact Us</a>

					</nav>
					<a href="#navPanel" class="navPanelToggle"><span class="fa fa-bars"></span></a>
				</div>
			</header>


<div class="container-fluid">
    <div class="container">
      <h1 class="text-center" id="title">Spectrum Internship Drive</h1>
      <h3 class="text-center" id="title">Register here for the internship</h3>
      <hr>
      <div class="row">




        <div class="col-md-5">
          <form role="form" method="post" action="register.php" enctype="multipart/form-data">
            <fieldset>              
              <p class="text-uppercase pull-center"> REGISTER</p> 
              <div class="form-group">
                <label for="name">Your Name:</label>
                <input type="text" name="name" id="name" class="form-control input-lg" placeholder="Your Name" required>
              </div>

              <div class="form-group">
                <label for="uname">User Name:</label>
                <input type="text" name="uname" id="uname" class="form-control input-lg" placeholder="Select an User Name" required>
              </div>

              <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" name="password" id="password" class="form-control input-lg" placeholder="Set a Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
  title="Must contain at least one  number and one uppercase and lowercase letter, and at least 8 or more characters" required>
              </div>

              <div class="form-group">
                <label for="cpassword">Confirm Password:</label>
                <input type="password" name="cpassword" id="cpassword" class="form-control input-lg" placeholder="Confirm Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
  title="Must contain at least one  number and one uppercase and lowercase letter, and at least 8 or more characters" required>
              </div>

              <div class="form-group">
                <label for="email">E-mail Id:</label>
                <input type="email" name="email" id="email" class="form-control input-lg" placeholder="Email Address" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required>
              </div>
              <div class="form-group">
                <label for="branch">Branch:</label>
                <input type="text" name="branch" id="branch" class="form-control input-lg" placeholder="Branch" required>
              </div>
              <div class="form-group">
                <label for="year">Year:</label>
                <input type="text" name="year" id="year" class="form-control input-lg" placeholder="Year" required>
              </div>
                <div class="form-group">
                  <label for="Registration no.">Registration No.:</label>
                  <input type="text" name="registration_no" id="registration_no" class="form-control input-lg" placeholder="Registration No." maxlength="10" required>
              </div>
              <div class="form-group">
                <label for="skills">Skills:</label>
                <input type="text" name="skills" id="skills" class="form-control input-lg" placeholder="Skills" required>
              </div>

              <div class="form-group">
                <label for="resume">Your Resume:</label>
                <input type="file" name="resume" id="resume" class="form-control input-lg" placeholder="Insert Resume" required>
              </div>

              <div class="form-group">
                <label for="theme">Themes:</label>
                <select class="form-control" name="theme">
                	<option>Click here to see the options</option>
  					<option value="Web Development">Web Development</option>
  					<option value="Android app Development">Android app Development</option>
  					<option value="MATLAB">MATLAB</option>
  					<option value="Python">Python Development</option>
  					<option value="Image Processing">Image Processing</option>
            <option value="Embedded System">Embedded System</option>
            <option value="Data Science/ML">Data Science/ML</option>
            <option value="Graphic Designing">Graphic Designing</option>
				</select>
              </div>

              <div class="form-group">
                <label for="projects">Projects you have worked before:</label>
                <textarea type="text" name="projects" id="projects" class="form-control input-lg" placeholder="" rows="8" required></textarea>
              </div>

              <div class="form-group">
                <label for="achieve">What do you want achieve from this Internship?</label>
                <textarea type="text" name="achieve" id="achieve" class="form-control input-lg" placeholder="" required rows="8"></textarea>
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
            <form role="form" method="post" action="stud_login.php">
            <fieldset>              
              <p class="text-uppercase">Student Login:</p> 
                
              <div class="form-group">
              	<label for="email">E-mail:</label>
                <input type="email" name="email" id="email" class="form-control input-lg" placeholder="E-mail" required>
              </div>
              <div class="form-group">
              	<label for="password">Password:</label>
                <input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password" required>
              </div>
              <div>
                <input type="submit" class="btn btn-md btn-primary" value="Sign In" style="background-color: #5385c1;">
              </div>
                 
            </fieldset>
        </form> 
        </div>
        
      </div>
    </div>
  </div>
</section><br>
		

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
