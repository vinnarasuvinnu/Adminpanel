<?php
session_start();
$server_name="localhost";
$user="root";
$password="";

$conn=mysqli_connect('localhost','root','','form');

$sql="select * from employee";
$res=mysqli_query($conn,$sql);
$count=mysqli_num_rows($res);
$_SESSION['count']=$count;
$output=[];


while ($row=mysqli_fetch_array($res)){
$output[]=$row;

}

$out_string=json_encode($output);
echo $out_string;

?>