 
  <?php include '../database/db.php'; 
  session_start();

  if($_SESSION['TO_contact']==true){

 $TO_contact=$_SESSION['TO_contact'];
  
  ?>  
<?php include 'header.php'; ?> 
 <div class="container">
 <section id="secTruck" class="panel border-bg tab-radius">
                                <h2 class="center-heading mar-top-10 h1-Postfont">List Of 
								<span class="color_orange">  Available Trucks</span></h2>
                              
                                                       <div class="table-responsive table-default border-radius-0">
                                    <table class="table table-hover  tbl-border-colapse" cellspacing="0" rules="all" border="1">
                                        <tbody>
										  <thead class="tab_board_header GridHeading-font btn-font color_white" >
                    <tr>

<td>Driver Name</td>
<td>Driver Contact</td>
<td>truck Weight</td>
<td>Truck Number</td>
<td>Driver image </td>





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
<td><?php echo $row['truck_weight'];?></td>



<td><?php echo $row['truck_number'];?></td>
<td><img src="../image/<?php echo $row['image'];?>" height="40px" width="70px"> </td>


                                                        
                                                     
                                                  
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

<?php
    }
    else{
        echo "<script> alert('Error! you need to login First ');window.location.href='../Login.php' </script>";
    }
	
?>