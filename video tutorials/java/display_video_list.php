<?php 
	session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Knowledge Dot</title>

<!-- Font Awesome Icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
		<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">

  <!----font-awsome start-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">




<link rel="stylesheet" type="text/css" href="../..//css/admin.css">
    
    <style>
        /* Section Styling */
        .programming-languages {
            background-color: #f8f9fa;
        }

        .divider {
            width: 60px;
            height: 4px;
            background-color: rgb(0, 0, 0);
            margin-top: 10px;
        }

        /* Animation Effects */
        .card {
            transition: transform 0.3s ease-in-out;
        }

        .card:hover {
            transform: scale(1.05);
        }
    </style>




</head>
<body>

<?php 
        include 'conn.inc.php';
        include "../../frontend_includes/frontend_navbar.php";
    ?>

<section class="course-videos py-5 bg-light" data-aos="fade-in">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold text-uppercase text-dark">
                <b>Videos for <?php echo isset($_GET['course_name']) ? htmlspecialchars($_GET['course_name']) : "Unknown Course"; ?></b>
            </h2>
            <p class="text-muted fs-5">
                Watch the available videos for 
                <b><?php echo isset($_GET['course_name']) ? htmlspecialchars($_GET['course_name']) : "this course"; ?></b> 
                and enhance your learning experience at your own pace!
            </p>
            <div class="divider mx-auto"></div>
        </div>
    </div>
</section>

<div class="container">
    <div class="row d-flex flex-row flex-nowrap" style="gap: 1rem;">
        <?php 
        $course_name = $_GET['course_name'];
        $q = "SELECT * FROM videos WHERE course_name='$course_name'";
        $query = mysqli_query($con, $q);

        while ($row = mysqli_fetch_array($query)) {
        ?> 

        <div class="col-12 col-md-4 col-sm-6 flex-shrink-0" style="width: 18rem;" data-aos="zoom-in">
            <div class="card shadow h-100 py-2 stat-card stat-card-dark">
                <div class="news-img text-center">
                    <img class="img-fluid" style="max-height: 150px; object-fit: cover; border-radius: 10px;" src="../../uploadimg/thumbnail/<?php echo $row['video_image']; ?>" alt="Video Thumbnail">
                </div>
                <div class="text-center mt-3">
                    <div class="text-xs font-weight-bold text-dark text-uppercase mb-1">
                        <?php echo $row['video_name']; ?>
                    </div>
                </div>
                <div class="text-center">
                    <a href="java_videos.php?video_id=<?php echo $row['video_id'] ?>&course_name=<?php echo $row['course_name'] ?>" class="btn btn-primary btn-sm">
                        Watch Videos
                    </a>
                </div>
            </div>
        </div>

        <?php } ?> <!-- Close while loop -->

    </div> <!-- Close row -->
</div> <!-- Close container -->

<!-- Padding for spacing -->
<div class="container" style="padding-bottom: 50px;"></div>

	

<!-- footer section starts -->

    <?php include "../../Frontend_includes/frontend_footer.php"; ?>
		<!-- footer section ends -->

</body>
</html>