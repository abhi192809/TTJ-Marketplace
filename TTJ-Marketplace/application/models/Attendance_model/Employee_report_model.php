<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employee_report_model extends CI_Model {

     public function Employee_Today_report() {
        date_default_timezone_set("Asia/Kolkata");

        // Assuming you have a 'Attendance_time' table with relevant columns
        $today = date('Y-m-d');
        $this->db->where('Date', $today);
        $query = $this->db->get('Attendance_time');

        return $query->result_array();
    }
    
    public function Leaves_report(){
        $query = $this->db->get('Attendance_leaves');
        return $query->result_array();
    }
}