<?php 

class Beli_model extends CI_model{

	public function getAllBeli(){
		$this->db->from('barang');
		$this->db->join('beli', 'beli.idBarang = barang.idBarang');
		return $this->db->get()->result_array();
	}

	public function hapusDataBeli($id)
	{
		$this->db->where('idBeli', $id);
		$this->db->delete('beli');
	}

}
?>