<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Power_model extends CI_Model 
{
    
    //Testfunktion für GoogleChartTools
    function getPower($power)
    {
        $query = $this->db->get('power');
        
        if($query->num_rows == 1)
        {
            $row = $query->row();
            $res = $row->current;
            $cols = array(array("label" => "Wh","type" => "number"));
            $rows = array(array('c' => array( array( 'v' => $res))));
            echo '{ "cols": '.json_encode($cols).', "rows":'.json_encode($rows).'}'; 
            
        }
    }
    
    function getCurrentP($inv = NULL)
    {
        //Nur bestimmte Wechselrichterdaten abrufen, sonst alle drei
        if($inv != NULL) 
        {
            
        }
    }
    
    
}
