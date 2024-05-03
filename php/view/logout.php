
<?php

// echo "Logging out. Please Wait";

// header("location:register")

session_start();
session_unset();
session_destroy();
ob_start();
header("location:login.php");
ob_end_flush(); 
// include 'register';
//include 'home.php';
exit();

?>