<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Meeting_Details extends CI_Controller
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
    
    
    public function filter($eventID)
    {
        $this->load->model('Meeting_model/Booking_model');
        
        $this->load->model('Meeting_model/Seller_model');
        
        $data['Event'] =  $this->Booking_model->EventFilter($eventID);
        
        
        $data['Buyer'] =  $this->Booking_model->getBuyerCount($eventID);
        
        $data['Seller'] =  $this->Booking_model->getSellerCount($eventID);
        
        $data['Meeting_count'] = $this->Booking_model->getMeetingCount($eventID);
        
      
       $data['Meeting_Fixed'] = $this->Booking_model->meeting_related_data($eventID);
       
       $data['All_Seller'] = $this->Booking_model->Seller_Data();
       
       $data['EventID'] = $eventID;
       
        
        $this->load->view('Meeting/dashboard/header');
        $this->load->view('Meeting/dashboard/sidebar');
        $this->load->view('Meeting/dashboard/topbar');
        $this->load->view('Meeting/dashboard/Meeting_Details',$data);
        $this->load->view('Meeting/dashboard/footer');
    }
}
