<?php 
include("../classes/manage_videos_class.php");
$videos=new manage_videos_class;			// creating object of  manage_courses_class.php
$video=$videos->display_videos();    //calling display_courses() method from manage_courses_class.php
?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Knowladge Dot</title>

 	<!-- bootstrap CDN files -->

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

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
 <body onload="">
 
 <!-- ========================================================================================================================== -->

<!-- navigation bar starts -->

	<nav class="navbar navbar-expand-lg navbar-light navbar-custom fixed-top">
    <a class="navbar-brand" href="#">
      <i class="fas fa-graduation-cap"></i>
      <span>Knowledge Dot
      </span>
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
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="../../logout.php">
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




<div class="container-fluid" style="margin-top: 50px;" >
      <div class="row">
<!-- ========================================================================================================================== -->

<!-- sidebar starts -->

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



  		<div class="col-md-10 ">


 <!-- ========================================================================================================================== -->
 

		<!-- Nav tabs strats -->

<div class="main-content">
<ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link active" data-toggle="tab" href="#home">Home</a>
  </li>
</ul>
<!-- ========================================================================================================================== -->

			<!-- home panes starts -->


  <div class="tab-pane container active" id="home">
<div class="card-header mt-3 mr-5 bg-white text-info border-0 shadow card1" style="width: 1050px; box-shadow: 1px 1px 1px 1px #ccc"><b>YOUR CLASSES</b></div><br>
<div class="row">


<?php foreach ($video as $video_list)
 {
	?>
  	
  		<div class="card ml-5 mt-4" style="width: 18rem;">
  <img class="card-img-top" src="<?php echo $video_list['image'] ?>" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title"><?php echo $video_list['course_name']; ?> <a href="edit_videos.php?course_name=<?php echo $video_list['course_name']; ?>" class="h6 text-info float-right">view video <i class="fa fa-pencil ml-1"></i></a></h5>
  <!--   <p class="card-text"><?php echo $video_list['description']; ?></p> -->

   <!--  <a href="#" class="btn btn-primary">Go somewhere</a> -->
  </div>
</div>

<?php } ?>


</div>

<!-- ============================================================================================================ -->

						<!-- php code to display modal if status variable is set -->
	<?php 

	if ( isset($_GET['status']) and $_GET['status']=="added")      //first if condition for course added
	{
		echo '<div class="col-md-4 mt-5">
				<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
				  Open modal
				</button>






				<!-- The Modal -->
				<div class="modal fade" id="myModal">
				  <div class="modal-dialog">
				    <div class="modal-content">

				      <!-- Modal Header -->
				      <div class="modal-header">
				        <h4 class="modal-title">Message</h4>
				        <button type="button" class="close" data-dismiss="modal">&times;</button>
				      </div>

				      <!-- Modal body -->
				      <div class="modal-body">
				        course added successfully
				      </div>

				      <!-- Modal footer -->
				      <div class="modal-footer">
				        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
				      </div>

				    </div>
				  </div>
				</div>
				</div>';
		}


	if ( isset($_GET['status']) and $_GET['status']=="deleted")    //second if condition for course deleted
	{
		echo '<div class="col-md-4 mt-5">
				<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
				  Open modal
				</button>






				<!-- The Modal -->
				<div class="modal fade" id="myModal">
				  <div class="modal-dialog">
				    <div class="modal-content">

				      <!-- Modal Header -->
				      <div class="modal-header">
				        <h4 class="modal-title">Message</h4>
				        <button type="button" class="close" data-dismiss="modal">&times;</button>
				      </div>

				      <!-- Modal body -->
				      <div class="modal-body">
				        	course deleted successfully
				      </div>

				      <!-- Modal footer -->
				      <div class="modal-footer">
				        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
				      </div>

				    </div>
				  </div>
				</div>
				</div>';
			}



	if ( isset($_GET['status']) and $_GET['status']=="updated")    //second if condition for course deleted
	{
		echo '<div class="col-md-4 mt-5">
				<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
				  Open modal
				</button>






				<!-- The Modal -->
				<div class="modal fade" id="myModal">
				  <div class="modal-dialog">
				    <div class="modal-content">

				      <!-- Modal Header -->
				      <div class="modal-header">
				        <h4 class="modal-title">Message</h4>
				        <button type="button" class="close" data-dismiss="modal">&times;</button>
				      </div>

				      <!-- Modal body -->
				      <div class="modal-body">
				        	course updated successfully
				      </div>

				      <!-- Modal footer -->
				      <div class="modal-footer">
				        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
				      </div>

				    </div>
				  </div>
				</div>
				</div>';
			}





	 ?>


	 			<!-- ended display modal php code -->
