<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class T_anggota extends CI_Model
    {
        public function SemuaData ()
        {
            return $this->db->get('tabel_anggota')->result_array();
        }

        public function proses_tambah_data()
        {
            $data = [
                "nama_anggota"  => $this->input->post('nama_anggota'),
                "jenis_kelamin" => $this->input->post('jenis_kelamin'),
                "alamat"        => $this->input->post('alamat'),
                "no_hp"         => $this->input->post('no_hp'),
            ];

            $this->db->insert('tabel_anggota', $data);
        }

        public function hapus_data($id_anggota)
        {
            $this->db->where('id_anggota' ,$id_anggota);
            $this->db->delete('tabel_anggota');
        }

        public function ambil_id_anggota_tabel_anggota($id_anggota)
        {
            return $this->db->get_where('tabel_anggota', ['id_anggota' => $id_anggota])->row_array();
        }

        public function proses_edit_data()
        {
            $data = [
                "nama_anggota"  => $this->input->post('nama_anggota'),
                "jenis_kelamin" => $this->input->post('jenis_kelamin'),
                "alamat"        => $this->input->post('alamat'),
                "no_hp"         => $this->input->post('no_hp'),
            ];
            
            $this->db->where('id_anggota', $this->input->post('id_anggota'));
            $this->db->update('tabel_anggota', $data);
        }
    }