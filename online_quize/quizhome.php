<?php 
  include("class/users.php");
  $profile = new users;
  extract($_POST);
  $profile->show_users_profile($_SESSION['username']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Quiz Page</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
  <button type="button" class="btn btn-custom-blue mt-5" href="#myid" data-toggle="collapse">Start Quiz</button>

  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background-color: #f8f9fa;
    }
    .navbar {
      background: linear-gradient(90deg,rgb(0, 0, 0),rgb(0, 0, 0));
    }
    .navbar-brand {
      font-weight: 600;
    }
    .container {
      margin-top: 80px;
    }
    .quiz-card {
      background: #fff;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0,0,0,0.1);
      padding: 20px;
    }
    .btn-start {
      font-size: 1.2rem;
      padding: 12px 25px;
      border-radius: 50px;
    }

    .btn-custom-blue {
    background-color:rgb(0, 0, 0); /* Change to any blue shade */
    border-color:rgb(0, 0, 0);
    color: white;
  }

  .btn-custom-blue:hover {
    background-color:rgb(0, 0, 0);
    border-color:rgb(0, 0, 0);
  }



    
  </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark fixed-top">
  <div class="container">
    <a class="navbar-brand" href="../index.php">Knowledge Dot</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link text-white" href="../index.php">Home</a></li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-white" href="#" data-bs-toggle="dropdown">Our Services</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="../programmingdemo.php">Courses</a></li>
            <li><a class="dropdown-item" href="../video tutorials/java/display_video_courses.php">Classes</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Online Quiz</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="container">
  <div class="quiz-card text-center">
    <h3>Welcome, <?php echo $_SESSION['username']; ?>! Let's Start the Quiz</h3>
    <button class="btn btn-primary btn-start mt-4" data-bs-toggle="collapse" data-bs-target="#quizSection">Start Quiz</button>
    
    <div class="collapse mt-3" id="quizSection">
      <form method="POST" action="question_show.php">
        <label class="form-label">Select Course</label>
        <select class="form-control" name="selected_course">
          <?php 
            $profile->show_courses();
            foreach ($profile->cat_data as $course) {
          ?>
          <option value="<?php echo $course['id']; ?>"> <?php echo $course['cat_name']; ?> </option>
          <?php } ?>
        </select>
        <button type="submit" class="btn btn-success mt-3">Start Quiz</button>
      </form>
    </div>
  </div>
</div>

</body>
</html>