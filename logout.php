<?php 
session_start();
if(isset($_SESSION['email'])){
session_destroy();
}
$ref= @$_GET['q']; //reference dari get
header("location:$ref");
?>