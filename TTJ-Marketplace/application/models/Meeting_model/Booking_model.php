<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Booking_model extends CI_Model {

    public function View_Seller_Request() {
        
        $query = $this->db->get('Marketplace_Events_request');
        // Return the result as an array
         if ($query->num_rows() > 0) {
            // Extract 'EventID' values and return as an array
            return $query->result();
        } else {
            // Return an empty array or handle it based on your requirements
            return array();
        }
    }
    
    public function View_Seller_Request_entry(){
          
        $query = $this->db->get('Merket_place_seller_event_map');
        // Return the result as an array
     
            return $query->result();
       
    }
    public function bookeventView(){
    $this->db->select('*');
    $this->db->from('Marketplace_Events_request er');
    $this->db->join('Market_place_Events me', 'er.EventID = me.EventID');
    $this->db->join('Merket_place_Sellers ms', 'er.SellerID = ms.SellerID');

    $query = $this->db->get();

    return $query->result(); // Add this line to return the result
}

  public function View_Seller_already_map_entry($User_id){
                  $this->db->where('seller_id',$User_id);
        $query = $this->db->get('Merket_place_seller_event_map');
        // Return the result as an array
         if ($query->num_rows() > 0) {
            // Extract 'EventID' values and return as an array
            return $query->row('event_id');
        } else {
            // Return an empty array or handle it based on your requirements
            return array();
        }
  }
  
    public function booking_persion_seller_profile($SellerID){
        $this->db->where('SellerID', $SellerID);
        $query = $this->db->get('Merket_place_Sellers');
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }

    public function Find_Entry_of_Event_View($SellerID, $EventID){
        $query = $this->db->get_where('Marketplace_Events_request', array('SellerID' => $SellerID, 'EventID' => $EventID));
        return $query->row_array(); // Adjust as needed
    }

  public function Transfer_Entry_of_Event_Approval($data) {
    $insertData = array(
        'event_id' => $data['EventID'],
        'seller_id' => $data['SellerID'],
    
    );

    $this->db->insert('Merket_place_seller_event_map', $insertData);
}
  public function Remove_the_Seller_request($requestData) {
        $this->db->where('SellerID', $requestData['SellerID']);
        $this->db->where('EventID', $requestData['EventID']);
        $this->db->delete('Marketplace_Events_request');
    }
    
    public function Add_the_Amound_of_the_Seller($data_amount){
         $query = $this->db->insert('Merket_place_seller_Amounts',$data_amount);
    }
    
    public function approvedeventView(){
    $this->db->select('*');
    $this->db->from(' Merket_place_seller_Amounts ar');
    $this->db->join('Market_place_Events me', 'ar.event_ID = me.EventID');
    $this->db->join('Merket_place_Sellers ms', 'ar.seller_ID = ms.SellerID');

    $query = $this->db->get();

    return $query->result(); // Add this line to return the result
    }
    
      public function Buyer_Comming_Event(){
        $currentDate = date('Y-m-d'); 
        $this->db->select('*'); // corrected
        $this->db->where('EventStartDate >=', $currentDate);
        $this->db->order_by('EventStartDate', 'ASC');
        $query = $this->db->get('Market_place_Events');
        return $query->row();
    }
    
     public function Seller_Comming_Event(){
        $currentDate = date('Y-m-d'); 
        $this->db->select('*'); // corrected
        $this->db->where('EventStartDate >=', $currentDate);
        $this->db->order_by('EventStartDate', 'ASC');
        $query = $this->db->get('Market_place_Events');
        return $query->row();
    }
    

    
    public function get_the_map_buyer($data){
        $this->db->where('Evet_ID',$data);
        $query = $this->db->get('Merket_place_Buyer_event_map');
        return $query->result();
    } 
    public function get_the_map_seller($data){
        $this->db->where('event_id',$data);
        $query = $this->db->get('Merket_place_seller_event_map');
        return $query->result();
    } 
    public function get_buyer(){
    
    $query = $this->db->get('Market_place_Buyer');
    return $query->result(); // Add this line to return the result
    
        
    }
    
    
      public function get_seller(){
    
    $query = $this->db->get('Merket_place_Sellers');
    return $query->result(); // Add this line to return the result
    
        
    }
    
   
    
   public function Slot_get(){
    $query = $this->db->get('Market_place_TimeSlots');
    return $query->result(); // Add this line to return the result
   }
   
   public function fix_slot($data){
   // Add this line
    $this->db->where($data);
    $query = $this->db->get('Market_place_meeting_fixed');
    return $query->result();
}

public function get_time_slots()
{
    $query = $this->db->get('Market_place_TimeSlots');
    return $query->result();
}

public function get_already_booked_slots_same_seller($data)
{
    $this->db->where($data);
    $query = $this->db->get('Market_place_meeting_fixed');
    
   
    return $query->result();
}

public function other_seller_book_the_time_slot_for_the_buyer($other_time_slot_with_buyer){
    
    // Extract SellerID to exclude
    $sellerIdToExclude = $other_time_slot_with_buyer['SellerID'];

    // Remove SellerID from the array
    unset($other_time_slot_with_buyer['SellerID']);
    
    // Query to fetch other seller booked slots for the same buyer
    $this->db->where($other_time_slot_with_buyer);
    $this->db->where('SellerID !=', $sellerIdToExclude);
    $query = $this->db->get('Market_place_meeting_fixed');
    
    return $query->result();
}

    public function chack_slot_already_book_active_Event($data){
    $this->db->where('BuyerID', $data['BuyerID']);
    $this->db->where('SellerID', $data['SellerID']);
    $this->db->where('EventID', $data['EventID']);
    $query = $this->db->get('Market_place_meeting_fixed');
    return $query->num_rows() > 0;
}

    
    public function Active_Event_Meeting_given($data){
        $this->db->insert('Market_place_meeting_fixed', $data);
        return $this->db->insert_id();
    }   
   
   public function Event_Duration($Event){
       $this->db->select('EventStartDate,EventEndDate');
       $this->db->where('EventID',$Event);
       $query = $this->db->get('Market_place_Events');
       return $query->result();
       
   }
   
   public function get_all_seller_Book_slot(){
    $query = $this->db->get('Market_place_meeting_fixed');
    return $query->result();
   }
   
   
   public function meeting_related_data($EventID){
       
   $this->db->where('EventID',$EventID);
    $query = $this->db->get('Market_place_meeting_fixed');
    return $query->result();
   }
   
 public function Active_meeting_insert_id($data){
   $this->db->where($data);
    $query = $this->db->get('Market_place_meeting_fixed');
    return $query->row('Meeting_Fixed_ID');   
 }
 
 public function Update_Active_Event_Meeting_given($data_inser,$meeting_ID){
   $this->db->where('Meeting_Fixed_ID',$meeting_ID);
    $query = $this->db->update('Market_place_meeting_fixed',$data_inser);
    return true;
     
 }
 
  public function Get_Event_Seller_Data(){
    $SelerID =  $this->session->userdata('user_id'); 
    $this->db->where('seller_id',$SelerID);
    $query = $this->db->get('Merket_place_seller_event_map');
   return $query->result();
    }
    
  public function Get_Event_Seller_Data_map($event_id){
    $SelerID =  $this->session->userdata('user_id'); 
    $this->db->where('SellerID',$SelerID);
    $this->db->where('EventID',$event_id);
    $query = $this->db->get(' Market_place_meeting_fixed');
    
    return  $query->result();
      
  }
  
  public function Get_Event_Seller_Data_row($event_id){
    $SelerID =  $this->session->userdata('user_id'); 
    $this->db->where('seller_id',$SelerID);
    $this->db->where('event_id',$event_id);
    $query = $this->db->get('Merket_place_seller_event_map');
    
    return  $query->num_rows();
      
  }
  
  
  public function Get_Event_Buyer_Data_map($event_id){
    
    $this->db->where('EventID',$event_id);
    $query = $this->db->get('Market_place_meeting_fixed');
    
    return  $query->result();
      
  }
  
   public function Get_Event_Buyer_Data(){
    $BuyerID =  $this->session->userdata('user_id'); 
    $this->db->where('buyer_id',$BuyerID);
    $query = $this->db->get('Merket_place_Buyer_event_map');
   return $query->result();
   }
    
  public function Seller_Value(){
    $query = $this->db->get('Merket_place_Sellers');
    return  $query->result();
      
  }
public function seller_booking_for_the_Event_yes_or_not($EventID){
    $sellerID =  $this->session->userdata('user_id'); 
    $this->db->where('seller_id', $sellerID);
    $this->db->where('event_id', $EventID);
    $query = $this->db->get('Merket_place_seller_event_map'); // Corrected table name
    
    if($query->num_rows() > 0){
        return 1;
    } else {
        return 0;
    }
}

public function buyer_booking_for_the_Event_yes_or_not($EventID){
    $Buyer_ID =  $this->session->userdata('user_id'); 
    $this->db->where('Buyer_ID', $Buyer_ID);
    $this->db->where('Evet_ID', $EventID);
    $query = $this->db->get('Merket_place_Buyer_event_map'); // Corrected table name
    
    if($query->num_rows() > 0){
        return 1;
    } else {
        return 0;
    }
}

public function meeting_fixed_active_Event($EventID){
    $this->db->where('event_id',$EventID);
    $query = $this->db->get('Merket_place_seller_event_map');
    return  $query->result();
}

public function Single_seller_meeting($SellerID){
    $this->db->where('SellerID',$SellerID);
    $query = $this->db->get('Market_place_meeting_fixed');
      if($query->num_rows() > 0){
         return  $query->result();
    } else {
        return 0;
    }
}

public function Single_seller_meeting_row($SellerID){
    $this->db->where('SellerID',$SellerID);
    $query = $this->db->get('Market_place_meeting_fixed');
    return  $query->num_rows();
 }
 
  public function getSellerCount($eventID)
    {
        // Assuming you have a table named 'Merket_place_seller_event_map' that maps sellers to events
        return $this->db->where('event_id', $eventID)->count_all_results('Merket_place_seller_event_map');
    }

    public function getBuyerCount($eventID)
    {
        // Assuming you have a table named 'Merket_place_Buyer_event_map' that maps buyers to events
        return $this->db->where('Evet_ID', $eventID)->count_all_results('Merket_place_Buyer_event_map');
    }

    public function getMeetingCount($eventID)
    {
        // Assuming you have a table named 'Market_place_meeting_fixed' that contains meeting details
        return $this->db->where('EventID', $eventID)->count_all_results('Market_place_meeting_fixed');
    }
    
    public function EventFilter($eventID)
    {
        return $this->db->where('EventID', $eventID)->get('Market_place_Events')->result();
    }
    public function Seller_Data(){
        $query = $this->db->get('Merket_place_Sellers');
        return  $query->result();
   
    }
    
    
    
    public function Get_Buyer_all_map_entry($SellerID){
          
        $this->db->where('SellerID',$SellerID);
        $query = $this->db->get('Market_place_meeting_fixed');
        return  $query->result();
   
    }
    
    public function Get_Buyer_Event_map($BuyerID){
          
        $this->db->where('Buyer_ID',$BuyerID);
        $query = $this->db->get('Merket_place_Buyer_event_map');
         
        if($query->num_rows() > 0){
            return  $query->result();
        } else {
         
            
        }
   
    }
    
    
    public function Get_Seller_Event_map($SellerID){
          
        $this->db->where('seller_id',$SellerID);
        $query = $this->db->get('Merket_place_seller_event_map');
         
        if($query->num_rows() > 0){
            return  $query->result();
        } else {
         
            
        }
   
    }
    
    public function Get_map_Event(){
   
        $query = $this->db->get('Market_place_Events');
            if($query->num_rows() > 0){
        return  $query->result();
        } else {
         
            
        }     
    }
    
    public function Get_Buyer_Event_fixed($data_fixed_Event){
   
       $this->db->where($data_fixed_Event);
        $query = $this->db->get('Market_place_meeting_fixed');
         
        if($query->num_rows() > 0){
            return  $query->result();
        } else {
         
            
        }
        
    }
    
    
    public function Get_seller_event_fixed($data_fixed_Event){
   
       $this->db->where($data_fixed_Event);
        $query = $this->db->get('Market_place_meeting_fixed');
         
        if($query->num_rows() > 0){
            return  $query->result();
        } else {
         
            
        }
        
    }
}
