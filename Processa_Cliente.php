<?php

include_once("conexao.php");

$nome_cliente = $_POST['nome_cliente'];
$email_cliente = $_POST['email_cliente'];
$telefone_cliente = $_POST['telefone_cliente'];

$sql= "insert into Clientes (nome,email,telefone) values ('$nome_cliente','$email_cliente','$telefone_cliente')";
$salvar=mysqli_query($conexao,$sql);

$linhas = mysqli_affected_rows($conexao);  

mysqli_close($conexao);

?>

<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Cadastro de Clientes</title>
		<link rel="stylesheet" href="_css/estilo.css">
	</head>
	<body>
		<div class="container">
			<nav>
				
				<ul class="menu">
					<a href="index.php"><li>Pagina Inicial</li></a>
					<a href="Pedidos.php"><li>Pedidos</li></a>
					<a href="Cad_Produto.php"><li>Cadastro de Produtos</li></a>
					<a href="Cad_Cliente.php"><li>Cadastro de Clientes</li></a>	
					<a href="Consulta_Cliente.php"><li>Consulta de Clientes</li></a>
					<a href="Consulta_Pedido.php"><li>Consulta de Pedidos</li></a>
					<a href="Consulta_Produto.php"><li>Consulta de Produtos</li></a>
				</ul>
			</nav>
			<section>
				<h1>Corfirmação de Cadastro de Cliente</h1>
				<hr><br><br>
				
				<?php
				if($linhas==1){
					print "Cadastro efetuado com sucesso!";
				}else{
					print "Erro no cadastro, e-mail ja existente";
				}
				?>
				
			</section>
	</body>
</html>