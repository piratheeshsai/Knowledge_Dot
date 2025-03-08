<!DOCTYPE html>
<html>
	<head>
		<title>Knowledge Dot</title>
        <link rel="icon" type="image/x-icon" href="images/titlelogo.ico">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
		<link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700,800,900" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="css/loginStyle1.css">         
	</head>
	<body >
        
	
	<div class="container">
		<div class="d-flex align-items-center text-white rounded shadow-sm">
			<img class="me-3" src="images/logo2.png" alt="logo" width="55" height="70">
			<div class="lh-1">
				<h1 class="h6 mb-0 text-white lh-1">Knowledge Dot</h1>
				<small>Education</small>
			</div>
		</div>
	<div class="section">
		<div class="container">
			<div class="row full-height justify-content-center">
				<div class="col-12 text-center ">
					<div class="section pb-3 pt-3 pt-sm-2 text-center">
						<h6 class="mb-0 pb-3"><span>Log In </span><span>Contact</span></h6>
			          	<input class="checkbox" type="checkbox" id="reg-log" name="reg-log"/>
			          	<label for="reg-log"></label>
						<div class="card-3d-wrap mx-auto">
							<div class="card-3d-wrapper">
								<div class="card-front">
									<div class="center-wrap">
										<div class="section text-center">
											<h4 class="mb-4 pb-3">Log In</h4>
											
											<div class="form-group">
											<form method="POST" class="input-box" id="login" action="validation.php" onsubmit="return validation()">
												<input type="username" name="name" class="form-style" placeholder="Username" id="username" autocomplete="off">
												<i class="input-icon uil uil-at"></i>
											</div>	
											<div class="form-group mt-2">
												<input type="password" name="password" class="form-style" placeholder="Password" id="password" autocomplete="off">
												<i class="input-icon uil uil-lock-alt"></i>
											</div>
											<!-- <a href="#" class="btn mt-4" type="submit">submit</a> -->
											<input type="submit" class="btn mt-4" name="submit" id="submit-btn" value="SignIn">
                            				<p class="mb-0 mt-4 text-center"><a href="#0" class="link">Forgot your password?</a></p>
											</form>
										</div>
			      					</div>
			      				</div>
								<div class="card-back">
									<div class="center-wrap">
										<div class="section text-center">
											<h4 class="mb-4 pb-3">Contact</h4>
											<div class="form-group">
												<input type="text" name="contact" class="form-style" placeholder="Your Questions" id="logname" autocomplete="off">
												<i class="input-icon uil uil-user"></i>
											</div>	
											<a href="" class="btn mt-4">submit</a>
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
	</div>
	

	<script type="text/javascript">
	
		function validation() {
			var username=document.getElementById('username').value;
			var password=document.getElementById('password').value;

			if ((username=="") ||( password==""))
			{
				document.getElementById('perror').innerHTML="please fill the details";
				return false;
			}
		}


		function clear() {
			document.getElementById('perror').innerHTML="ksdfisdhfg";
		}

		</script>
	
	</body>
</html>

<?php
    @include 'config.php';

    session_start();

    if(isset($_POST['submit'])){
            $name = mysqli_real_escape_string($conn, $_POST['name']);
            $email = mysqli_real_escape_string($conn, $_POST['email']);
            $password = md5($_POST['password']);
            $user_type = $_POST['user_type'];

            $select = " SELECT * FROM student_signup WHERE email = '$email' && password = '$password' ";

            $result = mysqli_query($conn, $select);

            if(mysqli_num_rows($result)>0){
               $row = mysqli_fetch_array($result);

               if($row['user_type'] == 'student'){
                    $_SESSION['student_email'] = $row['email'];
                    header('location:index.php.php');
                
				}else{
					$error[] = "incorrect email or password!";
				}
			}
    };
?> 