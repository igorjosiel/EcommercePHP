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

    <title>Cadastro</title>

  </head>
  <body>
    
    <div class="container">

    	<?php if (isset($_GET['inclusao']) && $_GET['inclusao'] == 1) { ?>
	    	<div class="bg-success pt-2 text-white d-flex justify-content-center">
	    		<h5>Cliente cadastrado com sucesso</h5>
	    	</div>
    	<?php } ?>

        <div class="imgcontainer">
            <img src="imagens/compra.png" width="50" class="compra-loguin">
        </div>

        <div class="container semborda">
            <form id="formulario" method="post" action="http://localhost/ecommercephp/cliente_controller.php?acao=inserir">
                <div class="form-group">
                    <label for="nome"><b>Nome</b></label>
                    <input id="nome" type="text" class="form-control" placeholder="Entre com o nome" name="nome" required>
                </div>

                <div class="form-group">
                    <label for="sobrenome"><b>Sobrenome</b></label>
                    <input id="sobrenome" type="text" class="form-control" placeholder="Entre com o sobrenome" name="sobrenome" required>
                </div>

                <div class="form-group">
                    <label for="email"><b>E-mail</b></label>
                    <input id="email" type="email" class="form-control" placeholder="Entre com o email" name="email" required>
                </div>

                <button type="submit" class="btn btn-success">Cadastrar</button>

                <div class="container">
                    <a href="indexCliente.php">
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