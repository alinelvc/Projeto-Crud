
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
<script type="text/javascript" src="js/funcoes.js"></script>
<link href="css/style.css" rel="stylesheet">




<?php

session_start();

if (!isset($_SESSION['email'])) {
  header ('Location: ../index.php');
}

$id_prod = $_POST['alterar'];

require_once("../model/conexao/banco.php");

    $objDb = new banco();
    $link = $objDb->conecta_mysql();


    $sql = "select * from produtos where id_prod = '$id_prod'";


    $produtos = mysqli_query($link, $sql);

    $dados = mysqli_fetch_array($produtos, MYSQLI_ASSOC);



  echo '<!DOCTYPE HTML>';
  echo '<html lang="pt-br">';

  echo '<head>';
  echo  '<meta charset="UTF-8">';

  echo '<title>Produto</title>';

  echo '</head>';

  echo '<body>';

    include ("menu/menu-in.php");

  echo '<div class="container">';


  echo '<div class="col-md-4"></div>';
    echo '<div class="col-md-4">';
       echo '<h3 class="list-group-item-text alter centro">Editar </h3>';
      echo '<br><br>';
      echo '<form method="post" action="../model/produto-editar.php">';
      echo '<div class="form-group">';
        echo '<label for="nome_produto">Nome do produto</label>';
        echo '<textarea type="text" class="form-control" id="nome_produto" name="nome_produto" >'. $dados['nome_produto'].'</textarea>';
      echo '</div>';
      echo '<label class="centro" for="descricao">Descrição: </label>';
    
      echo  '<div class="form-group">';
      echo '<textarea id="descricao" name="descricao" class="form-control">'. $dados['descricao'].'</textarea>';
      echo '</div>';
        echo "<br>";
        echo '<div class="form-group">';
        echo '<label for="preco">Preço</label>';
        echo  '<input type="preco" class="form-control" id="preco" name="preco" value ='.$dados['preco']. '>';
      echo  '</div>';
 
      echo "<input type ='hidden' id='alterar' name ='alterar' value = ".$id_prod."> ";
    echo  '  <button class="botaoGreen cor btn btn-default btn-xs form-control col-md-2" id="btn_alterar" type="submit">Alterar</button>';
    echo  '</form>';
  echo  '</div>';
  echo  '<div class="col-md-4"></div>';

  echo '</div>';
echo  '</div>';

echo '</body>';

echo '</html>';



  ?>
