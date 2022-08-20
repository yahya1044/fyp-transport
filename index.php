<?php 

include 'database/db.php'; 


 ?>
<!DOCTYPE html>
<html>

<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head><title>
	Customer

</title><meta name="description" content="India&#39;s freight and truck matching portal. Book truck load online. Find trucks, trailers matching load requirements. Find freight/Transporters all over India!" /><meta name="keywords" content="Online truck, Truck Board, Load Board, Packers and Movers, truck loader, truck rims, truck load boards, Truck Load, Truck Freight, free load boards, Trucks, Loads, Logistics, Find Truck Load Online, Find Trucks, Transporters, Freight Online, truck hire" /><meta name="robots" content="index, follow" /><meta name="author" content="Sarvodaya Ventures Pvt. Ltd." /><meta name="revisit_after" content="7days" /><meta name="viewport" content="width=device-width, initial-scale=1" /><meta itemprop="name" content="TruckSuvidha" /><meta itemprop="description" content="India&#39;s freight and truck matching portal. Find trucks matching your load requirements. Find freight / Transporters all over India! Register for FREE" />

<link rel="icon" href="Images/favicon.ico" type="image/x-icon" /><link href="css/bootstrap.min.min.css" rel="stylesheet" /><link href="css/bootstrap-reset.min.css" rel="stylesheet" /><link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" /><link href="css/style.min.css" rel="stylesheet" /><link href="css/style-responsive.min.css" rel="stylesheet" /><link type="text/css" href="jquery-ui-1.11.1/jquery-ui.min.css" rel="stylesheet" /><link href="css/jquery.autocomplete.min.css" rel="stylesheet" /><link href="css/custom.min.css" rel="stylesheet" /><link href="css/bootstrap-tour.min.css" rel="stylesheet" />
    <script type="text/javascript" src='js/jquery.min.js'></script>


</head>
<body>

