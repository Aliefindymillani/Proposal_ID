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
            'email' => $email,
            'username' => $username,
            'password' => password_hash($password, PASSWORD_DEFAULT),
            'name' => $name,
            'akses' => $akses,
        );
        $this->db->insert('user', $data_user);
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

    function get_one($username)
    {
        $this->db->where('username', $username);
        return $this->db->get('user')->result();
    }

    function update_user($data_user)
    {
        $data = array(
            "email" => $this->input->post('email'),
            "username" => $this->input->post('username'),
            "password" => $this->input->post('password'),
            "name" => $this->input->post('name'),
            "akses" => $this->input->post('akses'),
        );
        return $this->db->update($this->table, $data, array('username' => $this->input->post('username')));
    }

    function delete_user($username)
    {
        $this->db->where('username', $username);
        $this->db->delete('user');
    }

    function data($number,$offset) {
		return $query = $this->db->get('user', $number, $offset)->result();		
	}
 
	function jumlah_data() {
		return $this->db->get('user')->num_rows();
	}
}