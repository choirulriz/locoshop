<?php  

class Home extends CI_Controller{

    public function __construct()
	{
		parent::__construct();
		$this->load->model('Barang_model');
	}

    public function index(){
		$data['judul']='LocoShop';
		$data['barang']=$this->Barang_model->getAllBarang();
		$this->load->view('templates/header',$data);
		$this->load->view('home/index',$data);
		$this->load->view('templates/footer');
	}
    
	public function detail($id){
        $data['judul']='Locoshop';
        $data['detail']=$this->Barang_model->getBarangById($id);
		$this->load->view('templates/header',$data);
		$this->load->view('home/detail',$data);
		$this->load->view('templates/footer');
	}


	public function kerajinan(){
		$data['judul']='Kerajinan Tangan';
        $data['barang']=$this->Barang_model->getBarangByJenis('Kerajinan');
		$this->load->view('templates/header',$data);
		$this->load->view('home/kerajinan',$data);
		$this->load->view('templates/footer');
	}

	public function makanan(){
		$data['judul']='Makanan';
        $data['barang']=$this->Barang_model->getBarangByJenis('makanan');
		$this->load->view('templates/header',$data);
		$this->load->view('home/makanan',$data);
		$this->load->view('templates/footer');
	}

	public function pakaian(){
		$data['judul']='Pakaian';
        $data['barang']=$this->Barang_model->getBarangByJenis('Pakaian');
		$this->load->view('templates/header',$data);
		$this->load->view('home/pakaian',$data);
		$this->load->view('templates/footer');
	}

	public function akun(){
		$data['judul'] = 'Akun | Locoshop';
		$this->session->
		$data['barang'] = $this->Barang_model->getBarangByJenis('Pakaian');
		$this->load->view('templates/header', $data);
		$this->load->view('home/pakaian', $data);
		$this->load->view('templates/footer');
	}



}

