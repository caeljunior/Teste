<?php

if(isset($_POST['usuario']) && isset($_POST['senha'])) {
    include "conexao.php";

    session_start();

    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    $sql = "Select * from login where login = '$usuario' and senha = MD5('$senha')";

    $resultado = mysqli_query($conexao, $sql);
    //var_dump($resultado);
    $contaRegistros = mysqli_num_rows($resultado);

    if ($contaRegistros > 0) {
        while ($dados = mysqli_fetch_assoc($resultado)) {
            $_SESSION['idlogin'] = $dados['idlogin'];
            $_SESSION['login'] = $dados['login'];
            $_SESSION['senha'] = $dados['senha'];
        }
        header ("location: ../telas/index.php");
    } else {
        header ("location: ../index.php");
    }
}

?>