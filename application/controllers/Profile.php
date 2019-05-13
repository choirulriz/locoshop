<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profile extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('unit_test');
        $this->load->library('form_validation');
    }

    public function index($id)
    {
        $data['judul'] = 'Profil | Locoshop';
        $data['profile'] = $this->Profile_model->profile($id);
        $this->load->view('templates/header', $data);
        $this->load->view('home/profile',$data);
        $this->load->view('templates/footer');
    }

    public function profil($id)
    {
        $data['judul'] = 'Profil | Locoshop';
        $data['profile'] = $this->Profile_model->profile($id);
        $this->load->view('templates/header', $data);
        $this->load->view('home/profile',$data);
        $this->load->view('templates/footer');
    }
    public function ubah($id)
    {
        $data['judul'] = 'Ubah Profil | Locoshop';
        $data['profile'] = $this->Profile_model->profile($id);
        $this->load->view('templates/header', $data);
        $this->load->view('home/ubah',$data);
        $this->load->view('templates/footer');
    }


}



 