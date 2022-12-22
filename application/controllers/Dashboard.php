<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	function __construct() {
        parent::__construct();
        $this->load->library('TemplateAdmin');
    }

	public function index()
	{
		$data['title'] = "Home";
		$this->templateadmin->disp_dashboard('dashboard/index', $data);
	}
	public function tambahuser()
	{
		$data['title'] = "Tambah User";
		$this->templateadmin->disp_tambah_user('dashboard/tambahuser', $data);
	}
	public function listuser()
	{
		$data['title'] = "Daftar User";
		$this->templateadmin->disp_list_user('dashboard/listuser', $data);
	}

	public function kegiatanmasuk()
	{
		$data['title'] = "Kegiatan Masuk";
		$this->templateadmin->disp_kegiatan_masuk('dashboard/kegiatanmasuk', $data);
	}

	public function kegiatanditerima()
	{
		$data['title'] = "Kegiatan Diterima";
		$this->templateadmin->disp_kegiatan_diterima('dashboard/kegiatanditerima', $data);
	}

	public function kegiatanditolak()
	{
		$data['title'] = "Kegiatan Ditolak";
		$this->templateadmin->disp_kegiatan_ditolak('dashboard/kegiatanditolak', $data);
	}
}
