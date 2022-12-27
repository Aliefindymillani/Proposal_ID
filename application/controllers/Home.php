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
        $this->load->library('pagination');
        $this->load->model('M_UploadProposal');
		$this->load->model('M_Proposal');
		$this->load->model('M_AddUser');
        if(!$this->session->userdata('username')){
            redirect('login');
        }

		// Styling Pagination
		$config['first_link']       = 'First';
		$config['last_link']        = 'Last';
		$config['next_link']        = 'Next';
		$config['prev_link']        = 'Prev';
		$config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
		$config['full_tag_close']   = '</ul></nav></div>';
		$config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
		$config['num_tag_close']    = '</span></li>';
		$config['cur_tag_open']     = '<li class="page-item active"><span class="page-link" style="background-color: #91aaad !Important; border-color: #91aaad;">';
		$config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
		$config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
		$config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
		$config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
		$config['prev_tagl_close']  = '</span>Next</li>';
		$config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
		$config['first_tagl_close'] = '</span></li>';
		$config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
		$config['last_tagl_close']  = '</span></li>';

		$this->pagination->initialize($config);
    }

    //read data
    public function index()
    {
        $data['title'] = "Home";
		$data['users'] = $this->session->userdata('username');
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
		$data['users'] = $this->session->userdata('username');
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
        
		$data['title'] = "Status";
		$data['users'] = $this->session->userdata('username');
        $keyword  = $this->input->post('search');
        $username = $this->session->userdata('username');
		if (!empty($keyword)) {
			$data['data_proposal']=$this->M_Proposal->searchByUser($username,$keyword);
			$this->templateuser->disp_status('user/status', $data);
		}else {
			$data["data_proposal"] = $this->M_Proposal->getByUser($username);

			// Pagination
			$jumlah_datapro = $this->M_Proposal->jumlah_datapro();
			$config['base_url'] = base_url().'home/status-proposal';
			$config['total_rows'] = $jumlah_datapro;
			$config['per_page'] = 5;
			$from = $this->uri->segment(3);
			$this->pagination->initialize($config);		
			$data["data_proposal"] = $this->M_Proposal->data_pro($config['per_page'],$from);
			
            $this->templateuser->disp_status('user/status', $data);
		}
    }

    public function jadwal()
    {
		$data['title'] = "Jadwal Kegiatan";
        $username = $this->session->userdata('username');
		$keyword  = $this->input->post('search_jadwal');
		$data['users'] = $this->session->userdata('username');
		if (!empty($keyword)) {
			$data['data_proposal']=$this->M_Proposal->searchByStatus($username,$keyword);
			$this->templateuser->disp_jadwal('user/jadwal', $data);
		}else {
			$data["data_proposal"] = $this->M_Proposal->getStatusByUser($username);
			$this->templateuser->disp_jadwal('user/jadwal', $data);
		}
    }
}