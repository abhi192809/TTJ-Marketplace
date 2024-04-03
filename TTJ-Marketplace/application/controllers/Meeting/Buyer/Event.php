<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Event extends CI_Controller
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
         if($user_type == 'Buyer'){
             
         }
         else{
            redirect('Meeting/login');
             
         }
    }
    
    public function EventCreat(){
        $this->load->model('Meeting_model/Event_model');
        $data['view_Event'] = $this->Event_model->View_Event();
         $date = $this->session->userdata('user_id');
         
        $data['Event_map'] = $this->Event_model->Event_Chack_Request($date);
        $data['chack_Approved'] = $this->Event_model->Event_Approved_Buyer($date);
        $this->load->view('Meeting/Buyer/header');
        $this->load->view('Meeting/Buyer/sidebar');
        $this->load->view('Meeting/Buyer/topbar');
        $this->load->view('Meeting/Buyer/Event_Creat_view',$data);
        $this->load->view('Meeting/Buyer/footer');   
    }
   
    public function ActiveEvent(){
        $this->load->view('Meeting/Buyer/header');
        $this->load->view('Meeting/Buyer/sidebar');
        $this->load->view('Meeting/Buyer/topbar');
        $this->load->view('Meeting/Buyer/Active_Event_view');
        $this->load->view('Meeting/Buyer/footer');   
    }

    public function OldEvent(){
        $this->load->model('Meeting_model/Event_model');
        $data['view_Event'] = $this->Event_model->View_Event();
       
        $this->load->view('Meeting/Buyer/header');
        $this->load->view('Meeting/Buyer/sidebar');
        $this->load->view('Meeting/Buyer/topbar');
        $this->load->view('Meeting/Buyer/Old_Event_view',$data);
        $this->load->view('Meeting/Buyer/footer');   
    }

   public function EventCreatInsert(){
       
         $this->load->model('Meeting_model/Event_model');

        // Validate and process form data
        $eventData = $this->input->post();
        
        // Handle image upload
        $imagePath = $this->handleImageUpload();

        // Save data to the database or perform other actions as needed
        $this->Event_model->CreatEvent($eventData, $imagePath);

        // Return a response (you may customize this based on your needs)
        echo json_encode(['success' => true, 'message' => 'Event submitted successfully']);
  
   }
   
    private function handleImageUpload() {
        // Implement your image upload logic here
        // Example: Move uploaded image to a specific directory and return the path
        $config['upload_path'] = './assets/Meeting/Event_image/';
        $config['allowed_types'] = 'gif|jpg|jpeg|png';
        $config['max_size'] = 1024; // 1MB
        $config['encrypt_name'] = TRUE;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('Event_image')) {
            $uploadData = $this->upload->data();
            return  $uploadData['file_name'];
        } else {
            return ''; // Handle upload error
        }
    }
         public function BookyourEvent(){
             
        $this->load->model('Meeting_model/Event_model');
    
        $data = [
            'Evet_ID' => $this->input->post('eventId'),  // Use $_POST directly if not using CSRF protection
            'Buyer_ID' => $this->input->post('userId'),  // Use $_POST directly if not using CSRF protection
        ];
   
        if($this->Event_model->Event_Approval($data)){
            echo 1;
        } else {
            echo 0;
        }
    }



}
