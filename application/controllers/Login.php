
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct() {
        parent::__construct();
        $this->load->library('TemplateUser');
        // $this->load->model('M_auth');
    }

    function index()
	{
        $data['title'] = "Login";
        $data['title_page'] = "Login";
        $this->templateuser->disp_login('login', $data);

		if($this->session->userdata('is_login') == true) {
			if ($this->session->userdata('akses')=='admin') {
				redirect('admin/home');
			}
			elseif ($this->session->userdata('akses')=='user') {
				redirect('home');
			}
	  	}
	}
}