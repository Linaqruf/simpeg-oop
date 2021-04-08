<?php 

class database {
	private $dbHost     = "localhost";
	private $dbUser     = "root";
	private $dbPassword = "";
	private $dbName     = "pegawai";
	
	public function connect() {
		$mysqli = new mysqli($this->dbHost, $this->dbUser, $this->dbPassword, $this->dbName);	

		if ($mysqli->connect_error){
			echo "Gagal terkoneksi ke database : (".$mysqli->connect_error.")";
		}  
		
		return $mysqli;
	}
}
?>