<?php
include("db.php");
$location=$_POST['location'];
$q1="select * from invent where branch='$location'";
$res=mysqli_query($db,$q1);
while($row=mysqli_fetch_array($res)){
$product_id=$row['product_id'];
	$q2="select * from product where product_id='$product_id'";
	$res1=mysqli_query($db,$q2);
	$row1=mysqli_fetch_array($res1);

	$out []=array("name"=>$row1['product_name'],"product_id"=>$row['product_id'],"id"=>$row['id'],"qty"=>$row['quantity'],"type"=>$row1['product_des']);

}

echo json_encode(array("description"=>array($out)));



?>