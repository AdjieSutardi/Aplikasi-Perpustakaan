<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class T_buku extends CI_Model
    {
        public function AllData ()
        {
            return $this->db->get('tabel_buku')->result_array();
        }

        public function proses_tambah_buku()
        {
            $data = [
                "isbn"          => $this->input->post('isbn'),
                "nama_buku"     => $this->input->post('nama_buku'),
                "penulis"       => $this->input->post('penulis'),
                "penerbit"      => $this->input->post('penerbit'),
                "tahun_terbit"  => $this->input->post('tahun_terbit'),
            ];

            $this->db->insert('tabel_buku', $data);
        }

        public function hapus_buku($id_buku)
        {
            $this->db->where('id_buku', $id_buku);
            $this->db->delete('tabel_buku');
        }

        public function ambil_id_buku_tabel_buku($id_buku)
        {
            return $this->db->get_where('tabel_buku', ['id_buku' => $id_buku])->row_array();
        }

        public function proses_edit_buku()
        {
            $data = [
                "isbn"          => $this->input->post('isbn'),
                "nama_buku"     => $this->input->post('nama_buku'),
                "penulis"       => $this->input->post('penulis'),
                "penerbit"      => $this->input->post('penerbit'),
                "tahun_terbit"  => $this->input->post('tahun_terbit'),
            ];
            
            $this->db->where('id_buku', $this->input->post('id_buku'));
            $this->db->update('tabel_buku', $data);
        }
    }