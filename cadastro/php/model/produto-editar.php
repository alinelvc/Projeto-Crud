<?php

session_start();

require_once("conexao/banco.php");


 $id_user = $_SESSION['id_user'];
 $id_prod = $_POST['alterar'];
 $nome_produto = $_POST['nome_produto'];
 $descricao = $_POST['descricao'];
 $preco = $_POST['preco'];


$objDb = new banco();
$link = $objDb->conecta_mysql();

$sql = "UPDATE produtos SET nome_produto = '$nome_produto', descricao =  '$descricao', preco = '$preco' WHERE id_prod = '$id_prod'";

      if (mysqli_query($link, $sql)) {

          header("Location: ../view/inicio.php");

    }else {
      echo "Erro";
    }


  ?>
