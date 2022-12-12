<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	function __construct() {
        parent::__construct();
        // $this->load->library('Templates');
        // $this->load->model('M_auth');
    }

	public function index()
	{
		$this->load->view('dashboard/index');
	}
	public function tambahuser()
	{
		$this->load->view('dashboard/tambahuser');
	}
	public function listuser()
	{
		$this->load->view('dashboard/listuser');
	}

	public function kegiatanmasuk()
	{
		$this->load->view('dashboard/kegiatanmasuk');
	}

	public function kegiatanditerima()
	{
		$this->load->view('dashboard/kegiatanditerima');
	}
}
