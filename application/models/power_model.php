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
        //aktuelles Datum im richtigen Format speichern
        $dailydate = date('Y-m-d');
        
        //Alle Daten zum heutigen Tag aus der Datenbank holen
        $query_one = $this->db->get_where('inverter_one', array('powerdate' => $dailydate));
        $query_two = $this->db->get_where('inverter_two', array('powerdate' => $dailydate));
        $query_three = $this->db->get_where('inverter_three', array('powerdate' => $dailydate));

        
        //Ergebnisse aller 3 Wechselrichter kombinieren
        $results_time = array();
        foreach ($query_one->result() as $row)
        {
            array_push($results_time, $row->powertime);
        }
        
        $results_one = array();
        foreach ($query_one->result() as $row)
        {
            array_push($results_one, $row->power);
        }
        
        $results_two = array();
        foreach ($query_two->result() as $row)
        {
            array_push($results_two, $row->power);
        }
        
        $results_three = array();
        foreach ($query_three->result() as $row)
        {
            array_push($results_three, $row->power);
        }
        
        //Rows Array mit daten füllen
        $rows = array();
        for($i = 0;$i<count($results_time);$i++)
        {
            $results_power = $results_one[$i]+$results_two[$i]+$results_three[$i];
            $res = array('c' => array( array( 'v' => $results_time[$i]),array( 'v' => $results_power)));
            array_push($rows, $res);
        }
        

        $cols = array(array("label" => "Stunde","type" => "string"),array("label" => "Wh","type" => "number"));
        
        echo '{ "cols": '.json_encode($cols).', "rows":'.json_encode($rows).'}';
    }
    
    
}
