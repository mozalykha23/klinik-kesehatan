<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {

    function __construct() {
        parent::__construct();

 
        $this->load->model('m_dokter');
        $this->load->model('m_pasien');
        $this->load->model('m_kunjungan');
    }

    public function index() {
        redirect('dashboard');
    }

    public function data_dokter()
    {
        // Load database connection
        $this->load->database();
    
        // Query ke database
        $query = $this->db->query("SELECT * FROM dokter");
    
        // Kirim hasil query ke view
        $data['dokter'] = $query->result_array(); // Mengubah hasil query ke array
        $this->load->view('laporan/v_lap_dokter', $data);
    }
    
    public function data_pasien()
{
    // Load database
    $this->load->database();

    // Jalankan query
    $query = $this->db->query("SELECT * FROM pasien");

    // Ubah hasil query menjadi array
    $data['pasien'] = $query->result_array(); // Gunakan result_array untuk menghasilkan array

    // Kirim data ke view
    $this->load->view('laporan/v_lap_pasien', $data);
}


    public function data_kunjungan() {
        $data['title'] = "Laporan Data Kunjungan";

        $data['berobat'] = $this->m_kunjungan->tampil_data();

        $this->load->view('laporan/v_lap_kunjungan', $data);
    }
}
