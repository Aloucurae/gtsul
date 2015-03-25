<?php
$host           = "mysql.hostinger.com.br"; // Local do Servidor | Normalmente é usado localhost.
$user           = "u730090421_ponto"; //Nome de usuário do Sql
$password       = "aloucurae33"; //Senha do servidor
$database       = "u730090421_ponto"; // Base de dados


$conexao = mysqli_connect($host,$user,$password,$database) or die("Error " . mysqli_error($link));
?>