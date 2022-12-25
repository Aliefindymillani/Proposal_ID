<?php 
class M_UploadProposal extends CI_Model 
{
	
	public function __construct()
	{
        parent::__construct();
	}
 
	function uploadform($nama_kegiatan, $tgl_pengajuan, $ketua_pelaksana, $deskripsi, $berkas_file,$tgl_mulai, $tgl_selesai, $username, $status)
	{
		$data_user = array(
            'nama_kegiatan'=>$nama_kegiatan,
			'tgl_pengajuan'=>$tgl_pengajuan,
			'ketua_pelaksana'=>$ketua_pelaksana,
            'deskripsi'=>$deskripsi,
            'berkas_file'=>$berkas_file,
			'tgl_mulai' => $tgl_mulai,
			'tgl_selesai' => $tgl_selesai,
			'username' => $username,
			'status' => $status
		);
		$this->db->insert('proposal',$data_user);
	}
	function updateStatus($id_proposal,$status)
	{
		$this->db->set('status', $status);
		$this->db->where('id_proposal', $id_proposal);
		$this->db->update('proposal'); 
	}

}
?>