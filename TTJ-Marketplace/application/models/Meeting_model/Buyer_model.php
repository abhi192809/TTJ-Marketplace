<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buyer_model extends CI_Model {

      public function insert_buyer($data) {
        // Insert data into the database
        $this->db->insert('Market_place_Buyer', $data);

        // Return the ID of the inserted row
        return $this->db->insert_id();
    }

    public function Event_detels(){
        $this->db->select('EventID, EventName, EventPlace, EventStartDate, EventEndDate, Location, EventImage, Phone_Number, Email, Description, Status');
        $this->db->from('Market_place_Events');
        $this->db->where('EventStartDate > NOW()');
        $this->db->order_by('EventStartDate', 'ASC');
        $this->db->limit(1);

        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->row();
        } else {
            return null;
        }
    }
    
    public function map_buyer_entry($buyer_id,$EventID){
        $data=[
            'Buyer_ID'=>$buyer_id,
            'Evet_ID'=>$EventID
            ];
            
        $this->db->insert(' Merket_place_Buyer_Request',$data);
    }
    
    
  public function get_Event_detels(){
    $this->db->select('*');
    $this->db->from('Merket_place_Buyer_Request');
    $this->db->join('Market_place_Buyer', 'Merket_place_Buyer_Request.Buyer_ID = Market_place_Buyer.id');
    $this->db->join('Market_place_Events', 'Merket_place_Buyer_Request.Evet_ID = Market_place_Events.EventID');
    $query = $this->db->get();
    return $query->result(); // Return the result
}


  public function Get_Buyer_data($id){
      $this->db->where('id',$id);
     $query = $this->db->get('Market_place_Buyer'); 
     return $query->result();
  }

  public function delete_buyer_entry($BuyerId, $EventId) {
    $this->db->where(array('Buyer_ID' => $BuyerId, 'Evet_ID' => $EventId));
    $this->db->delete('Merket_place_Buyer_Request');
    
    // Return true if deletion is successful, else return false
    return true; // Replace with your actual deletion logic
}
public function approve_buyer_entry($BuyerId, $EventId){
    // Assuming 'Buyer_ID' and 'Evet_ID' are columns in your 'Merket_place_Buyer_event_map' table
    $data = array(
        'Buyer_ID' => $BuyerId,
        'Evet_ID' => $EventId
    );

    // Use the 'insert' method with the data array
    $this->db->insert('Merket_place_Buyer_event_map', $data);
}

public function Active_Event_detels_id_name() {
    $this->db->select('EventID, EventName,EventStartDate');
    $this->db->where('EventStartDate >=', date('Y-m-d'), false);
    $this->db->order_by('ABS(DATEDIFF(Market_place_Events.EventStartDate, NOW())) ASC');
    $this->db->limit(1);  // Add limit to get only the first entry

    $query = $this->db->get('Market_place_Events');

    return $query->row();  // Use row() to get only the first row
}

    
    public function Active_Event_detels_id_name_old() {
    $this->db->select('EventID, EventName,EventStartDate');
    $this->db->where('EventStartDate <', date('Y-m-d'), false);
    $this->db->order_by('ABS(DATEDIFF(Market_place_Events.EventStartDate, NOW())) ASC');
    $this->db->limit(1);  // Add limit to get only the first entry

    $query = $this->db->get('Market_place_Events');

    return $query->row();  // Use row() to get only the first row
}
    
    
    
    public function Event_map_persion_buyer($data){
     
    $this->db->select('*');
    $this->db->where('Evet_ID',$data);
    $this->db->order_by('Map_ID','DESC');

    $query = $this->db->get('Merket_place_Buyer_event_map');

    return $query->result();  // Use row() to get only the first row
        
    }
    public function Buyer_User_Data(){
    
    $query = $this->db->get('Market_place_Buyer');
    
    return $query->result(); 
    
    }
    
    public function Buyer_filter_data($Buyer_ID){
     $this->db->distinct();
    $this->db->where('id',$Buyer_ID);
    
    $query = $this->db->get('Market_place_Buyer');
    
    return $query->result(); 
        
    }


    public function Buyer_data_all(){
   
    $query = $this->db->get('Market_place_Buyer');
    
    return $query->result(); 
        
    }
    
    public function getDistinctCities() {
    $this->db->select('city');
    $this->db->distinct();
    $this->db->from('Market_place_Buyer');
    
    $query = $this->db->get();

    return $query->result();
    }
    
    
    public function getDistinct_business_category() {
    $this->db->select('business_category');
    $this->db->distinct();
    $this->db->from('Market_place_Buyer');
    
    $query = $this->db->get();

    return $query->result();
    
        
    }

    public function Buyer_Login_Password($BuyerName,$Password,$tipe){
        $data=[
             'username'=>$BuyerName,
             'password'=>$Password,
             'Type'=>$tipe
            ];
            
         $q1= $this->db->insert('Merket_place_Login',$data);
         if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }
        
 

}
