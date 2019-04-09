<?php
$pid=$_POST['pname'];
$date=$_POST['dateofpurchase'];
$mail=$_POST['uemail'];
$reason=$_POST['reason'];
include('db.php');
$q1="INSERT INTO `tickets` (`product_id`,`dateofpurchase`, `uemail`, `reason`) VALUES ('$pid','$date', '$mail', '$reason')";
$res=mysqli_query($conn,$q1);
if($res){
	echo '<script>alert("ticket added successfully");location.href="createtic.php"</script>';
}
else{

	echo '<script>alert("ticket is not added successfully");location.href="createtic.php"</script>';
}


?>