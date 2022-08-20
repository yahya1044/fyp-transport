<?php 
	session_start();
	
?>
<?php include '../database/db.php'; ?>  
<?php
if (isset($_POST['submit'])){
	$TO_contact=$_POST['number'];
	 $password=$_POST['password'];
						$select = "SELECT * FROM truckoperator WHERE TO_contact='$TO_contact'";
			$run =  mysqli_query($conn,$select);
			$row = mysqli_fetch_array($run);
			
			    
			
			
			if($TO_contact ==  $row['TO_contact'] && $password == $row['TO_password']){
				echo "<script>
				alert('Log in Successfully');


window.location.href='packages.php'
</script>";
			   $_SESSION['TO_contact']=$TO_contact;

			}else{
				
				echo "Number or Password is Wrong";
			}
			
}	?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" itemscope itemtype="http://schema.org/Organization">

<!-- Mirrored from trucksuvidha.com/Registration/TruckOperatorRegistration.aspx by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 16 May 2022 18:14:19 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head id="Head1"><meta charset="utf-8" /><meta name="keywords" content="Transport Booking, Transport websites in india,  Truck Board, Load Board, Packers and Movers, Full Load, Parcel Booking, Transport Directory, Truck Load, Truck Freight, Truck Exchange, Trucks, Loads, Logistics, Find Truck Load Online, Find Trucks, Transporters, Freight Online, online truck, trucking companies in india, book a truck online" /><meta property="og:image" content="Images/TruckSuvidha-Fb-og.png" /><meta name="author" content="Sarvodaya Infotech Pvt. Ltd." /><meta name="revisit_after" content="7days" /><meta name="viewport" content="width=device-width, initial-scale=1" /><meta itemprop="name" content="TruckSuvidha" /><meta itemprop="description" content="India&#39;s freight and truck matching portal. Find trucks matching your load requirements. Find freight / Transporters all over India! Register for FREE" /><meta itemprop="image" content="Images/TruckSuvidha-Fb-og.png" /><link rel="icon" href="../Images/favicon.ico" type="image/x-icon" /><link href="../css/bootstrap.min.min.css" rel="stylesheet" /><link href="../css/bootstrap-reset.min.css" rel="stylesheet" /><link href="../assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" /><link href="../css/style.min.css" rel="stylesheet" /><link href="../css/style-responsive.min.css" rel="stylesheet" /><link href="../css/custom.min.css" rel="stylesheet" />
    <script type="text/javascript" src='../js/jquery.min.js'></script>
    <script type="text/javascript" src='../jquery-ui-1.11.1/jquery-ui.min.js'></script>
   <link href="../css/bootstrap-tour.min.css" rel="stylesheet" />
      
     <script type="text/javascript" src='../js/Custom/bootstrap-tour.min.js'></script>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
    
    <title>TruckOperator Registration | TruckSuvidha</title>
    <meta property="og:image" content="http://trucksuvidha.com/Images/Transport-reg.png" />
    <meta itemprop="image" content="http://trucksuvidha.com/Images/Transport-reg.png">
    <meta name="description" content="Get free registration. Search Customers online. Find load online. Connect with customers. " />
    <link href="TagsInput/bootstrap-tagsinput.min.css" rel="stylesheet" />
<title>
	TruckOperator Registration | TruckSuvidha
</title></head>
<body>
   

        <div id="divMainContainer">
            <div id="loader" style="display: none"></div>
            
