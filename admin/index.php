 
  <?php include '../database/db.php'; ?>  
    <?php
	
	
 if (isset($_GET['del'])){
	 $TO_id=$_GET['del'];
	 $delete="DELETE FROM truckoperator where TO_id=$TO_id";
	 $run=mysqli_query($conn,$delete);
 }
  ?>
<?php include 'header.php'; ?> 
 <div class="container">
 <section id="secTruck" class="panel border-bg tab-radius">
                                <h2 class="center-heading mar-top-10 h1-Postfont">List  Of
								<span class="color_orange"> Approved Drivers</span></h2>
                                <header class="tab_board_header GridHeading-font btn-font">
                                    <ul class="nav">
                                        <li>
                                            <a class="pull-left ">Approved Drivers</a>
                                            <a href='pendingdriver.php' class="btn btn-danger btn-xs btn-view-post pull-right" title="Look your truck details on TruckSuvidha">Pending Drivers</a>
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
</tr>
                  </thead>
										
										
                                                  <?php

$select="SELECT * FROM truckoperator WHERE status = 'Approved'";
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

                                                   
                                                    </tr>
<?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </section>
                            </div>
                            </div>
   
	   	<?php 

include 'footer.php'; 


 ?>



</body>

</html>