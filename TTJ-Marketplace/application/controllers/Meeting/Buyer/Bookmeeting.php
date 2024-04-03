<?php
defined('BASEPATH') or exit('No direct script access allowed');

class bookmeeting extends CI_Controller
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
         if($user_type == 'Buyer'){
             
         }
         else{
            redirect('Meeting/login');
             
         }
    }
    
     
      public function Book_your_meeting_with_buyer(){
        $this->load->model('Meeting_model/Booking_model');
        $this->load->model('Meeting_model/Seller_model');
        $BuyerID = $this->session->userdata('user_id');
        // Event ID
        $data['EventID'] = $this->Booking_model->Seller_Comming_Event();
        
        // $BuyerID
        $data['Seller_map_Event'] = $this->Booking_model->get_the_map_seller($data['EventID']->EventID);
        $data['Seller_get'] = $this->Booking_model->get_seller();
        $data['Meeting_fixed'] = $this->Booking_model->meeting_related_data($data['EventID']->EventID);
       $data['Map_or_not'] = $this->Booking_model->buyer_booking_for_the_Event_yes_or_not($data['EventID']->EventID);

        $this->load->view('Meeting/Buyer/header');
        $this->load->view('Meeting/Buyer/sidebar');
        $this->load->view('Meeting/Buyer/topbar');
        $this->load->view('Meeting/Buyer/Book_your_meeting_with_buyer', $data);
        $this->load->view('Meeting/Buyer/footer');
    }
   
    public function Update_meeting_with_buyer(){
        $this->load->view('Meeting/Buyer/header');
        $this->load->view('Meeting/Buyer/sidebar');
        $this->load->view('Meeting/Buyer/topbar');
        $this->load->view('Meeting/Buyer/Update_meeting_with_buyer');
        $this->load->view('Meeting/Buyer/footer');    
    }


    public function pre_booking_Event_Buyer(){
        $this->load->view('Meeting/Buyer/header');
        $this->load->view('Meeting/Buyer/sidebar');
        $this->load->view('Meeting/Buyer/topbar');
        $this->load->view('Meeting/Buyer/per_booking_Event');
        $this->load->view('Meeting/Buyer/footer');    
    }

    public function pre_booking_Event_data_Buyer(){
        $this->load->view('Meeting/Buyer/header');
        $this->load->view('Meeting/Buyer/sidebar');
        $this->load->view('Meeting/Buyer/topbar');
        $this->load->view('Meeting/Buyer/per_booking_Event_data');
        $this->load->view('Meeting/Buyer/footer');    
    }

      public function Request_Seller_For_Event(){
          
        $this->load->model('Meeting_model/Event_model');
      
        $data =[
              'EventID'=>  $this->input->post('Event_id'),
              'SellerID' =>  $this->input->post('Seller_ID'),
            ];
        
        $this->Event_model->Event_Request($data);
        
        echo 1;
    }
    
  public function Chack_the_meetting_slot()
  {
         $this->load->model('Meeting_model/Booking_model');
      $Event_Date_find = $this->input->post('EventID');
     
      $all_time_slots = $this->Booking_model->get_time_slots();
      $Event_Duration = $this->Booking_model->Event_Duration($Event_Date_find);
      $get_all_seller_Book_slot = $this->Booking_model->get_all_seller_Book_slot(); 

    
        $result = [
        'all_time_slots' => $all_time_slots,
        'get_all_seller_Book_slot' => $get_all_seller_Book_slot,
        'Event_Duration' =>$Event_Duration,
     ];

    // Set proper content type and echo the JSON response
    $this->output->set_content_type('application/json')->set_output(json_encode($result));
  }


public function Book_your_seller_meeting(){
    $this->load->model('Meeting_model/Booking_model');
  
    $data = [
        'BuyerID'  =>  $_POST['BuyerID'],
        'SellerID' =>  $_POST['SellerID'],
        'EventID'  =>  $_POST['EventID'],
    ];
    
    $data_inser = [
        'BuyerID'  =>  $_POST['BuyerID'],
        'SellerID' =>  $_POST['SellerID'],
        'EventID'  =>  $_POST['EventID'],
        'Time_Slot'=>  $_POST['Time_Slot'],
         'Date'    =>  $_POST['date'], // Add Date parameter
    ];
    
    $meeting_check = $this->Booking_model->chack_slot_already_book_active_Event($data);
    
    if($meeting_check == false){
        $meeting_fixed = $this->Booking_model->Active_Event_Meeting_given( $data_inser);
      
        if(!empty($meeting_fixed)){
            echo 1;
        } else {
            echo 0;
        }
    } else {
        echo 0;
    }
}

public function Update_Meeting_seller(){
   
    $this->load->model('Meeting_model/Booking_model');
  
    $data = [
        'BuyerID'  =>  $_POST['BuyerID'],
        'SellerID' =>  $_POST['SellerID'],
        'EventID'  =>  $_POST['EventID'],
    ];
    $data_inser = [
       'Time_Slot'=>  $_POST['Time_Slot'],
         'Date'    =>  $_POST['date'], // Add Date parameter
    ];
    
    
     $meeting_ID = $this->Booking_model->Active_meeting_insert_id($data);
     if($meeting_ID !='Null'){
        $meeting_fixed = $this->Booking_model->Update_Active_Event_Meeting_given($data_inser,$meeting_ID);
        if(!empty($meeting_fixed == true)){
            echo 1;
        } else {
            echo 0;
        }
     }
}

    
   
}
