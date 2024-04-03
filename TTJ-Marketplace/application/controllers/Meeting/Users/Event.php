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
         if($user_type == 'User'){
             
         }
         else{
            redirect('Meeting/login');
             
         }
    }
    
    public function EventCreat(){
        $this->load->model('Meeting_model/Event_model');
        $data['view_Event'] = $this->Event_model->View_Event();
        $this->load->view('Meeting/Users/header');
        $this->load->view('Meeting/Users/sidebar');
        $this->load->view('Meeting/Users/topbar');
        $this->load->view('Meeting/Users/Event_Creat_view',$data);
        $this->load->view('Meeting/Users/footer');   
    }
   
    public function ActiveEvent(){
        $this->load->view('Meeting/Users/header');
        $this->load->view('Meeting/Users/sidebar');
        $this->load->view('Meeting/Users/topbar');
        $this->load->view('Meeting/Users/Active_Event_view');
        $this->load->view('Meeting/Users/footer');   
    }

    public function OldEvent(){
            $this->load->model('Meeting_model/Event_model');
        $data['view_Event'] = $this->Event_model->View_Event();
    
        $this->load->view('Meeting/Users/header');
        $this->load->view('Meeting/Users/sidebar');
        $this->load->view('Meeting/Users/topbar');
        $this->load->view('Meeting/Users/Old_Event_view',$data);
        $this->load->view('Meeting/Users/footer');   
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

}
