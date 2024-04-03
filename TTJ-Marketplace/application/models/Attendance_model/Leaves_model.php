<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Leaves_model extends CI_Model {
  
  public function getlevesData() {
        $data = $this->db->order_by('Date', 'DESC')->get('Attendance_leaves');
        if ($data->num_rows() > 0) {
            return $data->result_array();
        }
  }  
    
  public function submit_leaves($data) {
        if ($this->db->insert('Attendance_leaves', $data)) {
            return 1;
        } else {
            return 0;
        }
    }
    
   public function updateLeaveStatus($date, $name, $status) {
        $this->db->where('Date', $date);
        $this->db->where('Name', $name);
        $this->db->update('Attendance_leaves', array('Status' => $status));
        return $this->db->affected_rows() > 0;
    }
    public function insertAttendanceTime($data) {
        $this->db->insert('Attendance_time', $data);

        return $this->db->affected_rows() > 0;
    }
}
?>