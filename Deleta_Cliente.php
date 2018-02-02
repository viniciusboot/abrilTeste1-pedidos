<?php

include_once("conexao.php");



$IDtoDEL = $_POST['IDtoDEL'];

print $IDtoDEL;

$sql= "delete from Clientes where ID_Cliente=$IDtoDEL";
$deletar=mysqli_query($conexao,$sql);

mysqli_close($conexao);

?>

<!DOCTYPE html>
<html lang="pt-br">

	<head>
		<meta charset="utf-8">
		<title>Consulta de Clientes</title>
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
				<h1>Consulta de Clientes</h1>
				<hr><br>

				<form method="post" action="Consulta_Cliente.php">
					
					Cliente excluído!<br>
					<input type="submit" value="Retornar" class="btn">
					
					<br><br>

			</section>
	</body>
</html>