<?php

	class Cliente
	{
		private $id;
		private $nome;
		private $sobrenome;
		private $email;

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