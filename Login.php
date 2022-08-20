<?php 
	session_start();
	
?>
<?php include 'database/db.php'; ?>  
 
<?php
if (isset($_POST['submit'])){
	 $cus_contact=$_POST['number'];
	$password=$_POST['password'];
						
			 $sel = "SELECT * FROM customer WHERE cus_contact ='$cus_contact'";
			$runn =  mysqli_query($conn,$sel);
			$roww = mysqli_fetch_array($runn); 
			
						$select = "SELECT * FROM truckoperator WHERE TO_contact='$cus_contact' and status='Approved'";
			$run =  mysqli_query($conn,$select);
			$row = mysqli_fetch_array($run);
			    
			
			
			if($cus_contact ==  $roww['cus_contact'] && $password == $roww['cus_password']){
				echo "<script>
				alert('Log in Successfully');


window.location.href='	index.php'
</script>";
			   $_SESSION['cus_contact']=$cus_contact;

			}
			
			else if($cus_contact ==  $row['TO_contact'] && $password == $row['TO_password']){
				echo "<script>
				alert('Log in Successfully');


window.location.href='driver/load_request.php'
</script>";
			   $_SESSION['TO_contact']=$cus_contact;

			}
			
			
			
			else{
				echo "<script>
				alert('Number or Password is Wrong');



</script>";
						
			}
			
}	?>

<?php include 'header.php'; ?> 
            <div id="divMainContent">
                <div id="divContentBody" class="pad-top-5">
                    
    <div  class="container" onkeypress="javascript:return WebForm_FireDefaultButton(event, &#39;cphContent_btnCreateAccount&#39;)">
	
        <div class="row">
            <div class="col-md-9 col-sm-8 border-right divMainForm">
                <h1>Customer/Driver <span class="color_orange">Login</span></h1>
                <br />
                <p>      Log in with your TruckSuvidha account details.</p>
                <br />
                <div class="custom_reg ">
				<form action="Login.php" method="POST">
                    <fieldset class="divBasicDetails">
                   <div class="form-group">
                            <div class="row">
                                   
                                    <div class="col-sm-8 divtxtUserName">
                                        <label>
                                            Mobile No<i>*</i>
                                        </label>
                                        <div >
                                            
                                            <input name="number" class="form-control"  type="number"placeholder="Enter Registered Mobile Number" />
                                           
                                        </div>
                                    </div>
                                    </div>  
									<div class="row">
                                   
                                    <div class="col-sm-8 ">
                                        <label>
                                            Password<i></i>
                                        </label>
                                        <div >
               <input type="password" name="password" class="form-control" placeholder="Enter Password" />
                                           
                                        </div>
                                    </div>
                                    </div>
									
                      
                                
                             
                            </div>
						
							<div class="row"> <div class="col-sm-3 col-xs-12 text-right mar-top-20">
                                    <input type="submit" name="submit" value="Log In" class="btn btn-danger divSubmit btn-sm divSubmit-btn" />
                         
                        </div>
                        </div>
                    </fieldset>
                </div>
            </div>	 </form>
            <div class="col-md-3 col-sm-4 address">
                <br />
                <h4>For the  <span class="color_orange">Registration</span></h4>
                <p style="text-align: left;"><a href="Login-2.html" title="Login on TruckSuvidha">Click Here driver Login</a></p>
                <br />
                <h4>Registration <span class="color_orange">Options</span></h4>
                <ul class="list-unstyled">
                    <li><a href="CustomerRegistration.html"><i class="fa fa-angle-right"></i>Customer Registration</a></li>
                    <li><a href="TransporterRegistration.html"><i class="fa fa-angle-right"></i>Transporter Registration</a></li>
               
                    
                </ul>
<div class="span5 about-carousel">
                            <div class="carousel slide" id="myCarousel">
                                <!-- Carousel items -->
                                <div class="carousel-inner">
                                    <div class="active item" style="height: 350Px">
                                        <a>
                                            <img class="img-responsive" alt="TruckSuvidha Promotion Slider" src='Images/sample.png' /></a>

                                    </div>
                                    
                                            <div class="item" style="height: 350Px">
                                                 <a target='_blank' href='http://theflyingtransport.trucksuvidha.com/'>
                                                
                                                <img class="img-responsive" alt="TruckSuvidha Promotion Slider" src='Uploads/CMS/LoginPage/CarouselImages/IMG_133903_637582940215595353.jpg' /></a>
                                            </div>
                                        
                                            <div class="item" style="height: 350Px">
                                                 <a target='_blank' href='http://banesingh.trucksuvidha.com/'>
                                                
                                                <img class="img-responsive" alt="TruckSuvidha Promotion Slider" src='Uploads/CMS/LoginPage/CarouselImages/IMG_133903_637582931133014989.jpg' /></a>
                                            </div>
                                        
                                            <div class="item" style="height: 350Px">
                                                 <a target='_blank' href='http://satwantsaroj.trucksuvidha.com/'>
                                                
                                                <img class="img-responsive" alt="TruckSuvidha Promotion Slider" src='Uploads/CMS/LoginPage/CarouselImages/IMG_133903_637607197290039443.jpg' /></a>
                                            </div>
                                        
                                            <div class="item" style="height: 350Px">
                                                 <a target='_blank' href='http://rathitransportservice.trucksuvidha.com/'>
                                                
                                                <img class="img-responsive" alt="TruckSuvidha Promotion Slider" src='Uploads/CMS/LoginPage/CarouselImages/IMG_133903_637607198180183019.jpg' /></a>
                                            </div>
                                        
                                            <div class="item" style="height: 350Px">
                                                 <a target='_blank' href='http://jaypalhipparagi.trucksuvidha.com/'>
                                                
                                                <img class="img-responsive" alt="TruckSuvidha Promotion Slider" src='Uploads/CMS/LoginPage/CarouselImages/IMG_133903_637619229520803652.jpg' /></a>
                                            </div>
                                        
                                            <div class="item" style="height: 350Px">
                                                 <a target='_blank' href='http://paltemposervice.trucksuvidha.com/'>
                                                
                                                <img class="img-responsive" alt="TruckSuvidha Promotion Slider" src='Uploads/CMS/LoginPage/CarouselImages/IMG_133903_637648674805932913.jpg' /></a>
                                            </div>
                                        
                                    
                                </div>
                                <!-- Carousel nav -->
                                <a data-slide="prev" href="#myCarousel" class="carousel-control left">
                                    <i class="fa fa-arrow-circle-o-left"></i>
                                </a>
                                <a data-slide="next" href="#myCarousel" class="carousel-control right">
                                    <i class="fa fa-arrow-circle-o-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
             


            </div>
        </div>
    
</div>
</div>
</div>
</div>
</div>
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

	