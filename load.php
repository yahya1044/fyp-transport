<?php 

include '../database/db.php'; 
session_start();

  if($_SESSION['cus_contact']==true){

 ?>
<?php 

include 'header.php';   

?>
<?php
if(isset($_POST['submit'])){
 $to=$_POST['to'];
 $from=$_POST['from'];
     $material=$_POST['material'];
	 $weight=$_POST['weight'];
	
	 $number=$_POST['number'];
	 $date=$_POST['date'];
  $cus_contact=$_SESSION['cus_contact'];
 $sql="INSERT INTO `loading`(`load_from`, `load_to`, `load_material`, `load_weight`, `load_number`, `load_date`,`cus_contact`,`status`) VALUES('$from','$to','$material','$weight','$number','$date','$cus_contact','Waiting')";
	$run =  mysqli_query($conn,$sql);  
if (mysqli_query($conn, $sql)) {
    echo "<script> alert('Load Successfully Posted');
</script>";
}
else{
	echo "<script> alert('Error');
</script>";
}
}





?>  

<div class="row mar-top-55 mar-bot-55">
                                    <div class="col-sm-6">
                                        <div class="span5 about-carousel">
                                            <div id="divBannerTextCarousel" class="carousel slide">
                                                <div id="divBannerTexts" class="carousel-inner custom_slider"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="panel tab border2 divPostForm">
                                            <div class="panel-heading custom_main-form">
                                                <ul class="nav nav-tabs nav-justified load-form">
                                                    <li class="active">
                                                        <a href="#home-load-post-form" data-toggle="tab" title="Load Post Form of TruckSuvidha">
                                                            <i class="fa fa-truck color_black"></i>POST YOUR LOAD DETAIL</a>
                                                    </li>
                                                </ul>
                                            </div>
                   <div >
	<form action="load.php" method="POST" class="form-group">
                                                                <div class="row">
 
        <div  class="col-sm-6">
                                                                        <label>From<i>*</i></label>
                                                                        <select name="from"  class="form-control capitalize">
																		<?php
$select="SELECT * FROM packages ";
$run=mysqli_query($conn,$select); 
while($row=mysqli_fetch_array($run)) 
{	

?>
			<option value="<?php echo $row['pack_from'];?>"><?php echo $row['pack_from'];?></option>
			
<?php }?>
		</select>
                                                                       
                                                                    </div>
																	<div  class="col-sm-6">
                                                                        <label>To<i>*</i></label>
                                                                        <select name="to"  class="form-control capitalize">
		
																		<?php
$select="SELECT * FROM packages ";
$run=mysqli_query($conn,$select); 
while($row=mysqli_fetch_array($run)) 
{	

?>
			<option value="<?php echo $row['pack_to'];?>"><?php echo $row['pack_to'];?></option>
			
<?php }?>
		</select>
			

		
                                                                 </div>
                                                                </div>

                                                                
                                                                <div class="row">
                                                                   <div  class="col-sm-6">
                                                                        <label>Material <i>*</i></label>
                                                                        <input name="material" type="text"  class="form-control" />
       
                                                                    </div>
                                                                   	<div  class="col-sm-6">
                                                                        <label>Weight<i>*</i></label>
                                                                 <select name="weight"  class="form-control capitalize">
																		<?php
$select="SELECT * FROM packages ";
$run=mysqli_query($conn,$select); 
while($row=mysqli_fetch_array($run)) 
{	

?>
			<option value="<?php echo $row['weight'];?>"><?php echo $row['weight'];?></option>
			
<?php }?>
		</select>

		
                                                                 </div>
                                                                    
                                                                    
                                                                </div>
                                                                <div class="row">
                                                           <div <div class="col-sm-6">
                                                                        <label>No. of Trucks<i>*</i></label>
                                                                        <select name="number"  class="form-control">
			<option value="0">Select</option>
			<option value="1">1</option>
			<option value="2">2</option>
			<option value="3">3</option>
			<option value="4">4</option>
			<option value="5">5</option>
			<option value="6">6</option>
			<option value="7">7</option>
			<option value="8">8</option>
			<option value="9">9</option>
			<option value="10">10</option>

		</select>
                                                               </div>
                                                                          <div id="divdatefull" class="col-sm-6">
                                                                        <label>Scheduled Date<i>*</i></label>
<input name="date" type="date"  class="form-control" Placeholder="Select date" />
                                                             </div>
                                                                  </div>
                                                                <div class="row">
			      <div class="col-sm-4 mar-top-22"></div>													
																
                                                            <div class="col-sm-6 mar-top-22">
                                                                        <input type="submit" name="submit" value="Submit"  class="btn btn-danger" />
                                                                    </div>
                                                                </div>
                                                            </div>
        </form>                                                
	</div>
                                                    
</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <!--div start for ask for user-->
                        <div id="pnluser" class="modalPopup" onkeypress="javascript:return WebForm_FireDefaultButton(event, &#39;btnOTPGo&#39;)" style="display: none; width: 20%; height: auto;">
	
                            <input type="submit" name="btnforPopup" value="" onclick="javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;btnforPopup&quot;, &quot;&quot;, true, &quot;&quot;, &quot;&quot;, false, false))" id="btnforPopup" style="display: none" />
                            
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4>User Login</h4>
                                </div>
                                <div class="modal-body">
                                    <div id="divUserDetails">
                                        <div id="pnlLogin" onkeypress="javascript:return WebForm_FireDefaultButton(event, &#39;btnOTPGo&#39;)">
		
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <label for="../images">Mobile No.<i>*</i></label>
                                                        <div class="custom-iconic-input">
                                                            <i>
                                                                <img src='Images/flag_of_india-small.png' alt="Indian National Flag" title="flag of India" /><span> +91</span></i>
                                                            <input name="txtUserName" type="text" maxlength="10" id="txtUserName" class="form-control" placeholder="Enter Mobile Number" />
                                                            <span id="rfvUserName" style="color:Red;display:none;">Please provide your mobile number</span>
                                                            
                                                            <span id="revUserName" style="color:Red;display:none;">Please provide valid mobile number.</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        
	</div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <input type="submit" name="btnOTPGo" value="Submit" onclick="CheckUserNameExist();WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;btnOTPGo&quot;, &quot;&quot;, true, &quot;Login&quot;, &quot;&quot;, false, false))" id="btnOTPGo" class="btn btn-danger" />
                                    
                                    
                                </div>
                            </div>
                        
</div>
                        <div id="divUserCheck" class="bg-blue divUserCheck" >
                            <div class="modalPopup custom-modalPopup custom-modalPopup-width popup-width">
                                
                            </div>
                            
                        </div>


                        <div id="divPartUser" class="bg-blue divPartUser" style="display: none;">
                            <div class="modalPopup custom-modalPopup custom-modalPopup-width popup-width div-partload">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4>User Login</h4>
                                    </div>
                                    <div class="modal-body">
                                        <div id="divPartUserDetails">
                                            <div id="PanelPartLoad" onkeypress="javascript:return WebForm_FireDefaultButton(event, &#39;btnpartLoad&#39;)">
	
                                                <div class="form-group">

                                                    <div class="row">
                                                        
                                                        <div class="col-lg-4">
                                                            <label for="ExpectedFreight">Payment Mode</label>
                                                            <select name="ddlExpectedFreight" id="ddlExpectedFreight" class="form-control capitalize">
		<option value="1">Advance paid</option>
		<option value="2">To Pay</option>
		<option value="3">To be Billed</option>

	</select>
                                                        </div>
                                                        
                                                        <div class="col-lg-4">
                                                            <label for="SpecialInstructionRemark">Special Instruction/ Remark</label>
                                                            <input name="txtSpecialInstructionRemark" type="text" maxlength="250" id="txtSpecialInstructionRemark" class="form-control" placeholder="Special Instruction/ Remark" />
                                                        </div>
                                                        <label for="AttachMaterialList">Attach Material List/Images (0-5)</label>
                                                        <div class="col-lg-4">
                                                            <label for="ProfileImage">
                                                                <input type="file" multiple="multiple" name="FileUpload1" id="FileUpload1" class="btn btn-default reg-width" style="width: 100%" />
                                                                <span id="lblError" style="color: red;"></span>
                                                        </div>
                                                    </div>


                                                    <div class="row">

                                                        <div id="divMobilno" class="col-lg-4">
                                                            <label for="../images">Mobile No.<i>*</i></label>
                                                            <div class="custom-iconic-input">
                                                                <i>
                                                                    <img src='Images/flag_of_india-small.png' alt="Indian National Flag" title="flag of India" /><span> +91</span></i>
                                                                <input name="txtMobileNo" type="text" maxlength="10" id="txtMobileNo" class="form-control" placeholder="Mobile No." />
                                                                <span id="RequiredFieldValidator1" style="color:Red;display:none;">Please provide your Mobile Number</span>
                                                                

                                                                <span id="RegularExpressionValidator1" style="color:Red;display:none;">Mobile No must have 10 Numeric characters and should not start from 0 to 5.</span>
                                                                <span id="lblMessageUserName" style="color:Red;"></span>
                                                            </div>
                                                        </div>
                                                        <div id="divName" class="col-lg-4">
                                                            <label for="Name">Name<i>*</i></label>
                                                            <input name="txtName" type="text" maxlength="20" id="txtName" class="form-control" placeholder="Name" />

                                                            <span id="rfvName" style="color:Red;display:none;">Please provide your name</span>
                                                            <span id="revFirstName" style="color:Red;display:none;">Name must have 2 to 20 alphabet characters.</span>
                                                        </div>
                                                        <div id="divEmail" class="col-lg-4">
                                                            <label for="../images">Email</label>
                                                            <input name="txtEmail" type="text" maxlength="50" id="txtEmail" placeholder="username@domain.com" class="form-control websiteUrl" />
                                                            
                                                            <span id="revEmail" style="color:Red;display:none;">Please enter valid email id.</span>

                                                            <span id="lblMessageEmail" style="color:Red;"></span>
                                                        </div>
                                                    </div>

                                                </div>
                                                </label>
                                            
</div>
                                        </div>

                                    </div>
                                    <div class="modal-footer">
                                        <input type="submit" name="btnpartLoad" value="Submit" onclick="return ValidateExtension();WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;btnpartLoad&quot;, &quot;&quot;, true, &quot;AddLogin&quot;, &quot;&quot;, false, false))" id="btnpartLoad" class="btn btn-danger" />
                                        
                                        
                                    </div>
                                </div>
                            </div>
                            <div id="backgroundElement" class="modalBackground backgroundElement"></div>
                        </div>


                        <div id="divLoginUser" class="bg-blue divPartUser" style="display: none;">
                            <div class="modalPopup custom-modalPopup custom-modalPopup-width popup-width div-partload">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4>User Login</h4>
                                    </div>
                                    <div class="modal-body">
                                        <div id="divLogginUserDetails">
                                            <div id="pnlLogginUser" onkeypress="javascript:return WebForm_FireDefaultButton(event, &#39;btnloginsave&#39;)">
	
                                                <div class="form-group">

                                                    <div class="row">
                                                        

                                                        <div class="col-lg-4">
                                                            <label for="ExpectedFreight">Payment Mode</label>
                                                            <select name="ddlLoginFreight" id="ddlLoginFreight">
		<option value="1">Advance paid</option>
		<option value="2">To Pay</option>
		<option value="3">To be Billed</option>

	</select>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <label for="SpecialInstructionRemark">Special Instruction/ Remark</label>
                                                            <input name="txtLoginRenarks" type="text" maxlength="50" id="txtLoginRenarks" class="form-control" placeholder="Special Instruction/ Remark" />
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <label for="AttachMaterialList">Attach Material List/Images (0-5)</label>
                                                        <div class="col-lg-4">
                                                            <label for="ProfileImage">
                                                                <input type="file" multiple="multiple" name="FileUpload2" id="FileUpload2" class="btn btn-default reg-width" style="width: 100%" />
                                                                <span id="lblErrorImages" style="color: red;"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            
</div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <input type="submit" name="btnloginsave" value="Submit" onclick="return ValidateLoginExtension();" id="btnloginsave" class="btn btn-danger" />
                                        
                                        
                                    </div>
                                </div>
                            </div>
                            <div id="backgroundElement" class="modalBackground backgroundElement"></div>
                        </div>
                        <!--div close for ask for user-->


                        <div id="pnlotp" class="modalPopup" onkeypress="javascript:return WebForm_FireDefaultButton(event, &#39;btnOTP&#39;)" style="display: none; width: 80%; height: auto;">
	
                            <input type="submit" name="btnforotp" value="" onclick="javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;btnforotp&quot;, &quot;&quot;, true, &quot;&quot;, &quot;&quot;, false, false))" id="btnforotp" style="display: none" />
                            
                            <div class="modal-content">

                                <div class="modal-header">
                                    <h4>OTP</h4>
                                </div>
                                <div class="modal-body">
                                    <div id="divOtpDetails">
                                        <div id="pnlUserotp" onkeypress="javascript:return WebForm_FireDefaultButton(event, &#39;btnOTP&#39;)">
		
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <span id="spanOTPMessage" class="color-red"></span>

                                                    </div>
                                                    <div class="col-sm-5 col-xs-12 mar-top-15">
                                                        <label for="OTPCode">One Time Password (OTP)<i>*</i></label>
                                                        <input name="txtOTPCode" type="text" maxlength="6" id="txtOTPCode" class="form-control" />
                                                        <span id="spanOTP" class="display-hide color-red"></span>
                                                        <a id="lnkRedirector" target="_blank"></a>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        
	</div>
                                    </div>

                                    <div class="modal-footer">
                                        <input type="submit" name="btnOTP" value="Submit" onclick="javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;btnOTP&quot;, &quot;&quot;, true, &quot;&quot;, &quot;&quot;, false, false))" id="btnOTP" class="btn btn-danger" />

                                        <input type="submit" value="Submit" id="btnVerifyOTP" class="btn btn-danger display-hide" />
                                    </div>
                                </div>
                            </div>
                        
</div>
                        <div class="container">
                            <div class="row state-overview">
                                <div class='col-md-6 col-lg-3 mar-top-5'>
                                                      <a href='Directory.html'>
                                                        <section class='border1'>
                                                            <div class='symbol blue'>
                                                                <i class='fa fa-truck'></i>
                                                            </div>
                                                            <div class='value ellipsis-value'>
                                                                <span class='count'>19966</h1>
                                                                <p>Fleet Owners</p>
                                                            </div>
                                                        </section>
                                                    </a>
                                                  </div><div class='col-md-6 col-lg-3 mar-top-5'>
                                                      <a href='Directory.html'>
                                                        <section class='border1'>
                                                            <div class='symbol blue'>
                                                                <i class='fa fa-user'></i>
                                                            </div>
                                                            <div class='value ellipsis-value'>
                                                                <span class='count'>17311</h1>
                                                                <p>Transport contractors</p>
                                                            </div>
                                                        </section>
                                                    </a>
                                                  </div><div class='col-md-6 col-lg-3 mar-top-5'>
                                                      <a href='Directory.html'>
                                                        <section class='border1'>
                                                            <div class='symbol blue'>
                                                                <i class='fa fa-inr'></i>
                                                            </div>
                                                            <div class='value ellipsis-value'>
                                                                <span class='count'>11135</h1>
                                                                <p>Commission Agents</p>
                                                            </div>
                                                        </section>
                                                    </a>
                                                  </div><div class='col-md-6 col-lg-3 mar-top-5'>
                                                      <a href='Directory.html'>
                                                        <section class='border1'>
                                                            <div class='symbol blue'>
                                                                <i class='fa fa-group'></i>
                                                            </div>
                                                            <div class='value ellipsis-value'>
                                                                <span class='count'>2005</h1>
                                                                <p>Transport Brokers</p>
                                                            </div>
                                                        </section>
                                                    </a>
                                                  </div>
                            </div>
                        </div>
                        <div id="TsDetail" class="property gray-bg mar-top-5">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-7">
                                        <h1 class="mar-top-0">Welcome to <span class="color_blue">Truck</span><span class="color_orange">Suvidha</span></h1>
                                        <p>
                                            <a href="index.html" title="India's freight and truck matching portal. Book truck load online.">Trucksuvidha.com</a> is a leading portal for the transport industry. Connecting transporters, truck drivers, customers and other related entities. Simplicity, speed and
efficiency drive your business and this is our focus as well. We allow the users to share the information for expansion of services to the customers by providing
 better rates and vehicles. Our service is aimed for the brokers / transporters / logistics heads / delivery heads to make the use of this  technology.
 This service will make the movement of the vehicle and material more efficient. We will provide information to registered users about the availability of the load and
vehicles in the city.
                                        </p>
                                        <a class="btn btn-danger" href="AboutUs.html" title="Get the Information about TruckSuvidha from here">View Detail</a>
                                    </div>
                                    <div class="col-md-5">
                                        <h3 class="mar-top-0" title="To get latest News"><span class="color_blue">News</span> and <span class="color_orange">Announcement</span></h3>
                                        <div class="about-testimonial boxed-style about-flexslider">
                                            <div class="slider">
                                                <div class="flexslider">
                                                    <div id="divTenderDetails" class="flex-viewport divTenderDetails">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="container">
                            <section id="secLoad" class="panel border-bg tab-radius">
                                <h2 class="center-heading mar-top-10 h1-Postfont">Recent <span class="color_orange">Load/Freight Bookings</span></h2>
                                <header class="tab_board_header GridHeading-font btn-font">
                                    <ul class="nav">
                                        <li>
                                            <a class="pull-left">Recently Posted Loads</a>
                                            <a href='LoadBoard.html' class="btn btn-danger btn-xs btn-view-post pull-right" title="Look your Load detail on TruckSuvidha">View all load posts</a>
                                        </li>
                                    </ul>
                                </header>
                                <div id="upLoadBoard">
	
                                        <div class="table-responsive table-default border-radius-0">
                                            <table class="table table-hover table-condensed even tbl-border-colapse" cellspacing="0" rules="all" border="1" id="tblLoadPosts">
                                                <tbody>
                                                    <tr class="custom-bg">
                                                        
                                                        <th>Source City</th>
                                                        <th>Destination City</th>
                                                        <th>Distance</th>
                                                        <th>Weight (MT)</th>
                                                        <th>Schd. Date</th>
                                                        <th>Material</th>
                                                        <th>Truck Type</th>
                                                        <th>Posted By</th>
                                                        <th>Details</th>
                                                        <th id="colHeadQuotation">Quotation</th>
	
                                                    </tr>
                                                </tbody>
                                                
                                                        <tr>
                                                           
                                                            <td>
                                                                <span title='Yamuna Nagar (HR)'>Yamuna Nagar (HR)</span>
                                                            </td>
                                                            <td>
                                                                <span title='Bhiwani (HR)'>Bhiwani (HR)</span>
                                                            </td>
                                                            <td>
                                                                <span>Not Available</span>
                                                            </td>
                                                            <td>
                                                                <span>Upto 5 MT</span>
                                                            </td>
                                                            <td>
                                                                <span>16-May-2022</span>
                                                            </td>
                                                            <td>
                                                                <span title='Auto Parts'>Auto Parts</span>
                                                            </td>
                                                            <td>
                                                                <span title='Canters 3MT / 4 Wheel'>Canters 3MT / 4 W...</span>
                                                            </td>
                                                            <td>
                                                                <span title='Customer'>Customer</span>
                                                            </td>
                                                            <td>
                                                                <a class="btn btn-xs btn-danger" href='LoadBoard.html?Id=2loMaUWhzOK9KDsxq58+2g==' target="_blank" title="look Your Load Details">View Contact</a>
                                                            </td>
                                                            <td id="rptLoadPosts_colQuotation_0">
                                                                <div id="rptLoadPosts_pnlUserFreight_0" onkeypress="javascript:return WebForm_FireDefaultButton(event, &#39;rptLoadPosts_lnkSaveUserFreight_0&#39;)" style="text-align: right;">
		
                                                                    <span id="rptLoadPosts_lblUserFreightPerUnit_0"></span>
                                                                    <input type="hidden" name="rptLoadPosts$ctl00$hfldUnit" id="rptLoadPosts_hfldUnit_0" />
                                                                    
                                                                    <span id="rptLoadPosts_rfvUserFreight_0" style="color:Red;display:none;">Please provide freight.</span>
                                                                    <span id="rptLoadPosts_revUserFreight_0" style="color:Red;display:none;">Invalid Freight.</span>
                                                                    
                                                                    
                                                                    <span id="rptLoadPosts_rfvUnit_0" style="color:Red;clear:both;display:none;">Please provide unit.</span>
                                                                    
                                                                    
                                                                    <a id="rptLoadPosts_lnkAddUserFreight_0" class="AddQuotation" href="javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;rptLoadPosts$ctl00$lnkAddUserFreight&quot;, &quot;&quot;, true, &quot;&quot;, &quot;&quot;, false, true))"><b title='Add Quotation' class='btn btn-xs btn-danger color_white'>Quote Now</b></a>
                                                                
	</div>
                                                            </td>
	
                                                        </tr>
                                                    
                                                        <tr>
                                                           
                                                            <td>
                                                                <span title='Yamuna Nagar (HR)'>Yamuna Nagar (HR)</span>
                                                            </td>
                                                            <td>
                                                                <span title='Daltonganj (JH)'>Daltonganj (JH)</span>
                                                            </td>
                                                            <td>
                                                                <span>Not Available</span>
                                                            </td>
                                                            <td>
                                                                <span>Above 30 MT</span>
                                                            </td>
                                                            <td>
                                                                <span>16-May-2022</span>
                                                            </td>
                                                            <td>
                                                                <span title='Others'>Others</span>
                                                            </td>
                                                            <td>
                                                                <span title='Truck  25MT   / 14 wheel'>Truck  25MT   / 1...</span>
                                                            </td>
                                                            <td>
                                                                <span title='Customer'>Customer</span>
                                                            </td>
                                                            <td>
                                                                <a class="btn btn-xs btn-danger" href='LoadBoard.html?Id=yw07Uo1yslKB1XQqMtWdRQ==' target="_blank" title="look Your Load Details">View Contact</a>
                                                            </td>
                                                            <td id="rptLoadPosts_colQuotation_1">
                                                                <div id="rptLoadPosts_pnlUserFreight_1" onkeypress="javascript:return WebForm_FireDefaultButton(event, &#39;rptLoadPosts_lnkSaveUserFreight_1&#39;)" style="text-align: right;">
		
                                                                    <span id="rptLoadPosts_lblUserFreightPerUnit_1"></span>
                                                                    <input type="hidden" name="rptLoadPosts$ctl01$hfldUnit" id="rptLoadPosts_hfldUnit_1" />
                                                                    
                                                                    <span id="rptLoadPosts_rfvUserFreight_1" style="color:Red;display:none;">Please provide freight.</span>
                                                                    <span id="rptLoadPosts_revUserFreight_1" style="color:Red;display:none;">Invalid Freight.</span>
                                                                    
                                                                    
                                                                    <span id="rptLoadPosts_rfvUnit_1" style="color:Red;clear:both;display:none;">Please provide unit.</span>
                                                                    
                                                                    
                                                                    <a id="rptLoadPosts_lnkAddUserFreight_1" class="AddQuotation" href="javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;rptLoadPosts$ctl01$lnkAddUserFreight&quot;, &quot;&quot;, true, &quot;&quot;, &quot;&quot;, false, true))"><b title='Add Quotation' class='btn btn-xs btn-danger color_white'>Quote Now</b></a>
                                                                
	</div>
                                                            </td>
	
                                                        </tr>
                                                    
                                                        <tr>
                                                           
                                                            <td>
                                                                <span title='Yamuna Nagar (HR)'>Yamuna Nagar (HR)</span>
                                                            </td>
                                                            <td>
                                                                <span title='Kanpur (UP)'>Kanpur (UP)</span>
                                                            </td>
                                                            <td>
                                                                <span>Not Available</span>
                                                            </td>
                                                            <td>
                                                                <span>Upto 25 MT</span>
                                                            </td>
                                                            <td>
                                                                <span>16-May-2022</span>
                                                            </td>
                                                            <td>
                                                                <span title='Auto Parts'>Auto Parts</span>
                                                            </td>
                                                            <td>
                                                                <span title='Truck 20MT / 12 wheel'>Truck 20MT / 12 w...</span>
                                                            </td>
                                                            <td>
                                                                <span title='Customer'>Customer</span>
                                                            </td>
                                                            <td>
                                                                <a class="btn btn-xs btn-danger" href='LoadBoard.html?Id=uyVqalpAfeGU9CREB0XoqA==' target="_blank" title="look Your Load Details">View Contact</a>
                                                            </td>
                                                            <td id="rptLoadPosts_colQuotation_2">
                                                                <div id="rptLoadPosts_pnlUserFreight_2" onkeypress="javascript:return WebForm_FireDefaultButton(event, &#39;rptLoadPosts_lnkSaveUserFreight_2&#39;)" style="text-align: right;">
		
                                                                    <span id="rptLoadPosts_lblUserFreightPerUnit_2"></span>
                                                                    <input type="hidden" name="rptLoadPosts$ctl02$hfldUnit" id="rptLoadPosts_hfldUnit_2" />
                                                                    
                                                                    <span id="rptLoadPosts_rfvUserFreight_2" style="color:Red;display:none;">Please provide freight.</span>
                                                                    <span id="rptLoadPosts_revUserFreight_2" style="color:Red;display:none;">Invalid Freight.</span>
                                                                    
                                                                    
                                                                    <span id="rptLoadPosts_rfvUnit_2" style="color:Red;clear:both;display:none;">Please provide unit.</span>
                                                                    
                                                                    
                                                                    <a id="rptLoadPosts_lnkAddUserFreight_2" class="AddQuotation" href="javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;rptLoadPosts$ctl02$lnkAddUserFreight&quot;, &quot;&quot;, true, &quot;&quot;, &quot;&quot;, false, true))"><b title='Add Quotation' class='btn btn-xs btn-danger color_white'>Quote Now</b></a>
                                                                
	</div>
                                                            </td>
	
                                                        </tr>
                                                    
                                                        <tr>
                                                           
                                                            <td>
                                                                <span title='Yamuna Nagar (HR)'>Yamuna Nagar (HR)</span>
                                                            </td>
                                                            <td>
                                                                <span title='Bokaro (JH)'>Bokaro (JH)</span>
                                                            </td>
                                                            <td>
                                                                <span>Not Available</span>
                                                            </td>
                                                            <td>
                                                                <span>Upto 28 MT</span>
                                                            </td>
                                                            <td>
                                                                <span>16-May-2022</span>
                                                            </td>
                                                            <td>
                                                                <span title='Auto Parts'>Auto Parts</span>
                                                            </td>
                                                            <td>
                                                                <span title='Truck  25MT   / 14 wheel'>Truck  25MT   / 1...</span>
                                                            </td>
                                                            <td>
                                                                <span title='Customer'>Customer</span>
                                                            </td>
                                                            <td>
                                                                <a class="btn btn-xs btn-danger" href='LoadBoard.html?Id=WWsAkrOlpsVvMaS09Y/WSA==' target="_blank" title="look Your Load Details">View Contact</a>
                                                            </td>
                                                            <td id="rptLoadPosts_colQuotation_3">
                                                                <div id="rptLoadPosts_pnlUserFreight_3" onkeypress="javascript:return WebForm_FireDefaultButton(event, &#39;rptLoadPosts_lnkSaveUserFreight_3&#39;)" style="text-align: right;">
		
                                                                    <span id="rptLoadPosts_lblUserFreightPerUnit_3"></span>
                                                                    <input type="hidden" name="rptLoadPosts$ctl03$hfldUnit" id="rptLoadPosts_hfldUnit_3" />
                                                                    
                                                                    <span id="rptLoadPosts_rfvUserFreight_3" style="color:Red;display:none;">Please provide freight.</span>
                                                                    <span id="rptLoadPosts_revUserFreight_3" style="color:Red;display:none;">Invalid Freight.</span>
                                                                    
                                                                    
                                                                    <span id="rptLoadPosts_rfvUnit_3" style="color:Red;clear:both;display:none;">Please provide unit.</span>
                                                                    
                                                                    
                                                                    <a id="rptLoadPosts_lnkAddUserFreight_3" class="AddQuotation" href="javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;rptLoadPosts$ctl03$lnkAddUserFreight&quot;, &quot;&quot;, true, &quot;&quot;, &quot;&quot;, false, true))"><b title='Add Quotation' class='btn btn-xs btn-danger color_white'>Quote Now</b></a>
                                                                
	</div>
                                                            </td>
	
                                                        </tr>
                                                    
                                                        <tr>
                                                           
                                                            <td>
                                                                <span title='Yamuna Nagar (HR)'>Yamuna Nagar (HR)</span>
                                                            </td>
                                                            <td>
                                                                <span title='Raurkela (M) (OR)'>Raurkela (M) (OR)</span>
                                                            </td>
                                                            <td>
                                                                <span>Not Available</span>
                                                            </td>
                                                            <td>
                                                                <span>Above 30 MT</span>
                                                            </td>
                                                            <td>
                                                                <span>16-May-2022</span>
                                                            </td>
                                                            <td>
                                                                <span title='Others'>Others</span>
                                                            </td>
                                                            <td>
                                                                <span title='Trailer 28MT / 18 wheel'>Trailer 28MT / 18...</span>
                                                            </td>
                                                            <td>
                                                                <span title='Customer'>Customer</span>
                                                            </td>
                                                            <td>
                                                                <a class="btn btn-xs btn-danger" href='LoadBoard.html?Id=tcQiVABHTrJIzT3N10IWKg==' target="_blank" title="look Your Load Details">View Contact</a>
                                                            </td>
                                                            <td id="rptLoadPosts_colQuotation_4">
                                                                <div id="rptLoadPosts_pnlUserFreight_4" onkeypress="javascript:return WebForm_FireDefaultButton(event, &#39;rptLoadPosts_lnkSaveUserFreight_4&#39;)" style="text-align: right;">
		
                                                                    <span id="rptLoadPosts_lblUserFreightPerUnit_4"></span>
                                                                    <input type="hidden" name="rptLoadPosts$ctl04$hfldUnit" id="rptLoadPosts_hfldUnit_4" />
                                                                    
                                                                    <span id="rptLoadPosts_rfvUserFreight_4" style="color:Red;display:none;">Please provide freight.</span>
                                                                    <span id="rptLoadPosts_revUserFreight_4" style="color:Red;display:none;">Invalid Freight.</span>
                                                                    
                                                                    
                                                                    <span id="rptLoadPosts_rfvUnit_4" style="color:Red;clear:both;display:none;">Please provide unit.</span>
                                                                    
                                                                    
                                                                    <a id="rptLoadPosts_lnkAddUserFreight_4" class="AddQuotation" href="javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;rptLoadPosts$ctl04$lnkAddUserFreight&quot;, &quot;&quot;, true, &quot;&quot;, &quot;&quot;, false, true))"><b title='Add Quotation' class='btn btn-xs btn-danger color_white'>Quote Now</b></a>
                                                                
	</div>
                                                            </td>
	
                                                        </tr>
                                                    
                                                        <tr>
                                                           
                                                            <td>
                                                                <span title='Hyderabad (TG)'>Hyderabad (TG)</span>
                                                            </td>
                                                            <td>
                                                                <span title='Robertsganj (UP)'>Robertsganj (UP)</span>
                                                            </td>
                                                            <td>
                                                                <span>Not Available</span>
                                                            </td>
                                                            <td>
                                                                <span>Upto 25 MT</span>
                                                            </td>
                                                            <td>
                                                                <span>16-May-2022</span>
                                                            </td>
                                                            <td>
                                                                <span title='Others'>Others</span>
                                                            </td>
                                                            <td>
                                                                <span title='Truck  25MT   / 14 wheel'>Truck  25MT   / 1...</span>
                                                            </td>
                                                            <td>
                                                                <span title='Customer'>Customer</span>
                                                            </td>
                                                            <td>
                                                                <a class="btn btn-xs btn-danger" href='LoadBoard.html?Id=j2QbmDoSNEaPbE2CUtyJuw==' target="_blank" title="look Your Load Details">View Contact</a>
                                                            </td>
                                                            <td id="rptLoadPosts_colQuotation_5">
                                                                <div id="rptLoadPosts_pnlUserFreight_5" onkeypress="javascript:return WebForm_FireDefaultButton(event, &#39;rptLoadPosts_lnkSaveUserFreight_5&#39;)" style="text-align: right;">
		
                                                                    <span id="rptLoadPosts_lblUserFreightPerUnit_5"></span>
                                                                    <input type="hidden" name="rptLoadPosts$ctl05$hfldUnit" id="rptLoadPosts_hfldUnit_5" />
                                                                    
                                                                    <span id="rptLoadPosts_rfvUserFreight_5" style="color:Red;display:none;">Please provide freight.</span>
                                                                    <span id="rptLoadPosts_revUserFreight_5" style="color:Red;display:none;">Invalid Freight.</span>
                                                                    
                                                                    
                                                                    <span id="rptLoadPosts_rfvUnit_5" style="color:Red;clear:both;display:none;">Please provide unit.</span>
                                                                    
                                                                    
                                                                    <a id="rptLoadPosts_lnkAddUserFreight_5" class="AddQuotation" href="javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;rptLoadPosts$ctl05$lnkAddUserFreight&quot;, &quot;&quot;, true, &quot;&quot;, &quot;&quot;, false, true))"><b title='Add Quotation' class='btn btn-xs btn-danger color_white'>Quote Now</b></a>
                                                                
	</div>
                                                            </td>
	
                                                        </tr>
                                                    
                                                        <tr>
                                                           
                                                            <td>
                                                                <span title='Yamuna Nagar (HR)'>Yamuna Nagar (HR)</span>
                                                            </td>
                                                            <td>
                                                                <span title='Surat (GJ)'>Surat (GJ)</span>
                                                            </td>
                                                            <td>
                                                                <span>Not Available</span>
                                                            </td>
                                                            <td>
                                                                <span>Above 30 MT</span>
                                                            </td>
                                                            <td>
                                                                <span>16-May-2022</span>
                                                            </td>
                                                            <td>
                                                                <span title='Building Materials'>Building Mat...</span>
                                                            </td>
                                                            <td>
                                                                <span title='Truck  25MT   / 14 wheel'>Truck  25MT   / 1...</span>
                                                            </td>
                                                            <td>
                                                                <span title='Transporter'>Transporter</span>
                                                            </td>
                                                            <td>
                                                                <a class="btn btn-xs btn-danger" href='LoadBoard.html?Id=BZ9XEuKgqx271Ow/Pw3Aqw==' target="_blank" title="look Your Load Details">View Contact</a>
                                                            </td>
                                                            <td id="rptLoadPosts_colQuotation_6">
                                                                <div id="rptLoadPosts_pnlUserFreight_6" onkeypress="javascript:return WebForm_FireDefaultButton(event, &#39;rptLoadPosts_lnkSaveUserFreight_6&#39;)" style="text-align: right;">
		
                                                                    <span id="rptLoadPosts_lblUserFreightPerUnit_6"></span>
                                                                    <input type="hidden" name="rptLoadPosts$ctl06$hfldUnit" id="rptLoadPosts_hfldUnit_6" />
                                                                    
                                                                    <span id="rptLoadPosts_rfvUserFreight_6" style="color:Red;display:none;">Please provide freight.</span>
                                                                    <span id="rptLoadPosts_revUserFreight_6" style="color:Red;display:none;">Invalid Freight.</span>
                                                                    
                                                                    
                                                                    <span id="rptLoadPosts_rfvUnit_6" style="color:Red;clear:both;display:none;">Please provide unit.</span>
                                                                    
                                                                    
                                                                    <a id="rptLoadPosts_lnkAddUserFreight_6" class="AddQuotation" href="javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;rptLoadPosts$ctl06$lnkAddUserFreight&quot;, &quot;&quot;, true, &quot;&quot;, &quot;&quot;, false, true))"><b title='Add Quotation' class='btn btn-xs btn-danger color_white'>Quote Now</b></a>
                                                                
	</div>
                                                            </td>
	
                                                        </tr>
                                                    
                                                        <tr>
                                                           
                                                            <td>
                                                                <span title='Yamuna Nagar (HR)'>Yamuna Nagar (HR)</span>
                                                            </td>
                                                            <td>
                                                                <span title='Indore (MP)'>Indore (MP)</span>
                                                            </td>
                                                            <td>
                                                                <span>Not Available</span>
                                                            </td>
                                                            <td>
                                                                <span>Above 30 MT</span>
                                                            </td>
                                                            <td>
                                                                <span>16-May-2022</span>
                                                            </td>
                                                            <td>
                                                                <span title='Coal And Ash'>Coal And Ash</span>
                                                            </td>
                                                            <td>
                                                                <span title='Truck  25MT   / 14 wheel'>Truck  25MT   / 1...</span>
                                                            </td>
                                                            <td>
                                                                <span title='Transporter'>Transporter</span>
                                                            </td>
                                                            <td>
                                                                <a class="btn btn-xs btn-danger" href='LoadBoard.html?Id=fSxCRRSdEA8n93Z74/wpZQ==' target="_blank" title="look Your Load Details">View Contact</a>
                                                            </td>
                                                            <td id="rptLoadPosts_colQuotation_7">
                                                                <div id="rptLoadPosts_pnlUserFreight_7" onkeypress="javascript:return WebForm_FireDefaultButton(event, &#39;rptLoadPosts_lnkSaveUserFreight_7&#39;)" style="text-align: right;">
		
                                                                    <span id="rptLoadPosts_lblUserFreightPerUnit_7"></span>
                                                                    <input type="hidden" name="rptLoadPosts$ctl07$hfldUnit" id="rptLoadPosts_hfldUnit_7" />
                                                                    
                                                                    <span id="rptLoadPosts_rfvUserFreight_7" style="color:Red;display:none;">Please provide freight.</span>
                                                                    <span id="rptLoadPosts_revUserFreight_7" style="color:Red;display:none;">Invalid Freight.</span>
                                                                    
                                                                    
                                                                    <span id="rptLoadPosts_rfvUnit_7" style="color:Red;clear:both;display:none;">Please provide unit.</span>
                                                                    
                                                                    
                                                                    <a id="rptLoadPosts_lnkAddUserFreight_7" class="AddQuotation" href="javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;rptLoadPosts$ctl07$lnkAddUserFreight&quot;, &quot;&quot;, true, &quot;&quot;, &quot;&quot;, false, true))"><b title='Add Quotation' class='btn btn-xs btn-danger color_white'>Quote Now</b></a>
                                                                
	</div>
                                                            </td>
	
                                                        </tr>
                                                    
                                                        <tr>
                                                           
                                                            <td>
                                                                <span title='Yamuna Nagar (HR)'>Yamuna Nagar (HR)</span>
                                                            </td>
                                                            <td>
                                                                <span title='Mumbai (MH)'>Mumbai (MH)</span>
                                                            </td>
                                                            <td>
                                                                <span>Not Available</span>
                                                            </td>
                                                            <td>
                                                                <span>Upto 25 MT</span>
                                                            </td>
                                                            <td>
                                                                <span>16-May-2022</span>
                                                            </td>
                                                            <td>
                                                                <span title='Building Materials'>Building Mat...</span>
                                                            </td>
                                                            <td>
                                                                <span title='Truck 20MT / 12 wheel'>Truck 20MT / 12 w...</span>
                                                            </td>
                                                            <td>
                                                                <span title='Transporter'>Transporter</span>
                                                            </td>
                                                            <td>
                                                                <a class="btn btn-xs btn-danger" href='LoadBoard.html?Id=p0fEJvCM0MN3ZdGks+CbZA==' target="_blank" title="look Your Load Details">View Contact</a>
                                                            </td>
                                                            <td id="rptLoadPosts_colQuotation_8">
                                                                <div id="rptLoadPosts_pnlUserFreight_8" onkeypress="javascript:return WebForm_FireDefaultButton(event, &#39;rptLoadPosts_lnkSaveUserFreight_8&#39;)" style="text-align: right;">
		
                                                                    <span id="rptLoadPosts_lblUserFreightPerUnit_8"></span>
                                                                    <input type="hidden" name="rptLoadPosts$ctl08$hfldUnit" id="rptLoadPosts_hfldUnit_8" />
                                                                    
                                                                    <span id="rptLoadPosts_rfvUserFreight_8" style="color:Red;display:none;">Please provide freight.</span>
                                                                    <span id="rptLoadPosts_revUserFreight_8" style="color:Red;display:none;">Invalid Freight.</span>
                                                                    
                                                                    
                                                                    <span id="rptLoadPosts_rfvUnit_8" style="color:Red;clear:both;display:none;">Please provide unit.</span>
                                                                    
                                                                    
                                                                    <a id="rptLoadPosts_lnkAddUserFreight_8" class="AddQuotation" href="javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;rptLoadPosts$ctl08$lnkAddUserFreight&quot;, &quot;&quot;, true, &quot;&quot;, &quot;&quot;, false, true))"><b title='Add Quotation' class='btn btn-xs btn-danger color_white'>Quote Now</b></a>
                                                                
	</div>
                                                            </td>
	
                                                        </tr>
                                                    
                                                        <tr>
                                                           
                                                            <td>
                                                                <span title='Yamuna Nagar (HR)'>Yamuna Nagar (HR)</span>
                                                            </td>
                                                            <td>
                                                                <span title='Srinagar (WB)'>Srinagar (WB)</span>
                                                            </td>
                                                            <td>
                                                                <span>Not Available</span>
                                                            </td>
                                                            <td>
                                                                <span>Upto 20 MT</span>
                                                            </td>
                                                            <td>
                                                                <span>16-May-2022</span>
                                                            </td>
                                                            <td>
                                                                <span title='Cement'>Cement</span>
                                                            </td>
                                                            <td>
                                                                <span title='Truck 16MT / 10 wheel'>Truck 16MT / 10 w...</span>
                                                            </td>
                                                            <td>
                                                                <span title='Transporter'>Transporter</span>
                                                            </td>
                                                            <td>
                                                                <a class="btn btn-xs btn-danger" href='LoadBoard.html?Id=pSSTFuOeyp7Js/tvPS6fvQ==' target="_blank" title="look Your Load Details">View Contact</a>
                                                            </td>
                                                            <td id="rptLoadPosts_colQuotation_9">
                                                                <div id="rptLoadPosts_pnlUserFreight_9" onkeypress="javascript:return WebForm_FireDefaultButton(event, &#39;rptLoadPosts_lnkSaveUserFreight_9&#39;)" style="text-align: right;">
		
                                                                    <span id="rptLoadPosts_lblUserFreightPerUnit_9"></span>
                                                                    <input type="hidden" name="rptLoadPosts$ctl09$hfldUnit" id="rptLoadPosts_hfldUnit_9" />
                                                                    
                                                                    <span id="rptLoadPosts_rfvUserFreight_9" style="color:Red;display:none;">Please provide freight.</span>
                                                                    <span id="rptLoadPosts_revUserFreight_9" style="color:Red;display:none;">Invalid Freight.</span>
                                                                    
                                                                    
                                                                    <span id="rptLoadPosts_rfvUnit_9" style="color:Red;clear:both;display:none;">Please provide unit.</span>
                                                                    
                                                                    
                                                                    <a id="rptLoadPosts_lnkAddUserFreight_9" class="AddQuotation" href="javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;rptLoadPosts$ctl09$lnkAddUserFreight&quot;, &quot;&quot;, true, &quot;&quot;, &quot;&quot;, false, true))"><b title='Add Quotation' class='btn btn-xs btn-danger color_white'>Quote Now</b></a>
                                                                
	</div>
                                                            </td>
	
                                                        </tr>
                                                    
                                            </table>
                                        </div>
                                    
</div>
                            </section>
                            <section id="secTruck" class="panel border-bg tab-radius">
                                <h2 class="center-heading mar-top-10 h1-Postfont">Recent <span class="color_orange">Truck/Lorry Postings</span></h2>
                                <header class="tab_board_header GridHeading-font btn-font">
                                    <ul class="nav">
                                        <li>
                                            <a class="pull-left ">Recently Posted Trucks</a>
                                            <a href='TruckBoard.html' class="btn btn-danger btn-xs btn-view-post pull-right" title="Look your truck details on TruckSuvidha">View all truck posts</a>
                                        </li>
                                    </ul>
                                </header>
                                <div class="table-responsive table-default border-radius-0">
                                    <table id="tblTruckPosts" class="table table-hover table-condensed even tbl-border-colapse" cellspacing="0" rules="all" border="1">
                                        <tbody>
                                            <tr class="custom-bg">

                                                

                                                

                                                <th scope="col">Source City</th>
                                                <th scope="col">Destination</th>
                                                <th scope="col">Weight (MT)</th>
                                               
                                                <th scope="col">Truck Type</th>
                                                <th scope="col">Details</th>
                                            </tr>
                                            
                                                    <tr>

                                                        
                                                        <td>
                                                            <span title='Varanasi (UP)'>Varanasi (UP)</span>
                                                        </td>
                                                        <td>
                                                            <span title='Haridwar (UT)'>Haridwar (UT)</span>
                                                        </td>
                                                        <td>
                                                            <span>Above 30 MT</span>
                                                        </td>
                                                      
                                                        <td>
                                                            <span title='Truck  25MT   / 14 wheel'>Truck  25MT   / 14 wheel</span>
                                                        </td>
                                                        <td>

                                                            
                                                            
                                                            

                                                            
                                                            <a class="btn-xs btn-danger" href='TruckPostDetails6034.html?Id=0Md2nxSZnDOzwNOgXYMYpg==' target="_blank" title="look Your Truck Details">Get Best Freight</a>

                                                        </td>
                                                    </tr>
                                                
                                                    <tr>

                                                        
                                                        <td>
                                                            <span title='Chennai (TN)'>Chennai (TN)</span>
                                                        </td>
                                                        <td>
                                                            <span title='Bhiwandi (MH)'>Bhiwandi (MH)</span>
                                                        </td>
                                                        <td>
                                                            <span>Upto 25 MT</span>
                                                        </td>
                                                      
                                                        <td>
                                                            <span title='Truck 20MT / 12 wheel'>Truck 20MT / 12 wheel</span>
                                                        </td>
                                                        <td>

                                                            
                                                            
                                                            

                                                            
                                                            <a class="btn-xs btn-danger" href='TruckPostDetails77e9.html?Id=WhrSW3g8UO5Egdq/XuAcCA==' target="_blank" title="look Your Truck Details">Get Best Freight</a>

                                                        </td>
                                                    </tr>
                                                
                                                    <tr>

                                                        
                                                        <td>
                                                            <span title='Hooghly (WB)'>Hooghly (WB)</span>
                                                        </td>
                                                        <td>
                                                            <span title='Barsar (HP)'>Barsar (HP)</span>
                                                        </td>
                                                        <td>
                                                            <span>Upto 20 MT</span>
                                                        </td>
                                                      
                                                        <td>
                                                            <span title='Container Close Body  32 Feet'>Container Close Body  32 Feet</span>
                                                        </td>
                                                        <td>

                                                            
                                                            
                                                            

                                                            
                                                            <a class="btn-xs btn-danger" href='TruckPostDetails9571.html?Id=+VhPf/ce/3t7SYCs5DG1Ow==' target="_blank" title="look Your Truck Details">Get Best Freight</a>

                                                        </td>
                                                    </tr>
                                                
                                                    <tr>

                                                        
                                                        <td>
                                                            <span title='Mohania (BR)'>Mohania (BR)</span>
                                                        </td>
                                                        <td>
                                                            <span title='Basirhat (WB)'>Basirhat (WB)</span>
                                                        </td>
                                                        <td>
                                                            <span>Above 30 MT</span>
                                                        </td>
                                                      
                                                        <td>
                                                            <span title='Flat Bed Trailers (32 Feet)'>Flat Bed Trailers (32 Feet)</span>
                                                        </td>
                                                        <td>

                                                            
                                                            
                                                            

                                                            
                                                            <a class="btn-xs btn-danger" href='TruckPostDetails87c0.html?Id=PKak4jgvpIHuuz0cnbDjCQ==' target="_blank" title="look Your Truck Details">Get Best Freight</a>

                                                        </td>
                                                    </tr>
                                                
                                        </tbody>
                                    </table>
                                </div>
                            </section>

  
    <script type="text/javascript" src='js/Custom/empoyee-menu.min.js'></script>
</body>
</html>
<?php
    }
    else{
        echo "<script> alert('Error! you need to login First ');window.location.href='Login.php' </script>";
    }
	
?>