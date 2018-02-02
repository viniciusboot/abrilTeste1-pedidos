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
					<a href="Reg_Pedidos.php"><li>Pedidos</li></a>
					<a href="Cad_Produto.php"><li>Cadastro de Produtos</li></a>
					<a href="Cad_Cliente.php"><li>Cadastro de Clientes</li></a>	
					<a href="Consulta_Cliente.php"><li>Consulta de Clientes</li></a>
					<a href="Consulta_Pedido.php"><li>Consulta de Pedidos</li></a>
					<a href="Consulta_Produto.php"><li>Consulta de Produtos</li></a>
				</ul>
			</nav>
			<section>
				<h1>Cadastro de Clientes</h1>
				<hr><br><br>

				<form method="post" action="Processa_Cliente.php">
					<input type="submit" value="Salvar" class="btn">
					<input type="reset" value="Limpar" class="btn">
					<br><br>

					Nome do Cliente<br>
					<input type="text" name="nome_cliente" class="campo" required autofocus>
					<br><br>
					Email<br>
					<input type="Email" name="email_cliente" class="campo" required autofocus>
					<br><br>
					Telefone<br>
					<input type="text" name="telefone_cliente" class="campo" required autofocus>

			</section>
	</body>
</html>