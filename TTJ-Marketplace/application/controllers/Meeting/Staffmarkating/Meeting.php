<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Meeting extends CI_Controller
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
         if($user_type == 'Staff-Markating'){
             
         }
         else{
            redirect('Meeting/login');
             
         }
    }
    
    public function Active_event_meeting()
    {
        $this->load->view('Meeting/Staff-markating/header');
        $this->load->view('Meeting/Staff-markating/sidebar');
        $this->load->view('Meeting/Staff-markating/topbar');
        $this->load->view('Meeting/Staff-markating/Active_event_meeting');
        $this->load->view('Meeting/Staff-markating/footer');
    }
}
