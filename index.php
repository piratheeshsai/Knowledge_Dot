<?php


session_start();

if (!isset($_SESSION['username'])) {
	header('location:login.php');
	# code...

}



?>


<!DOCTYPE html>
<html>
<head>
	<link href="https://fonts.googleapis.com/css?family=Aleo" rel="stylesheet">

	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
	<title>Knowledge Dot</title>
	<!----magnific popup css file for work section -->
	<link rel="stylesheet" type="text/css" href="css/magnific-popup.css">

	<!----owlcarousel css file for our team section -->
	<link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
	<link rel="stylesheet" type="text/css" href="css/owl.theme.default.min.css">


	<!----Linking google fonts-->
	<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">

	<!----font-awsome start-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<!----font-awsome ends-->

		<!----css file link-->
	<link rel="stylesheet" type="text/css" href="css/style.css">

	   <!----favicon setting-->
	<link rel="shortcut icon" type="text/css" href="img/mylogo.png">

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<!----magnific popup js file for work section -->
	<script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>

	<!----owlcarousel js file for our team section -->
	<script type="text/javascript" src="js/owl.carousel.min.js"></script>
	<script type="text/javascript" src="js/owl.carousel.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 
	<!----------email notification-------->

<!-- <link rel="stylesheet" href="assets/tether/tether.min.css">
 
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css"> -->



	<style type="text/css">
	
	.servicebody
	{
		

	}


	html
	{
		scroll-behavior: smooth;
	}
	</style>

</head>
<body onload="myfunction()">
		   <!---preloader starts	----->

		   <div id="loading"></div>

		   <!---preloader Ends	----->


			<!---Navigation Starts	----->

	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<!------Responsive Button---->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navi">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>


				</button>

				<h1 style="color: white;margin-top: 10px;" id="myhead">Knowledge Dot</h1>
			</div>
			<div class="collapse navbar-collapse" id="navi">
                 <!------Navigation menus starts---->
				<ul class="nav navbar-nav navbar-right">
					<li> <a href="">Home</a></li>
					<li> <a href="#myservice_section">Our Service</a></li>
					<li> <a href="#our-members">Team</a></li>
					<li> <a href="logout.php" id="our-location" class="btn-success" >Logout</a></li>
				</ul>
	                 <!------Navigation menus ends---->
			</div>
		</div>
	</nav>
			<!---Navigation Ends	----->

			<!---Slider Section starts	------->
			<section class="slider text-center" id="slider">
				<div class="slider-overlay">
					<div class="slider-content">
						<div class="icons">

							<i class="fa fa-apple"></i>
							<i class="fa fa-android"></i>
							<i class="fa fa-windows"></i>
						</div>
						<br>
						<div class="text">      <!-- jquery typed effect -->
							
						</div>
							<div class="cta-div">
								<a href="" class="btn1">CONTACT US</a>
								<a href="#myservice_section" class="btn2">LEARN TODAY</a>
							</div>
							<br><br>
					</div>
				</div>
			</section>

			<!---Slider Section ends------->

			<!---Login Start------->

			<div class="modal fade modal-dialog-centered" id="mymodal">
				<div class="modal-dialog ">
					<div class="modal-content">
						<h3 id="login-heading">Login</h3>
						
					<div class="modal-body" >
						<div class="left-box">
						<form method="POST" action="validation.php">
							<div class="form-group">
								<label><i class="fa fa-user fa-2x"></i>Username :</label>
								<input type="text" name="name" class="form-control">

								<label><i class="fa fa-lock fa-2x"></i>Password :</label>
								<input type="password" name="password" class="form-control">
								<button id="btn-login" type="submit">Login</button>
								
							</div>
							<div class="register">
								<h2>Don't have an account?&nbsp<span id="create-account"><a href="signup.html">Create</span></a> </h2>
							</div>
							
						</form>
					</div>
					<div class="right-box">
						<span class="signinwith">Sign in With <br> Social Networks</span>

						<button class="social facebook">Log in with Facebook</button>
						<button class="social twitter">Log in with twitter</button>
						<button class="social google">Log in with gmail</button>
					</div>
						
					</div>
					
						
				</div>
			</div>
		</div>

         <!---Login Ends------->

         <!---Our Services Section Start------->

         <br><br>
         <div class="container-fluid servicebody" id="myservice_section">
         <div class="service-are" id="service">
         	<div class="row">
         		<div class="col-xs-12">
         			<div class="section-title text-center">
         				<h2><b>SERVICES</b></h2>
         				<p>
         					This is Our Serices Theses are The Services Provided by Code Worriors
         				</p>
         			</div>
         		</div>
         	</div>
         	<div class="row">
         		<div class="col-md-4 col-sm-6 col-xs-12">
         			<div class="service-wrap text-center">
         				<div class="service-icon">
         					<i class="fa fa-leaf"></i>
         				</div>
         				<h3><a href="programmingdemo.php">COURSES</a></h3>
         				<p>
         					Here you will find all the lecture tutorials related to programming languages 
         					like JAVA,PYTHON,ANDROID etc
         				</p>
         			</div>
         		</div>

         		<div class="col-md-4 col-sm-6 col-xs-12">
         			<div class="service-wrap text-center">
         				<div class="service-icon">
         					<i class="fa fa-laptop"></i>
         				</div>
         				<h3><a href="video tutorials\java\display_video_courses.php">CLASSES</a></h3>
         				<p>
         					Here you will find all the videos tutorials related to programming languages 
         					like JAVA,PYTHON,ANDROID etc
         				</p>
         			</div>
         		</div>

         		<div class="col-md-4 col-sm-6 col-xs-12">
         			<div class="service-wrap text-center">
         				<div class="service-icon">
         					<i class="fa fa-laptop"></i>
         				</div>
         				<h3><a href="online_quize/quizhome.php">EXAMS</a></h3>   <!--  exercise/exercise.php -->
         				<p>
         					Here you will find problem programs for practice and their implementation also which will improve your coding skill
         				</p>
         			</div>
         		</div>
         	</div>
         </div>
     </div>

			<!---Our Services Section Ends------->

			<!---Emailnotification Section Start------->



			<!---Emailnotification Section Start------->


			<!---Our Services Section Ends------->


			<!---Our Services Section Ends------->



			<!---Our Team Section Start------->
			<br><br><br>
			
