<?php

    $acao = 'recuperar';

    require 'cliente_controller.php';
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

    <title>Remocão</title>

    <script>
        function remover(id)
        {
            location.href = 'removeCliente.php?acao=remover&id=' + id;
        }
    </script>

  </head>
  <body>
    
    <div class="container">

        <?php if (isset($_GET['remocao']) && $_GET['remocao'] == 1) { ?>
            <div class="bg-success pt-2 text-white d-flex justify-content-center">
                <h5>Cliente deletado com sucesso</h5>
            </div>
        <?php } ?>

        <div class="imgcontainer">
            <img src="imagens/compra.png" width="50" class="compra-loguin">
        </div>

        <div class="container semborda">
            <h3>Remocão de Clientes</h3>
        </div>

        <div class="container">
            <?php foreach($clientes as $cliente) { ?>

                <div class="col-sm-9" id="cliente_<?= $cliente->id ?>">
                    <?= $cliente->id ?>
                    <?= $cliente->first_name ?>
                    <?= $cliente->last_name ?>
                    <?= $cliente->email ?>
                    <i class="fas fa-trash fa-lg text-danger" onclick="remover(<?= $cliente->id ?>)"></i>
                </div>
            <?php } ?>
        </div>

        <div class="container" align="center">
            <a href="indexCliente.php">
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