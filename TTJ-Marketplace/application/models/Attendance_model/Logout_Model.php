<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logout_Model extends CI_Model {

    public function getLoginDataForToday($username) {
        $today = date('Y-m-d');
        $this->db->where('Name', $username);
        $this->db->where('Date', $today);
        $query = $this->db->get('Attendance_time');

        return $query->row_array();
    }

    public function updateAttendanceData($username, $date, $data) {
        $this->db->where('Name', $username);
        $this->db->where('Date', $date);
        $this->db->update('Attendance_time', $data);
    }

    public function autoLogout($username) {
        date_default_timezone_set("Asia/Kolkata");

        error_log('Checking for auto logout for user: ' . $username . ' at ' . date('Y-m-d H:i:s'));

        // Check if the current time is 5:40 PM or later
        if (date('H:i') >= '18:30') {
            // Perform automatic logout similar to the existing logout method
            $login_data = $this->getLoginDataForToday($username);

            if ($login_data) {
                error_log('Auto logout condition met. Logging out user.');

                $attendance_data = array(
                    'Time_to_go' => date('H:i:s'), // Current time
                );

                $this->updateAttendanceData($username, $login_data['Date'], $attendance_data);

                // Clear the user's session data
                $this->session->unset_userdata('user_data');
            } else {
                error_log('User does not have login data for today.');
            }
        } else {
            error_log('Auto logout condition not met.');
        }
    }
}
