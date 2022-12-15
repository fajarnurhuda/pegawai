<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Payment_model extends CI_Model
{

    public function getpayment()
    {
        if (isset($_POST['submit'])) {
            $employeeID             = $this->input->post('employeeID');
            $bulanangka         = $this->input->post('bulanangka');
            $tahun                  = $this->input->post('tahun');

            $data['title'] = 'Payment Print';
            $data['user'] = $this->db->get_where('employees', ['email' => $this->session->userdata('email')])->row_array();
            $employee  = $this->db->get_where('employees', ['id' => $employeeID])->row_array();
            $data['slips'] = $this->db->get_where('slips', ['employeeID' => $employeeID, 'bulanangka' => $bulanangka, 'year' => $tahun])->result_array();
            $data['coba'] = $this->db->get_where('slips', ['employeeID' => $employeeID, 'bulanangka' => $bulanangka, 'year' => $tahun])->row_array();
            $data['finance'] = $this->db->query("SELECT employees.*, classifications.*, departments.* FROM employees INNER JOIN classifications ON employees.classification = classifications.id INNER JOIN departments ON departments.id = employees.department WHERE employees.id='$id'")->row_array();
            return true;
        }
    }
}
