<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {

    
        function __construct()
        {
            parent::__construct();
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
        
        
        
        
        
	
}

/* End of file user.php */
/* Location: ./application/controllers/user.php */