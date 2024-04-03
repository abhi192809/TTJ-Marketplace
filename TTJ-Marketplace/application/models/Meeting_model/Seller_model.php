<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Seller_model extends CI_Model {
    
    public function View_Event(){
         $this->db->order_by('EventID', 'DESC'); // Assuming 'EventID' is the column you want to use for ordering
    return $this->db->get('Market_place_Events')->result();
    }
    
    public function View_Login_seller_Meeing($sellerID){
     $this->db->order_by('EventID', 'DESC'); // Assuming 'EventID' is the column you want to use for ordering
    return $this->db->get('Market_place_Events')->row();
    }
    
      public function insertSeller($sellerData)
    {
        // Insert seller data into the database
        $this->db->insert('Merket_place_Sellers', $sellerData);

        // Return the inserted seller ID
        return $this->db->insert_id();
    }
    
    public function AprovalSeller($sellerData){
     $this->db->insert('Merket_place_Sellers_pending', $sellerData);

        // Return the inserted seller ID
        return $this->db->insert_id();
        
    }
    
      public function UpdateSeller($sellerData)
    {
        // Insert seller data into the database
        $this->db->insert('Merket_place_Sellers', $sellerData);

        // Return the inserted seller ID
        return $this->db->insert_id();
    }
       public function insertSellerEventMap($mapData)
    {
        $this->db->insert('Merket_place_seller_event_map', $mapData);
        return $this->db->insert_id(); // Return the inserted map ID if needed
    }
    public function SellerIDPasword($ID_Password){

        $this->db->insert('Merket_place_Login',$ID_Password);
        
    }
    public function View_Seller(){
        
        $this->db->order_by('SellerID', 'DESC'); // Assuming 'EventID' is the column you want to use for ordering
        return $this->db->get('Merket_place_Sellers')->result();
  
    }
    
    public function Seller_User_id_password($User_name){
    
        $this->db->Where('username',$User_name); // Assuming 'EventID' is the column you want to use for ordering
        return $this->db->get('Merket_place_Login')->row();
      
    }
   
   public function insertAmounts($amountData){
        $this->db->insert('Merket_place_seller_Amounts', $amountData);

        // You can optionally return the insert ID if needed
        return $this->db->insert_id();
   }
    
     public function update_seller_password($user_name, $new_password) {
          $this->db->set('password', $new_password);
    $this->db->where('username', $user_name);
    return $this->db->update('Merket_place_Login');
    }
    
    
   public function Seller_Entry_get($md5_hash){
        $this->db->Where('SellerID',$md5_hash); // Assuming 'EventID' is the column you want to use for ordering
         return $this->db->get('Merket_place_Sellers')->result();
   }
     
     public function updateSellerentry($sellerId, $data) {
        // Assuming you have a 'sellers' table in your database
        $this->db->where('SellerID', $sellerId);
        $this->db->update('Merket_place_Sellers', $data);

        return $this->db->affected_rows();  // Return the number of affected rows
    }
     public function getSellerDetails($sellerId) {
        $this->db->where('SellerID', $sellerId);
        return $this->db->get('Merket_place_Sellers')->row();
    }
    
    public function Seller_pending_data(){
        return $this->db->get('Merket_place_Sellers_pending')->result();
    }
 public function get_Seller_pending_data($seller_id) {
    $this->db->where('SellerID', $seller_id);
    $query = $this->db->get('Merket_place_Sellers_pending');

    if ($query->num_rows() > 0) {
        return $query->row(); // Return seller data as an object
    } else {
        return array(); // Return an empty array if no data found
    }        
}

    public function Seller_pending($sellerID){
    return $this->db->select("`ReferrerPerson`, `SellerName`, `CompanyName`, `PhoneNumber`, `SellerEmail`, `PhysicalAddress`, `City`, `Country`, `PinCode`, `Website`, `PanNumber`, `GstNumber`, `Logo`, `Certifications`, `YearsInOperation`, `IndustryExperience`, `AnnualTurnover`, `EmergencyContacts`, `Category`, `Created_by`")
                    ->where('SellerID', $sellerID)
                    ->get('Merket_place_Sellers_pending')
                    ->row_array();
    }


    public function Seller_Active($panding_Data) {
      $this->db->insert('Merket_place_Sellers', $panding_Data);
        return $this->db->insert_id();
    }

    public function Seller_pending_delete($sellerID) {
        $this->db->where('SellerID', $sellerID)
                 ->delete('Merket_place_Sellers_pending');
    }

    public function Seller_Amount_Add($Seller_Active,$paymentAmount){
            $this->db->where('SellerID', $sellerID)
                 ->delete('Merket_place_Sellers_pending');
    }
    
    public function View_marketing_Staff_Data() {
    $this->db->where('department', 'Staff-Markating'); // Assuming it's 'Staff-Marketing' with a typo corrected
    $query = $this->db->get('Merket_place_employees');
    return $query->result();
    }
    
    public function Employ_Name_get(){
    $query = $this->db->get('Merket_place_employees');
    return $query->result();
        
    }
}
