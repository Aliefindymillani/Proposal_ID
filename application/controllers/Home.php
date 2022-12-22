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
        if(!$this->session->userdata('username')){
            redirect('login');
        }
    }

    //read data
    public function index()
    {
        $data['title'] = "Home";
        $this->templateuser->disp_dashboard('user/dashboard', $data);
        if($this->session->userdata('is_login') == true) {
			if ($this->session->userdata('akses')=='admin') {
				redirect('home');
			}
        }
    }
    public function tambah()
    {
        $data['title'] = "Pengajuan";
        $this->templateuser->disp_pengajuan('user/pengajuan', $data);
    }
    public function status()
    {
        $data['title'] = "Status";
        $this->templateuser->disp_status('user/status', $data);
    }

    public function jadwal()
    {
        $data['title'] = "Jadwal Kegiatan";
        $this->templateuser->disp_jadwal('user/jadwal', $data);
    }
}