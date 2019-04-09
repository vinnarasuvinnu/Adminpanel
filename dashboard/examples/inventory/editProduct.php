<?php
$qty=$_POST['qty'];
$id=$_POST['pid'];


$q1="update inventory set qty='$qty' where id='$id'";

include('../db.php');
$res=mysqli_query($conn,$q1);
if($res){
	echo json_encode(array("description"=>"product added successfully".$id));
}
else{
		echo json_encode(array("description"=>"product has not added"));

}
	

?>