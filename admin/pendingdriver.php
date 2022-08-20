 
  <?php include '../database/db.php'; ?>  
    <?php
if (isset($_GET['approve'])){
	echo $TO_id = $_GET['approve'];
 echo $sql="UPDATE `truckoperator` SET `status`='Approved'  where TO_id=$TO_id";
	if (mysqli_query($conn, $sql)) {
    echo "<script>
	alert ('Driver Approved ');
	window.open('pendingdriver.php','_self')</script>";
} else {
    echo "<script>alert ('Error ');</script> ";
}
}
  
 ?>
  
<?php include 'header.php'; ?> 
 <div class="container">
 <section id="secTruck" class="panel border-bg tab-radius">
                                <h2 class="center-heading mar-top-10 h1-Postfont">waiting 
								<span class="color_orange">List OF Drivers </span></h2>
                                <header class="tab_board_header GridHeading-font btn-font">
                                    <ul class="nav">
                                        <li>
                                            <a class="pull-left ">Pending Drivers </a>
                                            <a href='Approveddriver.php' class="btn btn-danger btn-xs btn-view-post pull-right" >Approved Drivers</a>
                                        </li>
                                    </ul>
                                </header>
                                                       <div class="table-responsive table-default border-radius-0">
                                    <table class="table table-hover  tbl-border-colapse" cellspacing="0" rules="all" border="1">
                                        <tbody>
										  <thead>
                    <tr>

<td>Driver Name</td>
<td>Driver Contact</td>
<td>Driver Address</td>
<td>Driver Cnic</td>

<td>Truck Number</td>
<td>Driver </td>
<td>Cnic</td>
<td>Delete</td>
<td>Approve</td>

</tr>
                  </thead>
										
										
                                                  <?php

$select="SELECT * FROM truckoperator WHERE status = 'Pending'";
$run=mysqli_query($conn,$select); 
while($row=mysqli_fetch_array($run)) 
{	
?>
                                                    <tr>
<tr>

<td><?php echo $row['TO_name'];?></td>
<td><?php echo $row['TO_contact'];?></td>
<td><?php echo $row['TO_address'];?></td>

<td><?php echo $row['TO_cnic'];?></td>

<td><?php echo $row['truck_number'];?></td>
<td><img src="../image/<?php echo $row['image'];?>" height="40px" width="70px"> </td>
<td><img src="../image/<?php echo $row['cnic_image'];?>" height="40px" width="70px"> </td>
<td>
        <a  href="approveddriver.php?del='<?php echo $row['TO_id']; ?>'" target="_blank" ><i class="fa fa-remove" style="font-size:20px"></i>
 </td>
 
 <td>
        <a  href="pendingdriver.php?approve='<?php echo $row['TO_id']; ?>'" target="_blank" ><i class="fa fa-check" style="font-size:20px"></i>
 </td>
                                                    </tr>
<?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </section>
                            </div>
                            </div>
   
	 

  <?php include 'footer.php'; ?>
</body>

</html>
