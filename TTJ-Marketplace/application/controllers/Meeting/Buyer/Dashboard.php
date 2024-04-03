<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
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
    
    public function index()
    {
        $BuyerID = $this->session->userdata('user_id');
        
        $this->load->model('Meeting_model/Event_model');
        
        $data['Event'] = $this->Event_model->get_Number_of_Event_book();
        $data['travemart_meeting'] = $this->Event_model->get_Number_buyer_Event_book_Meeting($BuyerID);
        
        $data['Lead'] = $this->Event_model->Lead($BuyerID);
        $data['Event_know'] = $this->Event_model->get_Number_of_upcoming_Event(); 
        $data['Meeting'] = $this->Event_model->Meeting_scheduling();
        
        $this->load->view('Meeting/Buyer/header');
        $this->load->view('Meeting/Buyer/sidebar');
        $this->load->view('Meeting/Buyer/topbar');
        $this->load->view('Meeting/Buyer/index',$data);
        $this->load->view('Meeting/Buyer/footer');
    }
    
    
    
}
