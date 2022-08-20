<?php
   $id=$_POST['id'];
   $salary=$_POST['fare'];
   $equipment=$_POST['other'];
   $oil=$_POST['fuel'];
   $tcost=$_POST['tcost'];

   $conn=mysqli_connect('localhost','root','','transport_management');
   $sql="UPDATE bill SET id='$id',fare='$fare',other='$other',fuel='$fuel',tcost='$tcost' WHERE id='$id'";

   if(mysqli_query($conn,$sql)){
      header("Location: showbill.php?id=".$id); 
   }else{
        echo "Not inserted";
   }
?>