<?php
$loc=$_POST['location'];
include('../db.php');
$q1="select * from inventory";

$res=mysqli_query($conn,$q1);
$output=array();
while($row=mysqli_fetch_array($res)){

	$output []=array("product_id"=>$row['id'],"name"=>$row['product']);

}

echo json_encode(array("description"=>$output));



?>