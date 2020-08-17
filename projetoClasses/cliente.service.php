<?php

	class ClienteService
	{
		private $conexao;
		private $cliente;

		public function __construct(Conexao $conexao, Cliente $cliente)
		{
			$this->conexao = $conexao->conectar();
			$this->cliente = $cliente;
		}

		public function inserir()
		{
			$query = 'insert into cliente(first_name, last_name, email) values(:nome, :sobrenome, :email)';

			$stmt = $this->conexao->prepare($query);
			$stmt->bindValue(':nome', $this->cliente->__get('nome'));
			$stmt->bindValue(':sobrenome', $this->cliente->__get('sobrenome'));
			$stmt->bindValue(':email', $this->cliente->__get('email'));
			$stmt->execute();
		}

		public function recuperar()
		{
			$query = 'select id, first_name, last_name, email from cliente';

			$stmt = $this->conexao->prepare($query);
			$stmt->execute();
			return $stmt->fetchAll(PDO::FETCH_OBJ);
		}

		public function atualizar()
		{
			$query = "update cliente set first_name = :nome, last_name = :sobrenome, email = :email where id = :id";

			$stmt = $this->conexao->prepare($query);
			$stmt->bindValue(':id', $this->cliente->__get('id'));
			$stmt->bindValue(':nome', $this->cliente->__get('nome'));
			$stmt->bindValue(':sobrenome', $this->cliente->__get('sobrenome'));
			$stmt->bindValue(':email', $this->cliente->__get('email'));
			return $stmt->execute();
		}

		public function remover()
		{
			$query = 'delete from cliente where id = :id';

			$stmt = $this->conexao->prepare($query);
			$stmt->bindValue(':id', $this->cliente->__get('id'));
			return $stmt->execute();
		}

		public function recuperarArray()
		{
			$query = 'select id, first_name, last_name, email from cliente';

			$stmt = $this->conexao->prepare($query);
			$stmt->execute();
			return $stmt->fetchAll();
		}
	}
?>