<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Filer_meeting extends CI_Controller
{
     public function __construct()
    {
        parent::__construct();
        $this->load->library('session');

        
        
        // Check if user is not logged in
        if (!$this->session->userdata('user_id')) {
            
            // Redirect to the login page or any other page as needed
            redirect('Meeting/login');
        }
        
        
         $user_type = $this->session->userdata('type');
         if($user_type == 'Admin'){
             
         }
         else{
            redirect('Meeting/login');
             
         }
    }
    
    public function filter($SellerID,$SellerName,$SellerCompanyName)
    
    {
        $data['SellerName'] = $SellerName;
        $data['SellerCompanyName'] = $SellerCompanyName;
        $this->load->model('Meeting_model/Booking_model');
        
        
        $data['Buyer_Map'] = $this->Booking_model->Get_Buyer_all_map_entry($SellerID);
        $data['BuyerID'] = $this->Booking_model->get_buyer($SellerID);
        
        $this->load->view('Meeting/dashboard/header');
        $this->load->view('Meeting/dashboard/sidebar');
        $this->load->view('Meeting/dashboard/topbar');
        $this->load->view('Meeting/dashboard/Filer_meeting',$data);
        $this->load->view('Meeting/dashboard/footer');
    }
}
