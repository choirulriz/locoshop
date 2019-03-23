<?php 

class Pakaian extends Controller{
    public function index(){
		$data['judul']='Kategori: Pakaian';
		$data['pakaian']=$this->model('Barang_model')->getBarangByJenis('Pakaian');
		$this->view('templates/header',$data);
		$this->view('home/pakaian',$data);
		$this->view('templates/footer');
	}

}