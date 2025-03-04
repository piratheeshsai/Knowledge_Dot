

<?php 
	session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">


  <link rel="stylesheet" type="text/css" href="../..//css/admin.css">
  

</head>



<body>


<?php 

include 'conn.inc.php';
include "../../frontend_includes/frontend_navbar.php";
 ?>



	<div class="container-fluid">
		
	</div>
	<!-- title image ends -->


	<!-- video course card starts -->
	<br><br><br>
	<div class="container-fluid">

		<div class="row">
			

<?php 

		$sql="select * from video_info";
		$result=mysqli_query($con,$sql);
		while ($row=mysqli_fetch_array($result))
		 {

		 	?> 
		 	<div class="col-md-4">
				<div class="card shadow" style="width: 22rem; height: 10rem;">
		 	<div class="inner">                                                  <!--  to zoom in and zoom out effect -->
						<img class="card-img-top " style="height: 15rem;"   src=<?php echo $row['image']; ?> alt="Card image cap">
				</div>
  
				  <div class="card-body text-center shadow">
				   <!--  <h5 class="card-title"><?php echo $row['course_name']; ?></h5> -->
				   <!--  <p class="card-text"><?php echo $row['description']; ?></p> -->
				    <a href="display_video_list.php?course_name=<?php echo $row['course_name']; ?>" class="btn btn-primary">watch videos</a>
				  </div>
					</div><br><br><br><br><br><br><br><br><br>

				</div>

			
			<?php } ?>     <!--  while loop closed -->
			
		</div>
		

	</div>

	<!-- video course card ends -->
<!-- 
<?php 

		$sql="select * from video_info";
		$result=mysqli_query($con,$sql);
		while ($row=mysqli_fetch_array($result))
		 {
			?> <button > <a ><?php  echo $row['course_name']; ?></a></button><?php 
		}

		

 ?> -->


<!-- footer section starts -->


	 <?php 
 include "../../admin/includes/footer.php";
  ?>



<?php
 
   require("../Frontend_includes/frontend_footer.php");  

     //navigation bar included
 
 ?>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"></script>


<!-- footer section ends -->

</body>
</html>
