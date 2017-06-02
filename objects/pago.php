<?php
	class Cliente {
		private $conn;
		private $table_name = "cliente";

		//object properties

		public $idPagos;
		public $Nro_de_pago;
		public $concepto;
		public $cantidad;
		public $fech_pago;
		
		public function  __construct($db) {
			$this->conn = $db;
		}

		function readAll () {
			$query ="SELECT idPagos, Nro_de_pago, concepto, cantidad, fech_pago " . $this->table_name . "";
			$stmt = $this->conn->prepare ( $query );

			$stmt->execute();
			return $stmt;
		}

	}

?>