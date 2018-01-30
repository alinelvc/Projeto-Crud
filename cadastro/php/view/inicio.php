<?php

session_start();

if (!isset($_SESSION['email'])) {
  header ('Location: ../index.php');
}

?>

<!DOCTYPE HTML>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">

	<title>Cadastro de Produtos</title>

  <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <link href="css/style.css" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
  <script type="text/javascript" src="js/funcoes.js"></script>

</head>

<body>

	<?php include ("menu/menu-in.php"); ?>

	<div class="container">


    <div class="col-md-12">
        <div class="page-header">
          <h4>Bem vindo(a) <?= $_SESSION['nome'] ?>!</h4>
        </div>
    </div>

	<div class="col-md-offset-2 col-md-8">
      
    <form id="formProduto" method="post" action="../model/add-produto.php" class="col-md-12" >
      <div class="form-group">
        <label for="nome_produto">Nome</label>
        <input type="text" class="form-control" id="nome_produto" name="nome_produto">
      </div>
      <div class="form-group">
        <label for="descricao">Descrição</label>
        <textarea id="descricao" name="descricao" class="form-control"></textarea>
      </div>
      <div class="form-group">
        <label for="preco">Preço</label>
        <input type="preco" class="form-control" id="preco" name="preco">
      </div>
      <div class="centro form-group">
        <button class="formGreen btn btn-default" id="btnProduto" type="submit">Enviar</button>
      </div>
    </form>
      <div id="cadastrarProduto" class="list-group">

      </div>
    </div>
	 </div>
  </body>
</html>
