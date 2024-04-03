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
         if($user_type == 'User'){
             
         }
         else{
            redirect('Meeting/login');
             
         }
    }
    
    
    public function index()
    {
        $this->load->view('Meeting/Users/header');
        $this->load->view('Meeting/Users/sidebar');
        $this->load->view('Meeting/Users/topbar');
        $this->load->view('Meeting/Users/index');
        $this->load->view('Meeting/Users/footer');
    }
}
