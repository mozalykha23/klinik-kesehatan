<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('m_login'); // Pastikan model 'm_login' sudah benar
        $this->load->library('form_validation'); // Memastikan form_validation diload
        $this->load->library('session'); // Pastikan session library diload
    }

    public function index() {
        // Tampilkan halaman login
        $this->load->view('v_login');
    }

    // public function login_aksi() {
    //     // Ambil data dari form
    //     $user = $this->input->post('username', true);
    //     $pass = $this->input->post('password', true); // Ambil password sebagai teks biasa

    //     // Validasi form
    //     $this->form_validation->set_rules('username', 'Username', 'required');
    //     $this->form_validation->set_rules('password', 'Password', 'required');

    //     if ($this->form_validation->run() != FALSE) {
    //         // Hash password menggunakan MD5 (lebih baik gunakan bcrypt atau password_hash untuk keamanan)
    //         $hashed_pass = md5($pass);

    //         // Data pencarian login
    //         $where = array(
    //             'username' => $user,
    //             'password' => $hashed_pass
    //         );

    //         // Cek login menggunakan model
    //         $ceklogin = $this->m_login->cek_login($where);

    //         if ($ceklogin->num_rows() > 0) {
    //             // Login berhasil, buat session
    //             $data_user = $ceklogin->row(); // Ambil data pengguna
    //             $sess_data = array(
    //                 'login'    => 'OK',
    //                 'username' => $data_user->username
    //             );
    //             $this->session->set_userdata($sess_data);

    //             // Arahkan ke halaman utama
    //             redirect('dashboard'); // Ganti 'dashboard' sesuai dengan controller tujuan Anda
    //         } else {
    //             // Login gagal
    //             $this->session->set_flashdata('error', 'Username atau password salah!');
    //             redirect('auth');
    //         }
    //     } else {
    //         // Jika validasi gagal
    //         $this->load->view('v_login');
    //     }
    // }

    public function login_aksi(){
        $user = $this->input->post('username');
        $pass = md5($this->input->post('password'));
        
        $this->db->where('username', $user);
        $cek = $this->db->get('user')->row();

        if($cek == NULL){
            redirect('auth');
        } elseif($cek->password == $pass){
            $data = array(
                'id' => $cek->id,
                'username' => $cek->username,
                'nama_lengkap' => $cek->nama_lengkap,
            );
            // $this->session->set_userdata();
            redirect('dashboard');
        }else{
            redirect('auth');
        }
    }

    public function logout() {
        // Hapus semua session dan arahkan ke halaman login
        $this->session->sess_destroy();
        redirect('auth');
    }
}
