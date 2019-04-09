<?php 

session_start();
if(!isset($_SESSION['type'])){
    echo '<script>alert("Sorry you have to login to proceed");location.href="login.html"</script>';
}
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
        <!-- end navbar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- left sidebar -->
        <!-- ============================================================== -->
      <div class="nav-left-sidebar sidebar-dark">
            <div class="menu-list">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav flex-column">
                            <li class="nav-divider">
                                Menu
                            </li>
                             <?php 
                                if($type==2 || $type==1){
                                    ?>
                            <li class="nav-item ">
                                <a class=" " href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1"><i class="fa fa-fw fa-user-circle"></i> HR DASHBOARD<span class="badge badge-success">6</span></a>
                                
                               
                                <li class="nav-item">
                                    <ul class="nav flex-column">
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="totalsalary.php">Total Salary</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="totalemp.php">Total Employees</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="createjob.php">Create Job Openings</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="viewreg.php">View Registrations</a>
                                                    </li>
                                                </ul>

                                </li>

                                <?php
                            }
                            ?>
                               <br>
 <?php 
                                if($type==1){
                                    ?>
                                <li class="nav-item">
                                <a class="" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-1-3" aria-controls="submenu-1-3"><i class="fa fa-fw fa-user-circle"></i>ADMIN DASHBOARD</a>
                                
                                
</li>

                               
                                    <li class="nav-item">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                                        <a class="nav-link" href="addprod.php">Add Product</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="viewprod.php">View Product</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="addsales.php">Add Sales</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="viewsales.php">View Sales</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="adduser.php">Add User</a>
                                                    </li>
                                                     <li class="nav-item">
                                                        <a class="nav-link" href="viewuser.php">View User</a>
                                                    </li>

                                                     <li class="nav-item">
                                                        <a class="nav-link" href="purchase.php">Purchase</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="addemp.php">Add Employee</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="viewtic.php">View Tickets</a>
                                                    </li>
                                    </ul>
</li>

                                <?php
                            }
                            ?>
                        


</li>


<br>

                                
                                  
                                 <li class="nav-item">
                                <a class="" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-1-3" aria-controls="submenu-1-3"><i class="fa fa-fw fa-user-circle"></i>EMPLOYEE DASHBOARD</a>
                                
                                <?php 
                                if($type==3 || $type==2 || $type==1){
                                    ?>

                                <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-2" aria-controls="submenu-2"><i class="fa fa-fw fa-rocket"></i>PRODUCTS</a>
                                <div id="submenu-2" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="purchase.php">TOTAL PURCHASES <span class="badge badge-secondary">New</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="viewprod.php">TOTAL PRODUCTS</a>
                                        </li>
                                        
                                       
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-3" aria-controls="submenu-3"><i class="fas fa-fw fa-chart-pie"></i>SALES</a>
                                <div id="submenu-3" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="viewsales.php">SALES</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="totalsales.php">TOTAL SALES</a>
                                        </li>
                                       
                                        
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="createtic.php"  aria-expanded="false" data-target="#submenu-4" aria-controls="submenu-4"><i class="fab fa-fw fa-wpforms"></i>TICKET CREATION</a>
        
                            </li>
                           

                            <li class="nav-item ">
                                <a class="nav-link" href="inventory.php" aria-expanded="false" data-target="#submenu-4" aria-controls="submenu-4"><i class="fab fa-fw fa-wpforms"></i>INVENTORY</a>
        
                            </li>
                            
                            </li>
                             <li class="nav-item ">
                                <a class="nav-link" href="payslip.php"  aria-expanded="false" data-target="#submenu-4" aria-controls="submenu-4"><i class="fab fa-fw fa-wpforms"></i>PAY SLIPS</a>
        
                            </li>
                             <li class="nav-item ">
                                <a class="nav-link" href="totalemp.php"  aria-expanded="false" data-target="#submenu-4" aria-controls="submenu-4"><i class="fab fa-fw fa-wpforms"></i>ENROLLMENT</a>
        
                            </li>
                           
                             <li class="nav-item ">
                                <a class="nav-link" href="attendance.php"  aria-expanded="false" data-target="#submenu-4" aria-controls="submenu-4"><i class="fab fa-fw fa-wpforms"></i>ATTENDANCE</a>
        
                            </li>
                            <ul class="nav flex-column flex-nowrap">
              
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#submenu1" data-toggle="collapse" data-target="#submenu1">RND</a>
                    <div class="collapse" id="submenu1" aria-expanded="false">
                        <ul class="flex-column pl-2 nav">
                            
                            <li class="nav-item">
                                <a class="nav-link collapsed py-1" href="#submenu1sub1" data-toggle="collapse" data-target="#submenu1sub1">
                                    SUBMIT REQUIREMENTS
                                </a>
                                <div class="collapse" id="submenu1sub1" aria-expanded="false">
                                    <ul class="flex-column nav pl-4">
                                        <li class="nav-item">
                                            <a class="nav-link p-1" href="addreq.php">
                                              ADD 
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link p-1" href="viewreq.php">
                                               VIEW
                                            </a>
                                        </li>
                                        
                                       
                                    </ul>
                                </div>

                            </li>
                            <li class="nav-item">
                                <a class="nav-link collapsed py-1" href="reqticket.php" data-toggle="" data-target="#submenu1sub1">
                                TICKETS
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link collapsed py-1" href="r_ticket.php" data-toggle="" data-target="#submenu1sub1">
                                    View Tickets
                                </a>
                            </li>


                             <li class="nav-item">
                                <a class="nav-link collapsed py-1" href="client.php" data-toggle="" data-target="#submenu1sub1">
                                    View Clients
                                </a>
                            </li>





                        </ul>
                    </div>
                </li>
               
            </ul>
                         
                          <?php
                            }
                            ?>



                            <li class="nav-item" style="margin-bottom: 30px">
                                <a class="nav-link collapsed py-1" href="logout.php" data-toggle="" data-target="#submenu1sub1">
                                    Logout
                                </a>
                            </li>
                         
                              
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-9" aria-controls="submenu-9"></a>
                                <div id="submenu-9" class="collapse submenu" style="">
                                   
                                </div>
                            </li>
                           
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end left sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- wrapper  -->
       
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="../assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <script src="../assets/libs/js/main-js.js"></script>
    <script src="../assets/vendor/inputmask/js/jquery.inputmask.bundle.js"></script>
    
</body>
 
</html>