 
  <?php include '../database/db.php'; 
  session_start();
  if($_SESSION['cus_contact']==true){

 $cus_contact=$_SESSION['cus_contact'];
  
  ?>  
<?php include 'header.php'; ?> 
<?php
if(isset($_POST['submit'])){
 $to=$_POST['to'];
 $from=$_POST['from'];
	 $weight=$_POST['weight'];
	 $package=$_POST['package'];

$sql="INSERT INTO `packages`(`pack_from`, `pack_to`, `weight`, `package`) VALUES('$from','$to','$weight','$package')";
	$run =  mysqli_query($conn,$sql);  
if (mysqli_query($conn, $sql)) {
    echo "<script> alert('Package Successfully Added');
</script>";
}
else{
	echo "<script> alert('Error');
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
                                <div class="col-lg-9 col-sm-9">
								  <header class="tab_board_header GridHeading-font btn-font">
                                    <ul class="nav">
                                        <li>
                                            <a class="pull-left ">List Of Available Packages</a>
                                          
                                        </li>
                                    </ul>
                                </header>
                                                         <div class="table-responsive table-default border-radius-0">
                                    <table class="table table-hover  tbl-border-colapse" cellspacing="0" rules="all" border="1">
                                        <tbody>
										  <thead class="tab_board_header GridHeading-font btn-font color_white">
                    <tr>

<td>From</td>
<td>To</td>
<td>Weight</td>
<td>Package</td>
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
  </tr>
<?php } ?>
                                        </tbody>
                                    </table>
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