<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Lead extends CI_Controller
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
    
    
    public function index()
    {
         $this->load->model("Meeting_model/Lead_model");
        $data['city'] = $this->Lead_model->get_cities();
     
        $this->load->view('Meeting/dashboard/header');
        $this->load->view('Meeting/dashboard/sidebar');
        $this->load->view('Meeting/dashboard/topbar');
        $this->load->view('Meeting/dashboard/lead_form',$data);
        $this->load->view('Meeting/dashboard/footer');
    }
    public function lead_seller_data()
    {
        $this->load->view('Meeting/dashboard/header');
        $this->load->view('Meeting/dashboard/sidebar');
        $this->load->view('Meeting/dashboard/topbar');
        $this->load->view('Meeting/dashboard/lead_seller_data');
        $this->load->view('Meeting/dashboard/footer');
    }
    
    public function insert_lead_data() {
        // Get all posted data
             $this->load->model("Meeting_model/Lead_model");
    
         $data = array(
            'seller_name' => $this->input->post('seller_name'),
            'buyer_name' => $this->input->post('buyer_name'),
            'full_name' => $this->input->post('txtFullName'),
            'email' => $this->input->post('txtEmail'),
            'contact_number' => $this->input->post('txtPhone'),
            'trip_category' => $this->input->post('ddlBudget'),
            'departure_country' => $this->input->post('txtDepCountry'),
            'departure_city' => $this->input->post('txtDepCity'),
            'arrival_country' => $this->input->post('txtArriveCountry'),
            'arrival_city' => $this->input->post('txtArriveCity'),
            'departure_date' => $this->input->post('txtDepDate'),
            'number_of_nights' => $this->input->post('txtNights'),
            'number_of_adults' => $this->input->post('txtNoOfAdults'),
            'number_of_minors' => $this->input->post('txtNoOfMinor'),
            'enquiry' => $this->input->post('txtMsg')
        );
        // Insert data into database
        $result = $this->Lead_model->insert_lead_data($data);
    
        // Send response to Ajax request
        if ($result) {
            echo json_encode(array('status' => 'success'));
        } else {
            echo json_encode(array('status' => 'error', 'message' => 'Failed to insert data'));
        }
    }



}
