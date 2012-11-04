<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Manage extends CI_Controller {

        var $data;
    
        function __construct() 
        {
            parent::__construct();
            $loggedin = $this->_checkLogin();
        }
        
        function index()
        {
            show_404();
        }
        
	function users()
	{
            if($this->data['logged_in'] == TRUE && $this->data['userlevel'] == 2)
            {
                $this->load->model('manage_model');
                $query = $this->manage_model->get_users();
                
                $this->data['manageusers'] = $query;
                
                $this->data['main_content'] = 'manageusers_view';
                $this->load->view('template' , $this->data);
            }
            else
            {
                show_404();
            }            
	}
        
        function _checkLogin()
        {
            $this->data['logged_in'] = FALSE;
            $this->data['name'] = '';
            $this->data['userlevel'] = -1; //unprivileged
            $this->data['power_graph'] = 'current';
           
            $is_logged_in = $this->session->userdata('logged_in');
            if(isset($is_logged_in) && $is_logged_in == TRUE)
            {
                $this->data['logged_in'] = TRUE;
                $this->data['name'] = $this->session->userdata('username');
                $this->data['userlevel'] = $this->session->userdata('userlevel');
            } 
        }
        
        function edituser($userid)
        {
            
        }
	
}

/* End of file index.php */
/* Location: ./application/controllers/index.php */