<?php 
class M_Proposal extends CI_Model 
{
	
	public function __construct()
	{
        parent::__construct();
		
	}
 
	private $table = 'proposal';
	public function getAll()
    {
        $this->db->from($this->table);
        $this->db->order_by("id_proposal", "desc");
        $query = $this->db->get();
        return $query->result();
        //fungsi diatas seperti halnya query 
        //select * from mahasiswa order by IdMhsw desc
    }

    public function getByUser($username)
    {
        $this->db->from($this->table);
        $this->db->order_by("id_proposal", "desc");
        $this->db->where('username', $username);
        $query = $this->db->get();
        return $query->result();
        //fungsi diatas seperti halnya query 
        //select * from mahasiswa order by IdMhsw desc
    }

	public function getStatus($status)
    {
        $this->db->from($this->table);
        $this->db->order_by("id_proposal", "desc");
		$this->db->where('status', $status);
        $query = $this->db->get();
        return $query->result();
    }

	function search($keyword)
	{
		$this->db->from($this->table);
		$this->db->like('nama_kegiatan', $keyword);
        $this->db->or_like('status', $keyword);
        $query = $this->db->get();
		return $query->result();
	}

    function searchByUser($username,$keyword)
	{
        $this->db->like('username',$username)
        ->like('nama_kegiatan', $keyword)
        ->or_like('ketua_pelaksana',$keyword)
        ->or_like('status',$keyword);
        
		$this->db->from($this->table);
        $this->db->where('username', $username);
        $query = $this->db->get();
		return $query->result();
	}

    public function getStatusByUser($username)
    {
        $this->db->like('status','TERIMA');

        $this->db->from($this->table);
        $this->db->order_by("id_proposal", "desc");
		$this->db->where('username', $username);
        $query = $this->db->get();
        return $query->result();
    }

    public function countProposal($status)
    {
        $this->db->from($this->table);
        $this->db->where('status', $status);
        $query = $this->db->count_all_results();
        return $query;
    }

}
?>