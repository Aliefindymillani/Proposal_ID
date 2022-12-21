<?php 
class M_Auth extends CI_Model 
{
	
	public function __construct()
	{
        parent::__construct();
	}
 
	function signup($email, $username, $password, $name, $akses)
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

    function login($username, $password, $akses)
	{
        $query = $this->db->get_where('user',array('username'=>$username));
        if($query->num_rows() > 0)
        {
            $data_user = $query->row();
            if (password_verify($password, $data_user->password)) {
                $this->session->set_userdata('username',$username);
				$this->session->set_userdata('name',$data_user->name);
                $this->session->set_userdata('akses',$data_user->akses);
				$this->session->set_userdata('is_login',TRUE);
                return TRUE;
            } else {
                return FALSE;
            }
        }
        else
        {
            return FALSE;
        }
	}
	
    function cek_login()
    {
        if(empty($this->session->userdata('is_login')))
        {
			redirect('login');
		}
    }
}
?>