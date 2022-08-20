
  <?php include '../database/db.php';
session_start();

  if($_SESSION['TO_contact']==true){

$TO_contact=$_SESSION['TO_contact'];
 ?>
<?php
if (isset($_GET['accept'])){
	 $load_id=$_GET['accept'];
 $sql="UPDATE `loading` SET `driver_contact`='$TO_contact',`status`='Continue' WHERE  status='Waiting' && load_id='$load_id'";
	if (mysqli_query($conn, $sql)) {
    echo "<script>
	alert ('Load Accepted');
	window.open('current_booking.php','_self')</script>";
} else {
    echo "<script>alert ('Error ');</script> ";
}
}
?>

<?php include 'header.php'; ?> 
 <div class="container-fluid">
 
                                <h2 class="center-heading mar-top-10 h1-Postfont">
								<span class="color_orange">   List Of Available Loads</span></h2>
                              
                                    <div class="row">
									<div class="col-lg-1 col-sm-1">
								</div>
                                <div class="col-lg-9 col-sm-9">
								  <header class="tab_board_header GridHeading-font btn-font">
                                    <ul class="nav">
                                        <li>
                                            <a class="pull-left ">List Of Available Loads</a>
                                          
                                        </li>
                                    </ul>
                                </header>
                                                         <div class="table-responsive border-radius-0">
                                    <table class="table table-hover  tbl-border-colapse" cellspacing="0" rules="all" border="1">
                                        <tbody>
										  <thead class="tab_board_header GridHeading-font btn-font color_white">
                    <tr>

<td>From</td>
<td>To</td>
<td>Weight</td>
<td>material</td>
<td>Number of trucks</td>
<td>date</td>
<td>Bill</td>
<td>Customer Contact</td>
<td>Accept Load</td>

</tr>
</thead>
 <?php
$select="SELECT * FROM loading WHERE status='Waiting'";
$run=mysqli_query($conn,$select); 
while($row=mysqli_fetch_array($run)) 
{	
?>
<tr>
<tr>
<td><?php echo $row['load_from'];?></td>
<td><?php echo $row['load_to'];?></td>
<td><?php echo $row['load_weight'];?></td>
<td><?php echo $row['load_material'];?></td>
<td><?php echo $row['load_number'];?></td>
<td><?php echo $row['load_date'];?></td>
<td><?php echo $row['bill'];?></td>
<td><?php echo $row['cus_contact'];?></td>
  <td>
<a class="btn-xs btn-danger" href='load_request.php?accept=<?php echo $row['load_id']; ?>' target="_blank" title="look Your Truck Details">Accept</a>

                                                        </td>
  </tr>
<?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                                 
                                </div>
					       </div>
             
                            </div>
                            </div>
                         
   
	  	<?php 

include 'footer.php'; 


 ?>


</body>

</html>
<?php
    }
    else{
        echo "<script> alert('Error! you need to login First ');window.location.href='../Login.php' </script>";
    }
	
?>
