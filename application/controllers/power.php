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
                switch($power)
                {
                    case ("current"):
                    $res = $this->power_model->getCurrentP();
                    break;
                
                    case ("today"):
                    $res = $this->power_model->getDailyPower();
                    break;

                    default:
                    $res = "Error";
                    break;
                }
                return $res;        
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
        
        function today(){
            if($this->data['logged_in'] == TRUE && $this->data['userlevel'] >= 0)
            {               
                $this->data['main_content'] = 'power_view';
                $this->data['power_graph'] = 'today';
                $this->load->view('template' , $this->data);
            }
            else
            {
                show_404();
            }   
        }
        
        function month(){
            if($this->data['logged_in'] == TRUE && $this->data['userlevel'] >= 0)
            {               
                $this->data['main_content'] = 'power_view';
                $this->data['power_graph'] = 'month';
                $this->load->view('template' , $this->data);
            }
            else
            {
                show_404();
            }   
        }
        
        function transnet(){
            if($this->data['logged_in'] == TRUE && $this->data['userlevel'] >= 0)
            {               
                $this->data['main_content'] = 'power_view';
                $this->data['power_graph'] = 'transnet';
                $this->load->view('template' , $this->data);
            }
            else
            {
                show_404();
            }   
        }
        
        function self(){
            if($this->data['logged_in'] == TRUE && $this->data['userlevel'] >= 0)
            {               
                $this->data['main_content'] = 'power_view';
                $this->data['power_graph'] = 'self';
                $this->load->view('template' , $this->data);
            }
            else
            {
                show_404();
            }   
        }
        
        function efficiency(){
            if($this->data['logged_in'] == TRUE && $this->data['userlevel'] >= 0)
            {               
                $this->data['main_content'] = 'power_view';
                $this->data['power_graph'] = 'efficiency';
                $this->load->view('template' , $this->data);
            }
            else
            {
                show_404();
            }   
        }
        
        function compare(){
            if($this->data['logged_in'] == TRUE && $this->data['userlevel'] >= 0)
            {               
                $this->data['main_content'] = 'power_view';
                $this->data['power_graph'] = 'compare';
                $this->load->view('template' , $this->data);
            }
            else
            {
                show_404();
            }   
        }
        
        function inverter(){
            if($this->data['logged_in'] == TRUE && $this->data['userlevel'] >= 0)
            {               
                $this->data['main_content'] = 'power_view';
                $this->data['power_graph'] = 'inverter';
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