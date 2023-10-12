<?php
class Auth extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        // Load library, helper, atau model yang diperlukan
        $this->load->helper('form');
    }

    public function login() {
        // Lakukan validasi dan autentikasi pengguna di sini

        // Jika login berhasil, alihkan ke halaman dashboard atau halaman lainnya
        // Misalnya: redirect('dashboard');
        
        // Jika login gagal, tampilkan kembali halaman login dengan pesan kesalahan
        $this->load->view('login');
    }
}
