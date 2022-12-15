<?php
defined('BASEPATH') or exit('No direct script access allowed');

class History_model extends CI_Model
{

    public function getHistory()
    {
        return $this->db->query("SELECT * FROM history")->result_array();
    }

    public function import_data($datahistory)
    {
        $jumlah = count($datahistory);
        if ($jumlah > 1) {
            $this->db->insert('history', $datahistory);
        }
    }
}
