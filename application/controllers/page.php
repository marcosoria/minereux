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
	
	public function barita()
	{
		//$this->load->view('page/home');
		$data['page_title'] = 'Acerca de Nosotros';
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
		$data['page_title'] = 'Acerca de Nosotros';
		$data['curr_productos'] = 'current';
		$data['curr_nosotros'] = '';
		$data['curr_servicios'] = '';
		$data['curr_blog'] = '';
		$data['curr_contacto'] = '';
		$this->load->view('templates/header', $data);
		$this->load->view('page/hierro', $data);
		$this->load->view('templates/footer');
		
	}
	
	public function arena_silica()
	{
		//$this->load->view('page/home');
		$data['page_title'] = 'Arena Silica';
		$data['curr_productos'] = 'current';
		$data['curr_nosotros'] = '';
		$data['curr_servicios'] = '';
		$data['curr_blog'] = '';
		$data['curr_contacto'] = '';
		$this->load->view('templates/header', $data);
		$this->load->view('page/arena-silica', $data);
		$this->load->view('templates/footer');
		
	}
	
	public function arena_ferrosa()
	{
		//$this->load->view('page/home');
		$data['page_title'] = 'Arena Ferrosa';
		$data['curr_productos'] = 'current';
		$data['curr_nosotros'] = '';
		$data['curr_servicios'] = '';
		$data['curr_blog'] = '';
		$data['curr_contacto'] = '';
		$this->load->view('templates/header', $data);
		$this->load->view('page/arena-silica', $data);
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
		//$this->load->view('page/home');
		$data['page_title'] = 'Contacto';
		$data['curr_productos'] = '';
		$data['curr_nosotros'] = '';
		$data['curr_servicios'] = '';
		$data['curr_blog'] = '';
		$data['curr_contacto'] = 'current';
		$this->load->view('templates/header', $data);
		$this->load->view('page/contacto', $data);
		$this->load->view('templates/footer');
		
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */