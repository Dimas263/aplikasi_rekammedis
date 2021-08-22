<?php 
require_once "_config/config.php";
if(isset($_SESSION['user'])){
    echo "<script>window.location='".base_url('dashboard/index.html')."';</script>";
} else {

}
?>

<script>window.location='auth/login.php';</script>


