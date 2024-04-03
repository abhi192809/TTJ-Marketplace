<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Magazine_Subscription_form_submit extends CI_Model {
    
     public function submit_subscription($data) {
         $this->load->database();
        $this->db->insert('TTJ_Travmart_Magazin_payment_prof', $data);
    }
}
