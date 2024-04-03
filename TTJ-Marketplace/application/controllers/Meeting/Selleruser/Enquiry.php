<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Enquiry extends CI_Controller
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
    { $this->load->model('Meeting_model/Lead_model');
        $this->load->model('Meeting_model/Buyer_model');
        $data['lead'] = $this->Lead_model->get_lead();
        $data['buyer'] = $this->Buyer_model->Buyer_User_Data();
       
        $this->load->view('Meeting/Seller/header');
        $this->load->view('Meeting/Seller/sidebar');
        $this->load->view('Meeting/Seller/topbar');
        $this->load->view('Meeting/Seller/Enquiry',$data);
        $this->load->view('Meeting/Seller/footer');
    }
   
}
