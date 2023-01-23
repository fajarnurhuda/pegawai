<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Autofill_model extends CI_Model
{

    public function getemp($pns_id)
    {
        $this->db->like('pns_id', $pns_id);
        $this->db->order_by('pns_id', 'ASC');
        $this->db->limit(5);
        return $this->db->get('employees')->result();
    }
}
