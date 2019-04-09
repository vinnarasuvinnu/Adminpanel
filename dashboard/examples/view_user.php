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
  <link href="cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet"/>
  <style type="text/css">
  
  </style>
  <style>
  #myInput {
  background-image: url('/css/searchicon.png'); /* Add a search icon to input */
  background-position: 10px 12px; /* Position the search icon */
  background-repeat: no-repeat; /* Do not repeat the icon image */
  width: 50%; /* Full-width */
  font-size: 16px; /* Increase font-size */
  padding: 12px 20px 12px 40px; /* Add some padding */
  border: 1px solid #ddd; /* Add a grey border */
  margin-bottom: 12px; /* Add some space below the input */
}

#myTable {
  border-collapse: collapse; /* Collapse borders */
  width: 50%; /* Full-width */
  border: 1px solid #ddd; /* Add a grey border */
  font-size: 18px; /* Increase font-size */
}

#myTable th, #myTable td {
  text-align: left; /* Left-align text */
  padding: 12px; /* Add padding */
}

#myTable tr {
  /* Add a bottom border to all table rows */
  border-bottom: 1px solid #ddd; 
}

#myTable tr.header, #myTable tr:hover {
  /* Add a grey background color to the table header and on hover */
  background-color: #f1f1f1;
}
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
  <p class="btn btn-primary dropdown-toggle" data-toggle="dropdown">                            <i class="now-ui-icons education_atom"></i>
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
  <p class="btn btn-primary dropdown-toggle"  data-toggle="dropdown">                            <i class="now-ui-icons education_atom"></i>
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
      <h2 class="text-center">VIEW USERS</h2>
      <br>
      <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." style="margin-left:400px;width: 56% ">

<table id="myTable" style="margin-left:400px ">
  <tr class="header">
    <th style="width:80%;">Name</th>
    <th style="width:80%;">Phone Number</th>
    <th style="width:80%;">Alternate Phone Number</th>
    <th style="width:80%;">Email</th>
    <th style="width:80%;">Address</th>
  </tr>

  <tbody>
<?php
include('db.php');
$q1="select * from users";
$res=mysqli_query($conn,$q1);
while($row=mysqli_fetch_array($res)){

?>




    <tr id="<?php echo $row['id'] ?>" onclick="userinfo(this.id)">
      <td><?php echo $row['uname'] ?></td>
      <td><?php echo $row['unum'] ?></td>
      <td><?php echo $row['ualnum'] ?></td>
      <td><?php echo $row['uemail'] ?></td>
      <td><?php echo $row['uaddress'] ?></td>


      <tr>


        <?php


      }
      ?>


  </tbody>
  
</table>

<input type="button" class="add-row" value="Add Row">
 
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
  <script src="cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
  <script>
    function userinfo(id){

      window.location.href="userinfo.php?id="+id;
    }
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      demo.initDashboardPageCharts();
      $('#myTable').DataTable();

    });
  </script>
  <script>
function myFunction() {
  // Declare variables 
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    } 
  }
}

/*
               $.getJSON('http://localhost/ERP/registration/dashboard/examples/table.php', function(jd) {
               

                
                  for(i=0;i<jd.length;i++){
                    name=jd[i]['uname'];
                    phone=jd[i]['unum'];
                    alphone=jd[i]['ualnum'];
                    email=jd[i]['uemail'];
                    address=jd[i]['uaddress'];
                    pushNewRow(name,phone,alphone,email,address);


                  }

                
               });
*/


               

   
        
</script>
 <script>
function pushNewRow(name,phone,alphone,email,address){
  var table = document.getElementById("myTable");
  var row = table.insertRow(1);
  var cell1 = row.insertCell(0);
  var cell2 = row.insertCell(1);
  var cell3 = row.insertCell(2);
  var cell4 = row.insertCell(3);
  var cell5 = row.insertCell(4);
  cell1.innerHTML = name;
  cell2.innerHTML = phone;
  cell3.innerHTML = alphone;
  cell4.innerHTML = email;
  cell5.innerHTML = address;


}
 

</script>
</body>

</html>