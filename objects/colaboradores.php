<?php
	class Cliente {
		private $conn;
		private $table_name = "cliente";

		//object properties

		public $idcolaboradores;
		public $dni;
		public $nombre;
		public $domicilio;
		public $telefono;
		public $banco;
		public $Nro_Cuenta;
		public $Especialidad;


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