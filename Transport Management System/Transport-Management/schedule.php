<?php
    session_start();
?>


<!DOCTYPE html>   
<html lang="en">   
<head>   
<meta charset="utf-8">   
<title>Welcome to Transportation Management</title>   
<meta name="description" content="Bootstrap.">  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
     <script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
    <link rel="stylesheet" type="text/css" href="./slick/slick.css">
    <link rel="stylesheet" type="text/css" href="./slick/slick-theme.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="animate.css">
    <link rel="stylesheet" href="style.css">


<style>
    
.parallax {
    /* The image used */
    background-image: url("bus-people-public-transportation-34171.jpg");
    height: 100%;

    /* Set a specific height */
    min-height: 700px; 

    /* Create the parallax scrolling effect */
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    
    }
    
.parallax1 {
    /* The image used */
    background-image: url("pexels-photo-280310 .jpeg");
    height: 100%;

    /* Set a specific height */
    min-height: 600px; 

    /* Create the parallax scrolling effect */
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    
    } 
    
    .navbar-fixed-top.scrolled {
       background-color: ghostwhite;
      transition: background-color 200ms linear;
    }
    @import url(https://fonts.googleapis.com/css?family=Open+Sans:400,500,300,700);

* {
  font-family: Open Sans;
}

section {
  width: 100%;
  display: inline-block;
  background: #333;
  height: 50vh;
  text-align: center;
  font-size: 22px;
  font-weight: 700;
  text-decoration: underline;
}

.footer-distributed{
	background: #666;
	box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.12);
	box-sizing: border-box;
	width: 100%;
	text-align: left;
	font: bold 16px sans-serif;
	padding: 55px 50px;
}

.footer-distributed .footer-left,
.footer-distributed .footer-center,
.footer-distributed .footer-right{
	display: inline-block;
	vertical-align: top;
}

/* Footer left */

.footer-distributed .footer-left{
	width: 40%;
}

/* The company logo */

.footer-distributed h3{
	color:  #ffffff;
	font: normal 36px 'Open Sans', cursive;
	margin: 0;
}

.footer-distributed h3 span{
	color:  lightseagreen;
}

/* Footer links */

.footer-distributed .footer-links{
	color:  #ffffff;
	margin: 20px 0 12px;
	padding: 0;
}

.footer-distributed .footer-links a{
	display:inline-block;
	line-height: 1.8;
  font-weight:400;
	text-decoration: none;
	color:  inherit;
}

.footer-distributed .footer-company-name{
	color:  #222;
	font-size: 14px;
	font-weight: normal;
	margin: 0;
}

/* Footer Center */

.footer-distributed .footer-center{
	width: 35%;
}

.footer-distributed .footer-center i{
	background-color:  #33383b;
	color: #ffffff;
	font-size: 25px;
	width: 38px;
	height: 38px;
	border-radius: 50%;
	text-align: center;
	line-height: 42px;
	margin: 10px 15px;
	vertical-align: middle;
}

.footer-distributed .footer-center i.fa-envelope{
	font-size: 17px;
	line-height: 38px;
}

.footer-distributed .footer-center p{
	display: inline-block;
	color: #ffffff;
  font-weight:400;
	vertical-align: middle;
	margin:0;
}

.footer-distributed .footer-center p span{
	display:block;
	font-weight: normal;
	font-size:14px;
	line-height:2;
}

.footer-distributed .footer-center p a{
	color:  lightseagreen;
	text-decoration: none;;
}

.footer-distributed .footer-links a:before {
  content: "|";
  font-weight:300;
  font-size: 20px;
  left: 0;
  color: #fff;
  display: inline-block;
  padding-right: 5px;
}

.footer-distributed .footer-links .link-1:before {
  content: none;
}

/* Footer Right */

.footer-distributed .footer-right{
	width: 20%;
}

