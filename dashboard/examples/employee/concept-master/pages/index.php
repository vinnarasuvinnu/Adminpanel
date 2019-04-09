<?php 
session_start();
$type=$_SESSION['type'];
?>
<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Concept - Bootstrap 4 Admin Dashboard Template</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="../assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/libs/css/style.css">
    <link rel="stylesheet" href="../assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" href="../assets/vendor/datepicker/tempusdominus-bootstrap-4.css" />
    <link rel="stylesheet" href="../assets/vendor/inputmask/css/inputmask.css" />
    <style>
    .button2{
    color: blue;
  width:100px;
  height:50px;
}
</style>
</head>

<body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
        <!-- ============================================================== -->
        <!-- navbar -->
        <!-- ============================================================== -->
  <?php include('top_bar.php'); ?>
  <?php include('sidebar.php'); ?>
        <!-- ============================================================== -->
        <!-- end left sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
       
    </div>
<script> 
function greek()                                    
{ 
    var fname = document.forms["emp"]["fname"];
    var lname = document.forms["emp"]["lname"];                 
    var email = document.forms["emp"]["email"];  
    var phone = document.forms["emp"]["phone"];
    var salary = document.forms["emp"]["salary"];  
   
   if (fname.value == "")                                  
    { 
        window.alert("enter first name."); 
        fname.focus(); 
        return false; 
    } 
    if (lname.value == "")                                  
    { 
        window.alert("enter last name"); 
        lname.focus(); 
        return false; 
    } 
    if (phone.value == "")                                  
    { 
        window.alert("enter phone number"); 
        phone.focus(); 
        return false; 
    }
    if (email.value == "")                                  
    { 
        window.alert("enter email"); 
        email.focus(); 
        return false; 
    } 
     
    if (salary.value == "")                                  
    { 
        window.alert("enter salary amount"); 
        salary.focus(); 
        return false; 
    } 
     return true; 
}</script>






    <!-- ============================================================== -->
    <!-- end main wrapper -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <script src="../assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="../assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <script src="../assets/libs/js/main-js.js"></script>
    <script src="../assets/vendor/inputmask/js/jquery.inputmask.bundle.js"></script>
    
</body>
 
</html>