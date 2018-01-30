
  $(document).ready(function(){

    function listarProdutos(){
      $.ajax({
        url:"../model/listar-produtos.php",
        success: function(data){
          $('#cadastrarProduto').html(data);
        }
      });
    }

  
    listarProdutos();
  });
