<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Controle de Estoque</title>
		<link rel="stylesheet" href="_css/estilo.css">
	</head>
	<body>
		<div class="container">
			<nav>
				
				<ul class="menu">
					<a href="index.php"><li>Pagina Inicial</li></a>
					<a href="Reg_pedidos.php"><li>Pedidos</li></a>
					<a href="Cad_Produto.php"><li>Cadastro de Produtos</li></a>
					<a href="Cad_Cliente.php"><li>Cadastro de Clientes</li></a>
					<a href="Consulta_Cliente.php"><li>Consulta de Clientes</li></a>
					<a href="Consulta_Pedido.php"><li>Consulta de Pedidos</li></a>
					<a href="Consulta_Produto.php"><li>Consulta de Produtos</li></a>
				</ul>
			</nav>
			<section>
				<h1>Sistema de Controle de Estoque</h1>
				<hr><br><br>

				<?php 
				$imagem_principal='images/inventario.jpg';
				?>

				<img src="<?php echo $imagem_principal;?>">
				
			</section>
	</body>
</html>