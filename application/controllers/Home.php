<?php

/**
* Controller User
*/

class Home extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->library('TemplateUser');
        // $this->load->model('m_mahasiswa','dbmahasiswa');
        // if(!$this->session->userdata('username')){
        //     redirect('login');
        // }
    }

    //read data
    function index() {
        echo "halo";
    }
}