<?php

class m_obat extends CI_Model{
    function tampil_data(){
        return $this->db->get('obat');

    }

    function insert_data($data){
        return $this->db->insert('obat',$data );
    }

    function edit_data($where){
		$this->db->where('id_obat', $where);
        return $this->db->get('obat')->row_array();

    }

    function update_data($where,$data){
		$this->db->where('id_obat', $where);
		$result = $this->db->update('obat', $data);
		if (!$result) {
			// tampilkan error
			log_message('error', 'Error Query: ' . $this->db->error()['message']);
		}
		return $result;

    }

    function hapus_data($where){
        $this->db->where($where);
        $this->db->delete('obat');
    }
}
