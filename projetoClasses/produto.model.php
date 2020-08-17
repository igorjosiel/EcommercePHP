<?php

	class Produto
	{
		private $id;
		private $nome;
		private $marca;
		private $anoFab;
		private $quantidade;
		private $preco;

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