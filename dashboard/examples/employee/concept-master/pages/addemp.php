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
        <div class="dashboard-wrapper">
            <div class="container-fluid dashboard-content">
                <div class="row">
                    <div class="col-xl-10">
                        <!-- ============================================================== -->
                        <!-- pageheader  -->
                        <!-- ============================================================== -->
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="page-header" id="top">
                                    <h2 class="pageheader-title"> </h2>
                                    <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                                    <div class="page-breadcrumb">
                                        <nav aria-label="breadcrumb">
                                            <ol class="breadcrumb">
                                                <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                                <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Forms</a></li>
                                                <li class="breadcrumb-item active" aria-current="page"></li>
                                            </ol>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ============================================================== -->
                        <!-- end pageheader  -->
                        <!-- ============================================================== -->
                       

                        <!-- ============================================================== -->
                        <!-- basic form  -->
                        <!-- ============================================================== -->
                       <div class="row">

                     <br>
  <div class="col-lg-6 col-sm-6 offset-3">
      <div class="text-center">
                     <h2>ADD EMPLOYEES</h2>
                 </div>
  <form name=emp action="emp.php" onsubmit="return greek()" method="post">
    
    <div class="form-group">
      
      <input type="text" class="form-control" id="name" placeholder="FIRST NAME" name="fname">
    </div>
    <div class="form-group">
      
      <input type="text" class="form-control" id="name" placeholder="LAST NAME" name="lname">
    </div>
     <div class="form-group">
      
      <input type="number" class="form-control" id="num" placeholder="PHONE NUMBER" name="phone">
    </div>
     <div class="form-group">
      
      <input type="text" class="form-control" id="email" placeholder="EMAIL" name="mail">
    </div>
     
     <div class="form-group">
    
      <input type="text" class="form-control" id="salary" placeholder="SALARY " name="salary">
    </div>
    
     <br>
    <div class="form-group text-center">
    <button type="submit" class="btn btn-primary">ADD EMPLOYEE</button>
  </div>
  </form>

      </div>
                    <!-- ============================================================== -->
                    <!-- end basic table  -->
                    <!-- ============================================================== -->
                </div>
                       
                       
                       
                        
                        <!-- ============================================================== -->
                        <!-- end input groups -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- inputmask -->
                        <!-- ============================================================== -->
                      
                        
                </div>
            </div>
            
        </div>
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