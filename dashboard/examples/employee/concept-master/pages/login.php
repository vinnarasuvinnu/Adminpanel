
                         <?php
                         session_start();
$server_name="localhost";
$user="root";
$password="";
$name=$_POST['username'];
$pass=$_POST['password'];
$conn=mysqli_connect('localhost','root','','form');
$q1="select * from login where name='$name' and password='$pass'";

$res=mysqli_query($conn,$q1);
if(mysqli_num_rows($res)==1){

	$row=mysqli_fetch_array($res);
	$_SESSION['type']=$row['type'];
	if($row['type']==3){
		echo "cool";
		$now = new DateTime();
$timeform=$now->format('H:i:s');    // MySQL datetime format
$day=new DateTime(); 
$date1=$day->format('Y-m-d');
$eid=$row['id'];
$q2="INSERT INTO `attendance` (`employee_id`, `date`, `time_in`, `status`, `time_out`, `num_hr`) VALUES ('$eid', '$date1', '$timeform', '0', NULL, NULL)";
$res1=mysqli_query($conn,$q2);
echo mysqli_error($conn);
$lastid=$conn->insert_id;
echo '<br>';
echo $lastid;

$_SESSION['eid']=$lastid;


	}
	header('Location:index.php');


}
else{
	echo '<script>alert("sorry no data found");location.href="login.html"</script>';
}



?>