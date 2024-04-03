
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery_models extends CI_Model {

    public function getDistinctYears() {
        $this->load->database();
        $query = $this->db->query("SELECT * FROM `gallery_data`");
        $result = $query->result_array();

        $distinct_years = array();
        foreach ($result as $row) {
            $currentYear = $row['year'];
            $events = $this->getEventsByYear($currentYear);
            $distinct_years[$currentYear] = $events;
        }

        return $distinct_years;
    }

    public function getEventsByYear($year) {
        $query = $this->db->query("SELECT `id`, `gallery_file_id`, `file_name`, `year`, `image_path`, `name`, `entry_date`
                                    FROM `gallery_data`
                                    WHERE `year` = $year
                                    ORDER BY `entry_date` DESC");
        return $query->result_array();
    }
}
