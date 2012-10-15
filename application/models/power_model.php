<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Power_model extends CI_Model {
    function getTestData(){
        $data = file_get_contents("data.json"); 
        echo $data;
    }
    
    function getPower($power){
        $query = $this->db->get('power');
        
        if($query->num_rows == 1)
        {
            $row = $query->row();
            $res = $row->$power;
            $cols = array(array("label" => "Wh","type" => "number"));
            $rows = array(array('c' => array( array( 'v' => $res))));
            echo '{ "cols": '.json_encode($cols).', "rows":'.json_encode($rows).'}'; 
            
        }
    }
    
}
