<?php

include_once("conexao.php");

$sql_consulta="select * from pedidos";
$consulta=mysqli_query($conexao,$sql_consulta);
$registros=mysqli_num_rows($consulta);

?>

<!DOCTYPE html>
<html lang="pt-br">

	<head>
		<meta charset="utf-8">
		<title>Consulta de Pedidos</title>
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
				<h1>Consulta de Pedidoss</h1>
				<hr><br>

					<form method="post" action="Deleta_Pedido.php">
					
					Digite o ID a ser deletado<br>
					<input type="text" name="IDtoDEL" class="campo">
					<input type="submit" value="Deletar" class="btn">
					<br>

				<?php
			print "<strong>$registros registros encontrados</strong>";
			print "<br><br>";

			while($exibirRegistros = mysqli_fetch_array($consulta)){
			
				$ID_Pedido=$exibirRegistros[0];
				$ID_Cliente=$exibirRegistros[1];
				$Id_Produto=$exibirRegistros[2];
				
			print "ID_Pedido: $ID_Pedido<br>";
			print "ID_Cliente: $ID_Cliente<br>";
			print "ID_Produto: $Id_Produto<br>";
			print "_____________________________________________________________________<br><br>";

			}
			mysqli_close($conexao);

				?>

			</section>
	</body>
</html>