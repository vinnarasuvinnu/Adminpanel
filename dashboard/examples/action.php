
<?php
include('db.php');
$pname=$_POST['pname'];
$pdes=$_POST['pdes'];
$pcat=$_POST['pcat'];
$pava=$_POST['pava'];
$pdis=$_POST['pdis'];
$psto=$_POST['psto'];
$pprice=$_POST['pprice'];


   

$target_dir = "uploads/";
echo json_encode($_FILES);
$target_file = $target_dir . basename($_FILES["image"]['name']);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
$file_name=$_FILES['image']['name'];
$file_tmp=$_FILES['image']['tmp_name'];
  move_uploaded_file($file_tmp,"uploads/".$file_name);
$location="uploads/".$file_name;


  // Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        $uploadOk = 1;
    } else {
        $uploadOk = 0;
    }
}

$q1="INSERT INTO `product` (`product_name`, `product_des`, `product_category`, `product_avail`, `product_discount`, `product_stock`, `product_price`,`pimage`) VALUES ('$pname', '$pdes', '$pcat', '$pava', '$pdis', '$psto', '$pprice','$location')";




$res=mysqli_query($conn,$q1);
if($res){
	echo "<script>alert('Your product is added');location.href='navya.php'</script>";
}
else{
echo "<script>alert('Your product is not added');location.href='navya.php'</script>";
}




  #
  #
    

















?>