<div class="responsive-container-block outer-container">
  <div class="responsive-container-block inner-container">
    <p class="text-blk section-head-text">
      Meet Our Expert Team
    </p>
    <p class="text-blk section-subhead-text">
	EEY4189 Software Design in Group
    </p>
    <div class="responsive-container-block">
      <div class="responsive-cell-block wk-desk-3 wk-ipadp-3 wk-tab-6 wk-mobile-12 team-card-container">
        <div class="team-card">
          <div class="img-wrapper">
            <img class="team-img" src="img/dichu.png">
          </div>
          <p class="text-blk name">
            Ditharshan Yogarajah
          </p>
          <p class="text-blk position">
		    Team Captain
          </p>
          <div class="social-media-links">
            <a href="https://x.com/Ditharshan_Y?t=ND-IicVuoIj7LSldIz6ArQ&s=08" target="_blank">
              <img src="img/twitter.png">
            </a>
            <a href="https://www.facebook.com/ditharshan.yoga" target="_blank">
              <img src="img/facebook.png">
            </a>
            <a href="https://www.instagram.com/ditharshan_yogarajah/?igsh=MWo3cGlpczJpbnNsbA%3D%3D" target="_blank">
              <img src="img/insta.png">
            </a>
            <a href="https://www.linkedin.com/in/ditharshan-yogarajah-277b95216/ target="_blank">
              <img src="img/linkedin.png">
            </a>
          </div>
        </div>
      </div>
      <div class="responsive-cell-block wk-desk-3 wk-ipadp-3 wk-tab-6 wk-mobile-12 team-card-container">
        <div class="team-card">
          <div class="img-wrapper">
            <img class="team-img" src="img/santhos.png">
          </div>
          <p class="text-blk name">
            N.Santhos
          </p>
          <p class="text-blk position">
            Team Member
          </p>
		  <div class="social-media-links">
            <a href="http://www.twitter.com/" target="_blank">
              <img src="img/twitter.png">
            </a>
            <a href="http://www.facebook.com/" target="_blank">
              <img src="img/facebook.png">
            </a>
            <a href="http://www.instagram.com/" target="_blank">
              <img src="img/insta.png">
            </a>
            <a href="http://www.gmail.com/" target="_blank">
              <img src="img/linkedin.png">
            </a>
          </div>
        </div>
      </div>
      <div class="responsive-cell-block wk-desk-3 wk-ipadp-3 wk-tab-6 wk-mobile-12 team-card-container">
        <div class="team-card">
          <div class="img-wrapper">
            <img class="team-img" src="img/denish.png">
          </div>
          <p class="text-blk name">
            N. Denish Dilshan
          </p>
          <p class="text-blk position">
		   Team Member
          </p>
          <div class="social-media-links">
            <a href="http://www.twitter.com/" target="_blank">
              <img src="img/twitter.png">
            </a>
            <a href="http://www.facebook.com/" target="_blank">
              <img src="img/facebook.png">
            </a>
            <a href="http://www.instagram.com/" target="_blank">
              <img src="img/insta.png">
            </a>
            <a href="http://www.gmail.com/" target="_blank">
              <img src="img/linkedin.png">
            </a>
          </div>
        </div>
      </div>
      <div class="responsive-cell-block wk-desk-3 wk-ipadp-3 wk-tab-6 wk-mobile-12 team-card-container">
        <div class="team-card">
          <div class="img-wrapper">
            <img class="team-img" src="img/pirathees.png">
          </div>
          <p class="text-blk name">
            I. Pirathees
          </p>
          <p class="text-blk position">
		  Team Member
          </p>
		  <div class="social-media-links">
            <a href="http://www.twitter.com/" target="_blank">
              <img src="img/twitter.png">
            </a>
            <a href="http://www.facebook.com/" target="_blank">
              <img src="img/facebook.png">
            </a>
            <a href="http://www.instagram.com/" target="_blank">
              <img src="img/insta.png">
            </a>
            <a href="http://www.gmail.com/" target="_blank">
              <img src="img/linkedin.png">
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

			<!---Our Team Section Ends------->
