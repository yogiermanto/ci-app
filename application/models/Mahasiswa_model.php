<?php

class Mahasiswa_model extends CI_model {

    public function getAllMahasiswa()
    {
        return $this->db->get('mahasiswa')->result_array();
    }

    public function tambahDataMahasiswa()
    {
        $data = [
            "nama" => $this->input->post('nama', TRUE),
            "npm" => $this->input->post('npm', TRUE),
            "email" => $this->input->post('email', TRUE),
            "jurusan" => $this->input->post('jurusan', TRUE),
        ];

        $this->db->set('id', 'UUID()', FALSE);
        $this->db->insert('mahasiswa', $data);
    }

    public function hapusDataMahasiswa($id)
    {
        // $this->db->where('id', $id);
        $this->db->delete('mahasiswa', ['id' => $id]);
    }

    public function getByMahasiswaId($id)
    {
        return $this->db->get_where('mahasiswa', ['id' => $id])->row_array();
    }

    
    public function ubahDataMahasiswa()
    {
        $data = [
            "nama" => $this->input->post('nama', TRUE),
            "npm" => $this->input->post('npm', TRUE),
            "email" => $this->input->post('email', TRUE),
            "jurusan" => $this->input->post('jurusan', TRUE),
        ];

        $this->db->update('mahasiswa', $data, ['id' => $this->input->post('id', TRUE)]);
    }
}