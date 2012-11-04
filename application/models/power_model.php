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
            $this->db->select_max('ID');
            $query = $this->db->get('inverter_'.$inv);
            $row = $query->row();
            $maxid = $row->ID;
            $query = $this->db->get_where('inverter_'.$inv, array('ID' => $maxid), 1);
            $row = $query->row();
            $result = $row->power;

            $cols = array(array("label" => "Wh","type" => "number"));
            $rows = array(array('c' => array( array( 'v' => $result))));
            echo '{ "cols": '.json_encode($cols).', "rows":'.json_encode($rows).'}';
        }
        else
        {
            $this->db->select_max('ID');
            $query = $this->db->get('inverter_one');
            $row = $query->row();
            $maxid = $row->ID;
            $query = $this->db->get_where('inverter_one', array('ID' => $maxid), 1);
            $row = $query->row();
            $result = $row->power;
            
            $this->db->select_max('ID');
            $query = $this->db->get('inverter_two');
            $row = $query->row();
            $maxid = $row->ID;
            $query = $this->db->get_where('inverter_two', array('ID' => $maxid), 1);
            $row = $query->row();
            $result = $result + $row->power;
            
            $this->db->select_max('ID');
            $query = $this->db->get('inverter_three');
            $row = $query->row();
            $maxid = $row->ID;
            $query = $this->db->get_where('inverter_three', array('ID' => $maxid), 1);
            $row = $query->row();
            $result = $result + $row->power;

            $cols = array(array("label" => "Wh","type" => "number"));
            $rows = array(array('c' => array( array( 'v' => $result))));
            echo '{ "cols": '.json_encode($cols).', "rows":'.json_encode($rows).'}';
            
        }
    }
    
    function getDailyPower()
    {
        
    }
    
    
}
