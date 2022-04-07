<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class T_pegawai extends CI_Model
    {
        public function DataSemua ()
        {
            return $this->db->get('tabel_pegawai')->result_array();
        }

        public function proses_tambah_pegawai()
        {
            $data = [
                "nama_pegawai"  => $this->input->post('nama_pegawai'),
                "jenis_kelamin" => $this->input->post('jenis_kelamin'),
                "alamat"        => $this->input->post('alamat'),
                "no_hp"         => $this->input->post('no_hp'),
                "jabatan"       => $this->input->post('jabatan'),
            ];

            $this->db->insert('tabel_pegawai', $data);
        }

        public function hapus_pegawai($id_pegawai)
        {
            $this->db->where('id_pegawai', $id_pegawai);
            $this->db->delete('tabel_pegawai');
        }

        public function ambil_id_pegawai_tabel_pegawai($id_pegawai)
        {
            return $this->db->get_where('tabel_pegawai', ['id_pegawai' => $id_pegawai])->row_array();
        }

        public function proses_edit_pegawai()
        {
            $data = [
                "nama_pegawai"  => $this->input->post('nama_pegawai'),
                "jenis_kelamin" => $this->input->post('jenis_kelamin'),
                "alamat"        => $this->input->post('alamat'),
                "no_hp"         => $this->input->post('no_hp'),
                "jabatan"       => $this->input->post('jabatan'),
            ];
            
            $this->db->where('id_pegawai', $this->input->post('id_pegawai'));
            $this->db->update('tabel_pegawai', $data);
        }
    }