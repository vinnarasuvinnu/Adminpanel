<?php
$id=$_POST['id'];
include('db.php');
$q1="update tickets set status=status+1 where pid='$id'";
$res=mysqli_query($conn,$q1);
if($res){
	echo '<script>alert("your ticket status has been changed");location.href="viewtic.php" </script>';
}
else{
	echo '<script>alert("something went wrong");location.href="viewtic.php" </script>';
}


?>