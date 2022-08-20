 
  <?php include '../database/db.php'; ?>  
  
<?php include 'header.php'; ?>

   <?php
if (isset($_GET['cusomer'])){
	 $cus_contact=$_GET['cusomer'];
$select="SELECT * FROM Customer WHERE  cus_contact='$cus_contact'";
$run=mysqli_query($conn,$select); 
$row=mysqli_fetch_array($run)
?>
 <div class="container">
 <section id="secTruck" class="panel border-bg tab-radius">
                                <h2 class="center-heading mar-top-10 h1-Postfont"><?php echo $row['cus_name'];?></h2>
                               
                                <div class="table-responsive  border-radius-0">
                                    <table class="table table-hover  tbl-border-colapse" cellspacing="0" rules="all" border="1">
                                        <tbody>
										
                    <tr>

<td>Name</td>
<td><?php echo $row['cus_name'];?></td>  
<td rowspan="6"><img src="../image/<?php echo $row['image'];?>" height="40px" width="250px"style="height:200px"> </td>



<td rowspan="6"><img src="../image/<?php echo $row['cnic_image'];?>" height="40px" width="250px" style="height:200px"> </td>


  </tr>
<tr>
<td>Contact</td><td><?php echo $row['cus_contact'];?></td>
 </tr>
 <tr>
<td>State</td><td><?php echo $row['cus_state'];?></td>
 </tr>
 <tr>
<td>District</td><td><?php echo $row['cus_district'];?></td>


 
 
 
 </tr> <tr>
 
 
 
 
<td>City</td><td><?php echo $row['cus_city'];?></td>
 </tr>
 
 <tr>

<td> Address</td><td><?php echo $row['cus_address'];?></td>
 </tr>
 <tr>

<td>CNIC</td>
<td><?php echo $row['cus_cnic'];?></td>
 </tr>
 


              

                                    </table>
                                </div>
                            </section>
                            </div>
                            </div>
   
	 
<?php } ?>
  <?php include 'footer.php'; ?>
</body>

</html>