<?php
class Page_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}
	
	
	public function get_pages($slug = FALSE)
	{
		if ($slug === FALSE)
		{
			$query = $this->db->get('pages');
			return $query->result_array();
		}
	
		$query = $this->db->get_where('pages', array('slug' => $slug));
		return $query->row_array();
	}
	
	public function get_page($id)
	{			
		$query = $this->db->get_where('pages', array('id' => $id));
		return $query->row_array();
	}
	
	public function add_page()
	{
		$this->load->helper('url');
	
		$slug = url_title($this->input->post('title'), 'dash', TRUE);
	
		$data = array(
			'title' 			=> $this->input->post('title'),
			'slug' 				=> $slug,
			'excrept' 			=> $this->input->post('excrept'),
			'content'			=> $this->input->post('content'),
			'meta_tags'			=> $this->input->post('meta-tags'),
			'meta_description'	=> $this->input->post('meta-description') 
		);
	
		return $this->db->insert('pages', $data);
	}
	
	public function edit_page()
	{
		$this->load->helper('url');
		$id = $this->input->post('id');
		$slug = url_title($this->input->post('title'), 'dash', TRUE);
	
		$data = array(
			'id'				=> $id,
			'title' 			=> $this->input->post('title'),
			'slug' 				=> $slug,
			'excrept' 			=> $this->input->post('excrept'),
			'content'			=> $this->input->post('content'),
			'meta_tags'			=> $this->input->post('meta-tags'),
			'meta_description'	=> $this->input->post('meta-description') 
		);
	
		$this->db->where('id', $id);
		$this->db->update('pages', $data);
	}
	
	public function delete_page($id)
	{
		$this->load->helper('url');
		
		
		
						
		$this->db->where('id', $id);
		$this->db->delete('pages');
	}
}