<div id="header-content">
    <div class='container'>
        <header>
            
            <div class="row">
                <div class="col-lg-2 col-md-3 col-sm-12 col-xs-3">
                    <a href='index.php'>
                        <img id="imgTruckSuvidhaLogo" class="custom_logo" src='Images/logo_trucksuvidha.png' alt="TruckSuvidha" title="Back to TruckSuvidha Home" /></a>
                    <a href='index.php'>
                        <img id="imgTruckSuvidhaMobileViewLogo" class="custom_logo" src='Images/logo_trucksuvidha.png' alt="TruckSuvidha" title="Back to TruckSuvidha Home" /></a>
                </div>
                <div class="col-lg-10 col-md-9 col-sm-12 col-xs-9">
                    <div id="top-menu" class="nav">
                        <ul id="Margin-Top" class="top-breadcrumb topHeader-menu header-link">
                            <li id="ucHeader_lnkRequestCallBack">
                               <i class="fa fa-phone"></i>Request Call Back (9am-6pm IST)
                            </li>
                            
                            
                            <li id="TsMailId"><a href="mailto:info@trucksuvidha.com" title="TruckSuvidha Email-id"><i class="fa fa-phone-square"></i>+923037430129</a></li>
                            <li id="TsMailId"><a href="mailto:info@trucksuvidha.com" title="TruckSuvidha Email-id"><i class="fa fa-envelope-o"></i>info@trucksuvidha.com</a></li>
             
                            <li id="ucHeader_liLogin" class="disable-hover">
                                <i id="fa-login" class="fa fa-sign-in"></i>
                                <a href="Login.php"  class="btn-login btn-danger-login btn-sm-home" title="Login on TruckSuvidha"><i id="fa-login-mobile" class="fa fa-sign-in"></i>Log IN</a>
                            </li>
                               <li id="ucHeader_liRegister" class="disable-hover">
                                <i id="fa-Reg" class="fa fa-user"></i>
                                <a href="Registration/Register.php" id="ucHeader_lnkRegister" class="btn-danger-login btn-sm-home logo-responsive" title="Register on TruckSuvidha"><i id="fa-Reg-mobile" class="fa fa-user"></i>Free Register</a>
                            </li>
                            
                            
                            
                        </ul>
                    </div>
                </div>
            </div>
            
          
            
           </header>
    </div>
    <div id="header-nav" class="bg-blue sticky-header">
        <div class='container'>
            <div class="row">
                <nav class="navbar navbar-default" role="navigation">

                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" id="btn-mob" onclick="Btn_menu()">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div id="bs-example-navbar-collapse-1" class="horizontal-menu collapse navbar-collapse">
                        <div class="col-lg-1 col-md-1 col-sm-12 col-xs-3 scroll-ts-logo">
                            <a href='index.php'>
                                <img id="imgTruckSuvidhaLogoScroll" class="" src='Images/Scroll-logo.png' alt="TruckSuvidha Scroll Logo" title="Back to TruckSuvidha Home" /></a>
                        </div>
                        
                        <div id="dashboarMenu">
                            
                        </div>

                        
                        

                        
                        <ul class="nav navbar-nav text-right pull-right" style="margin-right: 20px">
                            <li>
                                
                            </li>
                        </ul>

                        
                        <ul id="ucHeader_ulWebsiteMenu" class="nav navbar-nav scroll-mar-top">
                          
						   
						   <li><a  href='index.php' title="View the details of transporters & Packers and Movers">Post Load</a>
						   </li>
						   
						   
						   <li><a  href='packages.php' title="View the details of transporters & Packers and Movers">Packages</a>
						   </li>
						   
						   <li><a  href='truck.php' title="View the details of transporters & Packers and Movers">Trucks</a></li>
						   
						    <li><a  href='customer/load_request.php' title="View the details of transporters & Packers and Movers">Pending Request</a>
						   </li>
						   
						    <li><a  href='customer/current_booking.php' title="View the details of transporters & Packers and Movers">Current Booking</a>
						   </li>
						   
						   <li><a href='customer/previous_booking.php' title="View the details of transporters & Packers and Movers">History</a>
						   </li>
						   
						   <li><a  href='contact.php' title="View the details of transporters & Packers and Movers">Contact Us</a>
						   </li>
						 
						   
						   
					
                            
                          </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <script type="text/javascript" src='js/Custom/empoyee-menu.min.js'></script>

    
    <div id="divSearchUserDetailsHolder"></div>

    <script type="text/javascript">
        $("#ucHeader_imgSearchUser").click(function (e) {
            e.preventDefault();
            var username = $("#txtSearchUser").val();
            var hfldSearchBy = $get("ucHeader_hfldSearchBy");
            var numRegEx = /^[6-9][0-9]{9}$$/;
            var emailRegEx = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
            if (numRegEx.test(username) && username.length == 10) { // its a number
                hfldSearchBy.value = "MobileNo";
                var firstDigit = username.substring(0, 1);
                if (firstDigit != 9 && firstDigit != 8 && firstDigit != 7 && firstDigit != 6) return false;
                else {
                    SearchUser(e);
                    $("#txtSearchUser").css("border", "1px solid #ccc");
                    return true;
                }
            }
            else if (emailRegEx.test(username)) { // its an email
                hfldSearchBy.value = "Email";
                SearchUser(e);
                $("#txtSearchUser").css("border", "1px solid #ccc");
                return true;
            }
            else { $("#txtSearchUser").css("border", "2px solid red"); return false; }
        });

        function SearchUser(e) {
            e.preventDefault();
            var objSearchUser = new Object();
            objSearchUser.UserNameOrEmail = $('#txtSearchUser').val();
            objSearchUser.SearchBy = $('#ucHeader_hfldSearchBy').val();
            objSearchUser.LoggedInUserLoginId = "0";
            $.ajax({
                type: "POST",
                url: "api/User/UserByUserNameOrEmail",
                data: JSON.stringify(objSearchUser),
                contentType: "application/json; charset=utf-8",
                dataType: "json",
                success: function (res) { $("#divSearchUserDetailsHolder").html(res); } })
                .done(function (res) { SetViewSearchUserProfileButtonEvent(); })
                .error(function (res) { var error = res; });
        }

        //Method to Set Profile Button Event.
        function SetViewSearchUserProfileButtonEvent() {
            $("#lnkViewSearchUserProfile").click(function () {
                var objUser = new Object();
                objUser.Role = $('#hfldSearchUserMemberRoleId').val();
                objUser.LoginId = $('#hfldSearchUserLoginId').val();
                $.ajax({
                    type: "POST",
                    url: "api/User/ProfileUrl",
                    data: JSON.stringify(objUser),
                    async: false,
                    contentType: "application/json; charset=utf-8",
                    dataType: "json",
                    success: function (res) {
                        if (res != "" && res != null) {
                            var url = res.replace("_/index.html", "");
                            var serverAddress = "index.html";
                            $('#divSearchUserDetailsHolder').html('');
                            $('#divPopUpBackground').hide();
                            $('#txtSearchUser').val('');
                            window.open(serverAddress + url);

                        }
                    }
                });
            });
        }
    </script>

    
    


    <div class='container'>
        <div id="ucHeader_upMessage">
	
                <span id="ucHeader_lblMessageHeader"></span>
            
</div>
    </div>
    <script type="text/javascript">
        function Btn_menu()
        {
            $( document ).ajaxComplete(function() {
                $("#btn-mob").removeAttr('disabled');
            });

        }
    </script>
</div>

            <div id="divMainContent">
                <div id="divContentBody" class="container-fluid pad-bot-20">
                    <div class="row" style=" background-image: url('images/banner2.png');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;">
                        <div id="divBannerImages" class="home-banner" style="background-image:url(%27/Uploads/CMS/HomePage/BannerImages/IMG_15612_27.09.2016_13.35.45.html) ">
                            <div class="container">
                                <div id="ctl25">
	
                                        <span id="lblMessage"></span>
                                        <div id="divLoginMessage" class='alert alert-info hide' >
                                            <button id="btnHideMessage" type='button' class='close'>×</button><strong>Info! </strong>Please click
                                            <a id="lnkLoginToContinue" href="javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;lnkLoginToContinue&quot;, &quot;&quot;, true, &quot;&quot;, &quot;&quot;, false, true))">HERE</a>
                                            to login to add your quotation.
                                        </div>
                                        <div id="divNotAuthorisedMessage" class='alert alert-info' style="display: none;">
                                            <button id="btnHideNotAuthorisedMessage" type='button' class='close'>×</button><strong>Info! </strong><span id="spanNotAuthorisedMessage"></span>
                                        </div>
                                    
