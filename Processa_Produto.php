<?php

include_once("conexao.php");

$nome_produto = $_POST['nome_produto'];
$descricao_produto = $_POST['descricao_produto'];
$valor_produto = $_POST['valor_produto'];

$sql= "insert into produtos (nome,descricao,valor) values ('$nome_produto','$descricao_produto','$valor_produto')";
$salvar=mysqli_query($conexao,$sql);

$linhas = mysqli_affected_rows($conexao);  

mysqli_close($conexao);

?>

<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Cadastro de Produtos</title>
		<link rel="stylesheet" href="_css/estilo.css">
	</head>
	<body>
		<div class="container">
			<nav>
				
				<ul class="menu">
					<a href="index.php"><li>Pagina Inicial</li></a>
					<a href="Reg_Pedidos.php"><li>Pedidos</li></a>
					<a href="Cad_Produto.php"><li>Cadastro de Produtos</li></a>
					<a href="Cad_Cliente.php"><li>Cadastro de Clientes</li></a>	
					<a href="Consulta_Cliente.php"><li>Consulta de Clientes</li></a>
					<a href="Consulta_Pedido.php"><li>Consulta de Pedidos</li></a>
					<a href="Consulta_Produto.php"><li>Consulta de Produtos</li></a>
				</ul>
			</nav>
			<section>
				<h1>Corfirmação de Cadastro de Produtos</h1>
				<hr><br><br>
				
				<?php
				if($linhas==1){
					print "Cadastro efetuado com sucesso!";
				}else{
					print "Erro no cadastro";
				}
				?>
				
			</section>
	</body>
</html>