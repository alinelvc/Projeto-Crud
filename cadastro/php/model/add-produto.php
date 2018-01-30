<?php
session_start();

if (!isset($_SESSION['email'])) {
  header ('Location: ../index.php?erro=1');
}
require_once("../model/conexao/banco.php");

$nome_produto = $_POST['nome_produto'];
$id_user = $_SESSION['id_user'];
$descricao = $_POST['descricao'];
$preco = $_POST['preco'];

if ($nome_produto == '' || $descricao == '' || $preco == '' ) {
	  die();
}

$objDb = new banco();
$link = $objDb->conecta_mysql();


$sql = "insert into produtos (id_user, nome_produto, descricao, preco) values('$id_user', '$nome_produto', '$descricao', '$preco')";

if(mysqli_query($link, $sql)){
	header("Location: ../view/inicio.php");
}

?>