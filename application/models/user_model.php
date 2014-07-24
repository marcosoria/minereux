<?php
class User_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}
	
	
	public function get_users($email = FALSE)
	{
		$query = $this->db->get('users');
		return $query->result_array();
	}
	
	public function create_user()
	{		
		$password = md5($this->input->post('password'));
		$data = array(
			'name' 				=> $this->input->post('name'),			
			'email' 			=> $this->input->post('email'),
			'password'			=> $password,
			'last_login'		=> date('Y-m-d')
		);
	
		return $this->db->insert('users', $data);		
	}
	
	public function delete_user($id)
	{
		$this->load->helper('url');
												
		$this->db->where('id', $id);
		$this->db->delete('users');
	}
}