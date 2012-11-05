<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Insert_data extends CI_Controller {
    function __construct() 
    {
            parent::__construct();
    }
    
    function index()
    {
        show_404();
    }
    
    function insertInvData($encrString = NULL)
    {
        if($encrString != NULL)
        {
            $this->load->model('insert_data_model');
            $data = explode('_', $encrString);

            
            $validuser = $this->insert_data_model->validateCreds($data[0], $data[1]);
    
            if($validuser == TRUE)
            {
                echo "authenticated";
                $this->insert_data_model->addData($data);
            }
            else 
            {
                echo "fuck you";   
            }
          
        }
        
    }
    

}