<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Settings extends CI_Controller
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
    
    public function User()
    { 
        $this->load->model('Meeting_model/Setting_model');
        $data['Get_User_data'] = $this->Setting_model->Get_User_data();
        $this->load->view('Meeting/dashboard/header');
        $this->load->view('Meeting/dashboard/sidebar');
        $this->load->view('Meeting/dashboard/topbar');
        $this->load->view('Meeting/dashboard/User',$data);
        $this->load->view('Meeting/dashboard/footer');
    }
    public function Login_person(){
        $this->load->view('Meeting/dashboard/header');
        $this->load->view('Meeting/dashboard/sidebar');
        $this->load->view('Meeting/dashboard/topbar');
        $this->load->view('Meeting/dashboard/Login_person');
        $this->load->view('Meeting/dashboard/footer');
  
    }
    
     public function Active_person(){
        $this->load->view('Meeting/dashboard/header');
        $this->load->view('Meeting/dashboard/sidebar');
        $this->load->view('Meeting/dashboard/topbar');
        $this->load->view('Meeting/dashboard/Active_person');
        $this->load->view('Meeting/dashboard/footer');
  
    }
    
     public function City_Master(){
        $this->load->view('Meeting/dashboard/header');
        $this->load->view('Meeting/dashboard/sidebar');
        $this->load->view('Meeting/dashboard/topbar');
        $this->load->view('Meeting/dashboard/City_Master');
        $this->load->view('Meeting/dashboard/footer');
  
    }
    
     public function Nature_of_Business(){
         $this->load->model('Meeting_model/Master_model');
         $data['Nature_of_Business_Master'] = $this->Master_model->Merket_place_Nature_of_Business_Master() ;
        $this->load->view('Meeting/dashboard/header');
        $this->load->view('Meeting/dashboard/sidebar');
        $this->load->view('Meeting/dashboard/topbar');
        $this->load->view('Meeting/dashboard/Nature_of_Business',$data);
        $this->load->view('Meeting/dashboard/footer');
  
    }
    
     public function Business_Category(){
         $this->load->model('Meeting_model/Master_model');
         $data['Business_Category_Master'] = $this->Master_model->Merket_place_Business_Category_Master();
        $this->load->view('Meeting/dashboard/header');
        $this->load->view('Meeting/dashboard/sidebar');
        $this->load->view('Meeting/dashboard/topbar');
        $this->load->view('Meeting/dashboard/Business_Category',$data);
        $this->load->view('Meeting/dashboard/footer');
  
    }
    
    
     public function Enquary(){
         $this->load->model('Meeting_model/Master_model');
         $data['Enquary_Master'] = $this->Master_model->Merket_place_Enquary_Master();
        $this->load->view('Meeting/dashboard/header');
        $this->load->view('Meeting/dashboard/sidebar');
        $this->load->view('Meeting/dashboard/topbar');
        $this->load->view('Meeting/dashboard/Enquary_Master',$data);
        $this->load->view('Meeting/dashboard/footer');
  
    }
    
     public function Company_Master(){
         $this->load->model('Meeting_model/Master_model');
         $data['Market_place_Companies'] = $this->Master_model->Market_place_Companies_Master();
        $this->load->view('Meeting/dashboard/header');
        $this->load->view('Meeting/dashboard/sidebar');
        $this->load->view('Meeting/dashboard/topbar');
        $this->load->view('Meeting/dashboard/Company_Master',$data);
        $this->load->view('Meeting/dashboard/footer');
  
    }
    
     public function Update_the_Entry_company()
    {
        // Check if it's an AJAX request
        if ($this->input->is_ajax_request()) {
            $id = $this->input->post('id');
            
            // Load the model
            $this->load->model('Meeting_model/Master_model');
            
            // Get the company data by id
            $data['Get_company'] = $this->Master_model->Get_company_Master($id);
            
            // Check if data exists
            if ($data['Get_company']) {
                // Return the company data as JSON
                echo json_encode($data['Get_company']);
            } else {
                // Return error message if data not found
                echo "Company data not found.";
            }
        } else {
            // If it's not an AJAX request, return error message
            echo "Invalid request!";
        }
    }
    
    public function insert_nature_of_business() {
         $this->load->model('Meeting_model/Master_model');
        $natureOfBusiness = $this->input->post('natureOfBusiness');
        $inserted_id = $this->Master_model->insert_nature_of_business($natureOfBusiness);
        if ($inserted_id) {
            echo "Data inserted successfully with ID: " . $inserted_id;
        } else {
            echo "Failed to insert data";
        }
    }
    
    public function update_nature_of_business() {
        
         $this->load->model('Meeting_model/Master_model');
        $id = $this->input->post('id');
   
        $updatedNatureOfBusiness = $this->input->post('updatedNatureOfBusiness');
        $result = $this->Master_model->update_nature_of_business($id, $updatedNatureOfBusiness);
        if ($result) {
            echo "Nature of business updated successfully.";
        } else {
            echo "Failed to update nature of business.";
        }
    }
    
      public function delete_nature_of_business() {
        $id = $this->input->post('id');
        $this->load->model('Meeting_model/Master_model');
        $result = $this->Master_model->delete_nature_of_business($id);
        if ($result) {
            echo "Nature of business deleted successfully.";
        } else {
            echo "Failed to delete nature of business.";
        }
    }
    
    // New
    
    public function insert_Business_Category() {
         $this->load->model('Meeting_model/Master_model');
        $Business_Category = $this->input->post('Business_Category');
        $inserted_id = $this->Master_model->insert_Business_Category($Business_Category);
        if ($inserted_id) {
            echo "Data inserted successfully with ID: " . $inserted_id;
        } else {
            echo "Failed to insert data";
        }
    }
    
    public function update_Business_Category() {
        
         $this->load->model('Meeting_model/Master_model');
        $id = $this->input->post('id');
   
        $updatedBusiness_Category = $this->input->post('updatedBusiness_Category');
        $result = $this->Master_model->update_Business_Category($id, $updatedBusiness_Category);
        if ($result) {
            echo "Nature of business updated successfully.";
        } else {
            echo "Failed to update nature of business.";
        }
    }
    
      public function delete_Business_Category() {
        $id = $this->input->post('id');
        $this->load->model('Meeting_model/Master_model');
        $result = $this->Master_model->delete_Business_Category($id);
        if ($result) {
            echo "Nature of business deleted successfully.";
        } else {
            echo "Failed to delete nature of business.";
        }
    }
    
    
    
    
    
    
    
    public function insert_Enquary() {
         $this->load->model('Meeting_model/Master_model');
        $insert_Enquary = $this->input->post('Enquary');
        $insert_Enquary = $this->Master_model->insert_Enquary($insert_Enquary);
        if ($insert_Enquary) {
            echo "Data inserted successfully with ID: " . $inserted_id;
        } else {
            echo "Failed to insert data";
        }
    }
    
    public function update_Enquary() {
        
         $this->load->model('Meeting_model/Master_model');
        $id = $this->input->post('id');
   
        $updatedEnquary = $this->input->post('updatedEnquary');
        $updatedEnquary = $this->Master_model->update_Enquary($id, $updatedEnquary);
        if ($updatedEnquary) {
            echo "Nature of business updated successfully.";
        } else {
            echo "Failed to update nature of business.";
        }
    }
    
      public function delete_Enquary() {
        $id = $this->input->post('id');
        $this->load->model('Meeting_model/Master_model');
        $result = $this->Master_model->delete_Enquary($id);
        if ($result) {
            echo "Nature of business deleted successfully.";
        } else {
            echo "Failed to delete nature of business.";
        }
    }
    
     public function insert_Master_Company() {
    $this->load->model('Meeting_model/Master_model');
      
    // Check if the request is an AJAX request
    if ($this->input->is_ajax_request()) {
        // File upload configuration for logo
        $logo_config['upload_path'] = './assets/Meeting/Company_Master/';
        $logo_config['allowed_types'] = 'png';
        $logo_config['max_size'] = "*";
        $logo_config['encrypt_name'] = TRUE;

        // Initialize the upload library for logo
        $this->load->library('upload', $logo_config, 'logo_upload');

        // File upload configuration for favicon
        $favicon_config['upload_path'] = './assets/Meeting/Company_Master/';
        $favicon_config['allowed_types'] = 'png';
        $favicon_config['max_size'] = "*";
        $favicon_config['encrypt_name'] = TRUE;

        // Initialize the upload library for favicon
        $this->load->library('upload', $favicon_config, 'favicon_upload');

        // Perform logo file upload
        if ($this->logo_upload->do_upload('Company_Logo')) {
            $logo_upload_data = $this->logo_upload->data();
            $logo_name = $logo_upload_data['file_name'];
        } else {
            $error = array('error' => $this->logo_upload->display_errors());
            echo json_encode($error);
            return; // Stop execution if logo upload fails
        }

        // Perform favicon file upload
        if ($this->favicon_upload->do_upload('Company_Favicon')) {
            $favicon_upload_data = $this->favicon_upload->data();
            $favicon_name = $favicon_upload_data['file_name'];
        } else {
            $error = array('error' => $this->favicon_upload->display_errors());
            echo json_encode($error);
            return; // Stop execution if favicon upload fails
        }

        // Get form data
        $data = array(
            'Name' => $this->input->post('Name'),
            'Logo' => $logo_name,
            'Favicon' => $favicon_name,
            'Gst_number' => $this->input->post('GST_Number'),
            'Company_number' => $this->input->post('Company_Number'),
            'email' => $this->input->post('Company_EmailID')
        );

        // Insert data into database
        $inserted = $this->Master_model->insert_company($data);

        if ($inserted) {
            echo "Company details inserted successfully.";
        } else {
            echo "Failed to insert company details.";
        }
    } else {
        // If not an AJAX request, redirect or handle accordingly
        echo "Invalid request!";
    }
}

    
   public function update_company() {
    $this->load->model('Meeting_model/Master_model');

    // Check if it's a POST request
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Handle form data
        $id = $this->input->post('id');
        $name = $this->input->post('Name');
        $gstNumber = $this->input->post('GST_Number');
        $companyNumber = $this->input->post('Company_Number');
        $email = $this->input->post('Company_EmailID');

        // Update company details in the database
        $data = array(
            'Name' => $name,
            'GST_Number' => $gstNumber,
            'Company_Number' => $companyNumber,
            'email' => $email
            // Add more fields as needed
        );

        // Check if files are uploaded
        if (!empty($_FILES['Company_Logo']['name'])) {
            // Handle file upload for Company Logo
            $config['upload_path'] = './assets/Meeting/Company_Master/';
            $config['allowed_types'] = 'gif|jpg|png';
            $this->load->library('upload', $config);
            if ($this->upload->do_upload('Company_Logo')) {
                $uploadData = $this->upload->data();
                $data['Logo'] = $uploadData['file_name'];
            } else {
                // File upload failed, handle error
                echo $this->upload->display_errors();
                return;
            }
        }

        // Check if files are uploaded for Company Favicon
        if (!empty($_FILES['Company_Favicon']['name'])) {
            // Handle file upload for Company Favicon
            $config['upload_path'] = './assets/Meeting/Company_Master/';
            $config['allowed_types'] = 'gif|jpg|png';
            $this->load->library('upload', $config);
            if ($this->upload->do_upload('Company_Favicon')) {
                $uploadData = $this->upload->data();
                $data['Favicon'] = $uploadData['file_name'];
            } else {
                // File upload failed, handle error
                echo $this->upload->display_errors();
                return;
            }
        }

        // Update company details in the database
        $result = $this->Master_model->update_company($id, $data);
        if ($result) {
            // Return success response
            echo "Company details updated successfully";
        } else {
            // Return error response
            echo "Failed to update company details";
        }
    } else {
        // Return error if not a POST request
        echo "Invalid request method";
    }
}

public function delete_item() {
            $this->load->model('Meeting_model/Master_model');

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Get the ID of the item to be deleted
            $id = $this->input->post('id');

            // Call the delete_item method in the model
            $result = $this->Master_model->delete_item($id);

            // Return response
            if ($result) {
                // Item deleted successfully
                echo json_encode(array('success' => true, 'message' => 'Item deleted successfully'));
            } else {
                // Failed to delete item
                echo json_encode(array('success' => false, 'message' => 'Failed to delete item'));
            }
        } else {
            // Invalid request method
            echo json_encode(array('success' => false, 'message' => 'Invalid request method'));
        }
    }

}

