
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct() {
        parent::__construct();
        $this->load->library('Templates');
        // $this->load->model('M_auth');
    }

    // function index()
	// {
	// 	// $this->load->view('v_register');
    //     $data['title'] = "Login";
    //     $data['title_page'] = "Login";
    //     $this->templates->display_login('student/v_login', $data);
	// 	if($this->session->userdata('is_login') == true) {
	// 		if ($this->session->userdata('akses')=='admin') {
	// 			redirect('maurisa-arimbi-putri/19081010192/student');
	// 		}
	// 		elseif ($this->session->userdata('akses')=='user') {
	// 			redirect('data-mahasiswa');
	// 		}
	//   	}
	// }

	// function process()
	// {
	// 	$username = $this->input->post('username');
	// 	$password = $this->input->post('password');
	// 	$akses = $this->input->post('akses');
	// 	if(($this->M_auth->login_user($username,$password,$akses))){
	// 		if ($this->session->userdata('akses')=='admin') {
	// 			redirect('/Dashboard');
	// 		}
	// 		elseif ($this->session->userdata('akses')=='user') {
	// 			redirect('/home');
	// 		}
	// 	}
	// 	// else if (($this->M_auth->login_user($username,$password,$akses))){
	// 	// 	redirect('user');
	// 	// }
	// 	else
	// 	{
	// 		// $this->session->set_flashdata('error','Username & Password salah');
    //         $this->session->set_flashdata('msg','
    //             <div class="alert alert-danger fade show position-fixed top-3" role="alert">
	// 			    <strong>Failed!</strong> Login is failed.
	// 			    <button type="button" class="btn-close ml-auto" data-bs-dismiss="alert" aria-label="Close"></button>
	// 		    </div>
    //             ');
	// 		redirect('login');
	// 	}
	// }

	// public function logout()
	// {
	// 	$this->session->unset_userdata('username');
	// 	$this->session->unset_userdata('name');
	// 	$this->session->unset_userdata('akses');
	// 	$this->session->unset_userdata('is_login');
	// 	redirect('login');
	// }
}