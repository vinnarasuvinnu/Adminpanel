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
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="card">
                                    <h5 class="card-header">Return Item</h5>
                                    <div class="card-body">
                                        <form action="addtic.php" method="post">
                                            <div class="form-group">
                                                <label for="inputText3" class="col-form-label">Product Name</label>
                                                <select name="pname" class="form-control">
                                                    <?php
                                                    include('db.php');
                                                    $q1="select * from product";
                                                    $res=mysqli_query($conn,$q1);
                                                    while($row=mysqli_fetch_array($res)){

                                                        ?>
                                                        <option value="<?php echo $row['product_id'] ?>"><?php echo $row['product_name'] ?></option>

                                                        <?php
                                                    }
                                                    ?>
                                                    
                                                </select>
                                            </div>
                                          
                                            <div class="form-group">
                                                <label for="inputText3" class="col-form-label">Date of purchase</label>
                                                <input id="inputText3" type="date" class="form-control" name="dateofpurchase">
                                            </div>
                                            <div class="form-group">
                                                <label for="inputEmail">Email</label>
                                                <input id="inputEmail" type="email" placeholder="name@example.com" class="form-control" name="uemail">
                                                <p>We'll never share your email with anyone else.</p>
                                            </div>
                                         <div class="form-group">
                                                <label for="exampleFormControlTextarea1">Reason for the return</label>
                                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="reason"></textarea>
                                            </div>
                                            <div class="text-center">

                                     <button class="button button2">Submit</button>           
                                 </div>

                                        </form>
                                    </div>
                                    
                                </div>
                            </div>
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