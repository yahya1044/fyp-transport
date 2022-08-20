<?php

   $id=$_GET['truckid'];
   $fare=$_POST['fare'];
   $other=$_POST['other'];
   $fuel=$_POST['fuel'];
   $tcost=$_POST['tcost'];

   $conn=mysqli_connect('localhost','root','','transport_management');
   $sql="INSERT INTO bill VALUES('','$id','$fare','$other','$fuel','$tcost')";
   if(mysqli_query($conn,$sql)){
	   
				$msg= "<script language='javascript'>
                                       swal(
                                            'Success!',
                                            'Registration Completed!',
                                            'success'
                                            );
				          </script>";
        
      header("Location: indexbill.php"); 
   }else{
        echo "Not inserted";
   }
?>