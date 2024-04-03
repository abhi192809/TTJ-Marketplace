<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Event_model extends CI_Model {

    public function TTJ_Travmart_Event() {
        $q1 = $this->db->get('TTJ_Travmart_Event');
        return $q1->result_array();
    }

    public function insertEvent($data) {
        $this->db->insert('TTJ_Travmart_Event', $data);
    }

    public function active_event($id) {
        $this->db->update('TTJ_Travmart_Event', array('Active' => '0'));
        $this->db->where('id', $id);
        $this->db->update('TTJ_Travmart_Event', array('Active' => '1'));
    
        if ($this->db->affected_rows() > 0) {
            echo 1;
        } else {
            echo 0;
        }
    }

    public function TTJ_Travmart_Event_Name(){
        $this->db->select('store_table_name');
        $q1 = $this->db->get('TTJ_Travmart_Event');
        return $q1->result_array();
    }
    
    public function getTableNamesByPrefix($prefix) {
        $database = $this->db->database;
        $tables = $this->db->list_tables();
        $matchingTables = array();

        foreach ($tables as $table) {
            if (strpos($table, $prefix) === 0) {
                $matchingTables[] = $table;
            }
        }

        return $matchingTables;
    }
    public function getTableDataByName($tableName) {
       
        $query = $this->db->get($tableName);
    
        return $query->result_array(); // Ensure that result_array() is used to return an array of arrays
    }
  public function getselectedCategory(){
    $this->db->where('Active','1');
    $q1 = $this->db->get('TTJ_Travmart_Event');
    return $q1->row('store_table_name');
}

public function dowanloaddata($get_name, $data){
     $this->db->select('Name, Designation, Your_Company_Name, Nature_of_Business, Business_Category, Company_Address, City, Pin_Code, Email, Mobile_Number, Annual_Turnover, Year_Commencement, Destinations, Trade_Associations');

    if($get_name != 'All'){
        $this->db->where('Business_Category', $get_name);
    }
    $q1 = $this->db->get($data);
    return $q1->result_array();
}
     public function gettable($tableName) {
        $data = $this->db->get($tableName)->result_array();

        return $data;
     }
}
?>
