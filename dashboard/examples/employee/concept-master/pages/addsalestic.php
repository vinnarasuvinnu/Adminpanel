<?php
function salestic($con){
	
				if(array_key_exists('name', $_POST)){
					$name=$_POST['name'];
					if(array_key_exists('eid', $_POST)){
					$eid=$_POST['eid'];
					if(array_key_exists('email', $_POST)){
					$email=$_POST['email'];
					if(array_key_exists('problem', $_POST)){
					$problem=$_POST['problem'];


					$q1="INSERT INTO `salestic` (`name`,`eid`,`email`,`problem`) VALUES ('$name','$eid','$email','$problem')";
					$res=mysqli_query($con,$q1);
					echo mysqli_error($con);
					if($res){

						success("ticket is added successfully");
					}
					else{
						fail("problem is missing");
					}
				}
				else{
						fail("email is missing");
					}
				}
				else{
						fail("eid is missing");
					}
				}
				
				else{
					fail("name is missing");
				}
			}
			
		}

$con=mysqli_connect('localhost','root','','form');
salestic($con);
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