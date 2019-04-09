<?php
include('db.php');
$location=$_POST['location'];
$product_id=$_POST['product_id'];
$qty=$_POST['qty'];
$q1="INSERT INTO `invent` (`product_id`, `quantity`, `branch`) VALUES ('$product_id', '$qty', '$location')";
$res=mysqli_query($db,$q1);
if($res){
	echo "your information is stored successfully";
}
else{
	echo "something went wrong";
}


?>