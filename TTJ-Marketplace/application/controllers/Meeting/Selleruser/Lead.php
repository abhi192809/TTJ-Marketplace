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
         if($user_type == 'Seller'){
             
         }
         else{
            redirect('Meeting/login');
             
         }
    }
    
    public function lead_seller_data()
    {
        $this->load->model('Meeting_model/Lead_model');
        $this->load->model('Meeting_model/Buyer_model');
        $data['lead'] = $this->Lead_model->get_lead();
        $data['buyer'] = $this->Buyer_model->Buyer_User_Data();
        $this->load->view('Meeting/Seller/header');
        $this->load->view('Meeting/Seller/sidebar');
        $this->load->view('Meeting/Seller/topbar');
        $this->load->view('Meeting/Seller/lead_seller_data',$data);
        $this->load->view('Meeting/Seller/footer');
    }
    
    public function Enquiry_seller_data(){
         $this->load->model('Meeting_model/Lead_model');
        $this->load->model('Meeting_model/Buyer_model');
        $data['lead'] = $this->Lead_model->get_lead();
        $data['buyer'] = $this->Buyer_model->Buyer_User_Data();
        $this->load->view('Meeting/Seller/header');
        $this->load->view('Meeting/Seller/sidebar');
        $this->load->view('Meeting/Seller/topbar');
        $this->load->view('Meeting/Seller/Enquiry_seller_data',$data);
        $this->load->view('Meeting/Seller/footer');
    }
    
    public function Approved_Lead()
    {
        $this->load->model('Meeting_model/Lead_model');
        $this->load->model('Meeting_model/Buyer_model');
        $data['lead'] = $this->Lead_model->get_lead();
        $data['buyer'] = $this->Buyer_model->Buyer_User_Data();
        $this->load->view('Meeting/Seller/header');
        $this->load->view('Meeting/Seller/sidebar');
        $this->load->view('Meeting/Seller/topbar');
        $this->load->view('Meeting/Seller/Approved_Lead',$data);
        $this->load->view('Meeting/Seller/footer');
    }
    
    public function Your_Destination(){
        
        $this->load->view('Meeting/Seller/header');
        $this->load->view('Meeting/Seller/sidebar');
        $this->load->view('Meeting/Seller/topbar');
        $this->load->view('Meeting/Seller/Your_Destination');
        $this->load->view('Meeting/Seller/footer');
    }
    
    
     public function Get_countries()
{
    // Endpoint URL of the external API (example: Rest Countries API)
    $apiUrl = 'https://restcountries.com/v3.1/all';

    // Make an HTTP request to the API
    $curl = curl_init($apiUrl);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($curl);
    $httpCode = curl_getinfo($curl, CURLINFO_HTTP_CODE);
    curl_close($curl);

    // Check if the request was successful (HTTP status code 200)
    if ($httpCode == 200) {
        // Decode the JSON response
        $countries = json_decode($response, true);
        // Extract country names from the response
        $countryNames = array_column($countries, 'name.common');
        // Return the country names as JSON response
        $this->output->set_content_type('application/json')->set_output(json_encode($countryNames));
    } else {
        // Return an error response if the request failed
        $this->output->set_status_header($httpCode)->set_output('Error fetching countries from the API');
    }
}


   public function Approved_the_lead(){
    $this->load->model('Meeting_model/Lead_model');
    $sellerID = $this->session->userdata('user_id');
    $status = $this->input->post('status');
    $lead_id = $this->input->post('rowId');
     $data = [
         
          'seller_ID'=> $sellerID,
          'Status'=> $status,
          'id' => $lead_id,
          'enquiry' => '0'
         ];
        
    $quary = $this->Lead_model->Approved_Entry_give($data);
    
    if($quary == true ){
         echo 1;
    }
    else{
        echo 0;
    }
}
}

