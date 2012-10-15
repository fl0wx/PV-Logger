<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Rasp extends CI_Controller {

        var $data;
    
        function __construct() 
        {
            parent::__construct();
            $this->data['logged_in'] = FALSE;
            $this->data['name'] = '';
            $this->data['userlevel'] = -1; //unprivileged
            $this->data['power_graph'] = 1;
            
            $loggedin = $this->_checkLogin();
            if($loggedin == TRUE)
            {
                $this->data['logged_in'] = TRUE;
                $this->data['name'] = $this->session->userdata('username');
                $this->data['userlevel'] = $this->session->userdata('userlevel');
            }
        }
	function index()
	{
            if($this->data['logged_in'] == TRUE && $this->data['userlevel'] == 2)
            {
                $this->data['main_content'] = 'rasp_view';
                $this->load->view('template' , $this->data);
            }
            else
            {
                show_404();
            }            
	}
        
        function _checkLogin()
        {
            $is_logged_in = $this->session->userdata('logged_in');
            if(isset($is_logged_in) && $is_logged_in == TRUE)
            {
                return TRUE;
            }
            return FALSE; 
        }
        
	
}

/* End of file index.php */
/* Location: ./application/controllers/index.php */