<?php

include_once("conexao.php");

$id_cliente = $_POST['ID_Cliente'];
$id_produto = $_POST['ID_Produto'];

$sql= "insert into pedidos (id_cliente,id_produto) values ('$id_cliente','$id_produto')";
$salvar=mysqli_query($conexao,$sql);

$linhas = mysqli_affected_rows($conexao);  

mysqli_close($conexao);

?>

<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Registro de Pedidos</title>
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
				<h1>Corfirmação de Cadastro de Pedidos</h1>
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