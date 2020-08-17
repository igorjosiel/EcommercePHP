<?php

	require "../../projetoClasses/venda.model.php";
	require "../../projetoClasses/venda.service.php";
	require "../../projetoClasses/conexao.php";

	$acao = isset($_GET['acao']) ? $_GET['acao'] : $acao;

	if ($acao == 'inserir')
	{
		$venda = new Venda();

		$venda->__set('cliente', $_POST['cliente']);
		$venda->__set('id_cliente', $_POST['id_cliente']);
		$venda->__set('produto', $_POST['produto']);
		$venda->__set('id_produto', $_POST['id_produto']);
		$venda->__set('qtdProduto', $_POST['qtdProduto']);

		$conexao = new Conexao();

		$vendaService = new VendaService($conexao, $venda);
		$vendaService->inserir();

		header('Location: registerVenda.php?inclusao=1');
	}
	else if ($acao == 'recuperar')
	{
		$venda = new Venda();
		$conexao = new Conexao();

		$vendaService = new VendaService($conexao, $venda);
		$vendas = $vendaService->recuperar();
	}
	else if ($acao == 'remover')
	{
		$venda = new Venda();
		$venda->__set('id', $_GET['id']);

		$conexao = new Conexao();

		$vendaService = new VendaService($conexao, $venda);
		$vendaService->remover();

		header('location: removeVenda.php?remocao=1');
	}
?>