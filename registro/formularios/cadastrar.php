<?php


//inicia a conexao com o bd
include_once('conexaomysql.php');


//atribui os inputs as variaveis
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];


//envia os inputs para o banco de dados

$result = mysqli_query ($conexao, "INSERT INTO usuarios (nome, email, senha) 
VALUES ('$nome', '$email', '$senha')");

header ('Location: login.php');

?>