<?php

class m_pasien extends CI_Model{
    function tampil_data(){
        return $this->db->get('pasien');

    }

    function insert_data($data){
        return $this->db->insert('pasien',$data );
    }

    function edit_data($where){
		$this->db->where('id_pasien', $where);
        return $this->db->get('pasien')->row_array();

    }

    function update_data($data, $where){
		$this->db->where('id_pasien', $where);
		$result = $this->db->update('pasien', $data);
		if (!$result) {
			// tampilkan error
			log_message('error', 'Error Query: ' . $this->db->error()['message']);
		}
		return $result;

    }

    function hapus_data($where){
        $this->db->where($where);
        $this->db->delete('pasien');
    }
}
