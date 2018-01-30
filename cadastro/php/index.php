<?php
$erro = isset($_GET['erro']) ? $_GET['erro'] : 0;
$erro_email 	= isset ($_GET['erro_email']) 	? $_GET['erro_email']		 	: 0;
?>

<!DOCTYPE HTML>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">

	<title>Cadastro</title>


	<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="view/js/funcoes.js"></script>
	<link href="view/css/style.css" rel="stylesheet">


</head>

<body>

	<?php include ("view/menu/menu-geral.php"); ?>

	<div class="container">


		<div class="col-md-4"></div>
		<div class="col-md-4">
			<h3 class="centro">Entrar</h3>
			<br />
			<form method="post" action="model/permissao-acesso.php" id="formCadastrarse" enctype = "multipart/form-data">				<div class="form-group">
					<input type="email" class="form-control" id="email" name="email" placeholder="Email" required="requiored">
					<?php
       					if ($erro ==1) {
          					echo "Usuário ou Senha Invalido(s)";
        				}
       				 ?>
				</div>

				<div class="form-group">
					<input type="password" class="form-control" id="senha" name="senha" placeholder="Senha" required="requiored">
				</div>

				<button type="submit" class="botaoGreen btn btn-default form-control">Entrar</button>
			</form>
		</div>
		<div class="col-md-4"></div>

		<div class="clearfix"></div>
		<br />
		<div class="col-md-4"></div>
		<div class="col-md-4"></div>
		<div class="col-md-4"></div>

	</div>


	</div>

</body>

</html>
