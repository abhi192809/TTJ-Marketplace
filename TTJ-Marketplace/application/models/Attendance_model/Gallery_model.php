<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery_model extends CI_Model {

 public function processImageFolderUpload($zipFilePath) {
    $zip = new ZipArchive;

    if ($zip->open($zipFilePath) === TRUE) {
        $uploadDir = './assets/';
        $folderName = basename($zipFilePath, '.zip');
        $year = date('Y');

        // Specify the directory for extraction, including the year
        $extractedDir = $uploadDir . $folderName . $year . '/';

        if (!is_dir($extractedDir)) {
            mkdir($extractedDir, 0777, true);
        }

        $zip->extractTo($extractedDir);
        $zip->close();

        // Successfully extracted, now insert folder name into the database
        $this->insertGalleryFile($folderName);

        // Delete the original zip file
        unlink($zipFilePath);

        return true;
    } else {
        return false;
    }
}



private function insertGalleryFile($folderName) {
    // Code to insert a gallery file into the database
    $data = array(
        'file_name' => $folderName.date('Y'),
    );

    $this->db->insert('gallery_file', $data);
}

   public function insertGalleryData($data) {
        return $this->db->insert('gallery_data', $data); // Replace 'your_table_name' with your actual table name
    }


}

?>
