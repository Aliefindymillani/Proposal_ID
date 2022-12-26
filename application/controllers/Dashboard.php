<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	function __construct() {
        parent::__construct();
		$this->load->helper('url');
        $this->load->library('TemplateAdmin');
		$this->load->model('M_UploadProposal');
		$this->load->model('M_Proposal');
		$this->load->model('M_AddUser');
		if(!$this->session->userdata('username')){
            redirect('login');
        }
    }

	public function index()
	{
		$data['title'] = "Home";
		$data['users'] = $this->session->userdata('username');
		$data['proposal_proses'] = $this->M_Proposal->countProposal('PROSES');
		$data['proposal_terima'] = $this->M_Proposal->countProposal('TERIMA');
		$data['proposal_tolak'] = $this->M_Proposal->countProposal('TOLAK');
		$this->templateadmin->disp_dashboard('dashboard/index', $data);
		if($this->session->userdata('is_login') == true) {
			if ($this->session->userdata('akses')=='user') {
				redirect('admin/home');
			}
	  	}
	}
	public function tambahuser()
	{
		$data['title'] = "Tambah User";
		$data['users'] = $this->session->userdata('username');
		$this->templateadmin->disp_tambah_user('dashboard/tambahuser', $data);
	}

	public function listuser()
	{
		$data['title'] = "Daftar User";
		$data['users'] = $this->session->userdata('username');
		$data["data_user"] = $this->M_AddUser->getAll();
		$this->templateadmin->disp_list_user('dashboard/listuser', $data);
	}

	public function kegiatanmasuk()
	{
		$keyword=$this->input->post('search');
		if (!empty($keyword)) {
			$data['title'] = "Kegiatan Masuk";
			$data['title_page'] = "Kegiatan Masuk";
			$data['users'] = $this->session->userdata('username');
			$data['data_proposal']=$this->M_Proposal->search($keyword);
			$this->templateadmin->disp_kegiatan_masuk('dashboard/empty_table', $data);
		}else {
			$data['title'] = "Kegiatan Masuk";
			$data['title_page'] = "Kegiatan Masuk";
			$data['users'] = $this->session->userdata('username');
			$data["data_proposal"] = $this->M_Proposal->getAll();
			$this->templateadmin->disp_kegiatan_masuk('dashboard/kegiatanmasuk', $data);
		}
	}

	public function kegiatanditerima()
	{
		$keyword=$this->input->post('search');
		if (!empty($keyword)) {
			$data['title'] = "Kegiatan Diterima";
			$data['title_page'] = "Kegiatan Diterima";
			$data['users'] = $this->session->userdata('username');
			$data['data_proposal']=$this->M_Proposal->search($keyword);
			$this->templateadmin->disp_kegiatan_diterima('dashboard/empty_table', $data);
		}else {
			$data['title'] = "Kegiatan Diterima";
			$data['title_page'] = "Kegiatan Diterima";
			$data['users'] = $this->session->userdata('username');
			$data["data_proposal"] = $this->M_Proposal->getStatus('TERIMA');
			$this->templateadmin->disp_kegiatan_diterima('dashboard/kegiatanditerima', $data);
		}
	}

	public function kegiatanditolak()
	{

		$keyword=$this->input->post('search');
		if (!empty($keyword)) {
			$data['title'] = "Kegiatan Ditolak";
			$data['title_page'] = "Kegiatan Ditolak";
			$data['users'] = $this->session->userdata('username');
			$data['data_proposal']=$this->M_Proposal->search($keyword);
			$this->templateadmin->disp_kegiatan_ditolak('dashboard/empty_table', $data);
		}else {
			$data['title'] = "Kegiatan Ditolak";
			$data['title_page'] = "Kegiatan Ditolak";
			$data['users'] = $this->session->userdata('username');
			$data["data_proposal"] = $this->M_Proposal->getStatus('TOLAK');
			$this->templateadmin->disp_kegiatan_ditolak('dashboard/kegiatanditolak', $data);
		}
	}

	public function formproposal()
	{
		$data['title'] = "Kegiatan Ditolak";
		$data['users'] = $this->session->userdata('username');
		$this->templateadmin->disp_form_proposal('dashboard/form_proposal', $data);
	}

	public function prosesuploadform()
	{
		
		$config['upload_path'] = './assets/uploads/';
		$config['allowed_types'] = 'pdf';
		$config['max_filename'] = 10;
		$config['encrypt_name'] = TRUE;

		$this->load->library('upload', $config);
		$this->upload->initialize($config);

		if($this->upload->do_upload('berkas')) {

			$fileData = $this->upload->data();

			$DateNow = date('Y-m-d h:m:s');
			$status = 'PROSES';
			$username = $this->session->userdata('username');

			$nama_kegiatan = $this->input->post('nama_kegiatan');
			$tgl_pengajuan = $DateNow;
			$ketua_pelaksana = $this->input->post('ketua_pelaksana');
			$deskripsi = $this->input->post('deskripsi');
			$berkas_file = $fileData['file_name'];
			$tgl_mulai = $this->input->post('tgl_mulai');
			$tgl_selesai = $this->input->post('tgl_selesai');

			$this->M_UploadProposal->uploadform($nama_kegiatan, $tgl_pengajuan, $ketua_pelaksana, $deskripsi, $berkas_file,$tgl_mulai, $tgl_selesai, $username, $status);
			redirect('admin/home');
		}else{
			redirect('admin/form-proposal');
		}
	}

	public function tolakstatus($id)
	{
		$status = 'TOLAK';
		$this->M_UploadProposal->updateStatus($id, $status);
		redirect('admin/kegiatan-masuk');
		// var_dump($id);

	}
	public function terimastatus($id)
	{
		$status = 'TERIMA';
		$this->M_UploadProposal->updateStatus($id, $status);
		redirect('admin/kegiatan-masuk');


	}

}
