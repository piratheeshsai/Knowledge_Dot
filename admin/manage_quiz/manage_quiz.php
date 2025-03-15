<?php 
include("../classes/manage_quiz_class.php");
$quiz = new manage_quiz_class();
$quiz_list = $quiz->display_quiz_courses();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Quiz Management</title>
    
    <!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">


<link rel="stylesheet" type="text/css" href="../..//css/admin.css">


   
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light navbar-custom fixed-top">
        <a class="navbar-brand" href="#">
            <i class="fas fa-graduation-cap"></i>
            <span>Knowledge Dot</span>
        </a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown no-arrow">
                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown">
                        <span class="mr-2 d-none d-lg-inline text-gray-600 small">Admin User</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in">
                        <a class="dropdown-item" href="#">
                            <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i> Profile
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="../login.php">
                            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i> Logout
                        </a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Sidebar -->
   
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
        <a href="../admin_main.php">
          <i class="fas fa-comments"></i>
          <span>Manage Comments</span>
        </a>
      </li>
      <li>
        <a href="../admin_main.php/#users">
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


    <!-- Main Content -->
    <div class="main-content">
        <div class="container-fluid pt-4">
            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Quiz Management</h1>
            </div>

            <!-- Tabs -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#home">Quiz Overview</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#manage_course">Manage Subjects</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#questions">Manage Questions</a>
                        </li>
                    </ul>
                </div>

                <div class="card-body">
                    <div class="tab-content">
                        <!-- Overview Tab -->
                        <div class="tab-pane active" id="home">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">
                                        <i class="fas fa-question-circle mr-2"></i>Available Quiz Subjects
                                    </h6>
                                </div>
                                <div class="card-body">
                                    <div class="row justify-content-center">
                                        <div class="col-md-6">
                                            <form method="POST" action="../../online_quize/question_show.php">
                                                <div class="form-group">
                                                    <label>Select Subject</label>
                                                    <select class="form-control" name="selected_course">
                                                        <?php foreach ($quiz_list as $quiz): ?>
                                                        <option value="<?= htmlspecialchars($quiz['id']) ?>">
                                                            <?= htmlspecialchars($quiz['cat_name']) ?>
                                                        </option>
                                                        <?php endforeach; ?>
                                                    </select>
                                                </div>
                                                <button type="submit" class="btn btn-primary btn-block">
                                                    <i class="fas fa-play-circle mr-2"></i> Start Quiz
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Manage Subjects Tab -->
                        <div class="tab-pane fade" id="manage_course">
                            <div class="card shadow">
                                <div class="card-header py-3">
                                    <ul class="nav nav-tabs">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-toggle="tab" href="#add-subject">Add Subject</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#delete-subject">Delete Subject</a>
                                        </li>
                                    </ul>
                                </div>
                                
                                <div class="card-body">
                                    <div class="tab-content">
                                        <!-- Add Subject -->
                                        <div class="tab-pane active" id="add-subject">
                                            <form action="quiz_add.php" method="post">
                                                <div class="form-group">
                                                    <label>Subject Name</label>
                                                    <input type="text" class="form-control" name="course_name" 
                                                           placeholder="Enter subject name" required>
                                                </div>
                                                <button type="submit" name="btn_add_quiz_sub" 
                                                        class="btn btn-primary">
                                                    <i class="fas fa-plus-circle mr-2"></i> Add Subject
                                                </button>
                                            </form>
                                        </div>

                                        <!-- Delete Subject -->
                                        <div class="tab-pane fade" id="delete-subject">
                                            <form action="quiz_add.php" method="post">
                                                <div class="form-group">
                                                    <label>Select Subject to Delete</label>
                                                    <select class="form-control" name="selected_course" required>
                                                        <?php foreach ($quiz_list as $quiz): ?>
                                                        <option value="<?= htmlspecialchars($quiz['id']) ?>">
                                                            <?= htmlspecialchars($quiz['cat_name']) ?>
                                                        </option>
                                                        <?php endforeach; ?>
                                                    </select>
                                                </div>
                                                <button type="submit" name="btn_delete_quiz_sub" 
                                                        class="btn btn-danger">
                                                    <i class="fas fa-trash-alt mr-2"></i> Delete Subject
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Questions Tab -->
                        <div class="tab-pane fade" id="questions">
                            <div class="card shadow">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">
                                        <i class="fas fa-question mr-2"></i>Add New Question
                                    </h6>
                                </div>
                                <div class="card-body">
                                    <form method="POST" action="quiz_add.php">
                                        <div class="form-group">
                                            <label>Question</label>
                                            <input type="text" class="form-control" name="question" 
                                                   placeholder="Enter question" required>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Option 1</label>
                                                    <input type="text" class="form-control" name="opt1" required>
                                                </div>
                                                <div class="form-group">
                                                    <label>Option 2</label>
                                                    <input type="text" class="form-control" name="opt2" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Option 3</label>
                                                    <input type="text" class="form-control" name="opt3" required>
                                                </div>
                                                <div class="form-group">
                                                    <label>Option 4</label>
                                                    <input type="text" class="form-control" name="opt4" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Correct Answer</label>
                                            <input type="text" class="form-control" name="answer" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Select Subject</label>
                                            <select class="form-control" name="cat" required>
                                                <?php foreach ($quiz_list as $courses): ?>
                                                <option value="<?= htmlspecialchars($courses['id']) ?>">
                                                    <?= htmlspecialchars($courses['cat_name']) ?>
                                                </option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                        <button type="submit" class="btn btn-primary">
                                            <i class="fas fa-save mr-2"></i> Save Question
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

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>