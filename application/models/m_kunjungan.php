<?php

class m_kunjungan extends CI_Model {

    function tampil_data() {
        $query = $this->db->query("
            SELECT berobat.*, 
                   pasien.nama_pasien, 
                   pasien.umur, 
                   pasien.jenis_kelamin, 
                   dokter.nama_dokter 
            FROM berobat 
            INNER JOIN pasien ON berobat.id_pasien = pasien.id_pasien 
            INNER JOIN dokter ON berobat.id_dokter = dokter.id_dokter
        ");
        return $query->result_array();
    }

    function insert_data($data) {
        return $this->db->insert('berobat', $data);
    }

    function edit_data($id) {
        // Fungsi ini seharusnya mengambil data berdasarkan ID untuk diedit
        $this->db->where('id_berobat', $id);
        return $this->db->get('berobat')->row_array();
    }

    function update_data($data, $where) {
        $this->db->where($where);
        return $this->db->update('berobat', $data);
    }

    function hapus_data($where) {
        $this->db->where($where);
        return $this->db->delete('berobat'); // Perbaikan fungsi hapus
    }

    function tampilan_rm($id) {
        $query = $this->db->query("
            SELECT berobat.*, 
                   pasien.nama_pasien, 
                   pasien.umur, 
                   pasien.jenis_kelamin, 
                   dokter.nama_dokter 
            FROM berobat 
            INNER JOIN pasien ON berobat.id_pasien = pasien.id_pasien 
            INNER JOIN dokter ON berobat.id_dokter = dokter.id_dokter
            WHERE berobat.id_berobat = '$id'
        ");
        return $query->row_array();
    }

    function tampilan_riwayat($id_pasien) {
        $query = $this->db->query("
            SELECT berobat.*, 
                   pasien.nama_pasien, 
                   pasien.umur, 
                   pasien.jenis_kelamin, 
                   dokter.nama_dokter 
            FROM berobat 
            INNER JOIN pasien ON berobat.id_pasien = pasien.id_pasien 
            INNER JOIN dokter ON berobat.id_dokter = dokter.id_dokter
            WHERE pasien.id_pasien = '$id_pasien'
        ");
        return $query->result_array(); // Ubah agar mengembalikan array
    }

    function tampilan_resep($id_berobat) {
        $query = $this->db->query("
            SELECT resep_obat.*, 
                   obat.nama_obat 
            FROM resep_obat
            INNER JOIN obat ON resep_obat.id_obat = obat.id_obat
            WHERE resep_obat.id_berobat = '$id_berobat'
        ");
        return $query->result_array(); // Perbaikan kesalahan query
    }

    public function insert_resep($data) {
        $this->db->insert('resep_obat', $data);
    }


    public function hapus_resep($where) {
        $this->db->delete('resep_obat', $where);
    }
}
