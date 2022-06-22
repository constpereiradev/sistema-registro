<?php

//verificacao da area de cliente

session_start();

//se nao existir o login, a session é quebrada

if (!(isset($_SESSION['email'])) and !(isset($_SESSION['senha']))  ){

    unset ($_SESSION['email']);
    unset ($_SESSION['senha']);

    header ('Location: login.php');
}

    //se existir: 
    
    $usuarioEmail = $_SESSION['email'];
    $usuarioSenha = $_SESSION['senha'];

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cliente.css">
    <title>Área do cliente</title>
</head>
<body><br>
    <h1>Área do cliente</h1><br>

    <?php
        echo ("Olá, ". $usuarioEmail. "<br><br>");
    
    ?>

    <a href="sair.php"><button class="botao">sair</button></a>
</body>
</html>