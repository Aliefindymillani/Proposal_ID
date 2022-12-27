<?php 
class M_AddUser extends CI_Model 
{
	
	public function __construct()
	{
        parent::__construct();
	}
	public $table = 'user';
 
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
    }
	
	function searchUser($keyword)
	{
		$this->db->from($this->table);
		$this->db->like('username', $keyword);
        $this->db->or_like('name', $keyword);
        $this->db->or_like('email', $keyword);
        $this->db->or_like('akses', $keyword);
        $query = $this->db->get();
		return $query->result();
	}

	function get_one($username) {
        $this->db->where('username',$username);
        return $this->db->get('user')->result();
    }

    function update_user($data_user) {
        $sql = "UPDATE user SET `name` = ?, email = ?, `password` = ?, akses = ? WHERE username = ?";
        $this->db->query($sql, array($data_user['name'], $data_user['email'], $data_user['password'], $data_user['akses'], $data_user['username']));
    }

    function delete_user($username) {
        $this->db->where('username', $username);
        $this->db->delete('user');
    }
}
?>