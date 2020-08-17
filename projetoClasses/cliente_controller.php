<?php

	require "../../projetoClasses/cliente.model.php";
	require "../../projetoClasses/cliente.service.php";
	require "../../projetoClasses/conexao.php";

	$acao = isset($_GET['acao']) ? $_GET['acao'] : $acao;

	if ($acao == 'inserir')
	{
		$cliente = new Cliente();

		$cliente->__set('nome', $_POST['nome']);
		$cliente->__set('sobrenome', $_POST['sobrenome']);
		$cliente->__set('email', $_POST['email']);

		$conexao = new Conexao();

		$clienteService = new ClienteService($conexao, $cliente);
		$clienteService->inserir();

		header('Location: cadCliente.php?inclusao=1');
	}
	else if ($acao == 'recuperar')
	{
		$cliente = new Cliente();
		$conexao = new Conexao();

		$clienteService = new ClienteService($conexao, $cliente);
		$clientes = $clienteService->recuperar();
	}

	else if ($acao == 'atualizar')
	{
		$cliente = new Cliente();
		$cliente->__set('id', $_POST['id']);
		$cliente->__set('nome', $_POST['nome']);
		$cliente->__set('sobrenome', $_POST['sobrenome']);
		$cliente->__set('email', $_POST['email']);

		$conexao = new Conexao();

		$clienteService = new ClienteService($conexao, $cliente);
		if ($clienteService->atualizar())
		{
			header('location: editCliente.php?edicao=1');
		}
	}

	else if ($acao == 'remover')
	{
		$cliente = new Cliente();
		$cliente->__set('id', $_GET['id']);

		$conexao = new Conexao();

		$clienteService = new ClienteService($conexao, $cliente);
		$clienteService->remover();

		header('location: removeCliente.php?remocao=1');
	}
?>