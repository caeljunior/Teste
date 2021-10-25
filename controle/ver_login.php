<?php

session_start();
//echo $_SESSION['login'];
//echo $_SESSIONT['senha'];
if(isset($_SESSION['login']) && isset($_SESSION['senha'])) {
    include "conexao.php";

    $usuario = $_SESSION['login'];
    $senha = $_SESSION['senha'];

    $sql = "Select * from login where login = '$usuario' and senha = '$senha'";

    $resultado = mysqli_query($conexao, $sql);
    $contaRegistros = mysqli_num_rows($resultado);
    
    if ($contaRegistros <= 0) {
        header ("location: ../telas/index.php");
    } 
} else {
    header ("location: ../index.php");
}

?>