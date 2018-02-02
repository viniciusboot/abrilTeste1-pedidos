<?php

$hostname="localhost";
$user="root";
$password="";
$database="ex1_produtos";
$conexao=mysqli_connect($hostname,$user,$password,$database);

if(!$conexao){
	print "Falha na Conexao com o banco de dados";
} else {
	print "Conexão ao Banco de Dados concluída com Sucesso!";
}


?>