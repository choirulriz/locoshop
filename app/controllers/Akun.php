<?php 

class Akun extends Controller{
    	public function index(){
		$data['judul']='Akun';
		$data['user']=$this->model('Akun_model')->getPembeliById(126);
		$this->view('templates/header',$data);
		$this->view('home/akun',$data);
		$this->view('templates/footer');
	}

		public function ubah(){
		if ($this->model('Akun_model')->ubahDataPembeli($_POST)>0) {
			// disini kalau berhasil
			Flasher::setFlash('berhasil','diubah','success');
			header('Location:'.BASEURL.'/home');
			exit;
		}else{
			// disini kalau gagal
			Flasher::setFlash('gagal','diubah','danger');
			header('Location:'.BASEURL.'/home');
			exit;
		}
	}



}