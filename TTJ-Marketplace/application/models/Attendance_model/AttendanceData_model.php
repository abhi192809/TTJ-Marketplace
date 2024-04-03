<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AttendanceData_model extends CI_Model {

    public function get() {
        $q1 = $this->db->get('Attendance_time');
        return $q1->result_array();
    }

    public function get_off_days() { // Changed method name to avoid conflict
        $q1 = $this->db->get('Attendance_off_days');
        return $q1->result_array();
    }
    public function get_off() {
        $q1 = $this->db->get('Attendance_time');
        return $q1->result_array();
    }
     
    public function get_users(){
     $q1 = $this->db->get('Attendance_login');
        return $q1->result_array();
        
    } 
      public function get_all_data($name) {
        $this->db->where('Name', $name);
        $q1 = $this->db->get('Attendance_time');
        return $q1->result_array();
    }
    public function insertHoliday($day, $month, $year)
    {
        // Insert data into 'Attendance_Leaves' table
        $data = array(
            'Day' => $day,
            'Month' => $month,
            'Year' => $year,
             'Date' => date('Y-m-d'),
        );

        $this->db->insert('Attendance_off_days', $data);
    }
}