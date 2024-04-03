<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ResentEvent_Model extends CI_Model {

 public function getresentEvent() {
    $this->db->where("Active", '1');
    $q1 = $this->db->get("TTJ_Travmart_Event");

    if ($q1->num_rows() > 0) {
        $result = $q1->row(); // Assuming you expect only one row

        // Assuming the table name is stored in a column named 'store_table_name'
        $tableName = $result->store_table_name;
        "Table Name: " . $tableName; // Debugging output
        
        // Fetch data from the dynamically obtained table
        $q2 = $this->db->get($tableName);
        
        return $q2->result(); // Return the result from the dynamically obtained table
    } else {
        return array(); // Return an empty array if no active event found
    }
}

    
    public function AllEvent(){
          $this->db->where("Active", '1');
        $q1 = $this->db->get("TTJ_Travmart_Event");

        if ($q1->num_rows() > 0) {
            $result = $q1->row(); // Assuming you expect only one row

            // Assuming the table name is stored in a column named 'store_table_name'
             $tableName = $result->store_table_name;
            
            // Fetch data from the dynamically obtained table
            $q2 = $this->db->get($tableName);
            
                return $q2->num_rows(); // Return the result from the dynamically obtained table
        }
    }
    
    public function B2BEvent(){
          $this->db->where("Active", '1');
        $q1 = $this->db->get("TTJ_Travmart_Event");

        if ($q1->num_rows() > 0) {
            $result = $q1->row(); // Assuming you expect only one row

            // Assuming the table name is stored in a column named 'store_table_name'
             $tableName = $result->store_table_name;
            
            // Fetch data from the dynamically obtained table
            $this->db->where('Business_Category','B2B');
            $q2 = $this->db->get($tableName);
            
                return $q2->num_rows(); // Return the result from the dynamically obtained table
        }
    }
    
    public function B2CEvent(){
          $this->db->where("Active", '1');
        $q1 = $this->db->get("TTJ_Travmart_Event");

        if ($q1->num_rows() > 0) {
            $result = $q1->row(); // Assuming you expect only one row

            // Assuming the table name is stored in a column named 'store_table_name'
             $tableName = $result->store_table_name;
            
            // Fetch data from the dynamically obtained table
            $this->db->where('Business_Category','B2C');
            $q2 = $this->db->get($tableName);
            
                return $q2->num_rows(); // Return the result from the dynamically obtained table
        }
    }
    
    
    public function inplaceEvent(){
          $this->db->where("Active", '1');
        $q1 = $this->db->get("TTJ_Travmart_Event");

        if ($q1->num_rows() > 0) {
              $result = $q1->row(); // Assuming you expect only one row

        // Assuming the table name is stored in a column named 'store_table_name'
          $tableName = $result->store_table_name;
        // Remove numeric suffix from city name
        $cityName = preg_replace('/_\d+$/', '', $tableName);
        // Fetch data from the dynamically obtained table
        $this->db->where('LOWER(City) ', strtolower($cityName)); 
        // print_r($cityName);
        $q2 = $this->db->get($tableName);
        
            
                return $q2->num_rows(); // Return the result from the dynamically obtained table
        }
    }
    
    public function outplaceEvent() {
    $this->db->where("Active", '1');
    $q1 = $this->db->get("TTJ_Travmart_Event");

    if ($q1->num_rows() > 0) {
        $result = $q1->row(); // Assuming you expect only one row

        // Assuming the table name is stored in a column named 'store_table_name'
          $tableName = $result->store_table_name;
        // Remove numeric suffix from city name
        $cityName = preg_replace('/_\d+$/', '', $tableName);
        // Fetch data from the dynamically obtained table
        $this->db->where('LOWER(City) !=', strtolower($cityName)); 
        // print_r($cityName);
        $q2 = $this->db->get($tableName);
        
        return $q2->num_rows(); // Return the result from the dynamically obtained table

    }
}
     public function updateData($id, $data) {
        // Assuming the table name is stored in a column named 'store_table_name'
        $this->db->where('Active', '1');
        $q1 = $this->db->get("TTJ_Travmart_Event");

        if ($q1->num_rows() > 0) {
          $result = $q1->row(); // Assuming you expect only one row
  
            // Assuming the table name is stored in a column named 'store_table_name'
              $tableName = $result->store_table_name;
            // Use CodeIgniter's set method to update data
            $this->db->where('id', $id);
            $q1 =  $this->db->update($tableName,$data);
            if($q1){
                echo 1;
            }
           
        }

        return 'error';
    }
    
    public function DeleteresentEvent($id) {
    $this->db->where('Active', '1');
    $q1 = $this->db->get("TTJ_Travmart_Event");

    if ($q1->num_rows() > 0) {
        $result = $q1->row(); // Assuming you expect only one row

        // Assuming the table name is stored in a column named 'store_table_name'
        $tableName = $result->store_table_name;

        // Use CodeIgniter's set method to update data
        $this->db->where('id', $id); // Make sure $id is defined
        $q2 = $this->db->delete($tableName);

        if ($q2) {
            echo 1;
        }
    }

    return 'error';
}

    

}
?>