</div>
       
<div class="row mar-top-55 mar-bot-55" >
                                    <div class="col-sm-6" >
                                        
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
	<form action="customer/bill.php" method="POST" class="form-group">
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
$pack = $row['pack_from'];												
$select="SELECT * FROM packages";
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
<?php 

$select="SELECT * FROM truckoperator";
$run=mysqli_query($conn,$select); 
$row=mysqli_fetch_array($run); 

$drivecount = mysqli_num_rows($run);
 
 
 $sel="SELECT * FROM customer";
$ru=mysqli_query($conn,$sel); 
$ro=mysqli_fetch_array($ru); 

  $cus_count = mysqli_num_rows($ru);
?>

                        <div class="container">
                            <div class="row state-overview">
                                <div class='col-md-6 col-lg-4 mar-top-5'>
                                                     
                                                        <section class='border1'>
                                                            <div class='symbol blue'>
                                                                <i class='fa fa-truck'></i>
                                                            </div>
                                                            <div class='value ellipsis-value'>
                                                                <span class='count'><?php echo $drivecount ?></h1>
                                                                <p>Trucks</p>
                                                            </div>
                                                        </section>
                                                  
                                                  </div><div class='col-md-6 col-lg-4 mar-top-5'>
                                                     
                                                        <section class='border1'>
                                                            <div class='symbol blue'>
                                                                <i class='fa fa-user'></i>
                                                            </div>
                                                            <div class='value ellipsis-value'>
                                                                <span class='count'><?php echo $drivecount ?></h1>
                                                                <p>Drivers</p>
                                                            </div>
                                                        </section>
                                              
                                                  </div><div class='col-md-6 col-lg-4 mar-top-5'>
                                                      
                                                        <section class='border1'>
                                                            <div class='symbol blue'>
                                                                <i class='fa fa-group'></i>
                                                            </div>
                                                            <div class='value ellipsis-value'>
                                                                <span class='count'><?php echo $cus_count ?></h1>
                                                                <p>Users</p>
                                                            </div>
                                                        </section>
                                                 
                                                  </div>
                            </div>
                        </div>
						   <div class="container">
                            <section id="secLoad" class="panel border-bg tab-radius">
                                <h2 class="center-heading mar-top-60 h1-Postfont">Recent <span class="color_orange">Load/Freight Bookings</span></h2>
                                <header class="tab_board_header GridHeading-font btn-font">
                                    <ul class="nav">
                                        <li>
                                            <a class="pull-left">Recently Posted Loads</a>
                                           
                                        </li>
                                    </ul>
                                </header>
                                <div id="upLoadBoard">
	
                       <div class="table-responsive table-default  border-radius-0">
                   <table class="table table-hover table-default  tbl-border-colapse" cellspacing="0" rules="all" border="1">
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
<td><?php echo $row['driver_contact'];?></td>
<td><?php echo $row['cus_contact'];?></td>
<td class="col-red"><?php echo $row['status'];?></td>


  </tr>
<?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                                 
                                </div>
				               
</div>
                            </section>
						
						<div class="container">
 <section id="secTruck" class="panel border-bg tab-radius">
                                <h2 class="center-heading mar-top-60 h1-Postfont">List Of 
								<span class="color_orange">  Available Trucks</span></h2>
                              
                                                       <div class="table-responsive table-default border-radius-0">
                                    <table class="table table-hover table-default tbl-border-colapse" cellspacing="0" rules="all" border="1">
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
						
						
                        <div id="TsDetail" class="property gray-bg mar-top-5">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-7">
                                        <h1 class="mar-top-0">Welcome to <span class="color_blue">MNS</span><span class="color_orange">Transpoter</span></h1>
                                        <p>
                                            <a href="index.html" title="India's freight and truck matching portal. Book truck load online.">MNS</a> is a leading portal for the transport industry. Connecting transporters, truck drivers, customers and other related entities. Simplicity, speed and
efficiency drive your business and this is our focus as well. We allow the users to share the information for expansion of services to the customers by providing
 better rates and vehicles. Our service is aimed for the brokers / transporters / logistics heads / delivery heads to make the use of this  technology.
 This service will make the movement of the vehicle and material more efficient. We will provide information to registered users about the availability of the load and
vehicles in the city.
                                        </p>
                                     
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
                     
							</div>
							
                           
    <script type="text/javascript" src='js/Custom/empoyee-menu.min.js'></script>
	
	<?php 

include 'footer.php'; 


 ?>
	
</body>
</html>
