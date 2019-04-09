<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
     Dashboard
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../assets/css/now-ui-dashboard.css?v=1.2.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />
  <style type="text/css">

  </style>
</head>
<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="orange">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
      <div class="logo">
        <a href="" class="simple-text logo-mini">
          
        </a>
        <a href="" class="simple-text logo-normal">
          CURVE
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li>
            <a href="./dashboard.html">
              <i class="now-ui-icons design_app"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <!-- <li class="active ">
            <a href="products.html">
              <i class="now-ui-icons education_atom"></i>
              <p>PRODUCTS</p>
            </a>
          </li> --><br>
          <li class="active">
            <div class="dropdown">
  <p class="btn btn-primary dropdown-toggle"  data-toggle="dropdown">                            <i class="now-ui-icons education_atom"></i>
PRODUCTS</p>
  <ul class="dropdown-menu">
    <li><a href="navya.php" style="color:black">ADD</a></li>
    <li><a href="form.php"  style="color:black">VIEW</a></li>
    <li><a href="#"  style="color:black">SALES</a></li>
  </ul>
</div>
          </li>
          <br>
          <li class="active">
            <div class="dropdown">
  <p class="btn btn-primary dropdown-toggle" data-toggle="dropdown">                            <i class="now-ui-icons education_atom"></i>
USERS</p>
  <ul class="dropdown-menu">
    <li><a href="add_user.html" style="color:black">ADD</a></li>
    <li><a href="view_user.php"  style="color:black">VIEW</a></li>
        <li><a href="view_user.php"  style="color:black">PURCHASES</a></li>

  </ul>
</div>
          </li>
          <li>
            <a href="emp_form.html">
              <i class="now-ui-icons location_map-big"></i>
              <p>ADD EMPLOYEE</p>
            </a>
          </li>
          <li>
            <a href="./notifications.html">
              <i class="now-ui-icons ui-1_bell-53"></i>
              <p>View Tickets</p>
            </a>
          </li>
        
          <li>
            <a href="./tables.html">
              <i class="now-ui-icons design_bullet-list-67"></i>
              <p>Table List</p>
            </a>
          </li>
          <li>
            <a href="./typography.html">
              <i class="now-ui-icons text_caps-small"></i>
              <p>Typography</p>
            </a>
          </li>
          
        </ul>
      </div>
    </div>
<nav class="navbar navbar-expand-lg fixed-top navbar-transparent  bg-primary  navbar-absolute">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href="#pablo">PRODUCTS</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <form>
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search...">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <i class="now-ui-icons ui-1_zoom-bold"></i>
                  </div>
                </div>
              </div>
            </form>
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="#pablo">
                  <i class="now-ui-icons media-2_sound-wave"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Stats</span>
                  </p>
                </a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="now-ui-icons location_world"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Some Actions</span>
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link" href="#pablo" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">person</i>
                  <p class="d-lg-none d-md-block">
                    Account
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                  <a class="dropdown-item" href="login.php">Login</a>
                  <a class="dropdown-item" href="register.php">Register</a>
                  <a class="dropdown-item" href="#">Profile</a>
                  <a class="dropdown-item" href="#">Settings</a>

                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Log out</a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
<div class="panel-header panel-header-sm">
      </div>

      <div class="container py-5 table-responsive">
 <div class="row">

<?php
$conn=mysqli_connect('localhost','root','','form');
$q1="SELECT * FROM `product`";
$res=mysqli_query($conn,$q1);
while ($row=mysqli_fetch_array($res)){




?>

  <div class="col-lg-3 ">
  
  <div class="card" style=" margin-left: 200px;">
    <img class="card-img-top" src="<?php echo $row['pimage']; ?>" alt="Card image" >
    <div class="card-body">
      <h4 class="card-title"><?php echo $row['product_name']?></h4>
      <p class="card-text" style="font-weight: bold">DES:<?php echo $row['product_des']?></p>
      <p class="card-text" style="font-weight: bold">CATEGORY:<?php echo $row['product_category']?></p>
      <p class="card-text" style="font-weight: bold">AVAILABILITY:<?php echo $row['product_avail']?></p>
      <p class="card-text" style="font-weight: bold">DISCOUNT:<?php echo $row['product_discount']?>%</p>
      <p class="card-text" style="font-weight: bold">STOCK:<?php echo $row['product_stock']?></p>
      <p class="card-text" style="font-weight: bold">PRICE:₹<?php echo $row['product_price']?></p>
      <a href="#" class="btn btn-primary">See Profile</a>
    </div>
  </div>
</div>
<?php
}
?>

   </div>
</div>
  
</div>
      </div>
  </div>
  !--   Core JS Files   -->
  <script src="../assets/js/core/jquery.min.js"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="../assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/now-ui-dashboard.min.js?v=1.2.0" type="text/javascript"></script>
  <!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
  <script src="../assets/demo/demo.js"></script>
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      demo.initDashboardPageCharts();

    });
  </script>
</body>

</html>