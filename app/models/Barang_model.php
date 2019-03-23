<?php 

class Barang_model{
	private $table='barang';
	private $db; //menampung kelas data base

	//begitu kelas model dipanggil langsung instansiasi database
	public function __construct(){
		$this->db = new Database;
	}

	public function getAllBarang(){
		// return $this->mhs;
		$this->db->query('SELECT * FROM '. $this->table); 
		return $this->db->resultSet();
	}

	public function getBarangById($id){
		$this->db->query('SELECT * FROM '.$this->table.' WHERE idBarang=:id');
		$this->db->bind('idBarang',$id);
		return $this->db->single();
	}
	
	public function getBarangByJenis($jenis){
		$this->db->query('SELECT * FROM '.$this->table.' WHERE jenis=:jenis');
		$this->db->bind('jenis',$jenis);
		return $this->db->resultSet();
	}

	public function hapusDataBarang($idBarang){
		$query="DELETE FROM barang
				WHERE idBarang=:idBarang";
		$this->db->query($query);	
		$this->db->bind('idBarang',$idBarang);
		
		$this->db->execute();
		return $this->db->rowCount();
	}
}

?>