<?php


// quebrando as sessions e direcionando para a pagina de login

session_start();

unset ($_SESSION['email']);
unset ($_SESSION['senha']);

header ('Location: login.php');


?>