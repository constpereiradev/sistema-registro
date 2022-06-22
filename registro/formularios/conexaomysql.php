<?php

//conexao com o banco de dados

$dbHost = "Localhost";
$dbUsername = "root";
$dbPassword = "1234";
$dbName = "sistemaregistro";

$conexao = new mysqli ($dbHost, $dbUsername, $dbPassword, $dbName);


//teste de conexao:

/*if (isset($conexao)){
    echo ("Conexão com o banco de dados realizada com sucesso.");
} else {
    echo ("Não foi possível realizar a conexão");
}*/

?>