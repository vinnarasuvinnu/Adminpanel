
<?php
$pname=$_POST['pname'];
$pprice=$_POST['pprice'];


  

$q1="INSERT INTO `sales` (`sub_id`,`pprice`) VALUES ('$pname','$pprice')";

$conn=mysqli_connect('localhost','root','','form');


$res=mysqli_query($conn,$q1);

if($res){
	echo '<script>alert("Submission Succcessfull");location.href="addsales.php"</script>';
}
else{
echo '<script>alert("Submission Unsucccessfull");location.href="addsales.php"</script>';
}




  #
  #
    

















?>s