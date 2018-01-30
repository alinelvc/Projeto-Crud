<?php

session_start();

require_once("conexao/banco.php");

$id_prod = $_POST['excluir'];


$objDb = new banco();
$link = $objDb->conecta_mysql();

    $sql = "DELETE FROM produtos WHERE id_prod = '$id_prod'";

      if (mysqli_query($link, $sql)) {
      header("Location: ../view/inicio.php");

    }else {
      echo "Erro";
    }


  ?>
