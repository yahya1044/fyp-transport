 <?php include '../database/db.php'; ?>  
 <?php
 if (isset($_GET['del'])){
	 $pack_id=$_GET['del'];
	 $delete="DELETE FROM packages where pack_id=$pack_id";
	 $run=mysqli_query($conn,$delete);
 }
  
 ?> 
 
<?php include 'header.php'; ?>

 
<?php
if(isset($_POST['submit'])){
 $to=$_POST['to'];
 $from=$_POST['from'];
	 $weight=$_POST['weight'];
	 $package=$_POST['package'];
 $insert =mysqli_query($conn,"INSERT INTO `packages`(`pack_from`, `pack_to`, `weight`, `package`) VALUES('$from','$to','$weight','$package')");
	 
 if(!$insert){
            echo mysqli_error();
        }
else{
	echo "<script> alert('Successfully Register');
	window.location.href='packages.php';
</script>";
}
}






?>
 <div class="container-fluid">
 
                                <h2 class="center-heading mar-top-10 h1-Postfont">
								<span class="color_orange">   Packages</span></h2>
                              
                                    <div class="row">
									<div class="col-lg-1 col-sm-1">
								</div>
                                <div class="col-lg-5 col-sm-5">
								  <header class="tab_board_header GridHeading-font btn-font">
                                    <ul class="nav">
                                        <li>
                                            <a class="pull-left ">List Of Available Packages</a>
                                          
                                        </li>
                                    </ul>
                                </header>
                                                         <div class="table-responsive border-radius-0">
                                    <table class="table table-hover  tbl-border-colapse" cellspacing="0" rules="all" border="1">
                                        <tbody>
										  <thead>
                    <tr>

<td>From</td>
<td>To</td>
<td>Weight</td>
<td>Package</td>
<td>Delete</td>
</tr>
</thead>
 <?php
$select="SELECT * FROM packages ";
$run=mysqli_query($conn,$select); 
while($row=mysqli_fetch_array($run)) 
{	
?>
                                                    <tr>
<tr>

<td><?php echo $row['pack_from'];?></td>
<td><?php echo $row['pack_to'];?></td>
<td><?php echo $row['weight'];?></td>
<td>Rs: <?php echo $row['package'];?></td>
 <td>
 <a  href="packages.php?del='<?php echo $row['pack_id']; ?>'" target="_blank" ><i class="fa fa-remove" style="font-size:20px"></i></a>

 </td>



 </tr>
<?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                                 
                                </div>
								<div class="col-lg-1 col-sm-1">
								</div>
								<div class="col-lg-4 col-sm-4">
								  <div class="container-fluid">
								 <header class="tab_board_header GridHeading-font btn-font">
								  
                                    <ul class="nav">
                                        <li>
                                            <a class="pull-left ">Add Packages</a>
                                          
                                        </li>
                                    </ul>
                                </header>
                                 
									<form action="packages.php" method="POST">
									<label>From</label>
                                        <input name="from" type="text"   class="form-control" placeholder="From"  />

										<label>To</label>
                                        <input name="to" type="text"   class="form-control" placeholder="To"  />
										
										<label>Weight</label>
                                     <select name="weight" class="form-control">
<option >Select</option>
									 <?php  

 $sql="select * from truckoperator WHERE status = 'Approved'";
        $run=mysqli_query($conn,$sql); 
        while($row=mysqli_fetch_array($run)) 
			{
				
			$weight=$row['truck_weight'];
		?> 	
<option value="<?php echo $weight ?>"><?php echo $weight ?></option>

<?php }?>
	</select>
	                                 <label>package</label>
                                        <input name="package" type="text"   class="form-control" placeholder="Package"  />
										
										<input type="submit" name="submit" value="Add package" class="btn btn-danger btn-sm mar-top-20 mar-left-50 center" />
									
                                        </form>
                                    
                                </div>
									
                                    
                             
                                 
                                </div>
                             
                            </div>
                            </div>
             
                            </div>
                         
   
	   <?php include 'footer.php'; ?>


</body>

</html>
