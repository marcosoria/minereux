<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Users extends CI_Controller {
/**
 * ark Admin Panel for Codeigniter 
 * Author: Abhishek R. Kaushik
 * downloaded from http://devzone.co.in
 *
 */
    public function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->library('session');
        $this->load->model('user_model');
        $this->load->helper('url');
        
        if (!$this->session->userdata('is_admin_login')) {
            //redirect('admin');            
        }
        
    }

    public function index() {
        $data['users'] = $this->user_model->get_users();
       
        
        $this->load->view('admin/templates/header');
        $this->load->view('admin/users/index', $data);
        $this->load->view('admin/templates/footer');
    }

	
    
    public function create()
    {
    	$this->load->helper('form');
    	$this->load->library('form_validation');
    
    	$data['title'] = 'Create a new user';
    
    	$this->form_validation->set_rules('email', 'email', 'required');
    
    	if ($this->form_validation->run() === FALSE)
    	{	
    		$this->load->view('admin/templates/header');
    		$this->load->view('admin/users/create', $data);
    		$this->load->view('admin/templates/footer');
    	}
    	else
    	{
    		$this->user_model->create_user();			
    		redirect('/admin/users/index', 'refresh');    		    		
    	}
    }

     public function edit_user() {
        $arr['page'] = 'user';
        $this->load->view('admin/vwEditUser',$arr);
    }
    
     public function block_user() {
        // Code goes here
    }
    
    public function delete($id) {
    	
    	$this->load->helper('form');
    	$this->load->library('form_validation');
    	
    	$this->user_model->delete_user($id);
    	redirect('/admin/users/index', 'refresh');
    	
    }
    
    
    
    

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */