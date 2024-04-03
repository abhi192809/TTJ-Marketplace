<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class WorkReportEmplay_model extends CI_Model {

    public function insert_data($data)
    {
        // Insert data into the 'work_reports' table
        $this->db->insert('work_report', $data);

        // Return the insert ID or 0 if an error occurred
        return $this->db->insert_id() ? $this->db->insert_id() : 0;
    }
    public function get_data()
    {
        // Load the database library
        $this->load->database();

        // Get all records from 'work_report' table
        $q1 = $this->db->get('work_report');

        // Return the result as an array
        return $q1->result_array();
    }
}
?>
