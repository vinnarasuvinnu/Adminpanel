
<?php
$projname=$_POST['projname'];
$projdes=$_POST['projdes'];
$proj=$_POST['proj'];
$timest=$_POST['timeest'];
$empneeded=$_POST['empneeded'];
$startdate=$_POST['startdate'];
$enddate=$_POST['enddate'];



   $q1="INSERT INTO `addreq` (`project_name`, `description`, `project`, `timeset`, `emplyees`, `start`, `end`) VALUES ('$projname', '$projdes', '$proj', '$timeset', '$empneeded', '$startdate', '$enddate')";

$conn=mysqli_connect('localhost','root','','form');





$res=mysqli_query($conn,$q1);
if($res){
	echo '<script>alert("Submission Succcessfull");location.href="addreq.php";</script>';
}
else{
	echo '<script>alert("Submission  is not Succcessfull");location.href="addreq.php";</script>';
}






    

















?>