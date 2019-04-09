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
                    <!-- ============================================================== -->
                    <!-- basic table  -->
                    <!-- ============================================================== -->
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <h5 class="card-header">View Tickets</h5>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered first">
                                        <thead>
                                            <tr>
                              <th>Product Name</th>
    <th>Product ID</th>
    <th >Date Of Purchase</th>
    <th>Email</th>
    <th >Reason for the return</th>
    <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                         <?php
$server_name="localhost";
$user="root";
$password="";

$conn=mysqli_connect('localhost','root','','form');

$sql="select * from tickets";
$res=mysqli_query($conn,$sql);



while ($row=mysqli_fetch_array($res)){
$pid=$row['product_id'];
$q2="select * from product where product_id='$pid'";
$res1=mysqli_query($conn,$q2);
$row1=mysqli_fetch_array($res1);
if($row['status']==0){
    $color="btn btn-warning";
    $value="Pending";


}
else if($row['status']==1){
    $color="btn btn-primary";
    $value="In progress";

}
else{
    $color="btn btn-success";
    $value="Completed";
}
?>
<tr>
    <td><?php echo $row1['product_name']; ?></td>
        <td><?php echo $row['pid']; ?></td>

    <td><?php echo $row['dateofpurchase']; ?></td>
    <td><?php echo $row['uemail']; ?></td>
        <td><?php echo $row['reason']; ?></td>
        <td><form action="status.php" method="post">
            <input type="hidden" name="id" value="<?php echo $row['pid'] ?>">
            <input type="submit" value="<?php echo $value ?>" class="<?php echo $color ?>">
        </form>
    </td>





    </tr>
    <?php
}

?>
                                        </tbody>
                                           
                                    </table>
                                </div>
                            </div>
                        </div>
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