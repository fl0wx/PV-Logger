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
            echo $encrString;
        }
        
    }
}