<?php
	$db = mysqli_connect('localhost', 'root', '', 'registration');

$_username=$_POST["email"];
$_password=$_POST["password"];
$_conformpassword=$_POST["con-password"];
$q1="select email from users where email='$_username'"; 
if($_password != $_conformpassword){
	echo '<script>alert("your pass word does not match")</script>';
}
else{

	$res=mysqli_query($db,$q1);
	if((mysqli_num_rows($res))==1){
		echo "cocl";
		$q2="update users set password='$_conformpassword' where email='$_username'";
		$res1=mysqli_query($db,$q2);
		if($res1){
				echo '<script>alert("your password is successfully reset")</script>';

		}
	}
}

?>