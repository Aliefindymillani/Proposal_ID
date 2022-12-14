<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	function __construct() {
        parent::__construct();
		$this->load->helper('url');
        $this->load->library('TemplateAdmin');
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

	public function index()
	{
		$data['title'] = "Home";
		$data['title_page'] = "DASHBOARD";
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
		$data['title_page'] = "TAMBAH USER";
		$data['users'] = $this->session->userdata('username');
		$this->templateadmin->disp_tambah_user('dashboard/tambahuser', $data);
	}

	public function listuser()
	{
		$data['title'] = "Daftar User";
		$data['title_page'] = "DAFTAR USER";
		$data['users'] = $this->session->userdata('username');

		$keyword=$this->input->post('searchUser');
		if (!empty($keyword)) {
			$data["data_user"]=$this->M_AddUser->searchUser($keyword);
			$this->templateadmin->disp_list_user('dashboard/listuser', $data);
		}else {
			$data["data_user"] = $this->M_AddUser->getAll();

			// Pagination
			$jumlah_data = $this->M_AddUser->jumlah_data();
			$config['base_url'] = base_url().'admin/list-user';
			$config['total_rows'] = $jumlah_data;
			$config['per_page'] = 5;
			$from = $this->uri->segment(3);
			$this->pagination->initialize($config);		
			$data['data_user'] = $this->M_AddUser->data($config['per_page'],$from);

			$this->templateadmin->disp_list_user('dashboard/listuser', $data);
		}
	}

	public function kegiatanmasuk()
	{
		$data['title'] = "Kegiatan Masuk";
		$data['title_page'] = "KEGIATAN MASUK";
		$data['users'] = $this->session->userdata('username');
		$keyword=$this->input->post('search');
		if (!empty($keyword)) {
			$data['data_proposal']=$this->M_Proposal->search($keyword);
			$this->templateadmin->disp_kegiatan_masuk('dashboard/kegiatanmasuk', $data);
		}else {
			$data["data_proposal"] = $this->M_Proposal->getAll();

			// Pagination
			$jumlah_datapro = $this->M_Proposal->jumlah_datapro();
			$config['base_url'] = base_url().'admin/kegiatan-masuk';
			$config['total_rows'] = $jumlah_datapro;
			$config['per_page'] = 5;
			$from = $this->uri->segment(3);
			$this->pagination->initialize($config);		
			$data["data_proposal"] = $this->M_Proposal->data_pro($config['per_page'],$from);

			$this->templateadmin->disp_kegiatan_masuk('dashboard/kegiatanmasuk', $data);
		}
	}

	public function kegiatanditerima()
	{
		$data['title'] = "Kegiatan Diterima";
		$data['title_page'] = "KEGIATAN DITERIMA";
		$data['users'] = $this->session->userdata('username');
		$keyword=$this->input->post('search');
		if (!empty($keyword)) {
			$data['data_proposal']=$this->M_Proposal->search($keyword);
			$this->templateadmin->disp_kegiatan_diterima('dashboard/kegiatanditerima', $data);
		}else {
			$data["data_proposal"] = $this->M_Proposal->getStatus('TERIMA');

			// Pagination
			$jumlah_dataacc = $this->M_Proposal->jumlah_dataacc('TERIMA');
			$config['base_url'] = base_url().'admin/kegiatan-diterima';
			$config['total_rows'] = $jumlah_dataacc;
			$config['per_page'] = 5;
			$from = $this->uri->segment(3);
			$this->pagination->initialize($config);	
			$data["data_proposal"] = $this->M_Proposal->data_acc('TERIMA', $config['per_page'],$from);

			$this->templateadmin->disp_kegiatan_diterima('dashboard/kegiatanditerima', $data);
		}
	}

	public function kegiatanditolak()
	{
		$data['title'] = "Kegiatan Ditolak";
		$data['title_page'] = "KEGIATAN DITOLAK";
		$data['users'] = $this->session->userdata('username');
		$keyword=$this->input->post('search');
		if (!empty($keyword)) {
			$data['data_proposal']=$this->M_Proposal->search($keyword);
			$this->templateadmin->disp_kegiatan_ditolak('dashboard/kegiatanditolak', $data);
		}else {
			$data["data_proposal"] = $this->M_Proposal->getStatus('TOLAK');

			// Pagination
			$jumlah_dataacc = $this->M_Proposal->jumlah_dataacc('TOLAK');
			$config['base_url'] = base_url().'admin/kegiatan-ditolak';
			$config['total_rows'] = $jumlah_dataacc;
			$config['per_page'] = 5;
			$from = $this->uri->segment(3);
			$this->pagination->initialize($config);	
			$data["data_proposal"] = $this->M_Proposal->data_acc('TOLAK', $config['per_page'],$from);

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

	// update data
	function update($username = null) {
		$data['title'] = "Update Data User";
		$data['title_page'] = "Update Data User";
        if($this->input->post()) {
            $data = $this->input->post();
            $res = $this->M_AddUser->update_user($data);
            if($res > 0) {
                // $this->session->set_flashdata('msg','<p>Data gagal diubah</p>');
                $this->session->set_flashdata('msg','
                <div class="alert alert-danger fade show position-fixed top-3" role="alert">
				    <strong>Failed!</strong> Data is failed to be updated.
				    <button type="button" class="btn-close ml-auto" data-bs-dismiss="alert" aria-label="Close"></button>
			    </div>
                ');
            }
            else {
                // $this->session->set_flashdata('msg','<p>Data berhasil diubah</p>');
                $this->session->set_flashdata('msg','
                <div class="alert alert-success fade show position-fixed top-3" role="alert">
				    <strong>Success!</strong> Data is succesfully updated.
				    <button type="button" class="btn-close ml-auto" data-bs-dismiss="alert" aria-label="Close"></button>
			    </div>
                ');
            }
            redirect('admin/list-user');
        }
        else {
            if($username) {
                $data['data_user'] = $this->M_AddUser->get_one($username);
                $this->templateadmin->disp_update('dashboard/update_user', $data);
            }
        }
    }


    //delete data
    function delete($username) {
        $res = $this->M_AddUser->delete_user($username);
        if($res > 0) {
            // $this->session->set_flashdata('msg','<p>Data gagal dihapus</p>');
            $this->session->set_flashdata('msg','
                <div class="alert alert-danger fade show position-fixed top-3" role="alert">
				    <strong>Failed!</strong> Data is failed to be deleted.
				    <button type="button" class="btn-close ml-auto" data-bs-dismiss="alert" aria-label="Close"></button>
			    </div>
                ');
        }
        else {
            // $this->session->set_flashdata('msg','<p>Data berhasil dihapus</p>');
            $this->session->set_flashdata('msg','
                <div class="alert alert-success fade show position-fixed top-3" role="alert">
				    <strong>Success!</strong> Data is succesfully deleted.
				    <button type="button" class="btn-close ml-auto" data-bs-dismiss="alert" aria-label="Close"></button>
			    </div>
                ');
        }
        redirect('admin/list-user');
    }

}
