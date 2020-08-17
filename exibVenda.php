<?php

    $acao = 'recuperar';

    require 'venda_controller.php';
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

    <title>Listagem</title>

  </head>
  <body>
    
    <div class="container">

        <div class="imgcontainer">
            <img src="imagens/compra.png" width="50" class="compra-loguin">
        </div>

        <div class="container semborda">
            <h3 align="center">Todas as Vendas</h3>
        </div>

        <div class="container" align="center">
            <a href="relatorioVenda.php">
                <button type="button" class="relatoriobtn">Gerar Relatório</button>
            </a>
        </div>

        <div class="container">
            <table border=1px align="center" width="80%">
                <tr align="center">
                    <th align="center">Id</th>
                    <th align="center">Id Cliente</th>
                    <th align="center">Id Produto</th>
                    <th align="center">Cliente</th>
                    <th align="center">Produto</th>
                    <th align="center">Quandtidade do Produto</th>
                </tr>
                
                <?php foreach($vendas as $venda) { ?>
                
                <tr>
                    <td align="center"><?= $venda->id ?></td>
                    <td align="center"><?= $venda->id_cliente ?></td>
                    <td align="center"><?= $venda->id_produto ?></td>
                    <td align="center"><?= $venda->cliente ?></td>
                    <td align="center"><?= $venda->produto ?></td>
                    <td align="center"><?= $venda->qtdProduto ?></td>
                </tr>

                <?php } ?>
            </table>
        </div>

        <div class="container" align="center">
            <a href="indexVenda.php">
                <button type="button" class="cancelbtn">Voltar</button>
            </a>
        </div>
    </div>

    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>