<?php

    $acao = 'recuperar';

    require 'cliente_controller.php';
    require 'produto_controller.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <!-- HTML5Shiv -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <![endif]-->

    <!-- Estilo customizado -->
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
    <link rel="icon" href="../imagens/logoEcommerce.jpg">

    <title>Compra</title>

  </head>
  <body>
    
    <div class="container">

    	<?php if (isset($_GET['inclusao']) && $_GET['inclusao'] == 1) { ?>
	    	<div class="bg-success pt-2 text-white d-flex justify-content-center">
	    		<h5>Compra realizada com sucesso</h5>
	    	</div>
    	<?php } ?>

        <div class="imgcontainer">
            <img src="imagens/compra.png" width="50" class="compra-loguin">
        </div>

        <div class="container semborda">
            <form id="formulario" method="post" action="http://localhost/ecommercephp/venda_controller.php?acao=inserir">
                <div class="container">
                    <table border=1px align="center" width="80%">
                        <tr align="center">
                            <th align="center">Id</th>
                            <th align="center">Nome</th>
                            <th align="center">Sobrenome</th>
                            <th align="center">Email</th>
                        </tr>
                        
                        <?php foreach($clientes as $cliente) { ?>
                        
                        <tr>
                            <td align="center"><?= $cliente->id ?></td>
                            <td align="center"><?= $cliente->first_name ?></td>
                            <td align="center"><?= $cliente->last_name ?></td>
                            <td align="center"><?= $cliente->email ?></td>
                        </tr>

                        <?php } ?>
                    </table>
                </div>

                <div class="form-group">
                    <label for="cliente"><b>Cliente</b></label>
                    <input id="cliente" type="text" class="form-control" placeholder="Entre com o cliente da compra" name="cliente" required>
                </div>

                <div class="form-group">
                    <label for="id_cliente"><b>Id do Cliente</b></label>
                    <input id="id_cliente" type="text" class="form-control" placeholder="Entre com o id cliente" name="id_cliente" required>
                </div>

                <div class="container">
                    <table border=1px align="center" width="80%">
                        <tr align="center">
                            <th align="center">Id</th>
                            <th align="center">Produto</th>
                            <th align="center">Marca</th>
                            <th align="center">Ano fabricação</th>
                            <th align="center">Quantidade</th>
                            <th align="center">Preco</th>
                        </tr>
                        
                        <?php foreach($produtos as $produto) { ?>
                        
                        <tr>
                            <td align="center"><?= $produto->id ?></td>
                            <td align="center"><?= $produto->nome ?></td>
                            <td align="center"><?= $produto->marca ?></td>
                            <td align="center"><?= $produto->anoFab ?></td>
                            <td align="center"><?= $produto->quantidade ?></td>
                            <td align="center"><?= $produto->preco ?></td>
                        </tr>

                        <?php } ?>
                    </table>
                </div>

                <div class="form-group">
                    <label for="produto"><b>Produto</b></label>
                    <input id="produto" type="text" class="form-control" placeholder="Entre com o produto da compra" name="produto" required>
                </div>

                <div class="form-group">
                    <label for="id_produto"><b>Id do Produto</b></label>
                    <input id="id_produto" type="number" class="form-control" placeholder="Entre com o id produto" name="id_produto" required>
                </div>

                <div class="form-group">
                    <label for="qtdProduto"><b>Quantidade do Produto</b></label>
                    <input id="qtdProduto" type="number" class="form-control" placeholder="Entre com o id produto" name="qtdProduto" required>
                </div>

                <button type="submit" class="btn btn-success">Comprar</button>

                <div class="container">
                    <a href="indexVenda.php">
                        <button type="button" class="cancelbtn">Cancelar</button>
                    </a>
                </div>
            </form>
        </div>
    </div>

    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>