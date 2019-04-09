<?php
$loc=$_POST['location'];
$pid=$_POST['product_id'];
$qty=$_POST['qty'];

$q1="update inventory set qty=qty+'$qty' where id='$pid'";

include('db.php');
$res=mysqli_query($conn,$q1);
if($res){
	echo json_encode(array("description"=>"product added successfully"));
}
else{
		echo json_encode(array("description"=>"product has not added"));

}
	


?>