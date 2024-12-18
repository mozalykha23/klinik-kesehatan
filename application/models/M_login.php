<?php
class M_login extends CI_Model {

    public function cek_login($where) {
        // Pastikan tabel `users` dan kolom `username` serta `password` sesuai dengan database Anda
        return $this->db->get_where('user', $where);
    }
}
