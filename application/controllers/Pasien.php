<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pasien extends CI_Controller {

    function __construct(){
        parent::__construct();

        $this->load->model('m_pasien'); // Pastikan model 'm_pasien' sudah ada
    }

    public function index(){
        $data['title'] = "Manajemen pasien";
        $data['pasiens'] = $this->m_pasien->tampil_data()->result_array(); // Ambil data dari model
        $this->load->view('v_header', $data);
        $this->load->view('pasien/v_data', $data);
        $this->load->view('v_footer');
    }
    
    public function tambah(){
        $data['title'] = "Tambah pasien Data";
        $this->load->view('v_header', $data);
        $this->load->view('pasien/v_data_tambah');
        $this->load->view('v_footer');
    }

    public function insert()
{
    // Ambil data dari form input
    $nama_pasien = $this->input->post('nama_pasien', TRUE); // Menggunakan filter XSS untuk keamanan
    $jk = $this->input->post('jenis_kelamin', TRUE);
    $umur = $this->input->post('umur', TRUE);

    // Data yang akan disimpan
    $data = array(
        'nama_pasien' => $nama_pasien,
        'jenis_kelamin' => $jk, // Sesuaikan nama kolom database
        'umur' => $umur
    );

    // Simpan data ke database menggunakan model
    $this->m_pasien->insert_data($data); // Pastikan nama fungsi di model benar

    // Redirect ke halaman daftar pasien
    redirect('pasien');
}

    
public function edit($id)
{
    // Lanjutkan proses mengambil data dan load view
    $data['title'] = "Edit Data Pasien";
    $where = array('id_pasien' => $id);
    $data['pasien'] = $this->m_pasien->edit_data($id);

    $this->load->view('v_header', $data);
    $this->load->view('pasien/v_data_edit', $data);
    $this->load->view('v_footer');
}


    public function update(){
        $id = $this->input->post('id'); // Ambil ID
        $nama = $this->input->post('nama_pasien');
        $jenis_kelamin = $this->input->post('jenis_kelamin');
        $umur =($this->input->post('umur'));

        $data = array(
            'nama_pasien' => $nama,
            'jenis_kelamin' => $jenis_kelamin,
            'umur' => $umur
        );

        if ($this->m_pasien->update_data($data, $where)) {
            $this->session->set_flashdata('message', 'Data berhasil diperbarui!');
        } else {
            $this->session->set_flashdata('message', 'Data gagal diperbarui.');
        }

        redirect('pasien');
    }

    function hapus($id){
        $where = array('id_pasien' => $id);
        $this->m_pasien->hapus_data($where);
        redirect('pasien');
    }
}
