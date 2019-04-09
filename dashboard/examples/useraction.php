
<?php
include('db.php');
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




$res=mysqli_query($conn,$q1);
if($res){
	echo "<script>alert('User is successfully added');location.href='add_user.html'</script>";
}
else{
echo "<script>alert('User is not added');location.href='add_user.html'</script>";
}


?>