.footer-distributed .footer-company-about{
	line-height: 20px;
	color:  #92999f;
	font-size: 13px;
	font-weight: normal;
	margin: 0;
}

.footer-distributed .footer-company-about span{
	display: block;
	color:  #ffffff;
	font-size: 14px;
	font-weight: bold;
	margin-bottom: 20px;
}

.footer-distributed .footer-icons{
	margin-top: 25px;
}

.footer-distributed .footer-icons a{
	display: inline-block;
	width: 35px;
	height: 35px;
	cursor: pointer;
	background-color:  #33383b;
	border-radius: 2px;

	font-size: 20px;
	color: #ffffff;
	text-align: center;
	line-height: 35px;

	margin-right: 3px;
	margin-bottom: 5px;
}

/* If you don't want the footer to be responsive, remove these media queries */

@media (max-width: 880px) {

	.footer-distributed{
		font: bold 14px sans-serif;
	}

	.footer-distributed .footer-left,
	.footer-distributed .footer-center,
	.footer-distributed .footer-right{
		display: block;
		width: 100%;
		margin-bottom: 40px;
		text-align: center;
	}

	.footer-distributed .footer-center i{
		margin-left: 0;
	}

}
h1{
  
}


</style>
</head>


<body style="margin:80px auto">
<?php include 'navbar.php';?>  
<div class="container foo">
<div class="row header" style="text-align:center">
<h3>Schedule</h3>
</div>



<table id="myTable" class="table table-bordered table-striped table-hover table-condensed" >  


<thead>  
          <tr>  
            <th>NO</th>  
            <th>ROUTE</th>  
            <th>FIRST-SHIFT</th>  
            <th>SECOND-SHIFT</th>  
            <th>THIRD-SHIFT</th>  
          </tr>  
        </thead>  
       <tbody>  
          <tr>  
            <td>01</td>  
            <td>Rajkot-Vadodara</td>  
            <td>3-45</td>  
            <td>4-45</td>  
            <td>6-15</td>  
          </tr> 
          <tr>  
            <td>02</td>  
            <td>Rajkot-Mumbai</td>  
            <td>4-00</td>  
            <td>5-00</td>  
            <td>6-30</td>  
          </tr> 
          <tr>  
            <td>03</td>  
            <td>Surat-Delhi</td>  
            <td>4-15</td>  
            <td>5-15</td>  
            <td>6-45</td>  
          </tr> 
          <tr>  
            <td>04</td>  
            <td>Delhi-Mumbai</td>  
            <td>4-30</td>  
            <td>5-30</td>  
            <td>7-00</td>  
          </tr> 
          <tr>  
            <td>05</td>  
            <td>Banglore-Chhenai</td>  
            <td>4-45</td>  
            <td>5-45</td>  
            <td>7-15</td>  
          </tr> 
          <tr>  
            <td>06</td>  
            <td>Chhenai-Delhi</td>  
            <td>5-00</td>  
            <td>6-00</td>  
            <td>7-30</td>  
          </tr> 
          <tr>  
            <td>07</td>  
            <td>Surat-Goa</td>  
            <td>5-00</td>  
            <td>6-00</td>  
            <td>7-15</td>   
          </tr> 
          <tr>  
            <td>08</td>  
            <td>Delhi-Assam</td>  
            <td>4-45</td>  
            <td>5-45</td>  
            <td>7-00</td>  
          </tr> 
          <tr>  
            <td>09</td>  
            <td>Hydrabad-Delhi</td>  
            <td>4-30</td>  
            <td>5-30</td>  
            <td>6-45</td>  
          </tr> 
          <tr>  
            <td>10</td>  
            <td>Rajkot-Banglore</td>  
            <td>4-15</td>  
            <td>5-15</td>  
            <td>6-35</td>  
          </tr> 
        </tbody>  

</table>
	  </div>
	  
<script>
        window.sr = ScrollReveal();
        sr.reveal('.foo', { duration: 800 });
        
</script>
    
</body>  

</html>