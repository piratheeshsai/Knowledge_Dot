
<!DOCTYPE html>
<html>
<head>
	<title></title>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">


  <link rel="stylesheet" type="text/css" href="../..//css/admin.css">

</head>

<body>
	
<!-- 

 <div class="container-fluid" style="margin-top: 50px;" >
      <div class="row">
<!-- ========================================================================================================================== -->

<!-- sidebar starts -->
<nav class="navbar navbar-expand-lg navbar-light navbar-custom fixed-top">
    <a class="navbar-brand" href="#">
      <i class="fas fa-graduation-cap"></i>
      <span>Unique Developer</span>
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

<div class="sidebar">
    <ul class="sidebar-menu">
      <li class="active">
        <a href="../admin_main.php">
          <i class="fas fa-tachometer-alt"></i>
          <span>Dashboard</span>
        </a>
      </li>
      <li>
        <a href="manage_courses.php">
          <i class="fas fa-book"></i>
          <span>Manage Courses</span>
        </a>
      </li>
      <li>
        <a href="manage_quiz/manage_quiz.php">
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

       

        <!-- sidebar ends -->

  <!-- ========================================================================================================================== -->
  <div class="main-content">
    <!-- Page Heading -->
    <div class="container-fluid">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Course Topics Management</h1>
        </div>

        <!-- Main Content -->
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card shadow mb-4">
                    <div class="card-header py-3 bg-primary">
                        <h6 class="m-0 font-weight-bold text-white">
                            <?php echo htmlspecialchars($_GET['course_name']); ?> Topics
                        </h6>
                    </div>
                    
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                                <thead class="thead-light">
                                    <tr>
                                        <th>#ID</th>
                                        <th>Topic Name</th>
                                        <th>Description</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $con = mysqli_connect('localhost','root','','uniquedeveloper');
                                    $coursename = $_GET['course_name'];
                                    $q = "SELECT * FROM courses WHERE course_name='$coursename'";
                                    $result = mysqli_query($con, $q);
                                    
                                    while ($res = mysqli_fetch_array($result)) { ?>
                                    <tr>
                                        <td><?php echo $res['id']; ?></td>
                                        <td class="font-weight-bold"><?php echo htmlspecialchars($res['topic_name']); ?></td>
                                        <td>
                                            <textarea class="form-control bg-light border-0 small" 
                                                      rows="3" 
                                                      readonly
                                                      style="resize: none; background-color: #f8f9fa!important;">
                                                <?php echo html_entity_decode($res['description'], ENT_QUOTES); ?>
                                            </textarea>
                                        </td>
                                        <td>
                                            <div class="d-flex justify-content-around">
                                                <a href="update_topic.php?course_id=<?php echo $res['id']; ?>" 
                                                   class="btn btn-sm btn-primary">
                                                    <i class="fas fa-edit fa-fw"></i> Edit
                                                </a>
                                                <a href="verify/verify_delete.php?course_id=<?php echo $res['id']; ?>&course_name=<?php echo $res['course_name']; ?>" 
                                                   class="btn btn-sm btn-danger"
                                                   onclick="return confirm('Are you sure you want to delete this topic?');">
                                                    <i class="fas fa-trash fa-fw"></i> Delete
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                        
                        <div class="text-right mt-4">
                            <a href="add_new_topic.php?course_name=<?php echo $coursename; ?>" 
                               class="btn btn-success">
                                <i class="fas fa-plus-circle fa-fw"></i> Add New Topic
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php

	 //require("../includes/footer.php");    //navigation bar included

 ?>
</div>



<style>
    #dataTable {
        border-radius: 0.35rem;
        overflow: hidden;
    }
    .table thead th {
        vertical-align: middle;
        border-bottom: 2px solid #e3e6f0;
    }
    .table td {
        vertical-align: middle;
    }
    .btn-sm {
        padding: 0.35rem 0.8rem;
        font-size: 0.85rem;
    }
</style>
 
<body>	
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>


</html>
