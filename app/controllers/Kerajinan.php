<?php 

class Kerajinan extends Controller{
    public function index(){
		$data['judul']='Kategori: Kerajinan Tangan';
		$data['kerajinan']=$this->model('Barang_model')->getBarangByJenis('Kerajinan');
		$this->view('templates/header',$data);
		$this->view('home/kerajinan',$data);
		$this->view('templates/footer');
	}

}