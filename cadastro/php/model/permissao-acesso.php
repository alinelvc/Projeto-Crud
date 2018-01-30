<?php

session_start();

require_once("conexao/banco.php");


$email = $_POST["email"];
$senha = md5($_POST["senha"]);




$objDb = new banco();
$link = $objDb->conecta_mysql();

$sql = "select id_user, email, nome, senha from usuarios where email = '$email' and senha = '$senha' ";

$resultado_id = mysqli_query($link, $sql);

if ($resultado_id) {
  $dados_usuario = mysqli_fetch_array($resultado_id);
  if (isset ($dados_usuario['email'])) {
    $_SESSION['id_user'] = $dados_usuario['id_user'];
    $_SESSION['email'] = $dados_usuario['email'];
    $_SESSION['nome'] = $dados_usuario['nome'];
    $_SESSION['senha'] = $dados_usuario['senha'];


      header('Location: ../view/inicio.php');

  }
}else{
  echo "Erro";
}

?>
