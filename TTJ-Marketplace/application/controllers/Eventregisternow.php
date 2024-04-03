<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Eventregisternow extends CI_Controller {

    public function index()
    {   
            $this->load->model('Meeting_model/Buyer_model');
        $this->load->model('Meeting_model/Master_model');
        $data['Event'] = $this->Buyer_model->Event_detels();
        $data['Nature_of_Business'] = $this->Master_model->Merket_place_Nature_of_Business_Master();
           $data['Business_Category_Master'] = $this->Master_model->Merket_place_Business_Category_Master();
      
        $this->load->view('Website/header1');
        $this->load->view('Website/Registernow1',$data);
        $this->load->view('Website/footer1');
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
}
