<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    function __construct(){
        parent::__construct();

        $this->load->model('auth_model');
    }
    public function index(){

        $this->load->view('login/login');
    }
    public function login_proses() {
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $where = array(
            'email' => $email,
            'password' => md5($password)
            );
        $cek = $this->auth_model->cek_login("auth",$where)->num_rows();
        if($cek > 0){
    
            $data_session = array(
                'email' => $email,
                'status' => "login"
                );
    
            $this->session->set_userdata($data_session);
    
            redirect(base_url("warga"));
        }else{
            echo "Username dan password salah !";
        }
    }

    function logout(){
        // $this->load->library('session');

        $this->session->sess_destroy();
        redirect(base_url('/'));
    }

}