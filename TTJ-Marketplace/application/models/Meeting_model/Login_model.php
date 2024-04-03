<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {

    public function checkLogin($email, $password)
    {
        // Assuming you have a table named 'Merket_place_Login' with columns 'username', 'password', and 'Type'
        $query = $this->db->get_where('Merket_place_Login', ['username' => $email, 'password' => $password]);

        // Return the result as an array
        return $query->row_array();
    }
    
    public function get_ID_password_and_Seller_Data($user_id) {
    $this->db->select('login.*, sellers.*'); // Select all fields from both tables
    $this->db->from('Merket_place_Login as login');
    $this->db->join('Merket_place_Sellers as sellers', 'login.username = sellers.SellerEmail', 'RIGHT');
    $this->db->where('login.user_id', $user_id);

    $query = $this->db->get();
    return $query->result_array();
    }


      public function chack_the_user_id_seller($EmailID) {
        $this->db->select('SellerID');
        $this->db->where('SellerEmail', $EmailID);
        $query = $this->db->get('Merket_place_Sellers');
     
        return $query->row_array();
    }

   
   public function chack_the_user_id_Buyer($user){
        $this->db->select('id');
        $this->db->where('email',$user);
        $query = $this->db->get('Market_place_Buyer');
     
        return $query->row_array();
       
   }
   
   
   public function chack_the_user_id_Staff_Markating($user){
       
        $this->db->select('id');
        $this->db->where('email',$user);
        $query = $this->db->get('Merket_place_employees');
    
        return $query->row_array();
       
   }
}