<div id="header-content">
    <div class='container'>
        <header>
            
            <div class="row">
                <div class="col-lg-2 col-md-3 col-sm-12 col-xs-3">
                    <a href='index.html'>
                        <img id="imgTruckSuvidhaLogo" class="custom_logo" src='Images/logo_trucksuvidha.png' alt="TruckSuvidha" title="Back to TruckSuvidha Home" /></a>
                    <a href='index.html'>
                        <img id="imgTruckSuvidhaMobileViewLogo" class="custom_logo" src='Images/LogoSquare.png' alt="TruckSuvidha" title="Back to TruckSuvidha Home" /></a>
                </div>
                <div class="col-lg-10 col-md-9 col-sm-12 col-xs-9">
                    <div id="top-menu" class="nav">
                        <ul id="Margin-Top" class="top-breadcrumb topHeader-menu header-link">
                            <li id="ucHeader_lnkRequestCallBack">
                                <a title="Call Back Request" href="javascript:__doPostBack(&#39;ctl00$ucHeader$ctl00&#39;,&#39;&#39;)"><i class="fa fa-phone"></i>Request Call Back (9am-6pm IST)</a>
                            </li>
                            
                            
                            <li id="TsPhoneNo"><span class="customerCare-No" title="TruckSuvidha Customer Care Number"><i class="fa fa-phone-square"></i>+91-8882-08-08-08</span>
                                <a href="http://api.whatsapp.com/send?phone=918570800911&amp;text=Hi" target="_blank"><span class="whatsapp-No" title="I am looking to know more about TruckSuvidha"><i class="fa fa-whatsapp tab-margin whatsapp-color"></i>+91-8570-80-09-11</span></a></li>
                            <li id="TsMailId"><a href="mailto:info@trucksuvidha.com" title="TruckSuvidha Email-id"><i class="fa fa-envelope-o"></i>info@trucksuvidha.com</a></li>
                            <li id="TsBlogId"><a href="http://blog.trucksuvidha.com/" target="_blank" title="TruckSuvidha Blog"><i class="fa fa-rss"></i>News/Blog</a></li>
                            <li id="ucHeader_liLogin" class="disable-hover">
                                <i id="fa-login" class="fa fa-sign-in"></i>
                                <a href="Login.html" id="ucHeader_lnkLogin" class="btn-login btn-danger-login btn-sm-home" title="Login on TruckSuvidha"><i id="fa-login-mobile" class="fa fa-sign-in"></i>Login</a>
                            </li>
                            <li id="ucHeader_liRegister" class="disable-hover">
                                <i id="fa-Reg" class="fa fa-user"></i>
                                <a href="Register.html" id="ucHeader_lnkRegister" class="btn-danger-login btn-sm-home logo-responsive" title="Register on TruckSuvidha"><i id="fa-Reg-mobile" class="fa fa-user"></i>Free Register</a>
                            </li>
                            
                            
                            
                        </ul>
                    </div>
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
                            <a href='index.html'>
                                <img id="imgTruckSuvidhaLogoScroll" class="" src='Images/Scroll-logo.png' alt="TruckSuvidha Scroll Logo" title="Back to TruckSuvidha Home" /></a>
                        </div>
                        
                        <div id="dashboarMenu">
                            
                        </div>

                        
                        

                        
                        <ul class="nav navbar-nav text-right pull-right" style="margin-right: 20px">
                            <li>
                                
                            </li>
                        </ul>

                        
                        <ul id="ucHeader_ulWebsiteMenu" class="nav navbar-nav scroll-mar-top">
                            
                            <li class="dropdown">
                                <a id="post" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown" title="Post your trucks & freight on TruckSuvidha">Post <b class="caret"></b></a>
                                <ul class="dropdown-menu multi-level">
                                    
                                    <li class="dropdown-submenu"><a id="loadPost" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown" title="Post your Load on TruckSuvidha">Post a Load </a>
                                        <ul class="dropdown-menu">
                                            <li><a id="FullLoad" href='LoadPosting.html' title="Post Your Full Load on Trucksuvidha">Full Load (Above 3MT)</a></li>
                                            <li><a id="PartLoad" href='PartLoadPosting.html' title="Post Your Part Load on Trucksuvidha">Part Load (Below 3MT)</a></li>

                                        </ul>
                                    </li>
                                    <li><a href="TruckPosting.html" id="ucHeader_truckPost" title="Post your Truck on TruckSuvidha">Post a Truck</a></li>
                                </ul>
                            </li>

                            <li class="dropdown"><a id="board" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown" title="Look your trucks & freight details on TruckSuvidha">Board <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="LoadBoard.html" id="ucHeader_loadboard" title="Search  Load of your truck">Load Board</a></li>
                                    <li><a id="truckboard" href='TruckBoard.html' title="Search truck of your load">Truck Board</a></li>
                                    <li><a href="KisanRathLoadPost.html" id="ucHeader_kisanrathloads" title="Search  Load of your truck">KisanRath Load Board</a></li>
                                </ul>
                            </li>
                            <li><a id="directory" href='Directory.html' title="View the details of transporters & Packers and Movers">Directory</a></li>
                            
                            <li class="dropdown"><a id="packages" href='Packages.html' class="dropdown-toggle" data-hover="dropdown" title="Get the benefit of TruckSuvidha through Packages">Packages <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a id="SubscriptionPackages" href='SubscriptionPackages.html' title="Get the benefit of TruckSuvidha through Packages">Subscription Packages</a></li>
                                    <li><a id="WebprofilePackages" href='WebProfilePackages.html' title="Get the benefit of TruckSuvidha through Packages">Membership Packages</a></li>
                                </ul>
                            </li>



                            <li class="dropdown"><a id="Calculator" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown" title="Get the Distance and Freight of Source to Destination in few second">Calculator <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a id="distanceCalculator" href='DistanceCalculator.html' title="Get the Distance of Source to Destination in few second">Distance Calculator</a></li>
                                    <li class="hide"><a id="FreightCalculator" href='FreightCalculator.html' title="Get the Freight of Source to Destination in few second">Freight Calculator</a></li>
                                </ul>
                            </li>




                            <li class="dropdown"><a id="helpCenter" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown" title="To know more about TruckSuvidha">Help Center <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a id="faq" href='FAQ.html' title="Frequently asked the question about TruckSuvidha">FAQ</a></li>
                                    
                                    <li><a id="ournetworks" href='OurNetworks.html' title="No of Users Connected with TruckSuvidha">Our Network</a></li>
                                    <li><a id="PincodeSearch" href='SearchArea.html' title="Find the Pincode of the Area through TruckSuvidha">Pincode Search</a></li>
                                    <li><a id="Ts-video" href='Ts-Video.html' title="TruckSuvidha Videos">TruckSuvidha Videos</a></li>
                                    
                                    <li class="dropdown-submenu"><a id="permitUser" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown" title="To know more about Permit & RTO related information from TruckSuvidha">Permit & RTO </a>
                                        <ul class="dropdown-menu">
                                            <li><a id="nationalPermits" href='CMS/Permit/NationalPermits.html' title="Get the details of permit granted by a competent authority to a goods carriage to operate through-out India through TruckSuvidha">National Permits</a></li>
                                            
                                            
                                            
                                            <li><a id="rtoForms" href='CMS/RTO/RtoForms.html' title="Get the detail of RTO forms through TruckSuvidha">RTO Forms</a></li>
                                            <li><a id="nationalHighway" href='CMS/RTO/NationalHighways.html' title="National Highways Information">National Highways</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown-submenu"><a id="e-way" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown" title="To know more about E-way Bills">E-Way Bill</a>
                                        <ul class="dropdown-menu">
                                            <li><a id="aboute-way" href='About-e-Way-Bills.html' title="Get the details of E-Way Bill ">About E-Way Bill</a></li>
                                            <li><a id="generate-way" href='Generate-e-Way-Bills.html' title="Procedure to generate E-Way Bill">Generate E-Way Bill</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown"><a id="Services" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown" title="Get the services of TruckSuvidha">Services <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a id="GpsTrackingInquiry" href='GpsTrackingInquiry.html' title="Track your vehicle through GPS">GPS Inquiry</a></li>
                                    <li><a id="WarehouseInquiry" href='WarehouseInquiry.html' title="You can find the Warehouse inquiry through TruckSuvidha">Warehouse Inquiry</a></li>
                                    <li><a id="FranchiseInquiry" href='FranchiseInquiry.html' title="Send inquiry to become Franchise partner of Trucksuvidha">Franchise Inquiry</a></li>
                                    <li><a id="VehicleLoanInquiry" href='VehicleLoanInquiry.html' title="Start your new transportation business with best vehicle loan deals on TruckSuvidha">Vehicle Loan Inquiry</a></li>
                                    <li><a id="FleetManagementInquiry" href='Fleet-Management.html' title="Get best and easy-to-use Fleet management software on TruckSuvidha.">Fleet management Inquiry</a></li>
                                    <li><a id="AgriLogistics" href='AgriLogistics.html' title="Agri Logistics. | Farmers | Fleet owner | Transporter | TruckSuvidha">Agri Logistics</a></li>
                                    
                                     <li class="dropdown-submenu"><a id="fastagInformation" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown" title="Reduce your toll expenses with Electronic Toll collection/ Fastag service get from TruckSuvidha">About Fastag </a>
                                        <ul class="dropdown-menu">
                                            <li><a id="ElectronicTollCollectionInquiry" href='Electronic-Toll-Collection-Inquiry.html' title="Get the detail of RTO forms through TruckSuvidha">Fastag Inquiry</a></li>
                                            <li><a id="" href='fastagFAQ.html' title="National Highways Information">Fastag FAQ</a></li>
                                        </ul>
                                    </li>
                                    <li><a id="liTrucksOnTrain" href='TrucksOnTrain.html' title="Trucks On Train | TruckSuvidha">Trucks On Train</a></li>
                                 </ul>
                            </li>

                            
                            
                            
                            
                            
                            
                            

                            <li class="dropdown"><a id="MenuMore" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown">More <b class="caret"></b></a>
                                <ul class="dropdown-menu multi-level">

                                    <li class="dropdown-submenu open"><a id="helpCenterScroll" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown">Help Center</a>
                                        <ul class="dropdown-menu">
                                            <li><a id="faqScroll" href='FAQ.html' title="Frequently asked the question about TruckSuvidha">FAQ</a></li>
                                            
                                            <li><a id="ournetworksScroll" href='OurNetworks.html' title="No of Users Connected with TruckSuvidha">Our Network</a></li>
                                            <li><a id="PincodeSearchScroll" href='SearchArea.html' title="Find the Pincode of the Area through TruckSuvidha">Pincode Search</a></li>
                                            <li><a id="Ts-videoscroll" href='Ts-Video.html' title="TruckSuvidha Videos">TruckSuvidha Videos</a></li>
                                            
                                            <li class="dropdown-submenu"><a id="e-way-scroll" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown" title="To know more about E-way Bill">E-Way Bill</a>
                                                <ul class="dropdown-menu">
                                                    <li><a id="about-way-scroll" href='About-e-Way-Bills.html' title="Get the details of E-Way Bill">About E-Way Bill</a></li>
                                                    <li><a id="generate-way-scroll" href='Generate-e-Way-Bills.html' title="Procedure to generate E-Way Bill">Generate E-Way Bill</a></li>
                                                </ul>
                                            </li>


                                        </ul>
                                    </li>

                                    <li class="dropdown-submenu"><a id="ServicesScroll" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown">Services </a>
                                        <ul class="dropdown-menu">
                                            <li><a id="GpsTrackingInquiryScroll" href='GpsTrackingInquiry.html' title="Track your vehicle through GPS">GPS Inquiry</a></li>
                                            <li><a id="WarehouseInquiryScroll" href='WarehouseInquiry.html' title="You can find the Warehouse inquiry through TruckSuvidha">Warehouse Inquiry</a></li>
                                            <li><a id="FranchiseInquiryScroll" href='FranchiseInquiry.html' title="Send inquiry to become Franchise partner of Trucksuvidha">Franchise Inquiry</a></li>
                                            <li><a id="VehicleLoanInquiryScroll" href='VehicleLoanInquiry.html' title="Start your new transportation business with best vehicle loan deals on TruckSuvidha">Vehicle Loan Inquiry</a></li>
                                            <li><a id="FleetManagementInquiryScroll" href='Fleet-Management.html' title="Get best and easy-to-use Fleet management software on TruckSuvidha.">Fleet management Inquiry</a></li>
                                            
                                            <li class="dropdown-submenu"><a id="fastagInformation" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown" title="Reduce your toll expenses with Electronic Toll collection/ Fastag service get from TruckSuvidha">About Fastag </a>
                                                <ul class="dropdown-menu">
                                                    <li><a id="ElectronicTollCollectionInquiry" href='Electronic-Toll-Collection-Inquiry.html' title="Get the detail of RTO forms through TruckSuvidha">Fastag Inquiry</a></li>
                                                    <li><a id="" href='fastagFAQ.html' title="National Highways Information">Fastag FAQ</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>

                                    <li class="dropdown-submenu"><a id="permitUserScroll" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown" title="To know more about RTO, Permit, Highways">Permit & RTO </a>
                                        <ul class="dropdown-menu">
                                            <li><a id="nationalPermitsScroll" href='CMS/Permit/NationalPermits.html' title="Get the details of permit granted by a competent authority to a goods carriage to operate through-out India through TruckSuvidha">National Permits</a></li>
                                            <li><a id="rtoFormsScroll" href='CMS/RTO/RtoForms.html' title="Get the detail of RTO forms through TruckSuvidha">RTO Forms</a></li>
                                            <li><a id="nationalHighwayScroll" href='CMS/RTO/NationalHighways.html' title="To know more about National highways">National Highways</a></li>
                                            
                                            
                                            
                                        </ul>
                                    </li>

                                </ul>
                            </li>

                            <li><a id="contactUs" href='ContactUs.html' title="Get in touch with TruckSuvidha">Contact Us</a></li>
                            
                            <div id="ucHeader_pnlSearch" class="custom_search navbar-form" onkeypress="javascript:return WebForm_FireDefaultButton(event, &#39;ucHeader_imgBtnSearch&#39;)">
	
                                <input id="search" class="search_top_10 form-control searchbox form-control-font" name="search" placeholder="Search" type="text" />
                                <input type="image" name="ctl00$ucHeader$imgBtnSearch" id="ucHeader_imgBtnSearch" class="btn custom_button img-responsive scroll-btn-img mobile-btn-bg" src="images/Search.jpg" alt="Truck Suvidha" onclick="return CustomGoogleSearch();" />
                                <script>
                                    function CustomGoogleSearch() {
                                        var win = window.open('http://www.google.com/cse?cx=000057877623097850561:x42wfxxxusk&q=' + $("#search").val() + '', '_blank');
                                        win.focus();
                                        return false;
                                    }
                                </script>
                            
</div>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <script type="text/javascript" src='js/Custom/empoyee-menu.min.js'></script>

</div>

            <div id="divMainContent">
                <div id="divContentBody" class="pad-top-5">
                    
    <div  class="container" onkeypress="javascript:return WebForm_FireDefaultButton(event, &#39;cphContent_btnCreateAccount&#39;)">
	
        <div class="row">
            <div class="col-md-9 col-sm-8 border-right divMainForm">
                <h1>Driver <span class="color_orange">Login</span></h1>
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

   
	 


</body>

</html>