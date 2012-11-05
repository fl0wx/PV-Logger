<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {

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
       
        function validate()
        {
            $this->load->model('user_model');
            $query = $this->user_model->validate();

            if($query)
            {
                $row = $query->row(); 
                $data = array(
                    'username' => $this->input->post('username'),
                    'logged_in' => TRUE,
                    'userlevel' => $row->userlevel
                );
                $this->session->set_userdata($data);;
            }
            redirect('home');

        }
        
        function logout()
        {
            $this->session->sess_destroy();
            redirect('home');
        }
        
        function delete($userid)
        {
            if($this->data['logged_in'] == TRUE && $this->data['userlevel'] == 2)
            {    
                $username = '';
                $this->load->model('user_model');
                $query = $this->user_model->deleteuser($userid);
                if($query)
                {
                    $row = $query->row();
                    $username = $row->username;
                }
                echo $username;
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
        
        
        
        
        
	
}

/* End of file user.php */
/* Location: ./application/controllers/user.php */