<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home2 extends CI_Controller {
    public function index2()
    {
        $data['title'] = 'Perpustakaan';
        $data['tabel_buku'] = $this->T_buku->AllData();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('templates/index2', $data);
        $this->load->view('templates/footer');
    }

    public function tambah_buku()
    {
        $data['title'] = 'Halaman Tambah Buku';
        $data['tabel_buku'] = $this->T_buku->AllData();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('home/tambah_buku', $data);
        $this->load->view('templates/footer');
    }

    public function proses_tambah_buku()
    {
        $config['upload_path']                  = './gambar/';
                $config['allowed_types']        = 'gif|jpg|png|PNG';
                $config['max_size']             = 10000;
                $config['max_width']            = 10000;
                $config['max_height']           = 10000;

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('userfile'))
                {
                        echo "Gagal Tambah";
                }
                else
                {
                        $gambar         = $this->upload->data();
                        $gambar         = $gambar['file_name'];
                        $isbn           = $this->input->post('isbn', TRUE);
                        $nama_buku      = $this->input->post('nama_buku', TRUE);
                        $penulis        = $this->input->post('penulis', TRUE);
                        $penerbit       = $this->input->post('penerbit', TRUE);
                        $tahun_terbit   = $this->input->post('tahun_terbit', TRUE);

                        $data = array(
                            'isbn'          => $isbn,
                            'nama_buku'     => $nama_buku,
                            'penulis'       => $penulis,
                            'penerbit'      => $penerbit,
                            'tahun_terbit'  => $tahun_terbit,
                            'gambar'        => $gambar,
                        );
                        $this->db->insert('tabel_buku', $data);
                        $this->session->set_flashdata('pemberitahuan', '<div class="alert alert-primary" role="alert">Buku Berhasil Ditambahkan!</div>');
                        redirect('Home2/index2');
                }
    }

    public function hapus_buku($id_buku)
    {
        $this->T_buku->hapus_buku($id_buku);
        $this->session->set_flashdata('pemberitahuan', '<div class="alert alert-danger" role="alert">Buku Berhasil Dihapus!</div>');
        redirect('Home2/index2');
    }

    public function edit_buku($id_buku)
    {
        $data['title'] = 'Halaman Ubah Buku';
        $data['tabel_buku'] = $this->T_buku->ambil_id_buku_tabel_buku($id_buku);
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('home/edit_buku', $data);
        $this->load->view('templates/footer');
    }

    public function proses_edit_buku()
    {
        $this->T_buku->proses_edit_buku($id_buku);
        $this->session->set_flashdata('pemberitahuan', '<div class="alert alert-success" role="alert">Buku Berhasil Diubah!</div>');
        redirect('Home2/index2');
    }
}
?>