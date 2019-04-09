
                         <?php
                         session_start();
$server_name="localhost";
$user="root";
$password="";
$name=$_POST['username'];
$pass=$_POST['password'];
$email=$_POST['email'];
$phno=$_POST['phno'];
$conn=mysqli_connect('localhost','root','','form');
$q1="INSERT INTO `login` (`name`, `password`, `type`, `email`, `phno`) VALUES ('$name', '$pass', '3', '$email', '$phno')";

$res=mysqli_query($conn,$q1);
if ($res){
	$row=mysqli_fetch_array($res);
	$_SESSION['type']=$row['type'];
	header('Location:login.html');


}
else{
	echo '<script>alert("sorry no data found");location.href="sign-up.html"</script>';
}



?>