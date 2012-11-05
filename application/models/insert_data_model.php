<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Insert_data_model extends CI_Model 
{
    public function insertTest($testdata = NULL)
    {
        $data = array('current' => $testdata );

        $this->db->insert('power', $data);
    }
    
    public function validateCreds($username,$password)
    {
        $this->db->where('username', $username);
        $this->db->where('password', hash("sha256",$password));
        $query = $this->db->get('user');

        if($query->num_rows == 1)
        {
            return TRUE;
        }
        
        return FALSE;
    }
    
    //Im String übergebene Daten in die Datenbank einfügen
    public function addData($data)
    {
        $insdata = array(
            'inverter_id' => $data[2] ,
            'inv_status' => $data[3] ,
            'pv_voltage' => $data[4] ,
            'pv_current' => $data[5] ,
            'pv_power' => $data[6] ,
            'grid_voltage' => $data[7] ,
            'current' => $data[8] ,
            'power' => $data[9] ,
            'inv_temperature' => $data[10] ,
            'daily_energy' => $data[11] ,
            'date' => $data[12] ,
            'time' => $data[13]
         );

        $this->db->insert('pv_data', $insdata); 
    }
}