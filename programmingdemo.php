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

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    

    <!----Linking google fonts-->
	<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">

    <!----font-awsome start-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="css/admin.css"> 
    <link rel="stylesheet" type="text/css" href="css/style.css"> 

    
	</head>

<body>

<?php
 
   require("./Frontend_includes/frontend_navbar.php");    //navigation bar included
 
 ?>


<!-- Programming Languages Section Start -->
<section class="programming-languages py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold text-uppercase text-dark"><b>Programming Languages</b></h2>
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
    background-color:rgb(0, 0, 0);
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
                <div class="card shadow h-100 py-2 stat-card stat-card-dark">
                    <div class="card-body">
                        <div class="news-img text-center">
                            <img src="<?php echo $res['language_image']; ?>" class="img-fluid" style="max-height: 150px; object-fit: cover; border-radius: 10px;">
                        </div>
                        <div class="text-center mt-3">
                            <div class="text-xs font-weight-bold text-dark text-uppercase mb-1">
                                <?php echo $res['language_name']; ?>
                            </div>
                        </div>
                        <div class="text-gray-800 text-center">
                            <p><?php echo $res['language_description']; ?></p>
                        </div>
                        <div class="text-center">
                            <a href="programming/java/java_programming.php?course_name=<?php echo $res['language_name'] ?>" class="btn btn-dark btn-sm">
                                Start Reading...
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>




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