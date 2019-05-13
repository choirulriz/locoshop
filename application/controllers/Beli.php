<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Beli extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('unit_test');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['judul'] = 'Transaksi | Locoshop';
        $this->load->view('templates/header', $data);
        $this->load->view('home/beli');
        $this->load->view('templates/footer');
    }

    public function ketersediaan($stock, $pembelian)
    {

        if ($stock >= $pembelian) {
            return 1;
        } else {
            return 2;
        }
    }

    public function test()
    {
        $test = $this->ketersediaan(10, 9);
        $expected_result = TRUE;
        $test_name = 'CEK Ketersediaan barang';
        echo $this->unit->run($test, $expected_result, $test_name);
    }
}
