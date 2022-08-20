 
  <?php include '../database/db.php';

 include 'header.php'; 
 ?> 

 <div class="container">
 
                                <h2 class="center-heading mar-top-10 h1-Postfont">
								<span class="color_orange">   Report of Total Load</span></h2>
                                
									<div class="row" >
		<div class="col-md-3" ></div>
		<div class="col-md-6" >
<form  action="today_report.php"  method="get"  >

	<span >from</span>     <input type="date" name="date_start"   required  />
	   <span >To</span>  <input type="date" name="date_end"  required />

     <button  name="date_search_btn"  class="btn btn-success"  >Search by  Date</button>
		  	</form>
		
								
								</div>
								</div>
<div class="row"style="margin-top:15px">
									
                                <div class="col-lg-9 col-sm-9">
								
              <div class="table-responsive default-table border-radius-0">
                   <table class="table table-hover  tbl-border-colapse" cellspacing="0" rules="all" border="1">
                                        <tbody>
										  <thead class="tab_board_header GridHeading-font btn-font color_white">
                    <tr>

<td>From</td>
<td>To</td>
<td>Weight</td>
<td>material</td>
<td>No. of trucks</td>
<td>date</td>
<td>Bill</td>
<td>Dirver Contact</td>
<td>Customer Contact</td>
<td>Status</td>


</tr>
</thead>
 <?php
$select="SELECT * FROM loading WHERE status='Delivered' ";
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
<td><a href="driver_detail.php?driver=<?php echo $row['driver_contact']; ?>"><?php echo $row['driver_contact'];?></a></td>
<td><a href="cus_detail.php?cusomer=<?php echo $row['cus_contact']; ?>"><?php echo $row['cus_contact'];?></a></td>
<td class="col-red"><?php echo $row['status'];?></td>


  </tr>
<?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                                 
                                </div>
								  <div class="col-lg-3 col-sm-3">
								
              <div class="table-responsive default-table border-radius-0">
                   <table class="table table-hover table-default tbl-border-colapse" cellspacing="0" rules="all" border="1">
                                        <tbody>
										  <thead class="tab_board_header GridHeading-font btn-font color_white">
                    <tr>
								<td>Total Loads</td>
<td>Total Bill</td>
</tr>
</thead>
 <?php
$select="SELECT * FROM loading WHERE status='Delivered' ";
$run=mysqli_query($conn,$select);
$row=mysqli_fetch_array($run); 
$sale=  "SELECT SUM(bill) FROM loading WHERE status='Delivered'";
	$run_expense = mysqli_query($conn,$sale);
					$ro =  mysqli_fetch_array($run_expense);
				
		$total_bill=  $ro['SUM(bill)'];
		  $total_load = mysqli_num_rows($run);
?>
<tr>
<td><?php echo $total_load;?></td>
<td><?php echo $total_bill;?></td>

				</tr>	
				
						    </tbody>
                                    </table>		
					       </div>
             
                            </div>
                            </div>
                            </div>
                            </div>
                         
   
	 

  <?php include 'footer.php'; ?>
</body>

</html>
