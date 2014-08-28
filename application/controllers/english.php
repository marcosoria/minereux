<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class English extends CI_Controller {

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
		$data['page_title'] = 'Arena Silica';
		$data['curr_productos'] = '';
		$data['curr_nosotros'] = '';
		$data['curr_servicios'] = '';
		$data['curr_blog'] = '';
		$data['curr_contacto'] = '';
		
		$this->load->view('english/home', $data);
		$this->load->view('templates/english/footer');
		
	}
	
	public function aboutus()
	{
		$data['page_title'] = 'About Us';
		$data['curr_nosotros'] = 'current';
		$data['curr_productos'] = '';
		$data['curr_servicios'] = '';
		$data['curr_blog'] = '';
		$data['curr_contacto'] = '';
		$this->load->view('templates/english/header', $data);
		$this->load->view('english/about', $data);
		$this->load->view('templates/english/footer');
		
	}
	
	public function products()
	{
		$data['page_title'] = 'Products';
		$data['curr_productos'] = 'current';
		$data['curr_nosotros'] = '';
		$data['curr_servicios'] = '';
		$data['curr_blog'] = '';
		$data['curr_contacto'] = '';
		$this->load->view('templates/english/header', $data);
		$this->load->view('english/productos', $data);
		$this->load->view('templates/english/footer');
		
	}
	
	
	public function barita()
	{
		$data['page_title'] = 'Products - Barita';
		$data['curr_productos'] = 'current';
		$data['curr_nosotros'] = '';
		$data['curr_servicios'] = '';
		$data['curr_blog'] = '';
		$data['curr_contacto'] = '';
		$this->load->view('templates/english/header', $data);
		$this->load->view('english/barita', $data);
		$this->load->view('templates/english/footer');
		
	}
	
	public function hierro()
	{
		//$this->load->view('page/home');
		$data['page_title'] = 'Products - Hierro';
		$data['curr_productos'] = 'current';
		$data['curr_nosotros'] = '';
		$data['curr_servicios'] = '';
		$data['curr_blog'] = '';
		$data['curr_contacto'] = '';
		$this->load->view('templates/english/header', $data);
		$this->load->view('english/hierro', $data);
		$this->load->view('templates/english/footer');
		
	}
	
	public function arena_silica()
	{
		//$this->load->view('page/home');
		$data['page_title'] = 'Products - Arena Silica';
		$data['curr_productos'] = 'current';
		$data['curr_nosotros'] = '';
		$data['curr_servicios'] = '';
		$data['curr_blog'] = '';
		$data['curr_contacto'] = '';
		$this->load->view('templates/english/header', $data);
		$this->load->view('english/arena-silica', $data);
		$this->load->view('templates/english/footer');
		
	}
	
	public function arena_ferrosa()
	{
		$data['page_title'] = 'Products - Arena Ferrosa';
		$data['curr_productos'] = 'current';
		$data['curr_nosotros'] = '';
		$data['curr_servicios'] = '';
		$data['curr_blog'] = '';
		$data['curr_contacto'] = '';
		$this->load->view('templates/english/header', $data);
		$this->load->view('english/arena-ferrosa', $data);
		$this->load->view('templates/english/footer');
		
	}
	
	public function routes()
	{
		$data['page_title'] = 'Routes';
		$data['curr_productos'] = '';
		$data['curr_nosotros'] = '';
		$data['curr_servicios'] = 'current';
		$data['curr_blog'] = '';
		$data['curr_contacto'] = '';
		$this->load->view('templates/english/header', $data);
		$this->load->view('english/ruta', $data);
		$this->load->view('templates/english/footer');
		
	}
	
	public function contact()
	{
		$data['page_title'] = 'Contact';
		$data['curr_productos'] = '';
		$data['curr_nosotros'] = '';
		$data['curr_servicios'] = '';
		$data['curr_blog'] = '';
		$data['curr_contacto'] = 'current';
		$this->load->view('templates/english/header', $data);
		$this->load->view('english/contacto', $data);
		$this->load->view('templates/english/footer');
		
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */