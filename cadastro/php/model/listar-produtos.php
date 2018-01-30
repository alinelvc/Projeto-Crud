    <?php

    session_start();

    if (!isset($_SESSION['email'])) {
      header ('Location: ../index.php');
    }

    require_once("conexao/banco.php");

    $id_user = $_SESSION['id_user'];

    $objDb = new banco();
    $link = $objDb->conecta_mysql();


    $sql = "select id_prod, preco, descricao, nome_produto FROM produtos";

    $produtos = mysqli_query($link, $sql);

    if ($produtos) {

      while ($dados = mysqli_fetch_array($produtos, MYSQLI_ASSOC)) {

        echo '<div class="produtos formGreen list-group-item col-md-12">';

          echo '<div class="cinza col-md-10">';
            echo '<h4 class="list-group-item-heading">Nome:' . $dados['nome_produto'] . '</h4>';
            echo  '<h4>Descrição:'.$dados['descricao'].'</h4>';
            echo '<h4>Preço: R$' . $dados['preco'] . '</h4>';
          echo '</div>';
      

            echo '<div class="col-md-12">';

              echo "<form class='col-md-offset-8 col-md-2' method='post' id='' action = '../model/delete-produto.php'>";
                echo "<input type ='hidden' id='excluir' name ='excluir' value = ". $dados['id_prod']."> ";
                echo '<button class="btn btn-default botaoGreen botao_padrao" id="btn_excluir" type="submit">Excluir</button>';
              echo "</form>";

              echo "<form class='col-md-2' method='post' id='' action = '../view/alt-produto.php'>";
                echo "<input type ='hidden' id='alterar' name ='alterar' value = ". $dados['id_prod']."> ";
                echo '<button class="btn btn-default botaoGreen botao_padrao" id="btn_alterar" type="submit">Alterar</button>';
              echo "</form>";
              
          echo "</div>";


        echo '</div>';
      }

    } else {
      echo "Erro na Consulta";
    }

    ?>