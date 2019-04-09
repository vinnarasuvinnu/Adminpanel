<?php
$id=$_POST['id'];
include('db.php');
$q1="update reqtic set status=status+1 where id='$id'";
$res=mysqli_query($conn,$q1);
if($res){
	echo '<script>alert("your ticket status has been changed");location.href="r_ticket.php" </script>';
}
else{
	echo '<script>alert("something went wrong");location.href="r_ticket.php" </script>';
}


?>