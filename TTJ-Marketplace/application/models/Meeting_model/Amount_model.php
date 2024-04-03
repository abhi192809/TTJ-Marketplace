<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Amount_model extends CI_Model {

    
    public function Amount_get($ID) {
        
    $this->db->select('*');
    $this->db->where('seller_ID',$ID);
    $this->db->from(' Merket_place_seller_Amounts ar');
    $this->db->join('Market_place_Events me', 'ar.event_ID = me.EventID');
    $this->db->join('Merket_place_Sellers ms', 'ar.seller_ID = ms.SellerID');

    $query = $this->db->get();

    return $query->result(); // Add this line to return the result
    
    }


}
