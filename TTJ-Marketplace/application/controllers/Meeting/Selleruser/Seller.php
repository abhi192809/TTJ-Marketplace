<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Seller extends CI_Controller
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
         if($user_type == 'Seller'){
             
         }
         else{
            redirect('Meeting/login');
             
         }
    }
    public function index()
    {
        $SellerID = $this->session->userdata('user_id');
        $this->load->model("Meeting_model/Event_model");
        $data['Event_Book'] = $this->Event_model->get_Number_of_seller_Event_book($SellerID);
        
        $data['Event'] = $this->Event_model->get_Number_of_Event_book();
        
        $data['Event_book_Meeting'] = $this->Event_model->get_Number_of_Event_book_Meeting($SellerID);
        $data['Upcoming_Event'] = $this->Event_model->get_Number_of_upcoming_Event($SellerID);
        
        $this->load->view('Meeting/Seller/header');
        $this->load->view('Meeting/Seller/sidebar');
        $this->load->view('Meeting/Seller/topbar');
        $this->load->view('Meeting/Seller/index',$data);
        $this->load->view('Meeting/Seller/footer');
    }
}
