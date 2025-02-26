<?php 
	session_start();
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Unique Developer</title>
	<!----css file link-->
	<!-- <link rel="stylesheet" type="text/css" href="../..//css/java_programming.css"> -->

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


	<!----Linking google fonts-->
	<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Rubik" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Assistant" rel="stylesheet"> 

	<!----font-awsome start-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="css/admin.css">


	<script src="https://apis.google.com/js/platform.js"></script>


	<!-- <style type="text/css">
		#yt
		{
			margin-top: 50px;
		}

		#sidebarleftmenu
		{
				
		}

		body
		{
			

		}



		#mainpagecontent
		{
			background-color: white;
			margin-top: 80px;
			height: auto;
			box-shadow: 5px 5px 5px 5px #ccc; 
			border-color: #ccc;


		}
		.content
		{
			color: black !important;
		}

	</style> -->
</head>
<body>
	  <!-- Custom Navbar -->
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
        <li class="nav-item d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100">
          <div class="input-group position-relative">
            <i class="fas fa-search search-icon"></i>
            <input type="text" class="form-control" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
          </div>
        </li>
        
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

		<!------Navigation bar ends ---->
<!-- <nav class="navbar navbar-inverse navbar-fixed-top" style="height: 80px;">
		<div class="container">
			<div class="navbar-header">
				<!------Responsive Butt
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navi">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>


				</button>

				<h1 style="color: white;margin-top: 10px;" id="myhead">Unique Developer</h1>
			</div>
			<div class="collapse navbar-collapse" id="navi">
                 <!------Navigation menus starts
				<ul class="nav navbar-nav navbar-right">
					<li> <a href="../../index.php">Home</a></li>
					<li> <a href="">Our Service</a></li>
					<li> <a href="">Works</a></li>
					<li> <a href="">Team</a></li>
					<li> <a href="">About</a></li>
					<li> <a href="">Carrier</a></li>
					<li> <a href="" id="our-location" class="btn-success" data-target="#mymodal" data-toggle="modal"><?php echo $_SESSION['username'];   ?></a></li>
				</ul>
	                 <!------Navigation menus end
			</div>
		</div>
	</nav> -->

	
		<!------Navigation bar ends ---->


		 <!------Side bar start---->


	<div class="sidemenu" id="sidebarleftmenu">
		<ul class="sidemenulist">
			<li><a href="" class="crossbutton" onclick="closesidemenu()">&times;</a></li>
			<li style="background-color :orangered;"><a href="" >Home</a></li>

<?php 
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'uniquedeveloper');
$course_name=$_GET['course_name'];

//$_GET['course_name'];
// unset($_GET['course_name']);
$q="select * from courses where course_name='$course_name'";
$result=mysqli_query($con,$q);
while ($res=mysqli_fetch_array($result)) {
  ?>
		
  			<form action="fetch_main_content.php" method="POST">

  			<input type="hidden" name="txt1" value="<?php echo $res['id'] ?>">
			<button  style="background-color: transparent;border: none;text-align:left;color: white;"><li style="width: 300px;"><?php echo $res['topic_name']; ?></li></button>

			</form>
			

<?php } ?>

		</ul>
	</div>

		 <!------Side bar ends---->

 		<!------java main content starts ---->

	<div id="mainpagecontent" class="shadow">
		
		<div class="content">
			<p>

			<?php

			if (isset($_SESSION['message'])) {
				echo $_SESSION['message'];
			}

			  ?>
			</p>
		
		</div>
			
		<button id="btn_next">Next</button>
	
	</div>


	
		<!------java main content Ends ---->



		<!------youtube subscribe button starts---->

<div id="yt"  class="g-ytsubscribe" data-channelid="UCxwf74gbHaiHHJ7XxZ51JyA" data-layout="full" data-count="default"></div>

		
		<!------youtube subscribe button Ends---->


		<!-- 	<script type="text/javascript">
		
		function opensidemenu()
		{
			document.getElementById('sidebarleftmenu').style.width='250px';
			document.getElementById('mainpagecontent').style.marginLeft='250px';
		}

		function closesidemenu()
		{
			document.getElementById('sidebarleftmenu').style.width='0';
			document.getElementById('mainpagecontent').style.marginLeft='0px';			
		}

	</script>
 -->

 <script type="text/javascript">
 	
 	var li=document.getElementsByTagName('li')[0].style="color:red";
 </script>

</body>
</html>