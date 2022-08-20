 
  <?php include '../database/db.php'; ?>  
<?php include 'header.php'; ?> 
 <div class="container">
 <section id="secTruck" class="panel border-bg tab-radius">
                                <h2 class="center-heading mar-top-10 h1-Postfont">Customer
								<span class="color_orange">List</span></h2>
                                <header class="tab_board_header GridHeading-font btn-font">
                                    <ul class="nav">
                                        <li>
                                            <a class="pull-left ">Recently Posted Trucks</a>
                                            <a href='TruckBoard.html' class="btn btn-danger btn-xs btn-view-post pull-right" title="Look your truck details on TruckSuvidha">View all truck posts</a>
                                        </li>
                                    </ul>
                                </header>
                                <div class="table-responsive table-default border-radius-0">
                                    <table class="table table-hover  tbl-border-colapse" cellspacing="0" rules="all" border="1">
                                        <tbody>
										  <thead>
                    <tr>

<td>Customer Name</td>
<td>Customer Contact</td>
<td>Customer Address</td>
<td>Customer CNIC</td>


<td>Customer Pic </td>
<td>Cnic Pic</td>



<td><i class='fas fa-edit' style='font-size:20px'></i></td>
</tr>
                  </thead>
										
										
                                                  <?php

$select="SELECT * FROM Customer";
$run=mysqli_query($conn,$select); 
while($row=mysqli_fetch_array($run)) 
{	
?>
                                                    <tr>
<tr>

<td><?php echo $row['cus_name'];?></td>
<td><?php echo $row['cus_contact'];?></td>
<td><?php echo $row['cus_address'];?></td>

<td><?php echo $row['cus_cnic'];?></td>


<td><img src="../image/<?php echo $row['image'];?>" height="40px" width="70px"> </td>
<td><img src="../image/<?php echo $row['cnic_image'];?>" height="40px" width="70px"> </td>

                                                        
                                                     
                                                        <td>

                                                            
                                                            
                                                            

                                                            
                                                            <a class="btn-xs btn-danger" href='' target="_blank" title="look Your Truck Details">Details</a>

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