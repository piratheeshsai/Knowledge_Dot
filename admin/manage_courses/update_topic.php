
<!DOCTYPE html>
<html>
<head>
  <title></title>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">


  <link rel="stylesheet" type="text/css" href="../..//css/admin.css">


</head>

<body>
  
<?php

   require("../includes/navbar.php");    //navigation bar included

 ?>

<?php

   require("../includes/sidebar.php");    //navigation bar included

 ?>
  <div class="main-content">
    <div class="container-fluid mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-lg mb-4">
                    <div class="card-header text-Primary py-3">
                        <h3 class="mb-0 text-center" ></i>Update Topic</h3>
                    </div>
                    <div class="card-body">
                        <?php 
                        $con = mysqli_connect('localhost','root','','uniquedeveloper');
                        $course_id = $_GET['course_id'];
                        $q = "SELECT * FROM courses WHERE id='$course_id'";
                        $result = mysqli_query($con, $q);
                        
                        while ($res = mysqli_fetch_array($result)) { ?>
                        <form method="POST" action="verify/verify_changes.php">
                            <input type="hidden" name="cors_id" value="<?php echo htmlspecialchars($res['id']); ?>">
                            
                            <div class="form-group">
                                <label class="font-weight-bold">Course Name:</label>
                                <input type="text" name="coursename" 
                                       class="form-control bg-light" 
                                       readonly 
                                       value="<?php echo htmlspecialchars($res['course_name']); ?>">
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Topic Name:</label>
                                <input type="text" name="topic_name" 
                                       class="form-control"
                                       value="<?php echo htmlspecialchars($res['topic_name']); ?>">
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Content:</label>
                                <textarea id="editor" name="editor" 
                                          class="form-control ckeditor" 
                                          placeholder="Enter the content...">
                                    <?php echo htmlspecialchars($res['description']); ?>
                                </textarea>
                            </div>

                            <div class="text-center mt-5">
                                <button type="submit" name="submitupdate" 
                                        class="btn btn-primary btn-lg px-5">
                                    <i class="fas fa-save mr-2"></i>Save Changes
                                </button>
                            </div>
                        </form>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="../ckeditor/ckeditor.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"></script>
    
    <script>
        // Initialize CKEditor
        ClassicEditor
            .create(document.querySelector('.ckeditor'), {
                toolbar: {
                    items: [
                        'heading', '|',
                        'bold', 'italic', 'link', 'bulletedList', 'numberedList', '|',
                        'blockQuote', 'insertTable', 'undo', 'redo'
                    ]
                }
            })
            .catch(error => {
                console.error(error);
            });
    </script>
</body>
</html>