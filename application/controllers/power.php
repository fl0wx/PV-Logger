<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Power extends CI_Controller {

        var $data;
    
        function __construct() 
        {
            parent::__construct();
            $loggedin = $this->_checkLogin();
        }
	function index()
	{
            if($this->data['logged_in'] == TRUE && $this->data['userlevel'] >= 0)
            {               
                $this->data['main_content'] = 'power_view';
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
        
        function getPower($power){
                $this->load->model('power_model');
                $string = $this->power_model->getPower($power);
                return $string;        
        }
        
        function current(){
            if($this->data['logged_in'] == TRUE && $this->data['userlevel'] >= 0)
            {               
                $this->data['main_content'] = 'power_view';
                $this->data['power_graph'] = 'current';
                $this->load->view('template' , $this->data);
            }
            else
            {
                show_404();
            }   
        }
        
      
	
}

/* End of file index.php */
/* Location: ./application/controllers/index.php */