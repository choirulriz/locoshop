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
	if(null !== $this->session->userdata('id')){
        $data['judul']='Locoshop';
        $data['detail']=$this->Barang_model->getBarangById($id);
		$this->load->view('templates/header',$data);
		$this->load->view('home/detail',$data);
		$this->load->view('templates/footer');
	}else{
		redirect('home');
	}
	}


}

