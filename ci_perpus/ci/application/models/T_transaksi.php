<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class T_transaksi extends CI_Model
    {
        public function DataSemua ()
        {
            return $this->db->get('tabel_transaksi')->result_array();
        }

        public function proses_tambah_transaksi()
        {
            $data = [
                "tanggal_transaksi" => $this->input->post('tanggal_transaksi'),
                "id_anggota"        => $this->input->post('id_anggota'),
                "id_pegawai"        => $this->input->post('id_pegawai'),
                "id_buku"           => $this->input->post('id_buku'),
                "quantity"          => $this->input->post('quantity'),
                "jenis_transaksi"   => $this->input->post('jenis_transaksi'),
            ];

            $this->db->insert('tabel_transaksi', $data);
        }

        public function hapus_transaksi($id_transaksi)
        {
            $this->db->where('id_transaksi', $id_transaksi);
            $this->db->delete('tabel_transaksi');
        }

        public function ambil_id_transaksi_tabel_transaksi($id_transaksi)
        {
            return $this->db->get_where('tabel_transaksi', ['id_transaksi' => $id_transaksi])->row_array();
        }

        public function proses_edit_transaksi()
        {
            $data = [
                "tanggal_transaksi" => $this->input->post('tanggal_transaksi'),
                "id_anggota"        => $this->input->post('id_anggota'),
                "id_pegawai"        => $this->input->post('id_pegawai'),
                "id_buku"           => $this->input->post('id_buku'),
                "quantity"          => $this->input->post('quantity'),
                "jenis_transaksi"   => $this->input->post('jenis_transaksi'),
            ];
            
            $this->db->where('id_transaksi', $this->input->post('id_transaksi'));
            $this->db->update('tabel_transaksi', $data);
        }
    }