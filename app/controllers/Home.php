<?php 

class Home extends Controller{
	public function index(){
		$data['judul']='LocoShop';
		$data['barang']=$this->model('Barang_model')->getAllBarang();
		$this->view('templates/header',$data);
		$this->view('home/index',$data);
		$this->view('templates/footer');
	}

	public function detail($id){
		$data['judul']='Detail Produk';
		$data['barang']=$this->model('Barang_model')->getBarangById($id);
		$this->view('templates/header',$data);
		$this->view('home/detail',$data);
		$this->view('templates/footer');
	}

}