
<?php
$uname=$_POST['uname'];
$unum=$_POST['unum'];
$ualnum=$_POST['ualnum'];
$uemail=$_POST['uemail'];
$uaddress=$_POST['uaddress'];


echo $uname;
echo $unum;
echo $ualnum;
echo $uemail;
echo $uaddress;

$q1="INSERT INTO `users` (`uname`, `unum`, `ualnum`, `uemail`, `uaddress`) VALUES ('$uname', '$unum', '$ualnum', '$uemail', '$uaddress');";

$conn=mysqli_connect('localhost','root','','form');



$res=mysqli_query($conn,$q1);
if($res){
	echo '<script>alert("your submission is Successfull");location.href="adduser.php";</script>';
}
else{
echo '<script>alert("your submission is  not Successfull");location.href="adduser.php";</script>';
}


?>