<!-- =============================================================================================================================== -->




<!-- =============================================================================================================================== -->
			<!---FAQs Section Start------->

			<!---FAQs Section Ends------->


			<!---Contact us Section Start------->


<!------ Include the above in your HEAD tag ---------->


			<!---Contact us Section Ends------->




 			<!---footer Section Start	----->
			 <div class="footer-dark">
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-3 item">
                        <h3>Services</h3>
                        <ul>
                            <li><a href="#myservice_section">Course</a></li>
                            <li><a href="#myservice_section">Class</a></li>
                            <li><a href="#myservice_section">Exams</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-6 col-md-3 item">
                        <h3>Quick Links</h3>
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Services</a></li>
                            <li><a href="#">Team</a></li>
                        </ul>
                    </div>
                    <div class="col-md-6 item text">
                        <h3>Code Warriors</h3>
                        <p>We are the EEY4189 Software Design in Group Project Team. We Create this systerm for online education
						</p>
                    </div>
                    <div class="col item social"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-linkedin"></i></a></a><a href="#"><i class="fa fa-instagram"></i></a></div>
                </div>
                <p class="copyright">Code Warriors © 2025</p>
            </div>
        </footer>
    </div>

 			<!---footer Section Ends	----->



  			<!---This is script section------->

<script type="text/javascript">
	
	var preloader=document.getElementById('loading');
	function myfunction()
	 {
		preloader.style.display='none';
	}


	function addButton() {
		var body=document.getElementsByTagName('body')[0];
		var myfaq1=document.getElementById('myfaq');
		var btn=document.createElement('button');
		btn.innerHTML='sunil';
		myfaq1.appendChild(btn);
		body.appendChild(myfaq);
	}



</script>

<script src="js/jquery.ripples-min.js" type="text/javascript"></script>
<script src="js/typed.min.js" type="text/javascript"></script>
<script src="js/main.js" type="text/javascript"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>





<!--   <script src="assets/popper/popper.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/smoothscroll/smooth-scroll.js"></script>
  <script src="assets/theme/js/script.js"></script> -->

</body>
</html>