<?php
function reqtic($con){
	
				if(array_key_exists('email', $_POST)){
					$email=$_POST['email'];
					if(array_key_exists('problem', $_POST)){
					$problem=$_POST['problem'];


					$q1="INSERT INTO `reqtic` (`email`,`problem`) VALUES ('$email','$problem')";
					$res=mysqli_query($con,$q1);
					echo mysqli_error($con);
					if($res){

						echo '<script>alert("ticket is added successfully");location.href="reqticket.php"</script>';
					}
					else{
						echo '<script>alert("ticket problem is missing");location.href="reqticket.php"</script>';

						
					}
				}
				
				else{
					echo '<script>alert("ticket email is missing");location.href="reqticket.php"</script>';
				}
			}
			
		}

$con=mysqli_connect('localhost','root','','form');
reqtic($con);
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