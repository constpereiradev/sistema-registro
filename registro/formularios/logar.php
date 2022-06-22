<?php

session_start();


if (!empty($_POST['email']) && !(empty($_POST['senha']))){


    //se os inputs nao estiverem vazios, inicia-se a conexao com o bd
    include_once ('conexaomysql.php');


    //as variaveis recebem os inputs
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    //query do mysql

    $sql = "SELECT * FROM usuarios WHERE email = '$email' and senha = '$senha'";
    $result = $conexao->query($sql);


    //quando há um dado, a row = 1

    if (mysqli_num_rows($result) != 0){
        $_SESSION['email'] = $email;
        $_SESSION['senha'] = $senha;

        header('Location: cliente.php');
    }else {
    
    //se nao existir o dado

    header("Location: login-err.html");
    
    //destroi as sessions
    unset($_SESSION['email']);
    unset ($_SESSION['senha']);
    }



    
    //se os inputs estiverem vazios:
}else {
    header("Location: login.php");
}



?>