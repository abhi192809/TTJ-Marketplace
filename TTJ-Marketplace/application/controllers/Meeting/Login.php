<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function index()
    {
        $this->load->view('Meeting/Login_view');
    }
    
    public function logout()
    {
        $this->session->sess_destroy();
        redirect('Meeting/Login');
    }
 public function Loginpermistion()
    {
        $this->load->model('Meeting_model/Login_model');

        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $user = $this->Login_model->checkLogin($email, $password);

        if ($user !== null) {
            // User found, proceed with authentication
            // Check if user is Admin
            if ($user['username'] == 'Admin') {
                // Additional logic for Admin login
                $session_data = array(
                    'user_id' =>  $user['username'],  // You might want to set this differently for admin
                    'username' => $user['username'],
                    'type' => 'Admin',  // Set the type for Admin
                );

                // Store the session data
                $this->session->set_userdata($session_data);

                // Return success response for Admin
                echo json_encode(['status' => 'success', 'message' => 'Admin login successful', 'type' => 'Admin', 'source' => 'admin']);
                return;
            }

            // For Seller and Buyer login
            if ($user['Type'] == 'Seller') {
                $login_check = $this->Login_model->chack_the_user_id_seller($user['username']);
            } elseif ($user['Type'] == 'Buyer') {
                $login_check = $this->Login_model->chack_the_user_id_Buyer($user['username']);
            } elseif ($user['Type'] == 'Staff-Markating') {
                $login_check = $this->Login_model->chack_the_user_id_Staff_Markating($user['username']);
            } elseif ($user['Type'] == 'User') {
                $login_check = $this->Login_model->chack_the_user_id_Staff_Markating($user['username']);
            }

            if ($login_check !== null) {
                // Initialize $lastKey
                $lastKey = null;

                foreach ($login_check as $key => $value) {
                    // Your code here, using $key and $value
                    $lastKey = $value;
                }
                   
                $session_data = array(
                    'user_id' => $value,
                    'username' => $user['username'],
                    'type' => $user['Type'],
                    
                );

                $this->session->set_userdata($session_data);

                echo json_encode(['status' => 'success', 'message' => 'Login successful', 'type' => $user['Type'], 'source' => 'user']);
            } else {
                // Return error response if user is neither Admin nor Seller/Buyer
                echo json_encode(['status' => 'error', 'message' => 'Invalid user type']);
            }
        } else {
            // Return error response if login credentials are incorrect
            echo json_encode(['status' => 'error', 'message' => 'Invalid email or password']);
        }
    }

}
// $user_id = $this->session->userdata('user_id');
// $username = $this->session->userdata('username');
// $user_type = $this->session->userdata('type');