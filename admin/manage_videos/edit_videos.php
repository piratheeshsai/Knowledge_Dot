
<!DOCTYPE html>
<html>
<head>
	<title>Knowladge Dot</title>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


<!-- google font -->
 <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
 <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
 <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">

   <!--  font awsome cdn -->
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

   <!-- Font Awesome Icons -->

   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">


<link rel="stylesheet" type="text/css" href="../..//css/admin.css">
</head>

<body>

 <!-- <div class="container-fluid" style="margin-top: 50px;" >
      <div class="row"> -->
<!-- ========================================================================================================================== -->

<!-- sidebar starts -->
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
        <!-- <div class="topbar-divider d-none d-sm-block"></div> -->
    
       
        
        <!-- User Information -->
        <li class="nav-item dropdown no-arrow">
          <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="mr-2 d-none d-lg-inline text-gray-600 small">Admin User</span>
            
          </a>
          <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
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
        <a href="../admin_main.php">
          <i class="fas fa-tachometer-alt"></i>
          <span>Dashboard</span>
        </a>
      </li>
      <li>
        <a href="../manage_courses/manage_courses.php">
          <i class="fas fa-book"></i>
          <span>Manage Courses</span>
        </a>
      </li>
      <li>
        <a href="../manage_quiz/manage_quiz.php">
          <i class="fas fa-question-circle"></i>
          <span>Manage Quiz</span>
        </a>
      </li>
      <li>
        <a href="../manage_videos/manage_videos.php">
          <i class="fas fa-video"></i>
          <span>Manage Videos</span>
        </a>
      </li>
      <li>
        <a href="../admin_main.php#users">
          <i class="fas fa-users"></i>
          <span>View Users</span>
        </a>
      </li>
    </ul>
  </div>
        <!-- sidebar ends -->
  <!-- ========================================================================================================================== -->
  <div class="main-content">
  		<div class="col-md-10 ">  <!--  main body content starts -->
        <h3 class="text-center mt-2">Manage Your <?php  echo $_GET['course_name'];  ?> &nbsp online video tutorial</h3>
        <button class="btn btn-primary float-right" data-toggle="modal" data-target="#myModal">Add New Video</button><br>
      </div>
        <div class="row col-md-10  shadow">
       
       
      

<?php 
$con=mysqli_connect('localhost','root');

mysqli_select_db($con,'uniquedeveloper');

    $course_name=$_GET['course_name'];
      $q="select * from videos where course_name='$course_name'";
      //echo $course_name;
      $query=mysqli_query($con,$q);
      while ($row=mysqli_fetch_array($query))
     {

      ?> 
      <div class="col-md-4 p-3">
        <div class="card shadow mycard" style="width: 18rem; height: 7rem;">
      <div class="inner">                                                  <!--  to zoom in and zoom out effect -->
            <img class="card-img-top " style="height: 11rem;"   src=<?php echo $row['video_image']; ?> alt="Card image cap">
        </div>
  
          <div class="card-body shadow" style="background-color: #f1f1f1;">
           <!--  <h5 class="card-title"><?php echo $row['course_name']; ?></h5> -->
            <p class="card-text"><?php echo $row['video_name']; ?></p> 
            
            
            <span class="text-danger" style="font-size: 14px; ">
              <a href="watch_video.php?video_id=<?php echo $row['video_id'] ?>&course_name=<?php echo $row['course_name'] ?>" class="text-success p-1" style="text-decoration: none;">watch <i class="fa fa-eye"></i></a>
            
            <a href="" class="p-1 text-primary" style="text-decoration: none;">update<i class="fa fa-pencil ml-1"></i></a>

            <a href="video_add.php?id=<?php echo $row['video_id']?>&course_name=<?php echo $row['course_name'] ?>&run=delete" class="p-1 text-danger" name="delete_vid" style="text-decoration: none;">delete<i class="fa fa-trash-o ml-1"></i></a>
          </span>
          </div>
          </div>

        </div><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

      
      <?php } ?>     <!--  while loop closed -->
       </div>
     </div>




<!-- ==================================================================================================================== -->

       <!--    modal to add a new video -->

<div class="col-md-4 mt-5">
       
     <!-- The Modal -->
        <div class="modal fade" id="myModal">
          <div class="modal-dialog">
            <div class="modal-content">

              <!-- Modal Header -->
              <div class="modal-header">
                <h4 class="modal-title">Message</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>
              <form action="video_add.php" method='POST' enctype="multipart/form-data">
              <!-- Modal body -->
              <div class="modal-body">
              <input type="hidden" name="course_name" value="<?php  echo $_GET['course_name'];  ?>">

              <div class="form-group">
                Enter course name :<input type="text" name="vid_title" class="form-control">
                
              </div>

               <div class="form-group">
                Enter video image :<input type="file" name="vid_img" class="form-control">
              </div>

               <div class="form-group">
                Enter video path :<input type="text" name="vid_path" class="form-control">
              </div>




              <!-- Modal footer -->
              <div class="modal-footer">
                <button type="submit" class="btn btn-danger" name="btn_add_new_vid">Add</button>         <!-- data-dismiss="modal" -->
              </div>
            </form>
            </div>
          </div>
        </div>
        </div>
		</div>
	</div>
	</div>
<body>	
</html>