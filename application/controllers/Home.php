<?php

/**
 * Controller User
 */

class Home extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('TemplateUser');
    }

    //read data
    public function index()
    {
        $this->templateuser->disp_dashboard('user/dashboard');
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