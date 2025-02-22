


<!DOCTYPE html>
<html>
	<head>
		<title>Knowledge Dot</title>
        <link rel="icon" type="image/x-icon" href="images/titlelogo.ico">
		<link rel="stylesheet" type="text/css" href="css/loginStyle1.css">         
	</head>
	<body>
        <div class="container">
			<div class="form-box1">
				<div class="logo">
					<img src="images/logo2.png">
					<h3>Knowledge Dot</h3>
				</div>	
				<h3 style="margin-left: 90px; font-family:Gilroy-Bold; font-weight:400px; margin-top:30px;" >Login</h3>
				<form method="POST" class="input-box" id="login" action="validation.php" onsubmit="return validation()">
					<label for="name" class="log-text" > Username</label><br>
					<input type="text" class="inputValue" id="username" name="name" placeholder="username" onkeypress="clear()"><br>
					<label for="password" class="log-text"> Password</label><br>
					<input type="password" class="inputValue" name="password" placeholder="Password" id="password"><br>
					<a href = "#" class="link1"><p style="font-size:12px; color:white; margin:5px;margin-left:10px;">Forgot Password?</p></a>
					<span id="perror">
						<?php 
									if(isset($_SESSION['error']))
									{
										echo "wrong username or password";
									} 
									else{ echo " ";} 
									?>
										

									</span>
					<input type="submit" name="submit" id="submit-btn" value="SignIn">
				</form>	
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