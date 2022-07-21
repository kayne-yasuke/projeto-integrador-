<?php
session_start();
if(!isset($_SESSION['login'])){
    session_destroy() ;
}
?>

<h1><?php echo " Bem vindo ao Sistem (a) ". $_SESSION['login']; ?></h1>


