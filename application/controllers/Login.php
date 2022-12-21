
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct() {
        parent::__construct();
        $this->load->library('TemplateUser');
        $this->load->model('M_Auth');
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

	function process()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$akses = $this->input->post('akses');
		if(($this->M_Auth->login($username, $password, $akses))) {
			if ($this->session->userdata('akses')=='admin') {
				redirect('admin/home');
			}
			else if ($this->session->userdata('akses')=='user') {
				redirect('home');
			}
		}
		else {
			// $this->session->set_flashdata('error','Username & Password salah');
            $this->session->set_flashdata('msg','
                <div class="alert alert-danger fade show position-fixed top-3" role="alert">
				    <strong>Failed!</strong> Login is failed.
				    <button type="button" class="btn-close ml-auto" data-bs-dismiss="alert" aria-label="Close"></button>
			    </div>
                ');
			redirect('login');
		}
	}
}