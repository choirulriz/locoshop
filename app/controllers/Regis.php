<?php 

class Regis extends Controller{
	public function index(){
		$data['judul']='Registrasi';
		$data['regis']=$this->model('Akun_model')->getAllPembeli();
		$this->view('templates/header',$data);
		$this->view('home/regis',$data);
		$this->view('templates/footer');
	}

	public function tambah(){
		if ($this->model('Akun_model')->tambahDataPembeli($_POST)>0) {
			// disini kalau berhasil
			Flasher::setFlash('berhasil','ditambahkan','success');
			header('Location:'.BASEURL.'/home');
			exit;
		}else{
			// disini kalau gagal
			Flasher::setFlash('gagal','ditambahkan','danger');
			header('Location:'.BASEURL.'/home');
			exit;
		}
	}

}