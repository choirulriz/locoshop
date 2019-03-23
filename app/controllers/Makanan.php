<?php 

class Makanan extends Controller{
    public function index(){
		$data['judul']='Kategori: Makanan';
		$data['makanan']=$this->model('Barang_model')->getBarangByJenis('Makanan');
		$this->view('templates/header',$data);
		$this->view('home/makanan',$data);
		$this->view('templates/footer');
	}

}