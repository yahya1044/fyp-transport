
<?php
session_start();
if(!isset($_SESSION['admin_name']){
		echo "<script>window.open('../login.php','_self');</script>";
}
?>
    

