<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class user_model extends CI_Model
{
	function __construct()
    {
        parent::__construct();
    }
	
	function get_user($email, $pwd)
	{
		$this->db->where('email', $email);
		$this->db->where('Emp_password', ($pwd));
        $query = $this->db->get('csi_sheffield.employee');
		return $query->result();
	}
	
	
	function get_user_by_id($id)
	{
		$this->db->where('id', $id);
        $query = $this->db->get('csi_sheffield.employee');
		return $query->result();
	}
	
	
	function insert_user($data)
    {
		return $this->db->insert('csi_sheffield.employee', $data);
	}
}?>