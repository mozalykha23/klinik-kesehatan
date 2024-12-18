<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Obat extends CI_Controller {

    function __construct(){
        parent::__construct();

        $this->load->model('m_obat'); // Pastikan model 'm_obat' sudah ada
    }

    public function index(){
        $data['title'] = "Manajemen Data Obat";
        $data['obats'] = $this->m_obat->tampil_data()->result_array(); // Ambil data dari model
        $this->load->view('v_header', $data);
        $this->load->view('obat/data_obat', $data);
        $this->load->view('v_footer');
    }
    
    public function tambah(){
        $data['title'] = "Tambah obat Data";
        $this->load->view('v_header', $data);
        $this->load->view('obat/data_tambah_obat');
        $this->load->view('v_footer');
    }

    public function insert(){
        $nama = $this->input->post('nama_obat');

        $data = array(
            'nama_obat' => $nama
        );

        if ($this->m_obat->insert_data($data)) {
            $this->session->set_flashdata('message', 'Data berhasil disimpan!');
        } else {
            $this->session->set_flashdata('message', 'Data gagal disimpan.');
        }

        redirect('obat');
    }
    
    public function edit($id){
        $data['title'] = "Edit Obat Data";

        $data['r'] = $this->m_obat->edit_data($id); // Ambil 1 row dari model
        $this->load->view('v_header', $data);
        $this->load->view('obat/data_edit_obat', $data); // Pastikan file view 'v_obat_edit' ada
        $this->load->view('v_footer');
    }

    public function update(){
        $id = $this->input->post('id'); // Ambil ID
        $nama = $this->input->post('nama_obat');
		
        $data = array(
            'nama_obat' => $nama
        );
        if ($this->m_obat->update_data($id, $data)) {
            $this->session->set_flashdata('message', 'Data berhasil diperbarui!');
        } else {
            $this->session->set_flashdata('message', 'Data gagal diperbarui.');
        }

        redirect('obat');
    }

    function hapus($id){
        $where = array('id_obat' => $id);
        $this->m_obat->hapus_data($where);
        redirect('obat');
    }
}
