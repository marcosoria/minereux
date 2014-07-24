<?php
class Pages extends MY_Controller {

	function Pages(){
		parent::__construct();
		$this->load->model('page_model');
		$this->load->library('session');
		$this->load->helper('url');
		$this->load->helper('form');
		
		if (!$this->session->userdata('is_admin_login')) {
		    redirect('admin');            
		}
	}
	
	
	
	public function index(){
		
		$data['pages'] = $this->page_model->get_pages();
		$this->load->view('admin/templates/header');
		$this->load->view('admin/pages/index', $data);
		$this->load->view('admin/templates/footer');				
	}
	
	public function create()
	{
		$this->load->helper('form');
		$this->load->library('form_validation');
	
		$data['title'] = 'Create a news Page';
	
		$this->form_validation->set_rules('title', 'title', 'required');
		$this->form_validation->set_rules('content', 'content', 'required');
	
		if ($this->form_validation->run() === FALSE)
		{	
			$this->load->view('admin/templates/header');
			$this->load->view('admin/pages/create', $data);
			$this->load->view('admin/templates/footer');	
		}
		else
		{
			$this->page_model->add_page();
			redirect('/admin/pages/index', 'refresh');
		}
	}
	
	public function edit($id = 0)
	{							
		$this->load->helper('form');
		$this->load->library('form_validation');
	
		$data['title'] = 'Create a news Page';
		
		$this->form_validation->set_rules('title', 'title', 'required');
		$this->form_validation->set_rules('content', 'content', 'required');
	
		if ($this->form_validation->run() === FALSE)
		{	
			$data['page'] = $this->page_model->get_page($id);
			
									
			$this->load->view('admin/templates/header');
			$this->load->view('admin/pages/edit', $data);
			$this->load->view('admin/templates/footer');	
		}
		else
		{
		
			 
			$this->page_model->edit_page();						
			redirect('/admin/pages/index', 'refresh');
		}
	}
	
	public function delete($id) {
		
		$this->load->helper('form');
		$this->load->library('form_validation');
		
		$this->page_model->delete_page($id);
		redirect('/admin/pages/index', 'refresh');
		
	}
}