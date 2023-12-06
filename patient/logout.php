<?php 
session_start();
unset($_SESSION['username']);
setcookie('user','',time() - 3600,'/');
session_destroy();
header('Location:../index.php');
?>