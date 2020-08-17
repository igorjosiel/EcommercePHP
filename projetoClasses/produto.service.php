<?php

	class ProdutoService
	{
		private $conexao;
		private $produto;

		public function __construct(ConexaoExtra $conexao, Produto $produto)
		{
			$this->conexao = $conexao->conectar();
			$this->produto = $produto;
		}

		public function inserir()
		{
			$query = 'insert into produto(nome, marca, anoFab, quantidade, preco) values(:nome, :marca, :anoFab, :quantidade, :preco)';

			$stmt = $this->conexao->prepare($query);
			$stmt->bindValue(':nome', $this->produto->__get('nome'));
			$stmt->bindValue(':marca', $this->produto->__get('marca'));
			$stmt->bindValue(':anoFab', $this->produto->__get('anoFab'));
			$stmt->bindValue(':quantidade', $this->produto->__get('quantidade'));
			$stmt->bindValue(':preco', $this->produto->__get('preco'));
			$stmt->execute();
		}

		public function recuperar()
		{
			$query = 'select id, nome, marca, anoFab, quantidade, preco from produto';

			$stmt = $this->conexao->prepare($query);
			$stmt->execute();
			return $stmt->fetchAll(PDO::FETCH_OBJ);
		}

		public function atualizar()
		{
			$query = "update produto set nome = :nome, marca = :marca, anoFab = :anoFab, quantidade = :quantidade, preco = :preco where id = :id";

			$stmt = $this->conexao->prepare($query);
			$stmt->bindValue(':id', $this->produto->__get('id'));
			$stmt->bindValue(':nome', $this->produto->__get('nome'));
			$stmt->bindValue(':marca', $this->produto->__get('marca'));
			$stmt->bindValue(':anoFab', $this->produto->__get('anoFab'));
			$stmt->bindValue(':quantidade', $this->produto->__get('quantidade'));
			$stmt->bindValue(':preco', $this->produto->__get('preco'));
			return $stmt->execute();
		}

		public function remover()
		{
			$query = 'delete from produto where id = :id';

			$stmt = $this->conexao->prepare($query);
			$stmt->bindValue(':id', $this->produto->__get('id'));
			return $stmt->execute();
		}

		public function recuperarArray()
		{
			$query = 'select id, nome, marca, anoFab, quantidade, preco from produto';

			$stmt = $this->conexao->prepare($query);
			$stmt->execute();
			return $stmt->fetchAll();
		}
	}
?>