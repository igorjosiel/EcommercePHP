<?php

	class Venda
	{
		private $id;
		private $id_cliente;
		private $id_produto;
		private $cliente;
		private $produto;
		private $qtdProduto;

		public function __get($atributo)
		{
			return $this->$atributo;
		}

		public function __set($atributo, $valor)
		{
			$this->$atributo = $valor;
		}
	}
?>