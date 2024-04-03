<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Staffmarketing extends CI_Controller
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
        $this->load->model('Meeting_model/Staff_model');
        $data['User_Data'] = $this->Staff_model->Staff();
        $this->load->view('Meeting/dashboard/header');
        $this->load->view('Meeting/dashboard/sidebar');
        $this->load->view('Meeting/dashboard/topbar');
        $this->load->view('Meeting/dashboard/staff_marketing_view',$data);
        $this->load->view('Meeting/dashboard/footer');
    }
    
// public function generateRandomPassword($length) {
//     $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()-_=+';
//     $charLength = strlen($characters);
//     $password = '';

//     for ($i = 0; $i < $length; $i++) {
//         $randomIndex = mt_rand(0, $charLength - 1);
//         $password .= $characters[$randomIndex];
//     }

//     return $password;
// }
public function Upload_form() {
    // Handle form submission here
    $this->load->model('Meeting_model/Staff_model');
    
    // Generate a random string of uppercase letters, lowercase letters, and numbers
    $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
    $password = substr(str_shuffle($characters), 4, 8); // Adjust the length as needed
 
    $employee_data = array(
        'fullName' => $this->input->post('fullName'),
        'email' => $this->input->post('email'),
        'phone' => $this->input->post('phone'),
        'dob' => $this->input->post('dob'),
        'gender' => $this->input->post('gender'),
        'department' => $this->input->post('department'),
        'position' => $this->input->post('position'),
        'startDate' => $this->input->post('startDate'),
        'salary' => $this->input->post('salary'),
        'address' => $this->input->post('address')
    );

    // Call the model function to save data
    $result = $this->Staff_model->save_employee_data($employee_data);

    // Hash the password before using it for login
    $hashedPassword = $password;
    
    $result = $this->Staff_model->employee_data_login($employee_data['email'], $hashedPassword, $employee_data['department']);
    
    // Check the result and send the appropriate response
    if ($result) {
        echo 'Success';
    } else {
        echo 'Error';
    }
}


}