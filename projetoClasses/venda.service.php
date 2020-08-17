<?php

	class VendaService
	{
		private $conexao;
		private $venda;

		public function __construct(Conexao $conexao, Venda $venda)
		{
			$this->conexao = $conexao->conectar();
			$this->venda = $venda;
		}

		public function inserir()
		{
			$query = 'insert into venda(id_cliente, id_produto, cliente, produto, qtdProduto) values(:id_cliente, :id_produto, :cliente, :produto, :qtdProduto)';

			$stmt = $this->conexao->prepare($query);
			$stmt->bindValue(':id_cliente', $this->venda->__get('id_cliente'));
			$stmt->bindValue(':id_produto', $this->venda->__get('id_produto'));
			$stmt->bindValue(':cliente', $this->venda->__get('cliente'));
			$stmt->bindValue(':produto', $this->venda->__get('produto'));
			$stmt->bindValue(':qtdProduto', $this->venda->__get('qtdProduto'));
			$stmt->execute();
		}

		public function recuperar()
		{
			$query = 'select id, id_cliente, id_produto, cliente, produto, qtdProduto from venda';

			$stmt = $this->conexao->prepare($query);
			$stmt->execute();
			return $stmt->fetchAll(PDO::FETCH_OBJ);
		}

		public function remover()
		{
			$query = 'delete from venda where id = :id';

			$stmt = $this->conexao->prepare($query);
			$stmt->bindValue(':id', $this->venda->__get('id'));
			return $stmt->execute();
		}

		public function recuperarArray()
		{
			$query = 'select id, id_cliente, id_produto, cliente, produto, qtdProduto from venda';

			$stmt = $this->conexao->prepare($query);
			$stmt->execute();
			return $stmt->fetchAll();
		}
	}
?>