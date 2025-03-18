<?php 
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Knowledge Dot</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">

    <!-- Bootstrap and Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">

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

    <div class="container-fluid" data-aos="fade-up"></div>

    <!-- Programming Languages Section Start -->
    <section class="programming-languages py-5 bg-light" data-aos="fade-in">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="fw-bold text-uppercase text-dark"><b>Tutorials Library</b></h2>
                <p class="text-muted fs-5">
                    Explore a wide range of programming topics with our engaging tutorials. <br> 
                    Start learning today and level up your coding skills!
                </p>
                <div class="divider mx-auto"></div>
            </div>
        </div>
    </section>

    <br><br><br>
    <div class="container">
        <div class="row d-flex flex-row flex-nowrap" style="gap: 1rem;">
            <?php 
                $sql = "SELECT * FROM video_info";
                $result = mysqli_query($con, $sql);
                while ($row = mysqli_fetch_array($result)) {
            ?> 
            <div class="col-12 col-md-4 col-sm-6" style="width: 18rem;" data-aos="zoom-in">
                <div class="card shadow h-100 py-2 stat-card stat-card-dark">
                    <div class="news-img text-center">
                        <img src="<?php echo $row['image']; ?>" class="img-fluid" style="max-height: 150px; object-fit: cover; border-radius: 10px;" alt="Course Image">
                    </div>
                    <div class="text-center mt-3">
                        <div class="text-xs font-weight-bold text-dark text-uppercase mb-1">
                            <?php echo $row['course_name']; ?>
                        </div>
                    </div>
                    <div class="text-center">
                        <a href="display_video_list.php?course_name=<?php echo $row['course_name']; ?>" class="btn btn-primary btn-sm">
                            Watch Videos
                        </a>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>

    <div class="container" style="padding-bottom: 50px;"></div> <!-- Adjust as needed -->

    <!-- Footer -->
    <?php include "../../Frontend_includes/frontend_footer.php"; ?>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

    <script>
        AOS.init({
            duration: 1000, // Animation duration
            easing: 'ease-in-out',
            once: true
        });
    </script>
</body>
</html>
