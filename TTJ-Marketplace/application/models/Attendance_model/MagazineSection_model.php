<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MagazineSection_model extends CI_Model {

  public function get(){
       $this->db->order_by('id', 'DESC');
     $q1 = $this->db->get('MagazineSection_upload');
     return $q1->result_array();
  }

}

?>
