<?php
class Wallpapers extends MY_Controller {

	function Wallpapers(){
		parent::__construct();
		$this->load->model('wallpaper_model');
		$this->load->library('session');
		$this->load->helper('url');
		$this->load->helper('form');
		
		if (!$this->session->userdata('is_admin_login')) {
		    //redirect('admin');            
		}
	}
	
	
	
	public function index(){
		
		$data['wallpapers'] = $this->wallpaper_model->get_wallpapers();
		$this->load->view('admin/templates/header');
		$this->load->view('admin/wallpapers/index', $data);
		$this->load->view('admin/templates/footer');				
	}
	
	public function create()
	{
		$this->load->helper('form');
		$this->load->library('form_validation');
	
		$data['title'] = 'Create a news Wallpaper';
	
		$this->form_validation->set_rules('title', 'title', 'required');
		$this->form_validation->set_rules('content', 'content', 'required');
	
		
		if ($this->input->server('REQUEST_METHOD') === 'POST')
		{
			
			/*
			$config['upload_path'] = '/assets/images/uploads';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size']	= '100';
			$config['max_width']  = '1024';
			$config['max_height']  = '768';
					
			$this->load->library('upload', $config);
			
			if ( ! $this->upload->do_upload('bg_file'))
			{
				$error = array('error' => $this->upload->display_errors());
	
				//$this->load->view('upload_form', $error);
				echo $error['error'];
				exit;
			}
			else
			{
				$data = array('upload_data' => $this->upload->data());
	
				//$this->load->view('upload_success', $data);
			}
			*/
					
			$this->wallpaper_model->add_wallpaper();
			redirect('/admin/wallpapers/index', 'refresh');
		}else{
			$this->load->view('admin/templates/header');
			$this->load->view('admin/wallpapers/create', $data);
			$this->load->view('admin/templates/footer');
		}	
		
		if ($this->form_validation->run() === FALSE)
		{	
				
		}
		else
		{
			
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
		
			 
			$this->wallpaper_model->edit_page();						
			redirect('/admin/wallpapers/index', 'refresh');
		}
	}
	
	public function delete($id) {
		
		$this->load->helper('form');
		$this->load->library('form_validation');
		
		$this->wallpaper_model->delete_wallpaper($id);
		redirect('/admin/wallpapers/index', 'refresh');
		
	}
}