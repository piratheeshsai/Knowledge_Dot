<?php 
  include("class/users.php");
  $profile = new users;
  extract($_POST);
  $profile->show_users_profile($_SESSION['username']);
?>

<!DOCTYPE html>
<html lang="en">
<head>

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Quiz Page</title>
  
  <!-- Bootstrap 4 & jQuery -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

  <!-- Font Awesome & Google Fonts -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

  <!-- Custom Styles -->
  <link rel="stylesheet" type="text/css" href="../css/admin.css">

</head>

<body>

<?php
  require("../Frontend_includes/frontend_navbar.php");

?>


<style>
/* Section Styling */
.programming-languages {
    background-color: #f8f9fa;
}

.divider {
    width: 60px;
    height: 4px;
    background-color:rgb(0, 0, 0);
    margin-top: 10px;
}
</style>

<!-- Quiz Section -->
<div class="container mt-5">
  <div class="quiz-card text-center p-4 shadow rounded bg-white">
    <h3>Welcome, <?php echo $_SESSION['username']; ?>! Let's Start the Quiz</h3>
    <button class="btn btn-dark btn-lg mt-4" data-toggle="collapse" data-target="#quizSection">Start Quiz</button>
    
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
