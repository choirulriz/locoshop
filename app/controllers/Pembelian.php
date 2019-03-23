<?php 

class Pembelian extends Controller{
    public function index(){
		$data['judul']='Pembelian';
		$data['barang']=$this->model('Barang_model')->getAllBarang();
		$this->view('templates/header',$data);
		$this->view('home/pembelian',$data);
		$this->view('templates/footer');
    }
    
    
	public function hapus($idBarang){
		if ($this->model('Barang_model')->hapusDataBarang($idBarang)>0) {
			// disini kalau berhasil
			Flasher::setFlash('berhasil','dihapus','success');
			header('Location:'.BASEURL.'/pembelian');
			exit;
		}else{
			// disini kalau gagal
			Flasher::setFlash('gagal','dihapus','danger');
			header('Location:'.BASEURL.'/pembelian');
			exit;
		}
	}

}