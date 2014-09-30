<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Page extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		//$this->load->view('page/home');
		$data['page_title'] = 'Slogan goes here';
		$data['page_title'] = 'Arena Silica';
		$data['curr_productos'] = '';
		$data['curr_nosotros'] = '';
		$data['curr_servicios'] = '';
		$data['curr_blog'] = '';
		$data['curr_contacto'] = '';
		
		$this->load->view('page/home', $data);
		$this->load->view('templates/footer');
		
	}
	
	public function nosotros()
	{
		//$this->load->view('page/home');
		$data['page_title'] = 'Acerca de Nosotros';
		$data['curr_nosotros'] = 'current';
		$data['curr_productos'] = '';
		$data['curr_servicios'] = '';
		$data['curr_blog'] = '';
		$data['curr_contacto'] = '';
		$this->load->view('templates/header', $data);
		$this->load->view('page/about', $data);
		$this->load->view('templates/footer');
		
	}
	
	public function productos()
	{
		//$this->load->view('page/home');
		$data['page_title'] = 'Productos';
		$data['curr_productos'] = 'current';
		$data['curr_nosotros'] = '';
		$data['curr_servicios'] = '';
		$data['curr_blog'] = '';
		$data['curr_contacto'] = '';
		$this->load->view('templates/header', $data);
		$this->load->view('page/productos', $data);
		$this->load->view('templates/footer');
		
	}
	
	
	public function barita()
	{
		//$this->load->view('page/home');
		$data['page_title'] = 'Productos - Barita';
		$data['curr_productos'] = 'current';
		$data['curr_nosotros'] = '';
		$data['curr_servicios'] = '';
		$data['curr_blog'] = '';
		$data['curr_contacto'] = '';
		$this->load->view('templates/header', $data);
		$this->load->view('page/barita', $data);
		$this->load->view('templates/footer');
		
	}
	
	public function hierro()
	{
		//$this->load->view('page/home');
		$data['page_title'] = 'Productos - Hierro';
		$data['curr_productos'] = 'current';
		$data['curr_nosotros'] = '';
		$data['curr_servicios'] = '';
		$data['curr_blog'] = '';
		$data['curr_contacto'] = '';
		$this->load->view('templates/header', $data);
		$this->load->view('page/hierro', $data);
		$this->load->view('templates/footer');
		
	}
	
	public function arena_frac()
	{
		//$this->load->view('page/home');
		$data['page_title'] = 'Productos - Arena Silica';
		$data['curr_productos'] = 'current';
		$data['curr_nosotros'] = '';
		$data['curr_servicios'] = '';
		$data['curr_blog'] = '';
		$data['curr_contacto'] = '';
		$this->load->view('templates/header', $data);
		$this->load->view('page/arena-frac', $data);
		$this->load->view('templates/footer');
		
	}
	
	public function arena_ferrosa()
	{
		//$this->load->view('page/home');
		$data['page_title'] = 'Productos - Arena Ferrosa';
		$data['curr_productos'] = 'current';
		$data['curr_nosotros'] = '';
		$data['curr_servicios'] = '';
		$data['curr_blog'] = '';
		$data['curr_contacto'] = '';
		$this->load->view('templates/header', $data);
		$this->load->view('page/arena-ferrosa', $data);
		$this->load->view('templates/footer');
		
	}
	
	public function ruta()
	{
		//$this->load->view('page/home');
		$data['page_title'] = 'Ruta';
		$data['curr_productos'] = '';
		$data['curr_nosotros'] = '';
		$data['curr_servicios'] = 'current';
		$data['curr_blog'] = '';
		$data['curr_contacto'] = '';
		$this->load->view('templates/header', $data);
		$this->load->view('page/ruta', $data);
		$this->load->view('templates/footer');
		
	}
	
	public function contacto()
	{
		
		$data['page_title'] = 'Contacto';
		$data['curr_productos'] = '';
		$data['curr_nosotros'] = '';
		$data['curr_servicios'] = '';
		$data['curr_blog'] = '';
		$data['curr_contacto'] = 'current';
		
		$this->load->helper('form');
		$this->load->library('form_validation');
	
		
	
		$this->form_validation->set_rules('nombre', 'nombre', 'required');
		$this->form_validation->set_rules('email', 'email', 'required');
		$this->form_validation->set_rules('message', 'message', 'required');
	
		if ($this->form_validation->run() === FALSE)
		{	
			
			$this->load->view('templates/header', $data);
			$this->load->view('page/contacto', $data);
			$this->load->view('templates/footer');
		}
		else
		{
			$from = $this->input->post('email'); // sender
			$subject = "Nuevo mensaje de minereux.com";
			$message = $this->input->post('message');
			// message lines should not exceed 70 characters (PHP rule), so wrap it
			$message = wordwrap($message, 70);
			    // send mail
			mail("ingsoria@gmail.com",$subject,$message,"From: $from\n");
			echo "Thank you for sending us feedback";
			//redirect('/admin/pages/index', 'refresh');
		}
		
		
		
		//$this->load->view('page/home');
		
		
		
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */