 <?php include '../database/db.php'; ?>  
<?php 
if(isset($_POST['submit'])){
$name=$_POST['name'];
$contact=$_POST['contact'];
	 $password=$_POST['password'];
	 $image=$_FILES['image']['name'];
 $tmp_name=$_FILES['image']['tmp_name'];
	move_uploaded_file($tmp_name,"../image/$image");
	 $state=$_POST['state'];
	 $district=$_POST['district'];	
	  $city=$_POST['city'];
	
	 $address=$_POST['address'];
	 $cnic=$_POST['cnic'];
	 $cnic_image=$_FILES['cnic_image']['name'];
	$tmp_name=$_FILES['cnic_image']['tmp_name'];
	move_uploaded_file($tmp_name,"../image/$image");
 $sql="INSERT INTO `customer`(`cus_name`, `cus_contact`, `cus_state`, `cus_district`, `cus_city`, `cus_address`, `cus_cnic`, `cnic_image`, `cus_password`, `image`) VALUE('$name','$contact','$state','$district','$city','$address','$cnic','$cnic_image','$password','$image')";
	$run =  mysqli_query($conn,$sql);  
if (mysqli_query($conn, $sql)) {
    echo "<script> alert('Successfully Register');</script>";
	header("Location:../Login.php");
exit();
}
else{
	echo "<script> alert('Not Registered');
</script>";
}
}
?>