



<?php
function addregister($con){
	if(array_key_exists('uname',$_POST)){
		$uname=$_POST['uname'];
		if(array_key_exists('email',$_POST )){
			$email=$_POST['email'];
			if(array_key_exists('num', $_POST)){
				$num=$_POST['num'];
				if(array_key_exists('edu', $_POST)){
					$edu=$_POST['edu'];
					if(array_key_exists('exp', $_POST)){
					$exp=$_POST['exp'];
					if(array_key_exists('ainfo', $_POST)){
					$ainfo=$_POST['ainfo'];
					

					$q1="INSERT INTO `register` (`uname`, `email`, `num`, `edu`,`exp`,`ainfo`) VALUES ('$uname', '$email', '$num', '$edu','$exp','$ainfo')";
					$res=mysqli_query($con,$q1);
					echo mysqli_error($con);
					if($res){

						success("registered  successfully");
					}
					

					else{
						fail("something went wrong with registering");
					}
				}
				else{
						fail("additional info is missing");
					}
				}
				else{
					fail("uname is missing");
				}

				}
				else{
					fail("num is missing");
				}
			}
			else{
				fail("email is missing");

			}

		}
		else{
			fail("education is missing");
		}
	}
	else{
		fail("experience is missing");
	}
	

}


$con=mysqli_connect('localhost','root','','form');
addregister($con);
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
