<?php 
session_start();
include 'conn.inc.php';
require 'comments.inc.php';

if (!isset($_SESSION['username'])) {
    header('location:../../login.php');    
}
date_default_timezone_set('Asia/Kolkata');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Knowledge_Dot</title>

    <!-- Bootstrap 4 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">


<!-- Font Awesome Icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">


  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">

  <!----font-awsome start-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<link rel="stylesheet" type="text/css" href="../..//css/admin.css">
    




    <!-- Custom Styles -->
    <style>
        /* General Styling */
		body {
            font-family: 'Poppins', sans-serif;
            background-color: #f8f9fa;
            padding-top: 70px; /* Ensures navbar does not overlap */
        }

        /* Video Section */
        .video-container {
            border: 3px solid #000; /* Changed to black */
            border-radius: 8px;
            box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.1);
            padding: 15px;
            background-color: #fff;
        }
        .video-container iframe {
            border-radius: 6px;
            width: 100%;
            height: 415px;
            box-shadow: 1px 1px 8px rgba(0, 0, 0, 0.2);
        }

        /* Comment Section */
        .comment-section {
            background-color: #e9ecef;
            border-radius: 8px;
            padding: 15px;
        }
        .comment-section textarea {
            width: 100%;
            height: 80px;
            border-radius: 5px;
            padding: 8px;
            border: 1px solid #ccc;
        }
        .comment-section button {
            margin-top: 10px;
            background-color: #007bff;
            color: white;
            border-radius: 5px;
            padding: 8px 15px;
            border: none;
        }
        .comment-section button:hover {
            background-color: #0056b3;
        }

        /* Popular Videos */
        .popular-videos {
            padding: 15px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.1);
        }
        .popular-videos img {
            border-radius: 5px;
        }
        .popular-videos h5 {
            text-align: center;
            font-weight: 600;
            margin-bottom: 15px;
        }
    </style>
</head>

<body>
    <?php include "../../frontend_includes/frontend_navbar.php"; ?>

    <div class="container-fluid mt-4">
        <div class="row justify-content-center">
            <section class="col-md-7">
                <div class="video-container">
                    <iframe frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen
                        <?php  
                            $_SESSION['vid'] = $_GET['video_id'];
                            $video_id = $_GET['video_id'];
                            $sql = "SELECT * FROM videos WHERE video_id='$video_id'";
                            $result = mysqli_query($con, $sql);
                            while ($row = mysqli_fetch_array($result)) {
                        ?>
                        src="<?php echo $row['video_path']; ?>"
                        <?php } ?>></iframe>
                </div>
            </section>



            <!-- Popular Videos -->
            <aside class="col-md-4 ml-5 mt-4">
                <div class="popular-videos">
                    <h5>Popular Videos</h5>
                    <table class="table table-hover table-borderless">
                        <tbody>
                            <?php 
                                $course_name = $_GET['course_name'];
                                $sql = "SELECT * FROM videos WHERE course_name='$course_name'";
                                $result = mysqli_query($con, $sql);
                                while ($row = mysqli_fetch_array($result)) {
                            ?>
                            <tr>
                                <td>
                                    <a href="#"><img src="../../uploadimg/thumbnail/<?php echo $row['video_image']; ?>" height="100" width="150"></a>
                                </td>
                                <td><?php echo $row['video_name']; ?></td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </aside>
        </div>
    </div>

    <!-- Footer -->
    <?php include "../../Frontend_includes/frontend_footer.php"; ?>
</body>
</html>
