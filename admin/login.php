<?php include '../database/db.php'; ?>  
 
<?php
if (isset($_POST['submit'])){
	 $admin_name=$_POST['name'];
	$admin_password=$_POST['password'];
						
			 $sel = "SELECT * FROM admin ";
			$runn =  mysqli_query($conn,$sel);
			$roww = mysqli_fetch_array($runn); 
	
			if($admin_name ==  $roww['admin_name'] && $admin_password == $roww['admin_password']){
				
				   $_SESSION['admin_name']=$admin_name;
				echo "<script>
				alert('Log in Successfully');


window.location.href='driver_detail.php'
</script>";
			

			}
			
			else{
				
				echo "<script>
				alert('Name or Password is Wrong');



</script>";
						
}}
			?>


<html>
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<style>
body {
  background: #222d32;
  font-family: "Roboto", sans-serif;
}

.login-box {
  margin-top: 75px;
  height: auto;
  background: #1a2226;
  text-align: center;
  box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23);
}

.login-key {
  height: 100px;
  font-size: 80px;
  line-height: 100px;
  background: -webkit-linear-gradient(#27ef9f, #0db8de);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}

.login-title {
  margin-top: 15px;
  text-align: center;
  font-size: 30px;
  letter-spacing: 2px;
  margin-top: 15px;
  font-weight: bold;
  color: #ecf0f5;
}

.login-form {
  margin-top: 25px;
  text-align: left;
}

input[type="text"] {
  background-color: #1a2226;
  border: none;
  border-bottom: 2px solid #0db8de;
  border-top: 0px;
  border-radius: 0px;
  font-weight: bold;
  outline: 0;
  margin-bottom: 20px;
  padding-left: 0px;
  color: #ecf0f5;
}

input[type="password"] {
  background-color: #1a2226;
  border: none;
  border-bottom: 2px solid #0db8de;
  border-top: 0px;
  border-radius: 0px;
  font-weight: bold;
  outline: 0;
  padding-left: 0px;
  margin-bottom: 20px;
  color: #ecf0f5;
}

.form-group {
  margin-bottom: 40px;
  outline: 0px;
}

.form-control:focus {
  border-color: inherit;
  -webkit-box-shadow: none;
  box-shadow: none;
  border-bottom: 2px solid #0db8de;
  outline: 0;
  background-color: #1a2226;
  color: #ecf0f5;
}

input:focus {
  outline: none;
  box-shadow: 0 0 0;
}

label {
  margin-bottom: 0px;
}

.form-control-label {
  font-size: 10px;
  color: #6c6c6c;
  font-weight: bold;
  letter-spacing: 1px;
}

.btn-outline-primary {
  border-color: #0db8de;
  color: #0db8de;
  border-radius: 0px;
  font-weight: bold;
  letter-spacing: 1px;
  box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);
}

.btn-outline-primary:hover {
  background-color: #0db8de;
  right: 0px;
}

.login-btm {
  float: left;
}

.login-button {
  padding-right: 0px;
  text-align: right;
  margin-bottom: 25px;
}

.login-text {
  text-align: left;
  padding-left: 0px;
  color: #a2a4a4;
}

.loginbttm {
  padding: 0px;
}
</style>
</head>
<body>
<div class="container">
  <div class="row">
    <div class="col-lg-3 col-md-2"></div>
    <div class="col-lg-6 col-md-8 login-box">
      <div class="col-lg-12 login-key">
        <i class="fa fa-key" aria-hidden="true"></i>
      </div>
      <div class="col-lg-12 login-title">
        ADMIN PANEL
      </div>

      <div class="col-lg-12 login-form">
        <div class="col-lg-12 login-form">
          <form action="login.php" method="POST">
            <div class="form-group">
              <label class="form-control-label">USERNAME</label>
              <input type="text" name="name"class="form-control">
            </div>
            <div class="form-group">
              <label class="form-control-label">PASSWORD</label>
              <input type="password" name="password" class="form-control" i>
            </div>

            <div class="col-lg-12 loginbttm">
              <div class="col-lg-6 login-btm login-text">
                <!-- Error Message -->
              </div>
              <div class="col-lg-6 login-btm login-button">
                <button type="submit" name="submit" class="btn btn-outline-primary">LOGIN</button>
              </div>
            </div>
          </form>
        </div>
      </div>
      <div class="col-lg-3 col-md-2"></div>
    </div>
  </div>
  

</body></html>
  
  