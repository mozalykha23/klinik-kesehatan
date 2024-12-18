<?php

class M_user extends CI_Model{
    function tampil_data(){
        return $this->db->get('user');

    }

    function insert_data($data){
        return $this->db->insert('user',$data );
    }

    function edit_data($where){
		$this->db->where('id', $where);
        return $this->db->get('user')->row_array();
    }

    function update_data($where, $data) {
		$this->db->where('id', $where);
		$result = $this->db->update('user', $data);
		if (!$result) {
			// tampilkan error
			log_message('error', 'Error Query: ' . $this->db->error()['message']);
		}
		return $result;
	}

    function hapus_data($where){
        $this->db->where($where);
        $this->db->delete('user');
    }
}
