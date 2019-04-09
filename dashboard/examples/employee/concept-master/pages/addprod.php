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
                        <div class="card" style="padding: 10px;">
             <h2 class="text-center">ADD PRODUCTS</h2>
  <form name=addprod action="action.php" onsubmit="return greek()" method="post" enctype = "multipart/form-data">
    <input type="file" name="image" >
    <br>
    <br>
    
    <div class="form-group">
      
      <input type="text" class="form-control" id="pname" placeholder="PRODUCT NAME" name="pname">
    </div>
     <div class="form-group">
      
      <input type="text" class="form-control" id="pdes" placeholder="PRODUCT DESCRIPTION" name="pdes">
    </div>
     <div class="form-group">
      
      <input type="text" class="form-control" id="pcat" placeholder="PRODUCT CATEGORY" name="pcat">
    </div>
     <div class="form-group">
     
      <input type="text" class="form-control" id="pava" placeholder="AVAILABLE QUANTITY" name="pava">
    </div>

     </div>
     <div class="form-group">
     
      <input type="text" class="form-control" id="pava" placeholder="Product discount" name="pdis">
    </div>
     
     <div class="form-group">
      
      <input type="text" class="form-control" id="psto" placeholder="STOCK ALERT" name="psto">
    </div>
         <div class="form-group">

     <input type="text" class="form-control" id="pprice" placeholder="PRODUCT PRICE" name="pprice">
    </div><br>
    <br>
    <br>
    <div class="form-group text-center">
    <button type="submit" class="btn btn-primary">Submit</button>
  </div>
  </form>

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

    <script> 
function greek()                                    
{ 
     var image = document.forms["addprod"]["image"];
    var name = document.forms["addprod"]["pname"];               
    var des = document.forms["addprod"]["pdes"];    
    var cat = document.forms["addprod"]["pcat"];  
    var quant=  document.forms["addprod"]["pava"];  
    var stock = document.forms["addprod"]["psto"];  
    var pprice = document.forms["addprod"]["pprice"];  
   
   if (image.value == "")                                  
    { 
        window.alert("Please select product image."); 
        image.focus(); 
        return false; 
    } 
    if (name.value == "")                                  
    { 
        window.alert("Please enter product name."); 
        name.focus(); 
        return false; 
    } 
   
    if (des.value == "")                               
    { 
        window.alert("Please enter prodct description."); 
        des.focus(); 
        return false; 
    } 
       
    if (cat.value == "")                                   
    { 
        window.alert("Please enter the product category."); 
        cat.focus(); 
        return false; 
    } 
   
    if (stock.value == "")                                   
    { 
        window.alert("Please enter the product stock."); 
        stock.focus(); 
        return false; 
    } 
    if (pprice.value == "")                                   
    { 
        window.alert("Please enter the product price."); 
        pprice.focus(); 
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