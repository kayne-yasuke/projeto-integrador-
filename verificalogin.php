<?php
    session_start();
    include("frequencia.php");

    if(!$_SESSION['login'])
    {
        header("location:index.php");
        exit();
    }


?>