<?php 
    require_once "config/config.php";
    if (isset($_SESSION['user'])) {
        echo "Hello World <a href=\"auth/logout.php\">Logout</a>";
    }else{
    	echo "<script>window.location='".base_url('auth/login.php')."';</script>";
    }
 ?>