<!-- =========================================================================================== -->














</div>

  			<!-- home panes ends -->

 <!-- ========================================================================================================================== -->

			








 <!-- ========================================================================================================================== -->

		<!-- manage course pane starts -->

  <div class="tab-pane container fade" id="manage_course">
  	



  		<center><div class="col-md-7">


<div class="card mt-3 tab-card">
        <div class="card-header tab-card-header">
          <ul class="nav nav-tabs card-header-tabs" id="myTab" role="tablist">
            <li class="nav-item">
                <a class="nav-link" id="one-tab" data-toggle="tab" href="#one" role="tab" aria-controls="One" aria-selected="true">ADD</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="two-tab" data-toggle="tab" href="#two" role="tab" aria-controls="Two" aria-selected="false">UPDATE</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="three-tab" data-toggle="tab" href="#three" role="tab" aria-controls="Three" aria-selected="false">DELETE</a>
            </li>
          </ul>
        </div>

        <div class="tab-content" id="myTabContent">   <!-- tab content starts -->


        	<!-- ======================================================================================================= -->
        				<!-- add new video course tab starts -->

          <div class="tab-pane fade show active p-3" id="one" role="tabpanel" aria-labelledby="one-tab">

            <div class="card-body col-md-12">
            	



            		<div class="card" style="box-shadow: 2px 2px 2px 2px #dfdfdf;">
				  <div class="card-header bg-danger text-light p-2 cardh2"><h3>ADD NEW VIDEO COURSE</h3></div>
				  
				  <div class="card-body small" ">

				  <form action="video_add.php" method="post" enctype="multipart/form-data" onsubmit="return validation()">
					    <div class="form-group">
					      <label for="email">Course Name :</label>
					      <input type="text" class="form-control" id="c_name" placeholder="Enter Course Name" name="course_name">
					      <span id="name_error" class="text-danger font-weight-bold"></span>
					    </div>
					    <div class="form-group">
					      <label for="pwd">Course Description</label>
					      <input type="text" class="form-control" id="c_desc" placeholder="Enter Course Description" name="course_desc">
					      <span id="desc_error" class="text-danger font-weight-bold"></span>
					    </div>

					     <div class="form-group">
					      <label for="pwd">Course Image</label>
					      <input type="file" class="form-control" id="c_img" placeholder="Enter Course Image" name="course_image">
					      <span id="image_error" class="text-danger font-weight-bold"></span>
					    </div>
					    
					    <div class="">
					    <button type="submit" class="btn btn-danger"  name="btn_add_vid">Submit</button>
						</div>
				  </form>

				</div>
			</div>
            </div>
          </div>
          								<!-- add new video course tab ends -->
				<!-- ======================================================================================================= -->




				<!-- ======================================================================================================= -->
        								<!-- update video course tab starts -->		


          <div class="tab-pane fade p-3" id="two" role="tabpanel" aria-labelledby="two-tab">
           
            <div class="card-body col-md-12">
            	

            		<div class="card" style="box-shadow: 2px 2px 2px 2px #dfdfdf;">
				  <div class="card-header bg-primary text-light p-2 cardh2 "><h3>UPDATE COURSE</h3></div>
				  
				  <div class="card-body small" >
					    
				 

				 <form action="video_add.php" method="post" enctype="multipart/form-data" onsubmit="">


				 	 <div class="form-group">

					    <label for="exampleFormControlSelect1">Select video Course Name :</label>
					    <select class="form-control" id="exampleFormControlSelect1" name="selected-course-to-update">

					    	<?php  foreach ($video as $course_list)
							 {
										?> 
					      <option><?php echo  $course_list['course_name']; ?></option>
					      <?php } ?>

					    </select>
					  </div>
					   
					    
					    <div class="form-group">
					      <label for="pwd">Course Description</label>
					      <input type="text" class="form-control" id="c_desc" placeholder="Enter Course Description" name="course_desc">
					      <span id="desc_error" class="text-danger font-weight-bold"></span>
					    </div>

					     <div class="form-group">
					      <label for="pwd">Course Image</label>
					      <input type="file" class="form-control" id="c_img" placeholder="Enter Course Image" name="course_image">
					      <span id="image_error" class="text-danger font-weight-bold"></span>
					    </div>
					    
					    <div class="">
					    <button type="submit" class="btn btn-danger"  name="btn_update_vid">Submit</button>
						</div>
				  </form>

				</div>
			</div>


            </div>           
          </div>


          								<!-- update video course tab ends -->
				<!-- ======================================================================================================= -->



				<!-- ======================================================================================================= -->
        								<!-- delete video course tab starts -->		


          <div class="tab-pane fade p-3" id="three" role="tabpanel" aria-labelledby="three-tab">
           
            <div class="card-body col-md-12">
            	



            		<div class="card" style="box-shadow: 2px 2px 2px 2px #dfdfdf;">
				  <div class="card-header bg-primary text-light p-2 cardh2"><h3>DELETE COURSE</h3></div>
				  
				  <div class="card-body small" ">

				  <form action="video_add.php" method="post" enctype="multipart/form-data">
					   <div class="form-group">
					    <label for="exampleFormControlSelect1">Select Course</label>
					    <select class="form-control" id="exampleFormControlSelect1" name="selected_course">
					      <?php  foreach ($video as $course_list)
							 {
										?> 
					      <option><?php echo  $course_list['course_name']; ?></option>
					      <?php } ?>
					    </select>
					  </div>
					   
					    <div class="float-left">
					    <button type="submit" class="btn btn-danger" name="btn-delete-vid">Submit</button>
						</div>
				  </form>

				</div>
			</div>


            </div>          
          </div>



         									 <!-- delete video course tab ends -->
				<!-- ======================================================================================================= -->

        </div>			<!-- tab content  -->
      







  				
  			</div></center>


  </div>



  <!-- manage courses pane ends -->

