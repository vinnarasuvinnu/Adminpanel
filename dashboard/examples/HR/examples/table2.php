<?php
$server_name="localhost";
$user="root";
$password="";

$conn=mysqli_connect('localhost','root','','form');

$sql="select * from register";
$res=mysqli_query($conn,$sql);

$output=[];


while ($row=mysqli_fetch_array($res)){
$output[]=$row;

}

$out_string=json_encode($output);
echo $out_string;

?>