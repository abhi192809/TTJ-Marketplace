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
         if($user_type == 'Admin'){
             
         }
         else{
            redirect('Meeting/login');
             
         }
    }
    
    public function index()
    {
        $this->load->model('Meeting_model/Seller_model');
        $data['View_Event'] = $this->Seller_model->View_Event();
         $data['Seller_staff'] = $this->Seller_model->View_marketing_Staff_Data();
        $this->load->view('Meeting/dashboard/header');
        $this->load->view('Meeting/dashboard/sidebar');
        $this->load->view('Meeting/dashboard/topbar');
        $this->load->view('Meeting/dashboard/seller_view',$data);
        $this->load->view('Meeting/dashboard/footer');
    }
    public function Seller_data_view(){
        
        $this->load->model('Meeting_model/Seller_model');
        $data['View_Seller'] = $this->Seller_model->View_Seller();
        $this->load->view('Meeting/dashboard/header');
        $this->load->view('Meeting/dashboard/sidebar');
        $this->load->view('Meeting/dashboard/topbar');
        $this->load->view('Meeting/dashboard/Seller_data_view',$data);
        $this->load->view('Meeting/dashboard/footer');
  
    }
    
     public function seller_register_data(){
        $this->load->model('Meeting_model/Seller_model');
        $this->load->model('Meeting_model/Booking_model');
        $data['Approved_Seller'] = $this->Booking_model->approvedeventView();
        $this->load->view('Meeting/dashboard/header');
        $this->load->view('Meeting/dashboard/sidebar');
        $this->load->view('Meeting/dashboard/topbar');
        $this->load->view('Meeting/dashboard/seller_register_data',$data);
        $this->load->view('Meeting/dashboard/footer');
  
    }
    
    
     public function seller_event_data(){
        $data['id'] = $SellerID = $this->uri->segment(5);
        $this->load->model('Meeting_model/Booking_model');
        @$data['EventID'] = $this->Booking_model->Get_Seller_Event_map($SellerID);
        @$data['Event_Data'] = $this->Booking_model->Get_map_Event();
    
        $this->load->view('Meeting/dashboard/header');
        $this->load->view('Meeting/dashboard/sidebar');
        $this->load->view('Meeting/dashboard/topbar');
        $this->load->view('Meeting/dashboard/seller_event_data',$data);
        $this->load->view('Meeting/dashboard/footer');
  
    }
    
    
    public function Get_the_Seller_Realted_Event_Buyer_Meeting(){
        
          $EventID = $this->uri->segment(5);
          $SellerID = $this->uri->segment(6);
           $this->load->model('Meeting_model/Booking_model');
        $data_fixed_Event =[
            
            'EventID' => $EventID,
            'SellerID' =>  $SellerID,
        
            ];
            
        $data['Get_Seller_from_fixed'] =$this->Booking_model->Get_seller_event_fixed($data_fixed_Event);
    
        $data['Get_Buyer_data'] = $this->Booking_model->get_buyer();
    
        $this->load->view('Meeting/dashboard/header');
        $this->load->view('Meeting/dashboard/sidebar');
        $this->load->view('Meeting/dashboard/topbar');
        $this->load->view('Meeting/dashboard/Get_the_Seller_Realted_Event_Buyer_Meeting',$data);
        $this->load->view('Meeting/dashboard/footer');
    }
    
    public function seller_information_update($md5_hash){
        
        $this->load->model('Meeting_model/Seller_model');
        $data['View_Seller'] = $this->Seller_model->Seller_Entry_get($md5_hash);
        $this->load->view('Meeting/dashboard/header');
        $this->load->view('Meeting/dashboard/sidebar');
        $this->load->view('Meeting/dashboard/topbar');
        $this->load->view('Meeting/dashboard/seller_information_update',$data);
        $this->load->view('Meeting/dashboard/footer');
  
    }
    public function seller_lead(){
        $this->load->view('Meeting/dashboard/header');
        $this->load->view('Meeting/dashboard/sidebar');
        $this->load->view('Meeting/dashboard/topbar');
        $this->load->view('Meeting/dashboard/seller_lead');
        $this->load->view('Meeting/dashboard/footer');
  
    }
    public function lessor($ID){
         $this->load->model('Meeting_model/Amount_model');
        $data['View_Seller'] = $this->Amount_model->Amount_get($ID);
        $this->load->view('Meeting/dashboard/header');
        $this->load->view('Meeting/dashboard/sidebar');
        $this->load->view('Meeting/dashboard/topbar');
        $this->load->view('Meeting/dashboard/lessor',$data);
        $this->load->view('Meeting/dashboard/footer');
        
    }
    
    public function Seller_request(){
        $this->load->model('Meeting_model/Seller_model');
        $data['View_Seller_pending'] = $this->Seller_model->Seller_pending_data();
          
            if (!empty($data['View_Seller_pending'])) {
                $data['call_Employ_Name'] = $this->Seller_model->Employ_Name_get();
            }
        $this->load->view('Meeting/dashboard/header');
        $this->load->view('Meeting/dashboard/sidebar');
        $this->load->view('Meeting/dashboard/topbar');
        $this->load->view('Meeting/dashboard/Seller_request',$data);
        $this->load->view('Meeting/dashboard/footer');
        
    }
 public function insertSeller()
{
    $this->load->model('Meeting_model/Seller_model');

    // Get the form data from POST
    $sellerData = array(
        'ReferrerPerson' => $this->input->post('ReferrerPerson'),
        'SellerName' => $this->input->post('sellerName'),
        'CompanyName' => $this->input->post('companyName'),
        'PhoneNumber' => $this->input->post('phoneNumber'),
        'SellerEmail' => $this->input->post('sellerEmail'),
        'PhysicalAddress' => $this->input->post('physicalAddress'),
        'City' => $this->input->post('city'),
        'Country' => $this->input->post('country'),
        'PinCode' => $this->input->post('pinCode'),
        'Website' => $this->input->post('website'),
        'PanNumber' => $this->input->post('panNumber'),
        'GstNumber' => $this->input->post('gstNumber'),
        'Certifications' => $this->input->post('certifications'),
        'YearsInOperation' => $this->input->post('yearsInOperation'),
        'IndustryExperience' => $this->input->post('industryExperience'),
        'AnnualTurnover' => $this->input->post('annualTurnover'),
        'EmergencyContacts' => $this->input->post('emergencyContacts'),
        'Category' => $this->input->post('Category'),
    );

    // Handle the image upload
    $config['upload_path']   = './assets/Meeting/Seller_logo/';
    $config['allowed_types'] = 'png';
    $config['max_size']      = '*';
    $config['encrypt_name']  = TRUE;

    $this->load->library('upload', $config);

    if ($this->upload->do_upload('Logo')) {
        $uploadData = $this->upload->data();
        $sellerData['logo'] = $uploadData['file_name'];
    } else {
        $error = $this->upload->display_errors();
        echo "Error uploading file: " . $error;
        return;
    }

    // Call the model method to insert seller data
    $sellerId = $this->Seller_model->insertSeller($sellerData);
    $checkboxValues = $this->input->post('checkboxValues');
    $amounts = $this->input->post('amounts');
    $PaymentMethod = $this->input->post('PaymentMethod');
    $Payment = $this->input->post('Payment');
    // Insert data into Merket_place_seller_event_map table
    if (!empty($checkboxValues) && $sellerId) {
        foreach ($checkboxValues as $index => $eventId) {
            // Insert into the Merket_place_seller_event_map table
            $mapData = array(
                'seller_id' => $sellerId,
                'event_id' => $eventId,
               
            );

            $this->Seller_model->insertSellerEventMap($mapData);

            // Insert into the Amounts table
            $amountData = array(
                'seller_id' => $sellerId,
                'event_id' => $eventId,
                'amount' => $amounts[$index],
                'PaymentMethod' => $PaymentMethod[$index],
                'PaymentID' => $Payment[$index]
                
            );

            $this->Seller_model->insertAmounts($amountData);
        }
    }

    // Mail and make an ID password
    $ID_password = [
        'username' => $this->input->post('Username'),
        'password' => $this->input->post('Password'),
        'Type' => 'Seller',
        'Status' => '1'
    ];

    $this->Seller_model->SellerIDPasword($ID_password);

    echo 1;
}



      public function show_seller_password() {
            $this->load->model('Meeting_model/Seller_model');
        $user_name = $this->input->post('sellerName');
     
        $data = $this->Seller_model->Seller_User_id_password($user_name);

        // Return data as JSON
        echo json_encode($data);
    }
    
      public function Change_seller_password() {
                $this->load->model('Meeting_model/Seller_model');
      
        $user_name = $this->input->post('sellerName');
        $new_password = $this->input->post('newPassword');

        // Update the seller's password
        $update_result = $this->Seller_model->update_seller_password($user_name, $new_password);

        // Return a response (you can customize this based on your needs)
        if ($update_result) {
            echo json_encode(['success' => true, 'message' => 'Password updated successfully.']);
        } else {
            echo json_encode(['success' => false, 'message' => 'Failed to update password.']);
        }
    }


 public function updateSeller() {
        // Get seller ID from the form or session, assuming it's stored in $sellerId variable
        $sellerId = $this->input->post('SellerID');  // Make sure you have a hidden input field for sellerId in your form

        // Load the Seller_model
         $this->load->model('Meeting_model/Seller_model');

        // Get the existing seller details from the database
        $existingDetails = $this->Seller_model->getSellerDetails($sellerId);

        // Check if the details have changed
        $data = $this->input->post();
        $updatedData = array();

        foreach ($data as $key => $value) {
            // Check if the value has changed and is not empty
            if ($existingDetails->$key !== $value && !empty($value)) {
                $updatedData[$key] = $value;
            }
        }

        // Check if a new logo file is uploaded
        if (!empty($_FILES['Logo']['name'])) {
            $updatedData['Logo'] = $this->uploadLogo();
        }

        // Update the seller details in the database
        $result = $this->Seller_model->updateSellerentry($sellerId, $updatedData);

        echo $result;  // Return the result to the AJAX call
    }

    // Function to handle logo upload
    private function uploadLogo() {
        $config['upload_path'] = './assets/Meeting/Seller_logo/';  // Specify the upload path
        $config['allowed_types'] = 'gif|jpg|png';  // Specify the allowed file types
        $config['max_size'] = 1024;  // Specify the maximum file size in kilobytes

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('Logo')) {
            // Handle the upload failure (you might want to improve error handling)
            $error = array('error' => $this->upload->display_errors());
            print_r($error);  // You might want to log or display the error
            return false;  // Return false to indicate the failure
        } else {
            // Upload successful, retrieve the file name
            $data = $this->upload->data();
            return $data['file_name'];
        }
    }
    
      public function get_Seller_pending_data() {
         $this->db->select('SellerName, CompanyName, PhoneNumber, SellerEmail, PhysicalAddress, City, Country, PinCode, Website, PanNumber, GstNumber, Certifications, YearsInOperation, IndustryExperience, AnnualTurnover');
       
        $seller_id = $this->input->post('sellerId'); // Use seller_id as the key
        $this->load->model('Meeting_model/Seller_model');
        $sellerData = $this->Seller_model->get_Seller_pending_data($seller_id);
      
        $this->output->set_content_type('application/json');
        echo json_encode($sellerData);
    }

public function toggleActiveInactive() {
    $this->load->model('Meeting_model/Seller_model');

    $sellerID = $this->input->post('sellerID');
    $sellerEmail = $this->input->post('UserName');
    $password = $this->input->post('password');

    // Retrieve Seller_pending data
    $panding_Data = $this->Seller_model->Seller_pending($sellerID);

    // Move seller_make_id initialization here
    $seller_make_id = [
        'username' => $sellerEmail,
        'password' => $password,
        'Type' => 'Seller',
        'Status' => '1'
    ];

    // Delete Seller_pending
    $this->Seller_model->Seller_pending_delete($sellerID);

    // Add Seller_Active
    $Seller_Active = $this->Seller_model->Seller_Active($panding_Data);
     $this->Seller_model->SellerIDPasword($seller_make_id );

    // Perform other operations as needed, such as adding paymentAmount to Seller_Active

    echo 1;
}



}