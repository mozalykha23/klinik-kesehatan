<?php

class m_dokter extends CI_Model{
    function tampil_data(){
        return $this->db->get('dokter');

    }

    function insert_data($data){
        return $this->db->insert('dokter',$data );
    }

    function edit_data($where){
		$this->db->where('id_dokter', $where);
        return $this->db->get('dokter')->row_array();
    }

    function update_data($where,$data){
		$this->db->where('id_dokter', $where);
		$result = $this->db->update('dokter', $data);
		if (!$result) {
			// tampilkan error
			log_message('error', 'Error Query: ' . $this->db->error()['message']);
		}
		return $result;

    }

    function hapus_data($where){
        $this->db->where($where);
        $this->db->delete('dokter');
    }
}
