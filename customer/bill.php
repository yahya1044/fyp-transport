<?php 

include '../database/db.php'; 
session_start();

  if($_SESSION['cus_contact']==true){
 $cus_contact=$_SESSION['cus_contact'];
 ?>
   <?php
  if(isset($_POST['submit2'])){
 $to=$_POST['to'];
 $from=$_POST['from'];
     $material=$_POST['material'];
	 $weight=$_POST['weight'];
	
	 $number=$_POST['number'];
	 $date=$_POST['date'];
  $cus_contact=$_SESSION['cus_contact'];
   $bill=$_POST['bill'];
 $insert =mysqli_query($conn,"INSERT INTO `loading`(`load_from`, `load_to`, `load_material`, `load_weight`, `load_number`, `load_date`,`cus_contact`,`status`,`bill`) VALUES('$from','$to','$material','$weight','$number','$date','$cus_contact','Waiting','$bill')");
	 if(!$insert){
            echo mysqli_error();
        }
else{
	echo "<script> alert('Successfully Register');
	window.location.href='load_request.php';
</script>";
}
}
  ?>
 
<?php 

include 'header.php';   

?>
<?php
if(isset($_POST['submit'])){
 $to=$_POST['to'];
 $from=$_POST['from'];
     $material=$_POST['material'];
	 $weight=$_POST['weight'];
	 $number=$_POST['number'];
$date=$_POST['date'];
$select="SELECT * FROM packages WHERE pack_from = '$from' && pack_to = '$to'";
$run=mysqli_query($conn,$select); 
while($row=mysqli_fetch_array($run)) 
{	
$package = $row['package'];


$bill =  $number * $package;}
  ?>
  <?php
  if(isset($_POST['submit2'])){
   echo $to=$_POST['to'];
  echo $from=$_POST['from'];
    echo  $material=$_POST['material'];
	 echo $weight=$_POST['weight'];
	
	 echo $number=$_POST['number'];
	  echo $date=$_POST['date'];
  $cus_contact=$_SESSION['cus_contact'];
   $bill=$_POST['bill'];
 $insert =mysqli_query($conn,"INSERT INTO `loading`(`load_from`, `load_to`, `load_material`, `load_weight`, `load_number`, `load_date`,`cus_contact`,`status`,`bill`) VALUES('$from','$to','$material','$weight','$number','$date','$cus_contact','Waiting','$bill')");
	$run =  mysqli_query($conn,$sql);  
 if(!$insert){
            echo mysqli_error();
        }
else{
	echo "<script> alert('Successfully Register');
	window.location.href='../Login.php';
</script>";
}
}
  ?>
  <div class="row">
									<div class="col-lg-4 col-sm-4">
								</div>
                                <div class="col-lg-4 col-sm-4">
								  <header class="tab_board_header GridHeading-font btn-font">
                                    <ul class="nav">
                                        <li>
                                             <center> <h1 class="color_white"> TOTAL BILLS</h1>
                                             </center>
                                        </li>
                                    </ul>
                                </header>
  <form action="bill.php" method="POST" class="form-group">
      <div class="table-responsive  border-radius-0">
                   <table class="table table-hover  tbl-border-colapse" cellspacing="0" rules="all" border="1">
                                        <tbody>
										  <thead class="tab_board_header GridHeading-font btn-font color_white">
            
</thead>
 
<tr>
<td>From</td>
<td ><input name="from" type="text" value="<?php echo $from;?>"   style="border:0px" readonly /></td></tr>
<tr>
<td>To</td>
<td><input name="to" type="text" value="<?php echo $to;?>"   style="border:0px" readonly /></td>
</tr>
<tr>
<td>Weight</td>
<td><input name="weight" type="text" value="<?php echo $weight;?>"   style="border:0px"/></td>
</tr>
<tr>
<td>Material</td>
<td><input name="material" type="text" value="<?php echo $material;?>"   style="border:0px" readonly /></td>
</tr>
<tr>
<td>Number Of Trucks</td>
<td><input  name="number" type="text" value="<?php echo $number;?>"   style="border:0px" readonly /></td>
<tr>
<td>Load Date</td>
<td><input  name="date" type="text" value="<?php echo $date;?>"   style="border:0px" readonly /></td>
</tr>
<tr>
<td>Total Bill</td>
<td class="col-red"><input name="bill" type="text" value="<?php echo $bill;?>"   style="border:0px" readonly /></td>
</tr>
<tr>
<td colspan="2" class="col-red">     
Please check your bill and confirm your load
 </td>
</tr>
                                        </tbody>
                                    </table>
                                </div>
								
								
								 <center>      <div class="col-sm-6 mar-top-22">
                                                                        <input type="submit" name="submit2" value="Confirm"  class="btn btn-sm btn-danger" />
                                                                    </div>     </center>
																	
																	</form> 
								
                                </div>
                                </div>
                   
  
  <?php } ?>
  
   </div> 
   </div> 
  	<?php 

include 'footer.php'; 


 ?>
  
  
  
  
  <?php
  
  
 ///$sql="INSERT INTO `loading`(`load_from`, `load_to`, `load_material`, `load_weight`, `load_number`, `load_date`,`cus_contact`,`status`) VALUES('$from','$to','$material','$weight','$number','$date','$cus_contact','Waiting')";
//	$run =  mysqli_query($conn,$sql);  
//if (mysqli_query($conn, $sql)) {
 //   echo "<script> alert('Load Successfully Posted');
//</script>";
//}	
//else{
//	echo "<script> alert('Error');
//</script>";
//}

?>
   





<?php
    }
    else{
        echo "<script> alert('Error! you need to login First ');window.location.href='../Login.php' </script>";
    }
	
?>

