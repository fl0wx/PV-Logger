<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_model extends CI_Model 
{
    function validate()
    {
        $this->db->where('username', $this->input->post('username'));
        $this->db->where('password', hash("sha256",$this->input->post('password')));
        $query = $this->db->get('user');

        if($query->num_rows == 1)
        {
            return $query;
        }

    }
    
    function deleteuser($userid)
    {
        $query = $this->db->get_where('user', array('id' => $userid));
        $this->db->delete('user', array('id' => $userid));
        
        if($query->num_rows == 1)
        {
            return $query;
        }
    }
 
}