<!-- ========================================================================================================================== -->





<!-- ========================================================================================================================== -->

					<!-- tab pane 3 starts -->




  <div class="tab-pane container fade" id="menu2">   


kjfdfbbhfbf

  </div>
  					<!-- tab pane 3 ends -->

  <!-- ========================================================================================================================== -->
</div>	
  			
  		</div>

</div>
</div>


<script type="text/javascript">
	

	$('#myTab a').on('click', function (e) {
  e.preventDefault()
  $(this).tab('show')
});
// =============================================================================================================
					// javascript validation function

	function validation()
	{
		var name=document.getElementById('c_name').value;
		var desc=document.getElementById('c_desc').value;
		var img=document.getElementById('c_img').value;
		if (name=="")
		{ 
			document.getElementById('name_error').innerHTML="** please enter the course name";
			return false;

		}

		if (desc=="")
		{ 
			document.getElementById('desc_error').innerHTML="** please enter the course descsription";
			return false;

		}
		if (img=="")
		{ 
			document.getElementById('image_error').innerHTML="** please choose an image";
			return false;

		}
	}
					// javascript validation function
// =============================================================================================================


// =============================================================================================================
				
					// javascript modal function called on page load

    	function display_modal()
    	{

    		

    	}

// =============================================================================================================


    				
// =============================================================================================================
				
					// javascript modal function called on page load

    	 $(window).on('load',function(){
        $('#myModal').modal('show');
    });


    	 	      // javascript validation function
// =============================================================================================================

</script>


 </body>
 </html>