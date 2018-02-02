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
					<a href="Reg_pedidos.php"><li>Pedidos</li></a>
					<a href="Cad_Produto.php"><li>Cadastro de Produtos</li></a>
					<a href="Cad_Cliente.php"><li>Cadastro de Clientes</li></a>
					<a href="Consulta_Cliente.php"><li>Consulta de Clientes</li></a>
					<a href="Consulta_Pedido.php"><li>Consulta de Pedidos</li></a>
					<a href="Consulta_Produto.php"><li>Consulta de Produtos</li></a>
				</ul>
			</nav>
			<section>
				<h1>Cadastro de Produtos</h1>
				<hr><br><br>

				<form method="post" action="Processa_Produto.php">
					<input type="submit" value="Salvar" class="btn">
					<input type="reset" value="Limpar" class="btn">
					<br><br>

					Nome do Produto<br>
					<input type="text" name="nome_produto" class="campo" required autofocus>
					<br><br>
					Descrição<br>
					<input type="text" name="descricao_produto" class="campo" required autofocus>
					<br><br>
					Valor (R$)<br>
					<input type="text" name="valor_produto" class="campo" required autofocus>

			</section>
	</body>
</html>