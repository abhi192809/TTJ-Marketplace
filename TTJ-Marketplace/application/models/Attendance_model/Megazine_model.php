<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Megazine_model extends CI_Model {

    public function TTJ_Magazin() {
        $query = $this->db->get('TTJ_Travmart_Magazin_payment_prof');
        return $query->result();
    }
    public function insertOrUpdateData($rowData) {
    // Check if the data already exists in the table based on specific criteria
    $existingData = $this->db->get_where('TTJ_Travmart_Card', array(
        'Number' => $rowData['number'],
        'Mail_ID' => $rowData['email'],
        'association_head' => $rowData['association'],
        'Designation' => $rowData['designation'],
        'add_1' => $rowData['address1'],
        'add_2' => $rowData['address2'],
        'magazine' => '1',
        'City' => $rowData['city'],
    ))->row_array();

    if ($existingData) {
        // Data already exists, update the 'Date' and 'magazine_year' fields
        $updateData = array(
            'magazine_year' => date('Y'),
            'Date' => date('d'),
        );

        $this->db->where(array(
            'Number' => $rowData['number'],
            'Mail_ID' => $rowData['email'],
            'association_head' => $rowData['association'],
            'Designation' => $rowData['designation'],
            'add_1' => $rowData['address1'],
            'add_2' => $rowData['address2'],
            'magazine' => '1',
            'City' => $rowData['city'],
        ));
        $this->db->update('TTJ_Travmart_Card', $updateData);
    } else {
        // Data doesn't exist, insert the new data
        $this->db->insert('TTJ_Travmart_Card', $rowData);
    }
}

public function deleteDataFromMagazinPaymentProf($id) {
    $this->db->where('id', $id);
    $this->db->delete('TTJ_Travmart_Magazin_payment_prof');
}
}
?>
