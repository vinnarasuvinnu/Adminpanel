<?php
function addemployee($con){
	if(array_key_exists('fname',$_POST)){
		$fname=$_POST['fname'];
		if(array_key_exists('lname',$_POST )){
			$lname=$_POST['lname'];
			if(array_key_exists('mail', $_POST)){
				$mail=$_POST['mail'];
				if(array_key_exists('phone', $_POST)){
					$phone=$_POST['phone'];
					if(array_key_exists('salary', $_POST)){
					$salary=$_POST['salary'];


					$q1="INSERT INTO `employee` (`emp_fname`, `emp_lname`, `email`, `phone`,`salary`) VALUES ('$fname', '$lname', '$mail', '$phone','$salary')";
					$res=mysqli_query($con,$q1);
					echo mysqli_error($con);
					if($res){

						success("employee is added successfully");
					}
					else{
						fail("something went wrong with adding employee");
					}
				}
				else{
					fail("salary is missing");
				}

				}
				else{
					fail("phone is missing");
				}
			}
			else{
				fail("mail is missing");

			}

		}
		else{
			fail("last name is missing");
		}
	}
	else{
		fail("first name is missing");
	}

}

$con=mysqli_connect('localhost','root','','form');
addemployee($con);
function success($data){
/*echo json_encode(array('result'=>'success','description'=>$data));	
*/

echo "<script>alert('employee added successfully');location.href='emp_form.html'</script>";


}

function fail($data){

echo "<script>alert('employee is not added ');location.href='emp_form.html'</script>";

}
function out($data){
	echo json_encode(array('result'=>'success','description'=>$data));
}



?>
