<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Depart_model extends CI_Model
{

    public function getDepartment()
    {
        return $this->db->get('departments')->result_array();
    }

    public function import_data($dataclass)
    {
        $jumlah = count($dataclass);
        if ($jumlah > 0) {
            $this->db->replace('departments', $dataclass);
        }
    }
}
