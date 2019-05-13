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

    public function index()
    {
        $data['judul'] = 'Profil | Locoshop';
        $this->load->view('templates/header', $data);
        $this->load->view('home/profile');
        $this->load->view('templates/footer');
    }
}
