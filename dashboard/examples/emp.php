<?php

include("addemp.php");
header('Access-Control-Allow-Origin: *');

header('Access-Control-Allow-Methods: GET, POST');

header("Access-Control-Allow-Headers: X-Requested-With");




if(array_key_exists('rType', $_POST)){
	$rtype=(int)$_POST['rType'];
			$con=mysqli_connect('localhost','root','','form');
			



	switch ($rtype) {
		case 1:
			echo "cool";
			addemployee($con);
			break;
		
		default:
		fail("your request type does not match");
			break;
	}
}
else{
	echo "no time";
}
function success($data){
echo json_encode(array('result'=>'success','description'=>$data));	
}

function fail($data){
	echo json_encode(array('result'=>'failure','description'=>$data));	
}
function out($data){
	echo json_encode(array('result'=>'success','description'=>$data));
}
?>