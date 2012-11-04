<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Manageusers_model extends CI_Model {
    
    function get_users()
    {
        $query = $this->db->get('user');
        if($query->num_rows > 0)
        {
            return $query->result();
        }
    }
}
