<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="../css/style.css">

<style>

*
{
	margin: 0px;
	padding: 0px;
}

#loading
{
	position: fixed;
	width: 100%;
	height: 100vh;
	background: #fff
	url('C:/xampp/htdocs/MyResponsiveWebsite/icons/mypreloader.gif')
	 no-repeat center;	
	z-index: 99999;
}

#myhead
{
	font-family: 'Lobster', cursive;
}
/*=======================================
       Basic Properties start
==========================================*/


/*=======================================
       Navigation Properties start
==========================================*/
.navbar
{
	padding: 18px 0px;
	 
	background-color:  #000000 !important;
	
	border-bottom: none !important;
	transition: all 0.5s ease-in-out; 
	

}
ul li a
{
	color: white !important;
	font-weight: bold;
	font-size: 13px;
	text-transform: uppercase;
	letter-spacing: 1px;
	transition: all 0.5s ease-in;
}

ul li a:hover
{
	color: rgb(0, 0, 0) !important;
	font-size: 14px ;
}
.navbar-toggle
{
	border:1px solid white !important;
	transition: all 0.5s ease-in;
}
.navbar-toggle:hover
{
	background-color:rgb(0, 0, 0) !important;
}

#our-location
{
	border: 1px solid white ;
	border-radius: 45px;
	padding: 12px 12px 12px 12px;
	
	background: rgb(0, 0, 0) !important;

}
#our-location:hover
{
	background-color: white !important;
	
}

.navbar-inverse
{
	background-color: transparent !important;
}


/*=======================================
       Navigation Properties ends
==========================================*/


/*=======================================
  Sticky Navigation with background color
==========================================*/

.secondary
{
	background-color:#000000 !important;
}



/*=======================================
      Sticky Navigation Properties ends
==========================================*/


</style>


</head>





<!---Navigation Starts	----->

    <nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<!------Responsive Button---->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navi">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>


				</button>

				<h1 style="color: white;margin-top: 10px;" id="myhead">Knowledge Dot</h1>
			</div>
			<div class="collapse navbar-collapse" id="navi">
                 <!------Navigation menus starts---->
				<ul class="nav navbar-nav navbar-right">
					<li> <a href="">Home</a></li>
					<li> <a href="#myservice_section">Our Service</a></li>
					<li> <a href="#our-members">Team</a></li>
					<li> <a href="logout.php" id="our-location" class="btn-success" >Logout</a></li>
				</ul>
	                 <!------Navigation menus ends---->
			</div>
		</div>
	</nav>
			<!---Navigation Ends	----->
</html>