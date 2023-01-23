<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Add extends CI_Controller
{

    public function classification_add()
    {

        $name           = $this->input->post('name');
        $salary         = $this->input->post('salary');
        $meal_allo      = $this->input->post('meal_allo');
        $transport      = $this->input->post('transport');
        $rate           = $this->input->post('rate');
        $premi          = $this->input->post('premi');
        $invoice_rate   = $this->input->post('invoice_rate');
        $created_at     = date("Y/m/d h:i:s");

        $data = array(
            'name'          => $name,
            'salary'        => $salary,
            'meal_allo'     => $meal_allo,
            'transport'     => $transport,
            'ot_rate'       => $rate,
            'premi'         => $premi,
            'invoice_rate'  => $invoice_rate,
            'created_at'    => $created_at
        );

        $this->db->insert('classifications', $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success"><strong>New Classification Added.</strong></div>');
        redirect('admin/classifications');
    }

    public function department_add()
    {
        $name           = $this->input->post('name');
        $created_at     = date("Y/m/d h:i:s");

        $data = array(
            'department_name' => $name,
            'created_at' => $created_at
        );

        $this->db->insert('departments', $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success"><strong>New Department Added.</strong></div>');
        redirect('admin/departments');
    }

    public function employee_add()
    {
        if (isset($_POST['submit'])) {
            $this->form_validation->set_rules('employee_name', 'Employee Name', 'trim|required');
            $this->form_validation->set_rules('nik', 'NO NIK', 'trim|required');
            $this->form_validation->set_rules('no_kk', 'NO KK', 'trim|required');
            $this->form_validation->set_rules('bornplace', 'Born Place', 'trim|required');
            $this->form_validation->set_rules('borndate', 'Born Date', 'trim|required');
            $this->form_validation->set_rules('phoneNumber', 'Number Phone', 'trim|required');
            $this->form_validation->set_rules('waNumber', 'Number WA', 'trim|required');
            $this->form_validation->set_rules('email', 'Email', 'trim|required');
            $this->form_validation->set_rules('classification', 'Classification', 'trim|required');
            $this->form_validation->set_rules('address', 'Address', 'trim|required');
            $this->form_validation->set_rules('pns_id', 'PNS ID', 'trim|required');
            $this->form_validation->set_rules('no_sap', 'No SAP', 'trim|required');
            $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[3]|matches[cpassword]');
            $this->form_validation->set_rules('cpassword', 'Confirm Password', 'required|trim|matches[password]');

            $config['upload_path'] = './assets/employee/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size']  = '2000';
            $config['encrypt_name']  = TRUE;
            $this->load->library('upload', $config);

            // $foto           = $_FILES['foto']['name'];
            // $foto_kk        = $_FILES['foto_kk']['name'];
            // $foto_ktp       = $_FILES['foto_ktp']['name'];
            if (!empty($_FILES['foto']['name'])) {
                $this->upload->do_upload('foto');
                $data1 = $this->upload->data();
                $foto = $data1['file_name'];
            } else {
                $foto = 'default.png';
            }

            if (!empty($_FILES['foto_kk']['name'])) {
                $this->upload->do_upload('foto_kk');
                $data2 = $this->upload->data();
                $foto_kk = $data2['file_name'];
            } else {
                $foto_kk = 'default_kk.png';
            }

            if (!empty($_FILES['foto_ktp']['name'])) {
                $this->upload->do_upload('foto_ktp');
                $data3 = $this->upload->data();
                $foto_ktp = $data3['file_name'];
            } else {
                $foto_ktp = 'default_ktp.png';
            }

            if ($this->form_validation->run()) {

                $employee_name  = $this->input->post('employee_name', TRUE);
                $nik            = $this->input->post('nik', TRUE);
                $no_kk          = $this->input->post('no_kk', TRUE);
                $bornplace      = $this->input->post('bornplace', TRUE);
                $borndate       = $this->input->post('borndate', TRUE);
                $status         = $this->input->post('status', TRUE);
                $pns_id         = $this->input->post('pns_id', TRUE);
                $no_sap         = $this->input->post('no_sap', TRUE);
                $aktif          = $this->input->post('aktif', TRUE);
                $phoneNumber    = $this->input->post('phoneNumber', TRUE);
                $waNumber       = $this->input->post('waNumber', TRUE);
                $email          = $this->input->post('email', TRUE);
                $classification = $this->input->post('classification', TRUE);
                $jk             = $this->input->post('jk', TRUE);
                $mom            = $this->input->post('mom', TRUE);
                $address        = $this->input->post('address', TRUE);
                $password       = md5($this->input->post('password', TRUE));
                $status_kawin   = $this->input->post('status_kawin', TRUE);
                $npwp           = $this->input->post('npwp', TRUE);
                $kronos_no      = $this->input->post('kronos_no', TRUE);
                $department     = $this->input->post('department', TRUE);
                $tanggal_join   = $this->input->post('tanggal_join', TRUE);
                $tanggal_training = $this->input->post('tanggal_training', TRUE);
                $bpjs_kes       = $this->input->post('bpjs_kes', TRUE);
                $status_bpjs_kes  = $this->input->post('status_bpjs_kes', TRUE);
                $bpjs_tk        = $this->input->post('bpjs_tk', TRUE);
                $status_bpjs_tk = $this->input->post('status_bpjs_tk', TRUE);
                $tanggungan     = $this->input->post('tanggungan', TRUE);
                $mandiri        = $this->input->post('mandiri', TRUE);
                $tgl_out        = $this->input->post('tgl_out', TRUE);
                $reason         = $this->input->post('reason', TRUE);
                $created_at     = date("Y/m/d h:i:s");


                $data = [
                    'employee_name'     => $employee_name,
                    'nik'               => $nik,
                    'no_kk'             => $no_kk,
                    'bornplace'         => $bornplace,
                    'borndate'          => $borndate,
                    'status'            => $status,
                    'pns_id'            => $pns_id,
                    'no_sap'            => $no_sap,
                    'aktif'             => $aktif,
                    'phoneNumber'       => $phoneNumber,
                    'waNumber'          => $waNumber,
                    'email'             => $email,
                    'classification'    => $classification,
                    'jk'                => $jk,
                    'mom'               => $mom,
                    'address'           => $address,
                    'password'          => $password,
                    'status_kawin'      => $status_kawin,
                    'npwp'              => $npwp,
                    'kronos_no'         => $kronos_no,
                    'department'        => $department,
                    'tanggal_join'      => $tanggal_join,
                    'tanggal_training'  => $tanggal_training,
                    'bpjs_kes'          => $bpjs_kes,
                    'status_bpjs_kes'   => $status_bpjs_kes,
                    'bpjs_tk'           => $bpjs_tk,
                    'status_bpjs_tk'    => $status_bpjs_tk,
                    'tanggungan'        => $tanggungan,
                    'mandiri'           => $mandiri,
                    'tgl_out'           => $tgl_out,
                    'reason'            => $reason,
                    'foto'              => $foto,
                    'foto_kk'           => $foto_kk,
                    'foto_ktp'          => $foto_ktp,
                    'created_at'        => $created_at
                ];

                $insert = $this->db->insert('employees', $data);
                if ($insert) {
                    $this->session->set_flashdata('message', '<div class="alert alert-success"><strong>New Employee Added.</strong></div>');
                    redirect('admin/employees');
                }
            } else {
                echo $this->upload->display_errors();
            }
        }
    }

    public function vaksin_add()
    {
        $nama_vaksin           = $this->input->post('nama_vaksin');

        $data = array(
            'nama_vaksin' => $nama_vaksin
        );

        $this->db->insert('vaksin', $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success"><strong>New Vaksin Added.</strong></div>');
        redirect('admin/vaksin');
    }

    public function history_add()
    {
        $pns_id             = $this->input->post('pns_id');
        $no_sap             = $this->input->post('no_sap');
        $no_cronos          = $this->input->post('no_cronos');
        $employee_name      = $this->input->post('employee_name');
        $date_in            = $this->input->post('date_in');
        $date_out           = $this->input->post('date_out');
        $department         = $this->input->post('department');
        $project            = $this->input->post('project');
        $remark             = $this->input->post('remark');
        $position             = $this->input->post('position');

        $data = array(
            'pns_id'        => $pns_id,
            'no_sap'        => $no_sap,
            'no_cronos'     => $no_cronos,
            'employee_name' => $employee_name,
            'position'      => $position,
            'date_in'       => $date_in,
            'date_out'      => $date_out,
            'department'    => $department,
            'project'       => $project,
            'remark'       => $remark,
        );

        $this->db->insert('history', $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success"><strong>New History Added.</strong></div>');
        redirect('admin/history');
    }
}
