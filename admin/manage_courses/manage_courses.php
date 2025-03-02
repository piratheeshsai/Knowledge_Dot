<?php 
include("../classes/manage_courses_class.php");
$courses=new manage_courses_class;			// creating object of  manage_courses_class.php
$course=$courses->display_courses();    //calling display_courses() method from manage_courses_class.php

 ?>


 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>


  
  <!-- Font Awesome Icons -->

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

  
  <link rel="stylesheet" type="text/css" href="../..//css/admin.css">



 </head>
 <body onload="">
 
 <!-- ========================================================================================================================== -->

 				<!-- navigation bar starts -->

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





  

				<!-- navigation bar ends -->
<!-- ========================================================================================================================== -->

<div class="sidebar">
    <ul class="sidebar-menu">
      <li class="active">
        <a href="../admin_main.php">
          <i class="fas fa-tachometer-alt"></i>
          <span>Dashboard</span>
        </a>
      </li>
      <li>
        <a href="manage_courses/manage_courses.php">
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







  <div class="main-content">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4 px-4">
            <h1 class="h3 mb-0 text-gray-800">Courses Management</h1>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <!-- Tabs Navigation -->
                    <ul class="nav nav-tabs px-4">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#home">Courses Overview</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#manage_course">Manage Courses</a>
                        </li>
                    </ul>

                    <div class="tab-content mt-4">
                        <!-- Courses Overview Tab -->
                        <div class="tab-pane container active" id="home">
                            <div class="px-4">
                                <div class="card operation-card mb-4">
                                    <div class="card-header bg-white border-0 py-3">
                                        <h5 class="mb-0 text-primary font-weight-bold">
                                            <i class="fas fa-book-open mr-2"></i>Your Courses
                                        </h5>
                                    </div>
                                </div>

                                <div class="row">
                                    <?php foreach ($course as $course_list) { ?>
                                    <div class="col-lg-4 col-md-6 mb-4">
                                        <div class="card course-card h-100">
                                            <img src="../../<?= $course_list['language_image'] ?>" 
                                                 class="card-img-top" 
                                                 style="height: 200px; object-fit: cover;">
                                            <div class="card-body d-flex flex-column">
                                                <div class="d-flex justify-content-between align-items-center mb-3">
                                                    <h5 class="card-title font-weight-bold mb-0">
                                                        <?= $course_list['language_name'] ?>
                                                    </h5>
                                                    <a href="edit_topics.php?course_name=<?= $course_list['language_name'] ?>" 
                                                       class="btn btn-sm btn-outline-primary">
                                                        <i class="fas fa-edit"></i> Edit
                                                    </a>
                                                </div>
                                                <p class="card-text text-muted flex-grow-1">
                                                    <?= $course_list['language_description'] ?>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>

                        <!-- Manage Courses Tab -->
                        <div class="tab-pane container fade" id="manage_course">
                            <div class="px-4">
                                <div class="card operation-card">
                                    <div class="card-header bg-white border-0 py-3">
                                        <ul class="nav nav-tabs card-header-tabs">
                                            <li class="nav-item">
                                                <a class="nav-link active" data-toggle="tab" href="#add">Add Course</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-toggle="tab" href="#update">Update Course</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-toggle="tab" href="#delete">Delete Course</a>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="tab-content p-4">
                                        <!-- Add Course Tab -->
                                        <div class="tab-pane active" id="add">
                                            <form action="course_add.php" method="post" enctype="multipart/form-data">
                                                <div class="form-group">
                                                    <label>Course Name</label>
                                                    <input type="text" name="course_name" 
                                                           class="form-control" 
                                                           placeholder="Enter course name" required>
                                                </div>
                                                <div class="form-group">
                                                    <label>Course Description</label>
                                                    <textarea name="course_desc" 
                                                              class="form-control" 
                                                              rows="3" required></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label>Course Image</label>
                                                    <div class="custom-file">
                                                        <input type="file" name="course_image" 
                                                               class="custom-file-input" id="customFile" required>
                                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                                    </div>
                                                </div>
                                                <button type="submit" name="btn_add" 
                                                        class="btn btn-primary">
                                                    <i class="fas fa-plus-circle"></i> Add Course
                                                </button>
                                            </form>
                                        </div>

                                        <!-- Update Course Tab -->
                                        <div class="tab-pane fade" id="update">
                                            <form action="course_add.php" method="post" enctype="multipart/form-data">
                                                <div class="form-group">
                                                    <label>Select Course</label>
                                                    <select name="selected-course-to-update" class="form-control" required>
                                                        <?php foreach ($course as $course_list) { ?>
                                                        <option value="<?= $course_list['language_name'] ?>">
                                                            <?= $course_list['language_name'] ?>
                                                        </option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>New Description</label>
                                                    <textarea name="course_desc" 
                                                              class="form-control" 
                                                              rows="3" required></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label>Update Image (optional)</label>
                                                    <div class="custom-file">
                                                        <input type="file" name="course_image" 
                                                               class="custom-file-input" id="customFile">
                                                        <label class="custom-file-label">Choose new image</label>
                                                    </div>
                                                </div>
                                                <button type="submit" name="btn_update" 
                                                        class="btn btn-warning text-white">
                                                    <i class="fas fa-sync-alt"></i> Update Course
                                                </button>
                                            </form>
                                        </div>

                                        <!-- Delete Course Tab -->
                                        <div class="tab-pane fade" id="delete">
                                            <form action="course_add.php" method="post">
                                                <div class="form-group">
                                                    <label>Select Course to Delete</label>
                                                    <select name="selected_course" class="form-control" required>
                                                        <?php foreach ($course as $course_list) { ?>
                                                        <option value="<?= $course_list['language_name'] ?>">
                                                            <?= $course_list['language_name'] ?>
                                                        </option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                                <button type="submit" name="btn-delete-course" 
                                                        class="btn btn-danger">
                                                    <i class="fas fa-trash-alt"></i> Delete Course
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Status Modal -->
    <div class="modal fade" id="statusModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title">System Message</h5>
                    <button type="button" class="close" data-dismiss="modal">
                        <span>&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?php
                    if(isset($_GET['status'])) {
                        switch($_GET['status']) {
                            case 'added': echo 'Course added successfully'; break;
                            case 'deleted': echo 'Course deleted successfully'; break;
                            case 'updated': echo 'Course updated successfully'; break;
                        }
                    }
                    ?>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
        // Show status modal if parameter exists
        $(document).ready(function(){
            <?php if(isset($_GET['status'])) { ?>
                $('#statusModal').modal('show');
            <?php } ?>

            // File input label update
            $('.custom-file-input').on('change', function(){
                let fileName = $(this).val().split('\\').pop();
                $(this).next('.custom-file-label').html(fileName);
            });

            // Form validation
            function validateForm(form) {
                let valid = true;
                $(form).find('.form-control').each(function(){
                    if(!$(this).val()) {
                        $(this).addClass('is-invalid');
                        valid = false;
                    } else {
                        $(this).removeClass('is-invalid');
                    }
                });
                return valid;
            }
        });
    </script>
</body>