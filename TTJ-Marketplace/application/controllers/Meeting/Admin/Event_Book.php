<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Event_Book extends CI_Controller
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
    
    public function event_permission()
    {
        $this->load->model('Meeting_model/Booking_model');
        $data['Event_Requst'] =$this->Booking_model->bookeventView();
        
        $this->load->view('Meeting/dashboard/header');
        $this->load->view('Meeting/dashboard/sidebar');
        $this->load->view('Meeting/dashboard/topbar');
        $this->load->view('Meeting/dashboard/event_permission',$data);
        $this->load->view('Meeting/dashboard/footer');
    }
    
    public function View_Seller_information(){
       $data_seller_id =  $this->input->post('SellerID');
       
         $this->load->model('Meeting_model/Booking_model');
         
        $data = $this->Booking_model->booking_persion_seller_profile($data_seller_id);
        
         $this->output->set_content_type('application/json')->set_output(json_encode($data));
       
    }
    public function Event_Approved()
    {
        $this->load->model('Meeting_model/Booking_model');
        $SellerID = $this->input->post('SellerID');
        $EventID = $this->input->post('EventID');
        $Event_Amount = $this->input->post('Event_Amount');
        $PaymentMethod = $this->input->post('PaymentMethod');
          $PaymentID = $this->input->post('PaymentID');
        $data['Event_Request'] = $this->Booking_model->Find_Entry_of_Event_View($SellerID, $EventID);
    
        if (!empty($data['Event_Request'])) {
            // Remove the 'Event_Request_ID' field from the data
            unset($data['Event_Request']['Event_Request_ID']);
    
            $this->Booking_model->Transfer_Entry_of_Event_Approval($data['Event_Request']);
            
            $this->Booking_model->Remove_the_Seller_request($data['Event_Request']);
    
            // Add the amount of the seller
            $data_amount = [
                'seller_id' => $SellerID,
                'event_id' => $EventID,
                'amount' => $Event_Amount,
                'PaymentMethod'=> $PaymentMethod,
                'PaymentID' => $PaymentID
            ];
    
            $this->Booking_model->Add_the_Amound_of_the_Seller($data_amount);
    
            // Echo success message
            echo '1';
        } else {
            // Handle the case when no data is found
            // You may add further logic here if needed
            echo '0';
        }
    }

  
}
