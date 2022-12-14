<?php

/**
 * Controller User
 */

class User extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('TemplateUser');
        // $this->load->model('m_mahasiswa','dbmahasiswa');
        // if(!$this->session->userdata('username')){
        //     redirect('login');
        // }
    }

    //read data
    public function index()
    {
        $this->load->view('user/dashboard');
    }
    public function tambah()
    {
        $this->load->view('user/pengajuan');
    }
    public function status()
    {
        $this->load->view('user/status');
    }

    public function jadwal()
    {
        $this->load->view('user/jadwal');
    }
}