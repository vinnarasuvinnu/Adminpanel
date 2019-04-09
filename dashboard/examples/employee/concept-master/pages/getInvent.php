<?php
$loc=$_POST['location'];
include('db.php');
$q1="select * from inventory where godown='$loc'";

$res=mysqli_query($conn,$q1);
$output=array();
while($row=mysqli_fetch_array($res)){

	$output []=array("id"=>$row['id'],"name"=>$row['product'],"qty"=>$row['qty'],"godown"=>$row['godown']);

}

echo json_encode(array("result"=>$output));



?>