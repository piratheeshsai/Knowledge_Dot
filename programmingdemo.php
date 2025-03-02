<?php 
	 session_start();

 ?>

<!DOCTYPE html>
<html>
<head>
<title>Knowledge Dot</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Bootstrap 4 CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">

    
    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="css/admin.css"> 
    <link rel="stylesheet" type="text/css" href="css/style.css"> 
	</head>

	<!-- <style type="text/css">
		.context-dark, .bg-gray-dark, .bg-primary {
    color: rgba(255, 255, 255, 0.8);
}

.footer-classic a, .footer-classic a:focus, .footer-classic a:active {
    color: #ffffff;
}
.nav-list li {
    padding-top: 5px;
    padding-bottom: 5px;
}

.nav-list li a:hover:before {
    margin-left: 0;
    opacity: 1;
    visibility: visible;
}

ul, ol {
    list-style: none;
    padding: 0;
    margin: 0;
}

.social-inner {
    display: flex;
    flex-direction: column;
    align-items: center;
    width: 100%;
    padding: 23px;
    font: 900 13px/1 "Lato", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
    text-transform: uppercase;
    color: rgba(255, 255, 255, 0.5);
}
.social-container .col {
    border: 1px solid rgba(255, 255, 255, 0.1);
    display: inline-block; 
}
.nav-list li a:before {
    content: "\f14f";
    font: 400 21px/1 "Material Design Icons";
    color: #4d6de6;
    display: inline-block;
    vertical-align: baseline;
    margin-left: -28px;
    margin-right: 7px;
    opacity: 0;
    visibility: hidden;
    transition: .22s ease;
}



.div1                           /* for title image*/
{
	margin-top: 10%;
   position: relative;
    height: 500px;
    width: 1263px;
    background:url(uploadimg/programming_image.png);
}


	</style> -->




<body>

	  <!-- Custom Navbar -->

	  <nav class="navbar navbar-expand-lg navbar-light navbar-custom fixed-top">
    <a class="navbar-brand" href="#">
        <i class="fas fa-graduation-cap"></i>
        <span>Knowledge Dot</span>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" 
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a class="nav-link" href="../../index.php">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="">Our Service</a></li>
            <li class="nav-item"><a class="nav-link" href="">Works</a></li>
            <li class="nav-item"><a class="nav-link" href="">Team</a></li>
            <li class="nav-item"><a class="nav-link" href="">About</a></li>
            <li class="nav-item"><a class="nav-link" href="">Career</a></li>
            

            <!-- Divider -->
            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- User Information Dropdown -->
            <li class="nav-item dropdown no-arrow">
                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $_SESSION['username']; ?></span>
                </a>
                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                    <a class="dropdown-item" href="#">
                        <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i> Profile
                    </a>
                    <a class="dropdown-item" href="#">
                        <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i> Settings
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="../login.php">
                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i> Logout
                    </a>
                </div>
            </li>
        </ul>
    </div>
</nav>


<!-- Banner Section -->
<div class="container-fluid mt-0 py-5 text-center bg-dark text-white">
    <h1 class="display-4" style="font-family: 'Poppins', sans-serif; font-weight: 700; font-style: italic;">
        Welcome to Knowledge Dot
    </h1>
</div>





<!-- Programming Languages Section Start -->
<section class="programming-languages py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold text-uppercase text-primary">Programming Languages</h2>
            <p class="text-muted fs-5">
                Explore the world of programming with our available languages. <br>
                Start learning today and enhance your coding skills!
            </p>
            <div class="divider mx-auto"></div>
        </div>
    </div>
</section>

<style>
/* Section Styling */
.programming-languages {
    background-color: #f8f9fa;
}

.divider {
    width: 60px;
    height: 4px;
    background-color: #007bff;
    margin-top: 10px;
}
</style>


 <!-- Programming Languages -->					
<div class="container">
    <div class="row d-flex flex-row flex-nowrap overflow-auto">
        <?php
        $con = mysqli_connect('localhost', 'root');
        mysqli_select_db($con, 'uniquedeveloper');

        $q = "SELECT * FROM programming_languages";
        $query = mysqli_query($con, $q);

        while ($res = mysqli_fetch_array($query)) {
        ?>
            <div class="col-12 col-md-4 col-sm-6 mb-4 flex-shrink-0" style="width: 18rem;">
                <div class="card shadow h-100 py-2 stat-card stat-card-primary">
                    <div class="card-body">
                        <div class="news-img text-center">
                            <img src="<?php echo $res['language_image']; ?>" class="img-fluid" style="max-height: 150px; object-fit: cover; border-radius: 10px;">
                        </div>
                        <div class="text-center mt-3">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                <?php echo $res['language_name']; ?>
                            </div>
                        </div>
                        <div class="text-gray-800 text-center">
                            <p><?php echo $res['language_description']; ?></p>
                        </div>
                        <div class="text-center">
                            <a href="programming/java/java_programming.php?course_name=<?php echo $res['language_name'] ?>" class="btn btn-primary btn-sm">
                                Start Reading...
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>


 				</div>
 				
 			</section>


 			<!---programming languages Section ends	----->


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


			
</body>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</html>