<?php
	class Cliente {
		private $conn;
		private $table_name = "proyecto";

		//object properties

		public $idproyecto;
		public $codigo;
		public $descripcion;
		public $costo;
		public $fech_inicio;
		public $fech_fin;
	


		public function  __construct($db) {
			$this->conn = $db;
		}

		function readAll () {
			$query ="SELECT idproyecto, codigo, descripcion, costo, fech_inicio, fech_fin FROM " . $this->table_name . "";
			$stmt = $this->conn->prepare ( $query );

			$stmt->execute();
			return $stmt;
		}

	}

?>