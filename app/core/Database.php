<?php 

class Database{
	private $host = DB_HOST;
	private $user = DB_USER;
	private $pass = DB_PASS;
	private $db_name = DB_NAME;

	private $dbh; //database handler
	private $stmt; //statement untuk query

	public function __construct(){
	//data source name
	// $dsn = 'mysql:host=localhost;dbname=phpmvc'; 
	$dsn = 'mysql:host='.$this->host.';dbname='.$this->db_name; //diisi koneksi ke pdo (php data object)

	//cek apa koneksi berhasil
	$option = [
		PDO::ATTR_PERSISTENT=>true, //untuk menjaga database kita tetap terjaga (optimasi)
		PDO::ATTR_ERRMODE=> PDO::ERRMODE_EXCEPTION //Mode errornya tampilkan exception, jadi optionnya masuk kebawah
	];

	try{
		// $this->dbh = new PDO($dsn,'root','');
		$this->dbh = new PDO($dsn,$this->user,$this->pass,$option);
	}catch(PDOException $e){
		die($e->getMessage());
		}
	}

	//persiapkan querynya
	public function query($query){
		$this->stmt = $this->dbh->prepare($query);
	}

	//istilahnya parameter sql nya yang nilainya apa(value) tipenya apa =null
	// BINDING DATA, SIAPA TAU ADA WHERE NYA,
	public function bind($param,$value,$type=null){
		if (is_null($type)) {
			switch (true) {
				case is_int($value):
					$type=PDO::PARAM_INT;
					break;
				case is_bool($value):
					$type=PDO::PARAM_BOOL;
					break;
				case is_null($value):
					$type=PDO::PARAM_NULL;
					break;
				
				default:
					$type=PDO::PARAM_STR;
			}
		}

		$this->stmt->bindValue($param,$value,$type);
	}

	public function execute(){
		$this->stmt->execute();
	}

	//hasil banyak
	public function resultSet(){
		$this->execute();
		return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
	}

	//hasilnya cuma satu
	public function single(){
		$this->execute();
		return $this->stmt->fetch(PDO::FETCH_ASSOC);
	}

	public function rowCount(){
		return $this->stmt->rowCount();
	}

}
