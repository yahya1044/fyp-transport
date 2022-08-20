
<?php
session_start();
if(!isset($_SESSION['TO_contact']){
		echo "<script>window.open('login.php','_self');</script>";
}
?>
    

