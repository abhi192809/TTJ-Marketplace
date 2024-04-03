<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Meeting_Data extends CI_Controller
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
    
    
    public function Active_event_meeting()
    {
        $this->load->model('Meeting_model/Booking_model');
        $this->load->model('Meeting_model/Buyer_model');
        
        $segments = $this->uri->segment_array();
        $last_segment = end($segments);
        
        $data['Get_meeting_fixed'] = $this->Booking_model->Single_seller_meeting($last_segment);
        
        $data['Buyer'] = $this->Buyer_model->Buyer_data_all();
        $this->load->view('Meeting/dashboard/header');
        $this->load->view('Meeting/dashboard/sidebar');
        $this->load->view('Meeting/dashboard/topbar');
        $this->load->view('Meeting/dashboard/Active_event_meeting',$data);
        $this->load->view('Meeting/dashboard/footer');
    }
    
    public function Seller_Active_event_meeting()
    {
        $this->load->model('Meeting_model/Booking_model');
        $this->load->model('Meeting_model/Buyer_model');
        $this->load->model('Meeting_model/Seller_model');
        
        $data['Get_Active_Event'] = $this->Buyer_model->Active_Event_detels_id_name();
     
        $data['Event_meeting_fixed'] = $this->Booking_model->meeting_fixed_active_Event($data['Get_Active_Event']->EventID);
        
      
        $data['Buyer'] = $this->Buyer_model->Buyer_data_all();
        $data['Seller'] = $this->Seller_model->View_Seller();
        
        
        $this->load->view('Meeting/dashboard/header');
        $this->load->view('Meeting/dashboard/sidebar');
        $this->load->view('Meeting/dashboard/topbar');
        $this->load->view('Meeting/dashboard/Seller_Active_event_meeting',$data);
        $this->load->view('Meeting/dashboard/footer');
    }
    
     public function Old_event_meeting()
    {
        $this->load->model('Meeting_model/Booking_model');
        $this->load->model('Meeting_model/Buyer_model');
        $this->load->model('Meeting_model/Seller_model');
        
        @$data['Get_Active_Event'] = $this->Buyer_model->Active_Event_detels_id_name_old();
     
        @$data['Event_meeting_fixed'] = $this->Booking_model->meeting_fixed_active_Event($data['Get_Active_Event']->EventID);
        
      
        @$data['Buyer'] = $this->Buyer_model->Buyer_data_all();
        @$data['Seller'] = $this->Seller_model->View_Seller();
        
        $this->load->view('Meeting/dashboard/header');
        $this->load->view('Meeting/dashboard/sidebar');
        $this->load->view('Meeting/dashboard/topbar');
        $this->load->view('Meeting/dashboard/Old_event_meeting',$data);
        $this->load->view('Meeting/dashboard/footer');
    }
    
}
