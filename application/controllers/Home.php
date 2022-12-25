<?php

/**
 * Controller User
 */

class Home extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('TemplateUser');
        $this->load->model('M_UploadProposal');
		$this->load->model('M_Proposal');
		$this->load->model('M_AddUser');
        if(!$this->session->userdata('username')){
            redirect('login');
        }
    }

    //read data
    public function index()
    {
        $data['title'] = "Home";
        $this->templateuser->disp_dashboard('user/dashboard', $data);
        if($this->session->userdata('is_login') == true) {
			if ($this->session->userdata('akses')=='admin') {
				redirect('home');
			}
        }
    }
    public function tambah()
    {
        $data['title'] = "Pengajuan";
        $this->templateuser->disp_pengajuan('user/pengajuan', $data);
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
			redirect('home/status-proposal');
		}else{
			redirect('home/form-proposal');
		}
	}
    public function status()
    {
        
        $keyword  = $this->input->post('search');
        $username = $this->session->userdata('username');
		if (!empty($keyword)) {
			$data['title'] = "Status";
			$data['data_proposal']=$this->M_Proposal->searchByUser($username,$keyword);
			$this->templateuser->disp_status('user/status', $data);
		}else {
			$data['title'] = "Status";
			$data["data_proposal"] = $this->M_Proposal->getByUser($username);
			
            $this->templateuser->disp_status('user/status', $data);
		}
    }

    public function jadwal()
    {
        $username = $this->session->userdata('username');
        $data['title'] = "Jadwal Kegiatan";
        $data["data_proposal"] = $this->M_Proposal->getStatusByUser($username);
        $this->templateuser->disp_jadwal('user/jadwal', $data);
    }
}