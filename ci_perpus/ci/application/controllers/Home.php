<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    public function index()
    {
        $data['title'] = 'Perpustakaan';
        $data['tabel_anggota'] = $this->T_anggota->SemuaData();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('templates/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah_data()
    {
        $data['title'] = 'Halaman Tambah Anggota';
        $data['tabel_anggota'] = $this->T_anggota->SemuaData();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('home/tambah_data', $data);
        $this->load->view('templates/footer');
    }

    public function proses_tambah_data()
    {
        $this->T_anggota->proses_tambah_data();
        $this->session->set_flashdata('pemberitahuan', '<div class="alert alert-primary" role="alert">Anggota Berhasil Ditambahkan!</div>');
        redirect('Home');
    }

    public function hapus_data($id_anggota)
    {
        $this->T_anggota->hapus_data($id_anggota);
        $this->session->set_flashdata('pemberitahuan', '<div class="alert alert-danger" role="alert">Anggota Berhasil Dihapus!</div>');
        redirect('Home');
    }

    public function edit_data($id_anggota)
    {
        $data['title'] = 'Halaman Ubah Anggota';
        $data['tabel_anggota'] = $this->T_anggota->ambil_id_anggota_tabel_anggota($id_anggota);
        $this->load->view('templates/header', $data );
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('home/edit_data', $data);
        $this->load->view('templates/footer');
    }

    public function proses_edit_data()
    {
        $this->T_anggota->proses_edit_data($id_anggota);
        $this->session->set_flashdata('pemberitahuan', '<div class="alert alert-success" role="alert">Anggota Berhasil Diubah!</div>');
        redirect('Home');
    }
}
?>