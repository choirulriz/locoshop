<?php 

class Akun_model{
	private $table='pembeli';
	private $db; //menampung kelas data base

	//begitu kelas model dipanggil langsung instansiasi database
	public function __construct(){
		$this->db = new Database;
	}

	public function getAllPembeli(){
		// return $this->mhs;
		$this->db->query('SELECT * FROM '. $this->table); 
		return $this->db->resultSet();
	}

	public function getPembeliById($id){
		$this->db->query('SELECT * FROM '.$this->table.' WHERE id=:id');
		$this->db->bind('id',$id);
		return $this->db->single();
	}

	public function getPembeliByUsername($username){
		$this->db->query('SELECT * FROM '.$this->table.' WHERE username=:username');
		$this->db->bind('username',$username);
		return $this->db->single();
	}
	

	public function tambahDataPembeli($data){
		$query="INSERT INTO pembeli
				VALUES
				('',:namaPembeli,:username,:password,:email,:kota,:alamat,:noTelepon)";
		$this->db->query($query);
		$this->db->bind('namaPembeli',$data['namaPembeli']);
		$this->db->bind('username',$data['username']);
		$this->db->bind('password',$data['password']);
		$this->db->bind('email',$data['email']);
		$this->db->bind('kota',$data['kota']);
		$this->db->bind('alamat',$data['alamat']);
		$this->db->bind('noTelepon',$data['noTelepon']);

		$this->db->execute();
		return $this->db->rowCount();
	}

	public function ubahDataPembeli($data){
		$query="UPDATE pembeli 
				SET
				namaPembeli = :namaPembeli,
				username = :username,
				password = :password,
				email = :email,
				kota = :kota,
				alamat = :alamat,
				noTelepon = :noTelepon
				WHERE id = :id";
		$this->db->query($query);
		$this->db->bind('namaPembeli',$data['namaPembeli']);
		$this->db->bind('username',$data['username']);
		$this->db->bind('password',$data['password']);
		$this->db->bind('email',$data['email']);
		$this->db->bind('kota',$data['kota']);
		$this->db->bind('alamat',$data['alamat']);
		$this->db->bind('noTelepon',$data['noTelepon']);
		$this->db->bind('id',$data['id']);

		$this->db->execute();
		return $this->db->rowCount();
	}

}

?>