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
  
    <link rel="stylesheet" href="../assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
 
    <style>
    .button2{
    color: blue;
  width:100px;
  height:50px;
}
</style>


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css">
<!-- jQuery library -->

   <link rel="stylesheet" href="../assets/vendor/fonts/fontawesome/css/fontawesome-all.css">

<!-- Latest compiled JavaScript -->


    <style type="text/css">
        #example{
            background: white;
            padding: 20px;
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

                        <div class="container" style="background-color: white;padding: 30px">
                          <div class="row">
                            <div class="col-lg-6" id="m1">
                               <form class="form-group" style="margin-bottom: 20px">
            <select class="form-control" id="products">
              

                <option>select your product</option>

            </select>
            
            <br>

            <input type="text" id="qty" placeholder="Enter your quantity" class="form-control" >
            <div class="text-center" style="margin-bottom: 20px"><br>

                <input type="submit" value="Add product" class="btn btn-success" id="sub">

            </div>
        </form>
                            </div>


                             <div class="col-lg-6" id="m2">
  <form class="form-group">
            <input type="number" id="newqty" value="" class="form-control">
            <input type="hidden" id="pid" value="">

            <br>
            <div class="text-center">
            <input type="button" class="btn btn-success" value="Edit" id="edit1"></div>
        </form>



                            </div>
                          </div>

                        </div>
                   <div class="container">

        <br>
        <div class="row" style="margin-bottom: 20px">

        <div class="col-lg-6 " style="margin-bottom: 20px">
            <div class="text-center">

            <input type="button" value="Add" class="btn btn-success" id="add"></div>
        </div>

        <div class="col-lg-6">
            <select class="form-control" id="area">
                <option>select your area</option>
                <option value="jaya">Jainagar</option>
                <option value="mys">Mysore</option>
            </select>


        </div>
    </div>
    

    <div class="row">
            <div class="table-responsive">
                        <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Name of the product</th>
                <th>Quantity</th>
                <th>Type</th>
                <th>Acton 1</th>
              
            </tr>
        </thead>
        <tbody>
          
      
           
            
        </tbody>
        
    </table>





                                                    </div>
    </div>

    </div>


<!-- Modal -->

                       
                        
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





<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    <!-- ============================================================== -->
    <!-- end main wrapper -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
   
    <script type="text/javascript">

        function edit(id){
            $('#newqty').val($('#qty'+id).html());
            $('#pid').val(id);
            $('#m2').show();


        }
        $(document).ready(function(){
          $('#m1').hide();
          $('#m2').hide();

            var table=$('#example').DataTable();
            $('#area').change(function(){
                var val=$('#area').val();
            table.clear().draw();

    $.ajax({
      type: 'post',
      url: 'getInvent.php',
      data: {location:val},
    }).done(function(data) {
        data=JSON.parse(data);
        data=data.result;
        console.log(data);
    $.each(data, function(key,value) {
        var val;
        

            table.row.add($(
    '<tr>' +
    '<td >'+value.name+'</td>' +
  
   '<td id="qty'+value.id+'">'+value.qty+'</td>' +

    '<td>'+value.godown+'</td>' +

        '<td><input type="button" class="btn btn-success" id="'+value.id+'" onclick="edit(this.id)" value="Edit quantity"></td>' +





    '</tr>'
)).draw(false);
        

    });


    }).fail(function(data) {
        alert(data);
    });
});
  

$('#sub').click(function(event){
  event.preventDefault();

var id=$('#products').val();
var qty=$('#qty').val();
var area=$('#area').val();
   $.ajax({
      type: "post",
      url: 'addProduct.php',
      data:{location:area,product_id:id,qty:qty},
     // data: {name:name,address:add,devicename:dev,pincode:pin,problem_description:prob},
      success: function (data) {
        console.log(data);
        var data=JSON.parse(data);
          data=data.description;
          alert(data);
          $('#m1').hide();
      
      }
    });



})

$('#add').click(function(){

       $.ajax({
      type: "get",
      url: 'getDevice.php',
      data:{},
     // data: {name:name,address:add,devicename:dev,pincode:pin,problem_description:prob},
      success: function (data) {
        console.log(data);
        var data=JSON.parse(data);
          data=data.description;
          $.each(data,function(key,value){
$('<option>').val(value.product_id).text(value.name).appendTo('#products');
          });       
      }
    });
        $('#m1').show();

})


$('#edit1').click(function(){
  var qty=$('#newqty').val();
  var pid=$('#pid').val();
       $.ajax({
      type: "post",
      url: 'editProduct.php',
      data:{qty:qty,pid:pid},
     // data: {name:name,address:add,devicename:dev,pincode:pin,problem_description:prob},
      success: function (data) {
        console.log(data);
        var data=JSON.parse(data);
          data=data.description;
          alert(data);
          $('#m2').hide();
              
      }
    });

})


        })
    </script>

                       
                       
</body>
 
</html>