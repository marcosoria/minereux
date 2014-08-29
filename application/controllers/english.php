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
		$data['page_title'] = 'Home';
		$data['curr_productos'] = '';
		$data['curr_nosotros'] = '';
		$data['curr_servicios'] = '';
		$data['curr_blog'] = '';
		$data['curr_contacto'] = '';
		
		$this->load->view('english/home', $data);
		$this->load->view('templates/english/footer');
		
	}
	
	public function about_us()
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
		$this->load->view('english/products', $data);
		$this->load->view('templates/english/footer');
		
	}
	
	
	public function barite()
	{
		$data['page_title'] = 'Products - Barite';
		$data['curr_productos'] = 'current';
		$data['curr_nosotros'] = '';
		$data['curr_servicios'] = '';
		$data['curr_blog'] = '';
		$data['curr_contacto'] = '';
		$this->load->view('templates/english/header', $data);
		$this->load->view('english/barite', $data);
		$this->load->view('templates/english/footer');
		
	}
	
	public function iron_ore()
	{
		$data['page_title'] = 'Products - Iron Ore';
		$data['curr_productos'] = 'current';
		$data['curr_nosotros'] = '';
		$data['curr_servicios'] = '';
		$data['curr_blog'] = '';
		$data['curr_contacto'] = '';
		$this->load->view('templates/english/header', $data);
		$this->load->view('english/iron-ore', $data);
		$this->load->view('templates/english/footer');
		
	}
	
	public function silica_sand()
	{
		$data['page_title'] = 'Products - Silica Sand';
		$data['curr_productos'] = 'current';
		$data['curr_nosotros'] = '';
		$data['curr_servicios'] = '';
		$data['curr_blog'] = '';
		$data['curr_contacto'] = '';
		$this->load->view('templates/english/header', $data);
		$this->load->view('english/silica-sand', $data);
		$this->load->view('templates/english/footer');
		
	}
	
	public function ferric_sand()
	{
		$data['page_title'] = 'Products - Ferric Sand';
		$data['curr_productos'] = 'current';
		$data['curr_nosotros'] = '';
		$data['curr_servicios'] = '';
		$data['curr_blog'] = '';
		$data['curr_contacto'] = '';
		$this->load->view('templates/english/header', $data);
		$this->load->view('english/ferric-sand', $data);
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
		$this->load->view('english/routes', $data);
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
		$this->load->view('english/contact', $data);
		$this->load->view('templates/english/footer');
		
	}
}


/* Location: ./application/controllers/english.php */