<?php

/**
* Controller User
*/

class User extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->library('TemplateUser');
        $this->load->model('m_mahasiswa','dbmahasiswa');
        if(!$this->session->userdata('username')){
            redirect('login');
        }
    }

    //read data
    function index() {
        $data['mahasiswa'] = $this->dbmahasiswa->get_mahasiswa();
        $data['title'] = "Data Mahasiswa";
        $this->templates->display_user('user/v_user', $data);
        // $msg = null;

        if($this->session->userdata('is_login') == true) {
			if ($this->session->userdata('akses')=='admin') {
				redirect('/home');
			}
        }
    }
}