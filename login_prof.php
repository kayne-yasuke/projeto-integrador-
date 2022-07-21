<?php
session_start();
include ('conexao.php');

if(empty($_POST['login']) || empty($_POST['senha'])){

    header('location:index.php');
    exit();
}
$login = mysqli_real_escape_string($conn,$_POST['login']);
$senha = mysqli_real_escape_string($conn,$_POST['senha']);
$query = "select id_professor,nome_professor from  professor where nome_professor='{$login}' and senha_professor = md5('{$senha}')";
$result= mysqli_query($conn,$query);
$row = mysqli_num_rows($result);
//echo $row; -- Retorno da variavel é == 1 se for 0 não retorna
if($row==1){
    $_SESSION['login']=$login;
    header('location:frequencia.php');
    exit();
}
else{
    header('location:index.php');
   
}



?>