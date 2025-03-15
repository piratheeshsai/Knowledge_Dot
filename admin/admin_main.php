<?php 
  include("classes/admin.php");
  $admin = new admin;
  $userd = $admin->show_users();
?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Admin dashboard">
  <meta name="author" content="">
  <link rel="icon" href="../../favicon.ico">

  <title>Admin Panel</title>

  <!-- Bootstrap 4 CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

  <link rel="stylesheet" type="text/css" href="css/admin.css"> 
</head>

<body>
  <!-- Custom Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light navbar-custom fixed-top">
    <a class="navbar-brand" href="#">
      <i class="fas fa-graduation-cap"></i>
      <span>Knowledge Dot</span>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <!-- Search Form -->

        
        <!-- Divider -->
        <div class="topbar-divider d-none d-sm-block"></div>
    
       
        
        <!-- User Information -->
        <li class="nav-item dropdown no-arrow">
          <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="mr-2 d-none d-lg-inline text-gray-600 small">Admin User</span>
            
          </a>
          <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
            <a class="dropdown-item" href="#">
              <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
              Profile
            </a>
            <a class="dropdown-item" href="#">
              <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
              Settings
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="../login.php">
              <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
              Logout
            </a>
          </div>
        </li>
      </ul>
    </div>
  </nav>

    <!-- Custom Sidebar -->
    <div class="sidebar">
    <ul class="sidebar-menu">
      <li class="active">
        <a href="#">
          <i class="fas fa-tachometer-alt"></i>
          <span>Dashboard</span>
        </a>
      </li>
      <li>
        <a href="/knowledge_dot/admin/manage_courses/manage_courses.php">
          <i class="fas fa-book"></i>
          <span>Manage Courses</span>
        </a>
      </li>
      <li>
        <a href="/knowledge_dot/admin/manage_quiz/manage_quiz.php">
          <i class="fas fa-question-circle"></i>
          <span>Manage Quiz</span>
        </a>
      </li>
      <li>
        <a href="manage_videos/manage_videos.php">
          <i class="fas fa-video"></i>
          <span>Manage Videos</span>
        </a>
      </li>
      <li>
        <a href="#">
          <i class="fas fa-comments"></i>
          <span>Manage Comments</span>
        </a>
      </li>
      <li>
        <a href="#">
          <i class="fas fa-users"></i>
          <span>Manage Users</span>
        </a>
      </li>
      <li>
        <a href="#">
          <i class="fas fa-chart-pie"></i>
          <span>Reports</span>
        </a>
      </li>
      <li>
        <a href="../login.php">
          <i class="fas fa-sign-out-alt"></i>
          <span>Logout</span>
        </a>
      </li>
    </ul>
  </div>


  <!-- Main Content -->
  <div class="main-content">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
    </div>

    <!-- Stats Cards Row -->
    <div class="row">
      <!-- Courses Card -->
      <div class="col-xl-3 col-md-6 mb-4">
        <div class="card shadow h-100 py-2 stat-card stat-card-primary">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Courses</div>
                <div class="h5 mb-0 font-weight-bold text-gray-800"><?php $admin->display_course_count(); ?></div>
              </div>
              <div class="col-auto">
                <i class="fas fa-book fa-2x text-gray-300 icon"></i>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Videos Card -->
      <div class="col-xl-3 col-md-6 mb-4">
        <div class="card shadow h-100 py-2 stat-card stat-card-success">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Total Videos</div>
                <div class="h5 mb-0 font-weight-bold text-gray-800"><?php $admin->display_video_count(); ?></div>
              </div>
              <div class="col-auto">
                <i class="fas fa-video fa-2x text-gray-300 icon"></i>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Users Card -->
      <div class="col-xl-3 col-md-6 mb-4">
        <div class="card shadow h-100 py-2 stat-card stat-card-warning">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Registered Users</div>
                <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo count($userd); ?></div>
              </div>
              <div class="col-auto">
                <i class="fas fa-users fa-2x text-gray-300 icon"></i>
              </div>
            </div>
          </div>
        </div>
      </div>

    <!-- Content Row -->
    <div class="row">
      <!-- Main Cards -->
      <div class="col-lg-6 mb-4">
        <div class="card shadow">
          <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Manage Courses</h6>
            <div class="dropdown no-arrow">
              <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                <div class="dropdown-header">Course Actions:</div>
                <a class="dropdown-item" href="#">Add New Course</a>
                <a class="dropdown-item" href="manage_courses/manage_courses.php">View All Courses</a>
              </div>
            </div>
          </div>
          <div class="card-body">
            <div class="text-center">
              <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;" src="../uploadimg/file3.png" alt="Courses Image">
            </div>
            <p>Add, edit, or remove courses from your learning platform. Organize your educational content efficiently.</p>
            <a href="manage_courses/manage_courses.php" class="btn btn-primary">
              <i class="fas fa-book mr-2"></i> Go to Courses
            </a>
          </div>
        </div>
      </div>

      <div class="col-lg-6 mb-4">
        <div class="card shadow">
          <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-danger">Manage Videos</h6>
            <div class="dropdown no-arrow">
              <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                <div class="dropdown-header">Video Actions:</div>
                <a class="dropdown-item" href="#">Upload New Video</a>
                <a class="dropdown-item" href="manage_videos/manage_videos.php">View All Videos</a>
              </div>
            </div>
          </div>
          <div class="card-body">
            <div class="text-center">
              <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;" src="../uploadimg/file4.png" alt="Videos Image">
            </div>
            <p>Upload, organize and manage your educational videos. Create playlists and track video performance.</p>
            <a href="manage_videos/manage_videos.php" class="btn btn-danger">
              <i class="fas fa-video mr-2"></i> Go to Videos
            </a>
          </div>
        </div>
      </div>
    </div>

    <!-- Users Table -->
    <div class="card shadow mb-4">
      <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary" id="users">Users List</h6>
        <div>
        </div>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered table-hover" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Password</th>
                <th>Email</th>
             
              </tr>
            </thead>
            <tbody>
              <?php foreach ($userd as $userdata) { ?>
              <tr>
                <td><?php echo $userdata['id']; ?></td>
                <td><?php echo $userdata['username']; ?></td>
                <td><?php echo $userdata['password']; ?></td>
                <td><?php echo $userdata['email']; ?></td>
               
              </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>

    <!-- Quiz Section -->

  <div class="col-lg-6 mb-8 px-10"> <!-- Increased width to col-lg-6 and adjusted padding -->
    <div class="card shadow">
      <div class="card-header py-3">
        <h5 class="m-0 font-weight-bold text-success">Manage Quiz</h5> <!-- Slightly larger heading -->
      </div>
      <div class="card-body">
        <div class="text-center">
          <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 18rem;" src="../uploadimg/file6.png" alt="Quiz Image">
        </div>
        <p class="text-lg">Create and manage quizzes for your courses. Set up questions, answers, and scoring.</p>
        <a href="manage_quiz/manage_quiz.php" class="btn btn-success btn-lg btn-block">
          <i class="fas fa-question-circle mr-2"></i> Go to Quiz
        </a>
      </div>
    </div>
  </div>


 

  <!-- Bootstrap 4 JS and dependencies -->
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"></script>

  <script>
    // Toggle sidebar on mobile
    $(document).ready(function() {
      $('.navbar-toggler').on('click', function() {
        $('.sidebar').toggleClass('active');
        $('.main-content').toggleClass('active');
      });
    });
  </script>
</body>
</html>