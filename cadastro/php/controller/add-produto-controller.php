<?php 
	session_start();

	if (!isset($_SESSION['email'])) {
	  header ('Location: ../index.php?erro=1');
	}

	$nome_produto = $_POST['nome_produto'];
	$id_user = $_SESSION['id_user'];
	$descricao = $_POST['descricao'];
	$preco = $_POST['preco'];


	if ($nome_produto == '' || $descricao == '' || $preco == '' ) {
	  die();
	}
	else{
		header("Location: ../model/add-produto.php");
	}


 ?>