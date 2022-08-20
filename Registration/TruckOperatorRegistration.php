 <?php include '../database/db.php'; ?>  
<?php 
$conn=mysqli_connect('localhost','root','','transport');
if(isset($_POST['submit'])){
 $name=$_POST['name'];
 $contact=$_POST['contact'];
	 $password=$_POST['password'];
	 $image=$_FILES['image']['name'];
 $tmp_name=$_FILES['image']['tmp_name'];
	move_uploaded_file($tmp_name,"../image/$image");
	$state=$_POST['state'];
	 $district=$_POST['district'];	
	  $city=$_POST['city'];
	
	$address=$_POST['address'];
	 $cnic=$_POST['cnic'];
	
	 $truck_weight=$_POST['truck_weight'];
	 $truck_number=$_POST['truck_number'];
	 $cnic_image=$_FILES['cnic_image']['name'];
	$tmp_name=$_FILES['cnic_image']['tmp_name'];
		move_uploaded_file($tmp_name,"../image/$cnic_image");
		
	  $select =mysqli_query($conn,"select * from customer WHERE cus_contact= $contact ");
        $row=mysqli_fetch_array($select);
			
	if ($row == NULL){
 $insert =mysqli_query($conn,"INSERT INTO `truckoperator`(`TO_name`, `TO_contact`, `TO_state`, `TO_district`, `TO_city`, `TO_address`, `TO_cnic`, `cnic_image`, `TO_password`, `image`, `truck_number`, `truck_weight`,`status`) VALUE('$name','$contact','$state','$district','$city','$address','$cnic','$cnic_image','$password','$image','$truck_weight','$truck_number','Pending')");
 if(!$insert){
            echo mysqli_error();
        }
else{
	echo "<script> alert('Successfully Register');
	window.location.href='../Login.php';
</script>";
}
	}

else{
echo "<script> alert('This Contact Number is Already Register as Cusmtomer You Must Need To Register with New Number');
		</script>";
	}

}

?>

<?php include 'header.php'; ?>  
 
                    
    <div  class="container" >
	
        <div class="row">
            <div class="col-md-9 col-sm-8 border-right ">
                <h1>Truck Operator <span class="color_orange">Registration</span></h1>
                <br />
                <p>Please fill the following form to register as a TruckOperator . After successfully submission of this form your registration will  confirmed by Admin.</p>
                <br />
                <div class="custom_reg ">
				<form method="post" action="TruckOperatorRegistration.php" enctype="multipart/form-data">
                    <fieldset class="divBasicDetails">
                        <legend>Basic Details</legend>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-lg-6 col-sm-6">
                                    <label>
                                        Driver </label>
                                    <input name="name" type="text" maxlength="100" placeholder="Truck Owner Name" class="form-control"  />
                                   
                                 
                                </div>
                              <div class="col-lg-6 col-sm-6">
                                    <label>
                                        Contact No</label>
                                    <div >
                                        <input name="contact" type="number" maxlength="12"  class="form-control" placeholder="Mobile No."  required />
                                        
                                    </div>
                                </div>
                            </div>
									 <div class="row">
        <div class="col-lg-6 col-sm-6">
                                    <label>
                                        Password</label>
                                    <input name="password" type="text"   class="form-control" placeholder="Enter your  provinces" />
                                  
                                </div>
       <div class="col-lg-6 col-sm-6">
                                    <label>
                                        Image</label>
                                    <input name="image" type="file"   class="form-control"  required />
                                  
                                </div>
   </div>
							
							 <div class="row">
        <div class="col-lg-6 col-sm-6">
                                    <label>
                                        State</label>
                                    <input name="state" type="text"   class="form-control" placeholder="Enter your  provinces" required />
                                  
                                </div>
       <div class="col-lg-6 col-sm-6">
                                    <label>
                                        District</label>
                                    <input name="district" type="text"   class="form-control" placeholder="Enter your District"  required  />
                                  
                                </div>
   </div>
									 <div class="row">
									    <div class="col-lg-6 col-sm-6">
                                    <label>
                                        city</label>
                                    <input name="city" type="text"   class="form-control" placeholder="Enter your City"  required  />
                                  
                                </div>
        <div class="col-lg-6 col-sm-6">
            <label for="AddressLine1">
                Address</label>
            <input name="address" type="text" maxlength="450" placeholder="please enter your complete address" class="form-control" required   />
           
        </div>
        
    </div>
								 <div class="row">
        <div class="col-lg-6 col-sm-6">
                                    <label>
                                       Cnic</label>
                                    <input name="cnic" type="text"   class="form-control" placeholder="Enter your CNIC"  required  />
                                  
                                </div>
								  <div class="col-sm-6">
                                    <label>Upload CNIC Picture</label>
                                    <input type="file" name="cnic_image" class="form-control form-control-browse" required   />
                                 
                                </div>
								   <legend>Truck Type(Weight Capcity )</legend>
                        <div class="form-group">
                             <div class="row">
                                <div class="col-lg-6 col-sm-6">
                                    <label for="TruckOperatorType">
                                        Weight Capcity</label>
										<select name="truck_weight" required  class="form-control" >
                                    <option value="1-3 Tonne" >1-3 Tonne</option>
                                    <option value="3-8 Tonne">3-8 Tonne</option>
                                    <option value="8-12 Tonne">8-12 Tonne</option>
                                    <option value="12-15 Tonne">12-15 Tonne</option>
                                  
                                    </select>
                                </div>
								<div class="col-lg-6 col-sm-6">
                                    <label>
                                        No. Of Trucks</label>
                                    <input name="truck_number" type="text" maxlength="7" id="cphContent_txtNoOfTruck" class="form-control" placeholder="No. Of Trucks"  required  />
                                  
                                </div>
                            </div>
                         
                    </fieldset>
                </div>
								
						
                          
                           
                   
                        <div class="form-group">
                            <div class="row">
							<div class="row"> <div class="col-sm-3 col-xs-12 text-right mar-top-20">
                                    <input type="submit" name="submit" value="Create Account" class="btn btn-danger btn-sm " />
                                </div>
                            </div>
                        </div>
                    </fieldset>
                </div>
            </div>	 </form>
            <div class="col-md-3 col-sm-4 address">
                <br />
                <h4>Already <span class="color_orange">Registered</span></h4>
                <p style="text-align: left;"><a href="#" title="Login on TruckSuvidha">Click Here to Login</a></p>
                <br />
                <h4>Registration <span class="color_orange">Options</span></h4>
                <ul class="list-unstyled">
                    <li><a href="#"><i class="fa fa-angle-right"></i>Customer Registration</a></li>
                    <li><a href="#"><i class="fa fa-angle-right"></i>Transporter Registration</a></li>
                    <li><a href="#"><i class="fa fa-angle-right"></i>Packers And Movers Registration</a></li>
                    
                </ul>

         
    
</div>
</div>
   
	 


</body>

</html>