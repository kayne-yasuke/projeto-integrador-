<?php 
define("Host","127.0.0.1:3308");
define("user","root");
define("password","");
define("db","frequencia");
$conn = mysqli_connect(Host,user,password,db) or die( 'Não conectado!')


?>