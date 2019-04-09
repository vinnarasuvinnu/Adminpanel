<?php
/*
$conn=mysqli_connect("localhost","root","","form");
	if(mysqli_connect_errno()){
		echo "connection is not succcesful";
		} 

	$price=$_POST['price'];
	$desc=$_POST['desc'];
	$c_name=$_POST['c_name'];
	echo $pname.$price.$desc.$c_name;
	if(isset($_FILES['pimage'])){
	$filetmp=$_FILES['pimage']['tmp_name'];
	$filename=$_FILES['pimage']['name'];
	echo $filename;
	$filepath="uploads/".$filename;
	echo $filepath;
	$uploaddir='uploads/';
	$uploadfile=$uploaddir.basename($filename);
	if(move_uploaded_file($filetmp, $uploadfile)){
		echo "file is done";
		$q1="insert into Product(c_id,product_name,price,image,description)values('$c_name','$pname','$price','$uploadfile','$desc')";
		if(mysqli_query($conn,$q1)){
			header("Location:index.php");
		}
	}
	else{
		echo "not done";
	}

	


}

*/

$target_dir = "uploads/";
echo json_encode($_FILES);
$target_file = $target_dir . basename($_FILES["image"]['name']);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
$file_name=$_FILES['image'][	'name'];
$file_tmp=$_FILES['image']['tmp_name'];
  move_uploaded_file($file_tmp,"uploads/".$file_name);
$location="uploads/".$file_name;


  // Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}


	?>


