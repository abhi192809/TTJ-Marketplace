<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Buyer extends CI_Controller
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
        $this->load->model('Meeting_model/Buyer_model');
        $this->load->model('Meeting_model/Master_model');
        $data['Event'] = $this->Buyer_model->Event_detels();
        $data['Nature_of_Business'] = $this->Master_model->Merket_place_Nature_of_Business_Master();
           $data['Business_Category_Master'] = $this->Master_model->Merket_place_Business_Category_Master();
      
        $this->load->view('Meeting/dashboard/header');
        $this->load->view('Meeting/dashboard/sidebar');
        $this->load->view('Meeting/dashboard/topbar');
        $this->load->view('Meeting/dashboard/buyer_view', $data);  // Pass $data as an array
        $this->load->view('Meeting/dashboard/footer');
    }

    public function buyer_data_view(){
        $this->load->model('Meeting_model/Buyer_model');
        @$data['Active_Event'] = $this->Buyer_model->Active_Event_detels_id_name();
        @$data['Event_Related_Buyer'] = $this->Buyer_model->Event_map_persion_buyer($data['Active_Event']->EventID);
        if($data['Event_Related_Buyer'] != NULL){
        $data['Buyer_Data'] = $this->Buyer_model->Buyer_User_Data();
            
        }
        $this->load->view('Meeting/dashboard/header');
        $this->load->view('Meeting/dashboard/sidebar');
        $this->load->view('Meeting/dashboard/topbar');
        $this->load->view('Meeting/dashboard/buyer_data_view',$data);
        $this->load->view('Meeting/dashboard/footer');
  
    }
    public function buyer_ragistation_appreal_request(){
        $this->load->model('Meeting_model/Buyer_model');
        $data['Event'] = $this->Buyer_model->get_Event_detels();
        $this->load->view('Meeting/dashboard/header');
        $this->load->view('Meeting/dashboard/sidebar');
        $this->load->view('Meeting/dashboard/topbar');
        $this->load->view('Meeting/dashboard/buyer_ragistation_appreal_request',$data);
        $this->load->view('Meeting/dashboard/footer');
    }
    public function buyer_data_old_Event(){
        $this->load->model('Meeting_model/Buyer_model');
        $data['Buyer_Data'] = $this->Buyer_model->Buyer_data_all();
        $data['Buyer_city'] = $this->Buyer_model->getDistinctCities();
        $data['Buyer_business_category'] = $this->Buyer_model->getDistinct_business_category();
      
        $this->load->view('Meeting/dashboard/header');
        $this->load->view('Meeting/dashboard/sidebar');
        $this->load->view('Meeting/dashboard/topbar');
        $this->load->view('Meeting/dashboard/old_buyer_data',$data);
        $this->load->view('Meeting/dashboard/footer');
  
    }
    public function update_buyer_data(){
        $id = $this->uri->segment(5);
        $this->load->model('Meeting_model/Buyer_model');
         $data['Buyer'] = $this->Buyer_model->Get_Buyer_data($id);
        $this->load->view('Meeting/dashboard/header');
        $this->load->view('Meeting/dashboard/sidebar');
        $this->load->view('Meeting/dashboard/topbar');
        $this->load->view('Meeting/dashboard/Update_buyer_data',$data);
        $this->load->view('Meeting/dashboard/footer');
  
    }
    
    public function Buyer_Event(){
        $data['id'] = $id = $this->uri->segment(5);
        $this->load->model('Meeting_model/Booking_model');
        
        $data['EventID'] = $this->Booking_model->Get_Buyer_Event_map($id);
        $data['Event_Data'] = $this->Booking_model->Get_map_Event();
    
        $this->load->view('Meeting/dashboard/header');
        $this->load->view('Meeting/dashboard/sidebar');
        $this->load->view('Meeting/dashboard/topbar');
        $this->load->view('Meeting/dashboard/Buyer_Event',$data);
        $this->load->view('Meeting/dashboard/footer');
    }
    
    public function Get_the_Buyer_Realted_Event_Seller_Meeting(){
        
          $EventID = $this->uri->segment(5);
          $BuyerID = $this->uri->segment(6);
           $this->load->model('Meeting_model/Booking_model');
        $data_fixed_Event =[
            
            'EventID' => $EventID,
            'BuyerID' => $BuyerID,
        
            ];
            
        $data['Get_Seller_from_fixed'] =$this->Booking_model->Get_Buyer_Event_fixed($data_fixed_Event);
    
        $data['Get_Seller_data'] = $this->Booking_model->Seller_Value();
    
        $this->load->view('Meeting/dashboard/header');
        $this->load->view('Meeting/dashboard/sidebar');
        $this->load->view('Meeting/dashboard/topbar');
        $this->load->view('Meeting/dashboard/Get_the_Buyer_Realted_Event_Seller_Meeting',$data);
        $this->load->view('Meeting/dashboard/footer');
    }
    public function Submit_the_buyer_form() {
        $this->load->model('Meeting_model/Buyer_model');
    
        $config['upload_path'] = './assets/Meeting/Buyer_logo/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '*';
    
        $this->load->library('upload', $config);
    
        if ($this->upload->do_upload('Logo')) {
            $upload_data = $this->upload->data();
            $data = array(
                'Logo' => $upload_data['file_name'],
                'Name' => $this->input->post('Name'),
                'Designation' => $this->input->post('Designation'),
                'Your_Company_Name' => $this->input->post('Your_Company_Name'),
                'Nature_of_Business' => $this->input->post('Nature_of_Business'),
                'Business_Category' => $this->input->post('Business_Category'),
                'Company_Address' => $this->input->post('Company_Address'),
                'Annual_Turnover' => $this->input->post('Annual_Turnover'),
                'Year_Commencement' => $this->input->post('Year_Commencement'),
                'Destinations' => $this->input->post('Destinations'),
                'Trade_Associations' => $this->input->post('Trade_Associations'),
                'City' => $this->input->post('City'),
                'Pin_Code' => $this->input->post('Pin_Code'),
                'Email' => $this->input->post('Email'),
                'Mobile_Number' => $this->input->post('Mobile_Number'),
                'Country' => $this->input->post('Country'),
            );
             
                $EventID = $this->input->post('EventID');
             
             
            $buyer_id = $this->Buyer_model->insert_buyer($data);
             
            $Event_map_buyer =  $this->Buyer_model->map_buyer_entry($buyer_id,$EventID);
            
            // $buyer_Login = $this->Buyer_Model->Login();
            
            $response = array('status' => 'success', 'message' => 'Form submitted successfully!');
            echo json_encode($response);
        } else {
            $response = array('status' => 'error', 'message' => $this->upload->display_errors());
            echo json_encode($response);
        }
    }
    
    
    public function delete_buyer_data() {
          $this->load->model('Meeting_model/Buyer_model');
        $BuyerId = $this->input->post('Buyer_ID');
        $EventId = $this->input->post('Event_ID');
 
        // Perform the deletion in the model
        $result = $this->Buyer_model->delete_buyer_entry($BuyerId,$EventId);

        if ($result) {
            echo json_encode(['success' => 'Entry deleted successfully']);
        } else {
            echo json_encode(['error' => 'Failed to delete entry']);
        }
    }
    
    
     public function approve_registration(){
        $this->load->model('Meeting_model/Buyer_model');
        $BuyerId = $this->input->post('Buyer_ID');
        $EventId = $this->input->post('Event_ID');
        $BuyerName = $this->input->post('BuyerName');
        
        $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
        $password = substr(str_shuffle($characters), 4, 8); // Adjust the length as needed
        
        $this->Buyer_model->approve_buyer_entry($BuyerId,$EventId);
        $this->Buyer_model->delete_buyer_entry($BuyerId,$EventId);
        $result = $this->Buyer_model->Buyer_Login_Password($BuyerName,$password,'Buyer');
        
        if($result == true){
            echo 1;
        }
        
     }

}