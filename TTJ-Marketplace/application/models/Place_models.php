
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Place_models extends CI_Model {

    public function get_all_data_of_city($param2) {
        $this->db->where('City_filter', $param2);
        $query = $this->db->get('city');
         
        return  $query->result_array();
    }

    public function get_accommodations($id) {
        $this->db->where('id_city', $id);
        $query = $this->db->get('DMC');
        return $query->result_array();
    }

    public function get_tour_operators($id) {
        $this->db->where('id_city', $id);
        $query = $this->db->get('Accommodation');
        return $query->result_array();
    }
    public function get_accommodations_by_city_filter($city_filter) {
        $this->db->select('*');
        $this->db->from('city');
        $this->db->where('City_filter', $city_filter);
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            $row = $query->row();
            $id_get = $row->id;

            $this->db->select('*');
            $this->db->from('Accommodation');
            $this->db->where('id_city', $id_get);
            $result = $this->db->get();

            if ($result->num_rows() > 0) {
                return $result->result_array();
            }
        }

        // Return an empty array if no data found
        return array();
    }

}
