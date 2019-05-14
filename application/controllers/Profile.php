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
    public function update()
    {
        $nama = htmlspecialchars($this->input->post('namaPembeli', true));
        $password = htmlspecialchars($this->input->post('password', true));
        $email = htmlspecialchars($this->input->post('email', true));
        $kota = htmlspecialchars($this->input->post('kota', true));
        $alamat = htmlspecialchars($this->input->post('alamat', true));
        $noTelepon = htmlspecialchars($this->input->post('noTelepon', true));
        $id = htmlspecialchars($this->input->post('idPembeli', true));
        $data = [
            'namaPembeli' => $nama,
            'password' =>  $password,
            'email' => $email,
            'kota' => $kota,
            'alamat' => $alamat,
            'noTelepon' =>$noTelepon
        ];
        $this->db->where('id', $id);
        $this->db->update('pembeli', $data);
        
        redirect('home');
        
    }

    


}



 