<?php 
include 'session.php';
?><!DOCTYPE html>
<html lang="en">
<?php $con=mysqli_connect('localhost','root','','online_store');
$select_invoice = "SELECT * FROM `order` order BY order_id DESC LIMIT 1";
	$run_invoice =  mysqli_query($con,$select_invoice);
	$row_invoice = mysqli_fetch_array($run_invoice);
	$old=$row_invoice['invoice_nb'];
			$new= $old+1;
			$d = date('d');
			$m = date('m');
			$y = date('y');
        ?>
<head>
  <title>Pakeeza Admin</title>  
  
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">     <!-- Begin Page Content -->
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
<!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>
  <!-- Page level plugins -->
  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>
  <!-- Page level custom scripts -->
  <script src="js/demo/datatables-demo.js"></script>
   <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <!-- Page level plugins -->
  <script src="vendor/chart.js/Chart.min.js"></script>
  <!-- Page level custom scripts -->
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>
</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Pakeeza</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="index.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">
 <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
          <i class="fas fa-tv"></i>
          <span>Point Of Sale</span>
        </a>
        <div id="collapse1" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
         
            <a class="collapse-item" href="pos1.php" >POS1</a>
            <a class="collapse-item" href="pos2.php" >POS2</a>
          </div>
        </div>
      </li>
	  <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsereport" aria-expanded="true" aria-controls="collapsereport">
<i	class="fa fa-reorder"></i>
          <span>Report</span>
        </a>
        <div id="collapsereport" class="collapse" aria-labelledby="headingreport" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
          
            <a class="collapse-item" href="profit_day.php" >Per Day</a>
            <a class="collapse-item" href="profit_monthly.php" >Per Month</a>
            <a class="collapse-item" href="profit_between.php" >Between</a>
          </div>
        </div>
		</li>
	  <li class="nav-item ">
        <a class="nav-link" href="adminorderview.php">
          <i class="fab fa-first-order-alt"></i>
          <span>Order</span></a>
      </li>
	  <div class="sidebar-heading">
        Added Interface
      </div>
<li class="nav-item ">
        <a class="nav-link" href="add_expense.php">
          <i class="fas fa-file-export"></i>
          <span>Add Expense</span></a>
   
      
      </li>
      <!-- Heading -->
      
<li class="nav-item ">
        <a class="nav-link" href="view_category.php">
         <i class="	fas fa-clone"></i>
          <span>Catehory</span></a>
      </li>
      <!-- Nav Item - Pages Collapse Menu -->
       <li class="nav-item ">
        <a class="nav-link" href="view_type.php">
  <i class="material-icons">merge_type</i>
          <span>Type</span></a>
      </li>
	   <li class="nav-item ">
        <a class="nav-link" href="view_product.php">
          <i class="fab fa-product-hunt"></i>
          <span>Product</span></a>
      </li>
	  <li class="nav-item ">
        <a class="nav-link" href="view_customer.php">
          <i class="fas fa-user-friends"></i>
          <span>Customer</span></a>
      </li>

      
	  

	  


      <hr class="sidebar-divider d-none d-md-block">


    </ul>
	