<?php
function clienttic($con){
	
				if(array_key_exists('name', $_POST)){
					$name=$_POST['name'];
					if(array_key_exists('phone', $_POST)){
					$phone=$_POST['phone'];
					if(array_key_exists('email', $_POST)){
					$email=$_POST['email'];
					if(array_key_exists('problem', $_POST)){
					$problem=$_POST['problem'];


					$q1="INSERT INTO `clienttic` (`name`,`phone`,`email`,`problem`) VALUES ('$name','$phone','$email','$problem')";
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
						fail("phone is missing");
					}
				}
				
				else{
					fail("name is missing");
				}
			}
			
		}

$con=mysqli_connect('localhost','root','','form');
clienttic($con);
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