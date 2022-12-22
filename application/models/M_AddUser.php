<?php 
class M_AddUser extends CI_Model 
{
	
	public function __construct()
	{
        parent::__construct();
	}
 
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

}
?>