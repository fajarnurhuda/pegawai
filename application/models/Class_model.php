<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Class_model extends CI_Model
{

    public function getClassification()
    {
        return $this->db->get('classifications')->result_array();
    }

    public function import_data($dataclass)
    {
        $jumlah = count($dataclass);
        if ($jumlah > 0) {
            $this->db->replace('classifications', $dataclass);
        }
    }
}
