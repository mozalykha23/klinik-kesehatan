<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dokter extends CI_Controller {

    function __construct(){
        parent::__construct();

        $this->load->model('m_dokter'); // Pastikan model 'm_user' sudah ada
    }

    public function index(){
        $data['title'] = "Manajemen Dokter";
        $data['dokters'] = $this->m_dokter->tampil_data()->result_array(); // Ambil data dari model
        $this->load->view('v_header', $data);
        $this->load->view('dokter/v_data', $data);
        $this->load->view('v_footer');
    }
    
    public function tambah(){
        $data['title'] = "Tambah Data Dokter";
        $this->load->view('v_header', $data);
        $this->load->view('dokter/v_data_tambah');
        $this->load->view('v_footer');
    }

    public function insert(){
        $nama = $this->input->post('nama_dokter');

        $data = array(
            'nama_dokter' => $nama,
        );

		if ($this->m_dokter->insert_data($data)) {
            $this->session->set_flashdata('message', 'Data berhasil disimpan!');
			log_message('error', 'Gagal memperbarui data user dengan ID: ' );

        } else {
            $this->session->set_flashdata('message', 'Data gagal disimpan.');
        }

        redirect('dokter');
    }
    
    public function edit($id_dokter){
        $data['title'] = "Edit User Data";

        $data['r'] = $this->m_dokter->edit_data($id_dokter); // Ambil 1 row dari model
        $this->load->view('v_header', $data);
        $this->load->view('dokter/v_data_edit', $data); // Pastikan file view 'v_user_edit' ada
        $this->load->view('v_footer');
    }

    public function update(){
        $id_dokter = $this->input->post('id_dokter'); // Ambil ID
        $nama_dokter = $this->input->post('nama_dokter');

        // Jika password tidak diubah, jangan update password

            $data = array(
                'nama_dokter' => $nama_dokter
            );


		if ($this->m_dokter->update_data($id_dokter, $data)) {
			$this->session->set_flashdata('message', 'Data berhasil diperbarui!');
		} else {
			log_message('error', 'Gagal memperbarui data user dengan ID: ' . $id_dokter);
			$this->session->set_flashdata('message', 'Data gagal diperbarui.');
		}

        redirect('dokter');
    }

    function hapus($id){
        $where = array('id_dokter' => $id);
        $this->m_dokter->hapus_data($where);
        redirect('dokter');
    }
}
