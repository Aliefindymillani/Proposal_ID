<?php 
class M_AddUser extends CI_Model 
{
	
	public function __construct()
	{
        parent::__construct();
	}
	private $table = 'user';
 
	function adduser($email, $username, $password, $name, $akses)
	{
		$data_user = array(
            'email'=>$email,
			'username'=>$username,
			'password'=>password_hash($password,PASSWORD_DEFAULT),
            'name'=>$name,
            'akses'=>$akses,
		);
		$this->db->insert('user',$data_user);
	}

	
	public function getAll()
    {
        $this->db->from($this->table);
        $this->db->order_by("akses", "asc");
        $query = $this->db->get();
        return $query->result();
        //fungsi diatas seperti halnya query 
        //select * from mahasiswa order by IdMhsw desc
    }

}
?>