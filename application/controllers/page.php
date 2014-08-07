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
		//$this->load->view('templates/header', $data);
		$this->load->view('page/home', $data);
		$this->load->view('templates/footer');
		
	}
	
	public function nosotros()
	{
		//$this->load->view('page/home');
		$data['page_title'] = 'Acerca de Nosotros';
		$this->load->view('templates/header', $data);
		$this->load->view('page/about', $data);
		$this->load->view('templates/footer');
		
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */