<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home3 extends CI_Controller {
    public function index3()
    {
        $data['title'] = 'Perpustakaan';
        $data['tabel_pegawai'] = $this->T_pegawai->DataSemua();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('templates/index3', $data);
        $this->load->view('templates/footer');
    }

    public function tambah_pegawai()
    {
        $data['title'] = 'Halaman Tambah Pegawai';
        $data['tabel_pegawai'] = $this->T_pegawai->DataSemua();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('home/tambah_pegawai', $data);
        $this->load->view('templates/footer');
    }

    public function proses_tambah_pegawai()
    {
        $this->T_pegawai->proses_tambah_pegawai();
        $this->session->set_flashdata('pemberitahuan', '<div class="alert alert-primary" role="alert">Pegawai Berhasil Ditambahkan!</div>');
        redirect('Home3/index3');
    }

    public function hapus_pegawai($id_pegawai)
    {
        $this->T_pegawai->hapus_pegawai($id_pegawai);
        $this->session->set_flashdata('pemberitahuan', '<div class="alert alert-danger" role="alert">Pegawai Berhasil Dihapus!</div>');
        redirect('Home3/index3');
    }

    public function edit_pegawai($id_pegawai)
    {
        $data['title'] = 'Halaman Ubah Pegawai';
        $data['tabel_pegawai'] = $this->T_pegawai->ambil_id_pegawai_tabel_pegawai($id_pegawai);
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('home/edit_pegawai', $data);
        $this->load->view('templates/footer');
    }

    public function proses_edit_pegawai()
    {
        $this->T_pegawai->proses_edit_pegawai($id_pegawai);
        $this->session->set_flashdata('pemberitahuan', '<div class="alert alert-success" role="alert">Pegawai Berhasil Diubah!</div>');
        redirect('Home3/index3');
    }
}
?>