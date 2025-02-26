
<!DOCTYPE html>
<html>
<head>
  <title></title>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">


  <link rel="stylesheet" type="text/css" href="../..//css/admin.css">

 <style type="text/css">
  

    .sidebar-list
    {
        margin-right: -15px;
        
        font-family: 'Quicksand', sans-serif; 
        font-size: 14px
    }

    .sidebar-list li:hover
    {
      background-color: deepskyblue !important;
    }
     .sidebar-list li a
     {
        color:white;
        text-decoration: none;
     }
 </style>
</head>

<body>
  
<?php

   require("../includes/navbar.php");    //navigation bar included

 ?>

<?php

   require("../includes/sidebar.php");    //navigation bar included

 ?>
 <div class="container-fluid" style="margin-top: 50px;" >
      <div class="row">
<!-- ========================================================================================================================== -->

<!-- sidebar starts -->




        

        <!-- sidebar ends -->

  <!-- ========================================================================================================================== -->



      <div class="col-md-10 ">   <!--  main body content starts -->

 <!-- ===============================================================================================================-->


                              <!-- form starts -->

           
<?php 


           $con=mysqli_connect('localhost','root');


      mysqli_select_db($con,'uniquedeveloper');
          $course_id=$_GET['course_id'];
          $q="select * from courses where id='$course_id'";
      $result=mysqli_query($con,$q);
      while ($res=mysqli_fetch_array($result)) {

          ?>
<div class="mt-1"><h3 class="text-center">update topic</h3></div>

<form  method="POST" action="verify/verify_changes.php" class="ml-3">
  <input type="hidden" name="cors_id" value="<?php echo $res['id']; ?>">
  
  Enter course name:<input type="text" name="coursename" readonly="readonly" class="form-control" value="<?php echo $res['course_name'] ?>"><br>
  Enter topic name :<input type="text" name="topic_name" class="form-control" value="<?php echo $res['topic_name'] ?>">

  Enter the content:
<textarea id="editor" name="editor" class="ckeditor" placeholder="Enter the content..."><?php echo $res['description']; ?></textarea>

<button type="submit" name="submitupdate" class="btn btn-success">submit</button>
</form>
<?php } ?>


  </div>
  </div>








 <script src="../ckeditor/ckeditor.js"></script>   <!-- script for ckeditor -->
<body>  
</html>