



<?php
function addregister($con){
	if(array_key_exists('JOB_DESCRIPTION',$_POST)){
		$JOB_DESCRIPTION=$_POST['JOB_DESCRIPTION'];
		if(array_key_exists('QUALIFICATION',$_POST )){
			$QUALIFICATION=$_POST['QUALIFICATION'];
			if(array_key_exists('EXPERIENCE', $_POST)){
				$EXPERIENCE=$_POST['EXPERIENCE'];
				if(array_key_exists('Salary', $_POST)){
					$Salary=$_POST['Salary'];
					
					
					

					$q1="INSERT INTO `hr` (`JOB_DESCRIPTION`, `QUALIFICATION`, `EXPERIENCE`, `Salary`) VALUES ('$JOB_DESCRIPTION', '$QUALIFICATION', '$EXPERIENCE', '$Salary')";
					$res=mysqli_query($con,$q1);
					echo mysqli_error($con);
					if($res){

						success("registered  successfully");
					}
				
				else{
					fail("something went wrong");
				}

				}
				else{
					fail("Salary is missing");
				}
			}
			else{
				fail("EXPERIENCE is missing");

			}

		}
		else{
			fail("QUALIFICATION is missing");
		}
	}
	else{
		fail("JOB_DESCRIPTION is missing");
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
