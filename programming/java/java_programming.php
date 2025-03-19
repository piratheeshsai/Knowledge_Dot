<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <title>Knowledge Dot</title>

    <!-- Bootstrap 4 CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="css/admin.css">
    <link rel="stylesheet" type="text/css" href="../../css/admin.css">

    <style>
        .sidebar {
            position: fixed;
            width: 250px;
            height: 100vh;
            overflow-y: auto;
            background-color: #343a40;
            color: white;
            padding-top: 20px;
        }

        /* Scrollbar Styling */
        .sidebar::-webkit-scrollbar {
            width: 8px;
        }

        .sidebar::-webkit-scrollbar-thumb {
            background-color: rgba(255, 255, 255, 0.5);
            border-radius: 10px;
        }

        .sidebar::-webkit-scrollbar-track {
            background: rgba(255, 255, 255, 0.2);
        }
    </style>
</head>

<body>
    <?php require("../../Frontend_includes/frontend_navbar.php"); ?>

    <!-- Sidebar -->
    <div class="sidebar" id="sidebarleftmenu">
        <ul class="sidebar-menu">
            <li class="active">
                <a href="#">
                    <i class="fas fa-tachometer-alt"></i>
                    <span>Home</span>
                </a>
            </li>

            <?php
            $con = mysqli_connect('localhost', 'root');
            mysqli_select_db($con, 'uniquedeveloper');
            $course_name = $_GET['course_name'];

            $q = "SELECT * FROM courses WHERE course_name='$course_name'";
            $result = mysqli_query($con, $q);
            while ($res = mysqli_fetch_array($result)) {
            ?>
                <li>
                    <form action="fetch_main_content.php" method="POST" style="display: inline;">
                        <input type="hidden" name="txt1" value="<?php echo $res['id']; ?>">
                        <button type="submit" class="sidebar-item" style="background: none; border: none; color: white; text-align: left; width: 100%; display: flex; align-items: center; padding: 10px;">
                            <i class="fas fa-book" style="margin-right: 10px;"></i>
                            <span><?php echo $res['topic_name']; ?></span>
                        </button>
                    </form>
                </li>
            <?php } ?>
        </ul>
    </div>

    <!-- Main Content -->
    <div class="main-content">
        <div class="content">
            <p>
                <?php
                if (isset($_SESSION['message'])) {
                    echo $_SESSION['message'];
                }
                ?>
            </p>
        </div>
    </div>

    <!-- YouTube Subscribe Button
    <div id="yt" class="g-ytsubscribe" data-channelid="UCxwf74gbHaiHHJ7XxZ51JyA" data-layout="full" data-count="default"></div> -->

    <script type="text/javascript">
        var li = document.getElementsByTagName('li')[0].style = "color:red";
    </script>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</body>

</html>
