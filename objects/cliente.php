<?php
	class Cliente {
		private $conn;
		private $table_name = "cliente";

		//object properties

		public $idclientes;
		public $codigo;
		public $telefono;
		public $domicilio;
		public $razon_social;
		public $proyecto_idproyecto;
		public $rubro;


		public function  __construct($db) {
			$this->conn = $db;
		}

		function readAll () {
			$query ="SELECT idclientes, codigo, telefono, domicilio, razon_social, proyecto_idproyecto, rubro FROM " . $this->table_name . "";
			$stmt = $this->conn->prepare ( $query );

			$stmt->execute();
			return $stmt;
		}

	}

?>