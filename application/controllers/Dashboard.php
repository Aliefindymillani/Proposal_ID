<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	function __construct() {
        parent::__construct();
        $this->load->library('TemplateAdmin');
    }

	public function index()
	{
		$this->templateadmin->disp_dashboard('dashboard/index');
	}
	public function tambahuser()
	{
		$this->templateadmin->disp_tambah_user('dashboard/tambahuser');
	}
	public function listuser()
	{
		$this->templateadmin->disp_list_user('dashboard/listuser');
	}

	public function kegiatanmasuk()
	{
		$this->templateadmin->disp_kegiatan_masuk('dashboard/kegiatanmasuk');
	}

	public function kegiatanditerima()
	{
		$this->templateadmin->disp_kegiatan_diterima('dashboard/kegiatanditerima');
	}

	public function kegiatanditolak()
	{
		$this->templateadmin->disp_kegiatan_ditolak('dashboard/kegiatanditolak');
	}
}
