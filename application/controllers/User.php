<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    function __construct(){
        parent::__construct();

        $this->load->model('m_user'); // Pastikan model 'm_user' sudah ada
    }

    public function index(){
        $data['title'] = "Manajemen User";
        $data['users'] = $this->m_user->tampil_data()->result_array(); // Ambil data dari model
        $this->load->view('v_header', $data);
        $this->load->view('v_user', $data);
        $this->load->view('v_footer');
    }
    
    public function tambah(){
        $data['title'] = "Tambah User Data";
        $this->load->view('v_header', $data);
        $this->load->view('v_user_tambah');
        $this->load->view('v_footer');
    }

    public function insert(){
        $u = $this->input->post('username');
        $n = $this->input->post('nama_lengkap');
        $p = md5($this->input->post('password'));

        $data = array(
            'username' => $u,
            'nama_lengkap' => $n,
            'password' => $p
        );

        if ($this->m_user->insert_data($data)) {
            $this->session->set_flashdata('message', 'Data berhasil disimpan!');
        } else {
            $this->session->set_flashdata('message', 'Data gagal disimpan.');
        }

        redirect('user');
    }
    
    public function edit($id){
        $data['title'] = "Edit User Data";

        $data['r'] = $this->m_user->edit_data($id); // Ambil 1 row dari model
        $this->load->view('v_header', $data);
        $this->load->view('v_user_edit', $data); // Pastikan file view 'v_user_edit' ada
        $this->load->view('v_footer');
    }

    public function update(){
        $id = $this->input->post('id'); // Ambil ID
        $u = $this->input->post('username');
        $n = $this->input->post('nama_lengkap');
        $p = $this->input->post('password');

        // Jika password tidak diubah, jangan update password
        if (!empty($p)) {
            $data = array(
                'username' => $u,
                'nama_lengkap' => $n,
                'password' => md5($p)
            );
        } else {
            $data = array(
                'username' => $u,
                'nama_lengkap' => $n
            );
        }
        if ($this->m_user->update_data($id, $data)) {
			$this->session->set_flashdata('message', 'Data berhasil diperbarui!');
		} else {
			log_message('error', 'Gagal memperbarui data user dengan ID: ' . $id);
			$this->session->set_flashdata('message', 'Data gagal diperbarui.');
		}

        redirect('user');
    }

    function hapus($id){
        $where = array('id' => $id);
        $this->m_user->hapus_data($where);
        redirect('user');
    }
}
