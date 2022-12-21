<?php

/**
* Controller Mahasiswa
*/

class SignupUser extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->library('TemplateUser');
        $this->load->model('M_Auth');
    }

    function index()
	{
        $data['title'] = "Sign Up";
        $data['title_page'] = "Sign Up";
        $this->templateuser->disp_signup_user('user/signup', $data);
	}

    function process()
	{
        $this->form_validation->set_rules('email', 'email','trim|required|min_length[1]|max_length[255]');
		$this->form_validation->set_rules('username', 'username','trim|required|min_length[1]|max_length[255]|is_unique[tb_user.username]');
		$this->form_validation->set_rules('password', 'password','trim|required|min_length[1]|max_length[255]');
        $this->form_validation->set_rules('name', 'name','trim|required|min_length[1]|max_length[255]');
        $this->form_validation->set_rules('akses', 'akses','trim|required|min_length[1]|max_length[255]');
		
		if ($this->form_validation->run()==true)
	   	{
            $email = $this->input->post('email');
			$username = $this->input->post('username');
			$password = $this->input->post('password');
            $name = $this->input->post('name');
			$akses = $this->input->post('akses');
			$this->M_Auth->signup($email, $username, $password, $name, $akses);
			redirect('login');
		}
		else
		{
			// $this->session->set_flashdata('error', validation_errors());
            $this->session->set_flashdata('msg','
                <div class="alert alert-danger fade show position-fixed top-3" role="alert">
				    <strong>Failed!</strong> There is already a user with this username.
				    <button type="button" class="btn-close ml-auto" data-bs-dismiss="alert" aria-label="Close"></button>
			    </div>
                ');
			redirect('sign-up');
		}
	}
}