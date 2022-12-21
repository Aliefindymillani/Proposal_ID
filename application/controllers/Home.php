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
        $this->templateuser->disp_pengajuan('user/pengajuan');
    }
    public function status()
    {
        $this->templateuser->disp_status('user/status');
    }

    public function jadwal()
    {
        $this->templateuser->disp_jadwal('user/jadwal');
    }
}