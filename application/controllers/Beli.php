<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Beli extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->form_validation->set_rules('kota', 'Kota', 'required|trim');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim');
        
        if ($this->form_validation->run() == false) {
            $data['judul'] = 'Transaksi | Locoshop';
            $data['beli']=$this->Beli_model->getAllBeli();
            $this->load->view('templates/header', $data);
            $this->load->view('home/beli',$data);
            $this->load->view('templates/footer');
        } else {
            $jumlahBeli = htmlspecialchars($this->input->post('jumlahBeli', true));
            $idBarang = htmlspecialchars($this->input->post('idBarang', true));
            $nama = htmlspecialchars($this->input->post('namaBarang', true));
            $foto = htmlspecialchars($this->input->post('foto', true));
            $jenis = htmlspecialchars($this->input->post('jenis', true));
            $harga = htmlspecialchars($this->input->post('harga', true));
            $stock = htmlspecialchars($this->input->post('stock', true));
            $deskripsi = htmlspecialchars($this->input->post('deskripsi', true));
            $data = [
                'id' => htmlspecialchars($this->input->post('idPembeli', true)),
                'idBarang' => $idBarang,
                'jumlahBeli' => $jumlahBeli,
                'jasaPengiriman' => htmlspecialchars($this->input->post('jasaPengiriman', true)),
                'kota' => htmlspecialchars($this->input->post('kota', true)),
                'alamat' => htmlspecialchars($this->input->post('alamat', true)),
                'tanggalTransaksi' => date('d-m-Y'),
                'totalHarga' => $jumlahBeli*$harga
            ];
            $dataBarang = [
                'idBarang' => $idBarang,
                'nama' => $nama,
                'foto' =>$foto,
                'jenis' => $jenis,
                'harga' => $harga,
                'stock' => $stock-$jumlahBeli,
                'deskripsi' => $deskripsi
            ];

            $this->db->where('idBarang', $idBarang);
            $this->db->update('barang', $dataBarang);
            $this->db->insert('beli', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Pembelian Berhasil!</div>');
            redirect('beli');
        }
    }


    public function hapusBeli($id){
        $this->Beli_model->hapusDataBeli($id);
        redirect('beli');
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
