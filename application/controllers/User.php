<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        cek_login();
    }

    public function index()
    {
        $data['title'] = 'My Profile';
        $data['user'] = $this->db->get_where('employees', ['email' => $this->session->userdata('email')])->row_array();
        $data['profil'] = $this->db->get('companies')->row_array();

        $this->load->view('user/header', $data);
        $this->load->view('user/sidebar');
        $this->load->view('user/index', $data);
        $this->load->view('user/footer');
    }

    public function change_pass()
    {
        $data['title'] = 'Change Pass';
        $data['user'] = $this->db->get_where('employees', ['email' => $this->session->userdata('email')])->row_array();


        $this->form_validation->set_rules('current_pass', 'Current Password', 'required|trim');
        $this->form_validation->set_rules('new_pass1', 'New Password', 'required|trim|min_length[3]|matches[new_pass2]');
        $this->form_validation->set_rules('new_pass2', 'Confirm New Password', 'required|trim');

        $new_pass = $this->input->post('new_pass1');

        if ($this->form_validation->run() == false) {
            $this->load->view('user/header', $data);
            $this->load->view('user/sidebar');
            $this->load->view('user/change_pass', $data);
            $this->load->view('user/footer');
        } else {
            $current = $this->input->post('current_pass');
            if (!password_verify($current, $data['user']['password'])) {
                $this->session->set_flashdata('message', '<div class="alert alert-danger"><strong> Wrong Current Password.</strong></div>');
                redirect('user/change_pass');
            } else {
                if ($current == $new_pass) {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger"><strong> New Password denied.</strong></div>');
                    redirect('user/change_pass');
                } else {
                    $pass_hash = password_hash($new_pass, PASSWORD_DEFAULT);
                    $this->db->set('password', $pass_hash);
                    $this->db->where('email', $this->session->userdata('email'));
                    $this->db->update('employees');
                    $this->session->set_flashdata('message', '<div class="alert alert-danger"><strong> Password has Change.</strong></div>');
                    redirect('user/change_pass');
                }
            }
        }
    }

    public function profile_employee()
    {
        $id = $this->session->userdata('id');
        $data['title'] = 'Profile Employee';
        $data['user'] = $this->db->get_where('employees', ['email' => $this->session->userdata('email')])->row_array();
        $data['employee'] = $this->db->get_where('employees', ['id' => $id])->row_array();
        $data['history'] = $this->db->query("SELECT history_inout.*, employees.* FROM history_inout INNER JOIN employees ON employees.id = history_inout.id_emp WHERE employees.id='$id'")->result_array();
        $data['vaksin'] = $this->db->query("SELECT vaksin.nama_vaksin, employees.* FROM vaksin INNER JOIN employees ON employees.jenis_vaksin = vaksin.id_vaksin WHERE employees.id='$id'")->row_array();
        $data['vpas'] = $this->db->query("SELECT vaksin.nama_vaksin, employees.* FROM vaksin INNER JOIN employees ON employees.jenis_v_pas = vaksin.id_vaksin WHERE employees.id='$id'")->row_array();
        $data['v1'] = $this->db->query("SELECT vaksin.nama_vaksin, employees.* FROM vaksin INNER JOIN employees ON employees.	jenis_vaksin_anak1 = vaksin.id_vaksin WHERE employees.id='$id'")->row_array();
        $data['v2'] = $this->db->query("SELECT vaksin.nama_vaksin, employees.* FROM vaksin INNER JOIN employees ON employees.jenis_vaksin_anak2 = vaksin.id_vaksin WHERE employees.id='$id'")->row_array();
        $data['v3'] = $this->db->query("SELECT vaksin.nama_vaksin, employees.* FROM vaksin INNER JOIN employees ON employees.jenis_vaksin_anak3 = vaksin.id_vaksin WHERE employees.id='$id'")->row_array();
        $data['finance'] = $this->db->query("SELECT employees.*, classifications.*, departments.* FROM employees INNER JOIN classifications ON employees.classification = classifications.id INNER JOIN departments ON departments.id = employees.department WHERE employees.id='$id'")->row_array();


        $this->load->view('user/header', $data);
        $this->load->view('user/sidebar');
        $this->load->view('admin/detailEmployee', $data);
        $this->load->view('user/footer');
    }

    public function finance()
    {
        $id = $this->session->userdata('id');
        $data['title'] = 'Payment';
        $bulanangka = date('m');

        $data['employ'] = $this->db->query("SELECT employees.*, classifications.*, departments.* FROM employees INNER JOIN 
        classifications ON employees.classification = classifications.id INNER JOIN departments ON departments.id = employees.department")->result_array();

        $data['user'] = $this->db->get_where('employees', ['email' => $this->session->userdata('email')])->row_array();
        $data['employee'] = $this->db->get_where('employees', ['id' => $id])->row_array();

        $data['finance'] = $this->db->query("SELECT employees.*, classifications.*, departments.* FROM employees 
        INNER JOIN classifications ON employees.classification = classifications.id INNER JOIN departments ON departments.id = employees.department WHERE employees.id='$id'")->row_array();

        $data['slips'] = $this->db->get_where('slips', ['employeeID' => $id])->result_array();
        $data['coba'] = $this->db->get_where('slips', ['employeeID' => $id, 'bulanangka' => $bulanangka])->row_array();

        $this->load->view('user/header', $data);
        $this->load->view('user/sidebar');
        $this->load->view('user/payment_detail', $data);
        $this->load->view('user/footertable');
    }

    public function payment_select()
    {

        if (isset($_POST['submit'])) {
            $id                     = $this->input->post('employeeID');
            $bulanangka             = $this->input->post('bulanangka');
            $tahun                  = $this->input->post('tahun');

            $data['title'] = 'Detail Payment';
            $data['user'] = $this->db->get_where('employees', ['email' => $this->session->userdata('email')])->row_array();
            $data['employee'] = $this->db->get_where('employees', ['id' => $id])->row_array();
            $data['slips'] = $this->db->get_where('slips', ['employeeID' => $id, 'bulanangka' => $bulanangka, 'year' => $tahun])->result_array();
            $data['coba'] = $this->db->get_where('slips', ['employeeID' => $id, 'bulanangka' => $bulanangka, 'year' => $tahun])->row_array();
            $data['finance'] = $this->db->query("SELECT employees.*, classifications.*, departments.* FROM employees INNER JOIN classifications ON employees.classification = classifications.id INNER JOIN departments ON departments.id = employees.department WHERE employees.id='$id'")->row_array();

            $this->load->view('user/header', $data);
            $this->load->view('user/sidebar');
            $this->load->view('user/payment_detail_bulan', $data);
            $this->load->view('user/footer');
        }
    }

    public function permit()
    {
         $id = $this->session->userdata('id');
        $data['title'] = 'Permit';
        $data['employ'] = $this->db->get_where('employees', ['id' => $id])->row_array();
        $data['user'] = $this->db->get_where('employees', ['email' => $this->session->userdata('email')])->row_array();
        $data['permit'] = $this->db->query("SELECT *, employees.employee_name, type_permit.nama_permit FROM permits INNER JOIN employees ON permits.employeeID = employees.id INNER JOIN type_permit ON permits. type = type_permit.id_permit WHERE permits.employeeID = '$id'")->result_array();

        $data['tiper'] = $this->db->get('type_permit')->result_array();
        $this->load->view('user/header', $data);
        $this->load->view('user/sidebar');
        $this->load->view('user/permit_add', $data);
        $this->load->view('user/footertable');
    }

    public function proses_add_permit()
    {
        $employeeID         = $this->input->post('employee_id');
        $type               = $this->input->post('type');
        $start              = $this->input->post('start');
        $end                = $this->input->post('end');
        $keterangan         = $this->input->post('keterangan');
        $image              = $_FILES['image']['name'];
        $created_at         = date('Y-m-d H:i:s');


        if ($image) {
            $config['upload_path'] = './assets/permit/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg|pdf';
            $config['max_size'] = '2048';

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('image')) {
                $image = $this->upload->data('file_name');
            } else {
                echo $this->upload->display_errors();
            }
        }

        $data = array(
            'employeeID'            => $employeeID,
            'type'                  => $type,
            'start'                 => $start,
            'end'                   => $end,
            'keterangan'            => $keterangan,
            'image'                 => $image,
            'created_at'            => $created_at
        );

        $this->db->insert('permits', $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success"><strong>New Permit Added.</strong></div>');
        redirect('user/permit');
    }
}
