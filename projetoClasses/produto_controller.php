<?php

	require "../../projetoClasses/produto.model.php";
	require "../../projetoClasses/produto.service.php";
	require "../../projetoClasses/conexaoExtra.php";

	$acao = isset($_GET['acao']) ? $_GET['acao'] : $acao;

	if ($acao == 'inserir')
	{
		$produto = new Produto();

		$produto->__set('nome', $_POST['nome']);
		$produto->__set('marca', $_POST['marca']);
		$produto->__set('anoFab', $_POST['anoFab']);
		$produto->__set('quantidade', $_POST['quantidade']);
		$produto->__set('preco', $_POST['preco']);

		$conexao = new ConexaoExtra();

		$produtoService = new ProdutoService($conexao, $produto);
		$produtoService->inserir();

		header('Location: cadProduto.php?inclusao=1');
	}
	else if ($acao == 'recuperar')
	{
		$produto = new Produto();
		$conexao = new ConexaoExtra();

		$produtoService = new ProdutoService($conexao, $produto);
		$produtos = $produtoService->recuperar();
	}

	else if ($acao == 'atualizar')
	{
		$produto = new Produto();
		$produto->__set('id', $_POST['id']);
		$produto->__set('nome', $_POST['nome']);
		$produto->__set('marca', $_POST['marca']);
		$produto->__set('anoFab', $_POST['anoFab']);
		$produto->__set('quantidade', $_POST['quantidade']);
		$produto->__set('preco', $_POST['preco']);

		$conexao = new ConexaoExtra();

		$produtoService = new ProdutoService($conexao, $produto);
		if ($produtoService->atualizar())
		{
			header('location: editProduto.php?edicao=1');
		}
	}

	else if ($acao == 'remover')
	{
		$produto = new Produto();
		$produto->__set('id', $_GET['id']);

		$conexao = new ConexaoExtra();

		$produtoService = new ProdutoService($conexao, $produto);
		$produtoService->remover();

		header('location: removeProduto.php?remocao=1');
	}
?>