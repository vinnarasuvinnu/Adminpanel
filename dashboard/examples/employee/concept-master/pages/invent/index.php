<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    <style type="text/css">
    	#example_wrapper{
    		background: white;
    		padding: 20px;
    	}
    </style>
    <script type="text/javascript">

    	function edit(id){
    		$('#newqty').val($('#qty'+id).html());
    		$('#pid').val(id);
    		$('#myModal2').modal('show');


    	}
    	$(document).ready(function(){
    		var table=$('#example').DataTable();
    		$('#area').change(function(){
    			var val=$('#area').val();
            table.clear().draw();

    $.ajax({
      type: 'post',
      url: 'inventory.php',
      data: {location:val},
    }).done(function(data) {
        data=JSON.parse(data);
        data=data.description;
        data=data['0'];
        console.log(data);
    $.each(data, function(key,value) {
    
            table.row.add($(
    '<tr>' +
    '<td >'+value.name+'</td>' +
  
   '<td id="qty'+value.id+'">'+value.qty+'</td>' +

    '<td>'+value.type+'</td>' +

        '<td><input type="button" class="btn btn-success" id="'+value.id+'" onclick="edit(this.id)" value="Edit quantity"></td>' +





    '</tr>'
)).draw(false);
        

    });


    }).fail(function(data) {
        alert("kkk");
    });
});
  

$('#sub').click(function(event){
  event.preventDefault();


var id=$('#products').val();
var qty=$('#qty').val();
var area=$('#area').val();
   $.ajax({
      type: "post",
      url: 'addinvent.php',
      data:{location:area,product_id:id,qty:qty},
     // data: {name:name,address:add,devicename:dev,pincode:pin,problem_description:prob},
      success: function (data) {
        console.log(data);
        alert(data);
      }
    });



})

$('#add').click(function(){

	   $.ajax({
      type: "get",
      url: 'displayAllDevice.php',
      data:{},
     // data: {name:name,address:add,devicename:dev,pincode:pin,problem_description:prob},
      success: function (data) {
        console.log(data);
        var data=JSON.parse(data);
          data=data.description;
          console.log(data);
          data=data['0'];
          $.each(data,function(key,value){
            console.log(key);
$('<option>').val(value.product_id).text(value.name).appendTo('#products');
          });       
      }
    });
	   	$('#myModal').modal('show');

})


$('#edit1').click(function(){

 $.ajax({
      type: "get",
      url: 'displayAllDevice.php',
      data:{},
     // data: {name:name,address:add,devicename:dev,pincode:pin,problem_description:prob},
      success: function (data) {
        console.log(data);
        var data=JSON.parse(data);
          data=data.description;
          console.log(data);
          data=data['0'];
          $.each(data,function(key,value){
            console.log(key);
$('<option>').val(value.product_id).text(value.name).appendTo('#products');
          });       
      }
    });
      $('#myModal').modal('show');

})

    	})
    </script>
</head>
<body style="background: #007bff">
	<nav class="navbar navbar-default" style="background: white">
  <div class="container-fluid">
    <div class="navbar-header text-center">
    	<div class="row ">
    		<div class="col-lg-12">
      <a class="navbar-brand" href="#" style="font-size: 30px;">Inventory</a>
  </div>
  </div>
    </div>
    
  </div>
</nav>

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
<div id="myModal" class="modal fade" role="dialog" >
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title text-center">New product</h4>
      </div>
      <div class="modal-body">
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
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>


<!-- Modal -->
<div id="myModal2" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Editing New Inventory</h4>
      </div>
      <div class="modal-body">
      	<form class="form-group">
      		<input type="number" id="newqty" value="" class="form-control">
      		<input type="hidden" id="pid" value="">

      		<br>
      		<div class="text-center">
      		<input type="button" class="btn btn-success" value="Edit" id="edit1"></div>
      	</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
</body>
</html>