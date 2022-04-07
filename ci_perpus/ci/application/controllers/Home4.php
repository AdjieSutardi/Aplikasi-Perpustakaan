<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home4 extends CI_Controller {
    public function index4()
    {
        $data['title'] = 'Perpustakaan';
        $data['tabel_transaksi'] = $this->T_transaksi->DataSemua();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('templates/index4', $data);
        $this->load->view('templates/footer');
    }

    public function tambah_transaksi()
    {
        $data['title'] = 'Halaman Tambah Transaksi';
        $data['tabel_transaksi'] = $this->T_transaksi->DataSemua();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('home/tambah_transaksi', $data);
        $this->load->view('templates/footer');
    }

    public function proses_tambah_transaksi()
    {
        $this->T_transaksi->proses_tambah_transaksi();
        $this->session->set_flashdata('pemberitahuan', '<div class="alert alert-primary" role="alert">Transaksi Berhasil Ditambahkan!</div>');
        redirect('Home4/index4');
    }

    public function hapus_transaksi($id_transaksi)
    {
        $this->T_transaksi->hapus_transaksi($id_transaksi);
        $this->session->set_flashdata('pemberitahuan', '<div class="alert alert-danger" role="alert">Transaksi Berhasil Dihapus!</div>');
        redirect('Home4/index4');
    }

    public function edit_transaksi($id_transaksi)
    {
        $data['title'] = 'Halaman Ubah Transaksi';
        $data['tabel_transaksi'] = $this->T_transaksi->ambil_id_transaksi_tabel_transaksi($id_transaksi);
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('home/edit_transaksi', $data);
        $this->load->view('templates/footer');
    }

    public function proses_edit_transaksi()
    {
        $this->T_transaksi->proses_edit_transaksi($id_transaksi);
        $this->session->set_flashdata('pemberitahuan', '<div class="alert alert-success" role="alert">Transaksi Berhasil Diubah!</div>');
        redirect('Home4/index4');
    }
}
?>