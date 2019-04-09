<?php
session_start();
include('db.php');
if($_SESSION['type']==3){
	$eid=$_SESSION['eid'];
	$now = new DateTime();
$time=$now->format('H:i:s');    // MySQL datetime format
$timestamp1=$now->getTimestamp();
	
	$q2="select * from attendance where id='$eid'";
	$res3=mysqli_query($conn,$q2);
	$row2=mysqli_fetch_array($res3);
	$start_time=strtotime($row2['time_in']);
	$end_time=strtotime($time);
	$interval = $end_time-$start_time;
	$min=$interval/60;
	$hr=$min/60;
	echo $hr;
	

	$q1="update attendance set time_out='$time',num_hr='$hr' where id='$eid'";
	$res2=mysqli_query($conn,$q1);

}
session_destroy();

header('Location:index.php');
?>