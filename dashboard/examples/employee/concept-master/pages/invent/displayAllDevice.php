<?php
include('db.php');
$q1="select * from product";

$res=mysqli_query($db,$q1);
$out=array();
while($row=mysqli_fetch_array($res)){

	$out []=array("name"=>$row['product_name'],"product_id"=>$row['product_id']);

}

echo json_encode(array("description"=>array($out)));
?>