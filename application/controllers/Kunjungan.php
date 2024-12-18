<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kunjungan extends CI_Controller {

    function __construct(){
        parent::__construct();

        $this->load->model('m_kunjungan'); 
        $this->load->model('m_pasien');
        $this->load->model('m_dokter');
        $this->load->model('m_obat');
    }

    public function index(){
        $data['title'] = "Data Kunjungan Berobat";
        $data['kunjungans'] = $this->m_kunjungan->tampil_data(); // Ambil data dari model
        $this->load->view('v_header', $data);
        $this->load->view('kunjungan/v_data', $data);
        $this->load->view('v_footer');
    }
    
    public function tambah(){
        $data['title'] = "Kunjungan Baru";

        $data['pasien'] = $this->m_pasien->tampil_data()->result_array();
        $data['dokter'] = $this->m_dokter->tampil_data()->result_array();

        $this->load->view('v_header', $data);
        $this->load->view('kunjungan/v_data_tambah', $data);
        $this->load->view('v_footer');
    }

    public function insert(){
        $tgl = $this->input->post('tgl_berobat');
        $pasien = $this->input->post('pasien');
        $dokter = $this->input->post('dokter');

        $data = array(
            'tgl_berobat' => $tgl,
            'id_pasien' => $pasien,
            'id_dokter' => $dokter
        );

        $this->m_kunjungan->insert_data($data);

        redirect('kunjungan');
    }
    
    public function edit($id){
        $data['title'] = "Edit Data Kunjungan/Berobat Pasien";

        $where = array('id_kunjungan' => $id); // Ambil data berdasarkan ID
        $data['edit'] = $this->m_kunjungan->edit_data($id);
        
        $data['pasien'] = $this->m_pasien->tampil_data()->result_array();
        $data['dokter'] = $this->m_dokter->tampil_data()->result_array();
        $this->load->view('v_header', $data);
        $this->load->view('kunjungan/v_data_edit', $data); // Pastikan file view 'v_data_edit' ada
        $this->load->view('v_footer');
    }

    public function update(){
        $id = $this->input->post('id'); // Ambil ID
        $tgl = $this->input->post('tgl_berobat');
        $pasien = $this->input->post('pasien');
        $dokter = $this->input->post('dokter');

        $data = array(
            'tgl_berobat' => $tgl,
            'id_pasien' => $pasien,
            'id_dokter' => $dokter
        );

        $where = array('id_kunjungan' => $id); // Fix: ID column corrected
        $this->m_kunjungan->update_data($data, $where);

        redirect('kunjungan');
    }

    public function hapus($id){
        $where = array('id_kunjungan' => $id); // Fix: ID column corrected
        $this->m_kunjungan->hapus_data($where);
        redirect('kunjungan');
    }

    public function rekam($id = null) {
        if ($id === null) {
            show_error("Parameter ID kunjungan tidak valid.", 400, "Kesalahan Data");
        }
        
        $data['title'] = "Rekam Medis";
        $data['d'] = $this->m_kunjungan->tampilan_rm($id);

        $query = $this->db->query("SELECT id_pasien FROM berobat WHERE id_berobat = '$id'")->row_array();
        if (!$query) {
            show_error("ID kunjungan tidak valid atau tidak ditemukan.", 404, "Kesalahan Data");
        }

        $id_pasien = $query['id_pasien'];
        $data['riwayat'] = $this->m_kunjungan->tampilan_riwayat($id_pasien);
        $data['obat'] = $this->m_obat->tampil_data()->result_array();
        $data['resep'] = $this->m_kunjungan->tampilan_resep($id);

        $this->load->view('v_header', $data);
        $this->load->view('kunjungan/v_rekam_medis', $data);
        $this->load->view('v_footer');
    }

    public function insert_rm(){
        $id_berobat = $this->input->post('id');
        $keluhan = $this->input->post('keluhan');
        $diagnosa = $this->input->post('diagnosa');
        $penatalaksanaan = $this->input->post('penatalaksanaan'); // Fix: typo pada variable

        $data = array(
            'keluhan_pasien' => $keluhan,
            'hasil_diagnosa' => $diagnosa,
            'penatalaksanaan' => $penatalaksanaan
        );

        $where = array('id_berobat' => $id_berobat); // Fix: typo key corrected
        $this->m_kunjungan->update_data($data, $where);

        redirect('kunjungan/rekam/'.$id_berobat);
    }

    public function insert_resep(){
        $id_berobat = $this->input->post('id');
        $obat = $this->input->post('obat');

        foreach ($obat as $o) {
            $data = array(
                'id_berobat' => $id_berobat,
                'id_obat' => $o
            );

            $this->m_kunjungan->insert_resep($data);
        }

        redirect('kunjungan/rekam/'.$id_berobat);
    }
    
    public function hapus_resep($id, $id_berobat) {
        // Menyiapkan kondisi untuk menghapus berdasarkan id_resep
        $where = array('id_resep' => $id);
    
        // Memanggil model untuk menghapus data
        $this->m_kunjungan->hapus_resep($where);
    
        // Redirect kembali ke halaman rekam dengan ID berobat
        redirect('kunjungan/rekam/' . $id_berobat);
    }
}
