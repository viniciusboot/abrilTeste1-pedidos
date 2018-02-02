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
				<h1>Registro de Pedidos</h1>
				<hr><br><br>

				<form method="post" action="Processa_Pedido.php">
					<input type="submit" value="Registrar" class="btn">
					<input type="reset" value="Limpar" class="btn">
					<br><br>

							ID Cliente<br>
					<input type="text" name="ID_Cliente" class="campo" required autofocus>
					<br><br>
							ID Produto<br>
					<input type="text" name="ID_Produto" class="campo" required autofocus>

			</section>
	</body>
</html>