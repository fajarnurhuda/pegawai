<?php
defined('BASEPATH') or exit('No direct script access allowed');
date_default_timezone_set("Asia/Jakarta");
require_once APPPATH . 'third_party/spout/src/Spout/Autoloader/autoload.php';

use Box\Spout\Reader\Common\Creator\ReaderEntityFactory;

class Admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        cek_login();
        $this->load->model('class_model');
        $this->load->model('depart_model');
        $this->load->model('employee_model');
        $this->load->model('history_model');
        $this->load->model('payment_model');
        $this->load->helper('date');
    }

    public function index()
    {
        $data['title'] = 'Dashboard';
        $data['user'] = $this->db->get_where('employees', ['email' => $this->session->userdata('email')])->row_array();
        $data['jml_emp'] = $this->db->get('employees')->num_rows();
        $data['classi'] = $this->db->get('classifications')->num_rows();
        $data['departm'] = $this->db->get('departments')->num_rows();
        $this->load->view('user/header', $data);
        $this->load->view('user/sidebar');
        $this->load->view('admin/index', $data);
        $this->load->view('user/footer');
    }

    public function role()
    {
        $data['title'] = 'Role';
        $data['user'] = $this->db->get_where('employees', ['email' => $this->session->userdata('email')])->row_array();
        $data['role'] = $this->db->get('tbl_role')->result_array();


        $this->load->view('user/header', $data);
        $this->load->view('user/sidebar');
        $this->load->view('admin/role', $data);
        $this->load->view('user/footer');
    }

    public function role_akses($id_role)
    {
        $data['title'] = 'Role Akses';
        $data['user'] = $this->db->get_where('employees', ['email' => $this->session->userdata('email')])->row_array();

        $data['role'] = $this->db->get_where('tbl_role', ['id_role' => $id_role])->row_array();

        $this->db->where('id !=', 1);
        $data['menu'] = $this->db->get('menu_user')->result_array();

        $this->load->view('user/header', $data);
        $this->load->view('user/sidebar');
        $this->load->view('admin/role_akses', $data);
        $this->load->view('user/footer');
    }

    public function change()
    {
        $menu_id = $this->input->post('menuId');
        $role_id = $this->input->post('roleId');
        $data = [
            'role_id' => $role_id,
            'menu_id' => $menu_id
        ];
        $hasil = $this->db->get_where('user_access', $data);
        if ($hasil->num_rows() < 1) {
            $this->db->insert('user_access', $data);
        } else {
            $this->db->delete('user_access', $data);
        }
        $this->session->set_flashdata('message', '<div class="alert alert-success"><strong>Access change.</strong></div>');
    }

    public function profile()
    {
        $data['title'] = 'Profile';
        $data['user'] = $this->db->get_where('employees', ['email' => $this->session->userdata('email')])->row_array();
        $data['profil'] = $this->db->get('companies')->row_array();

        $this->load->view('user/header', $data);
        $this->load->view('user/sidebar');
        $this->load->view('admin/profil', $data);
        $this->load->view('user/footer');
    }

    public function classifications()
    {
        $data['title'] = 'Classifications';
        $data['user'] = $this->db->get_where('employees', ['email' => $this->session->userdata('email')])->row_array();
        $data['classi'] = $this->db->get('classifications')->result_array();

        $this->load->view('user/header', $data);
        $this->load->view('user/sidebar');
        $this->load->view('admin/classifications', $data);
        $this->load->view('user/footertable');
    }

    public function permit()
    {
        $data['title'] = 'Permit';
        $data['user'] = $this->db->get_where('employees', ['email' => $this->session->userdata('email')])->row_array();
        // $data['permit'] = $this->db->query("SELECT employees.*, permits.* FROM employees INNER JOIN classifications ON employees.classification = classifications.id INNER JOIN departments ON departments.id = employees.department INNER JOIN permits ON permits.employeeID = employees.pns_id")->result_array();
        $data['permit'] = $this->db->query("Select employees.employee_name, permits.start, permits.end, permits.type, permits.npl, permits.image, permits.id_permit FROM employees INNER JOIN permits ON employees.id = permits.employeeID")->result_array();
        $data['employ'] = $this->db->get('employees')->result_array();


        $this->load->view('user/header', $data);
        $this->load->view('user/sidebar');
        $this->load->view('admin/permit', $data);
        $this->load->view('user/footertable');
    }

    public function permit_add_id($id)
    {
        $data['title'] = 'Permit Add';
        $data['employ'] = $this->db->get_where('employees', ['id' => $id])->row_array();
        $data['cuti'] = $this->db->get('type_permit')->result();
        $data['user'] = $this->db->get_where('employees', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('user/header', $data);
        $this->load->view('user/sidebar');
        $this->load->view('admin/permit_add_id', $data);
        $this->load->view('user/footertable');
    }

    public function permit_add()
    {
        $data['title'] = 'Permit Add';
        $data['employ'] = $this->db->get('employees')->result_array();
        $data['user'] = $this->db->get_where('employees', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('user/header', $data);
        $this->load->view('user/sidebar');
        $this->load->view('admin/permit_add', $data);
        $this->load->view('user/footertable');
    }

    public function proses_add_permit()
    {
        $employeeID         = $this->input->post('employeeID');
        $type               = $this->input->post('type');
        $start              = $this->input->post('start');
        $end                = $this->input->post('end');
        $keterangan         = $this->input->post('keterangan');
        $image              = $_FILES['image']['name'];
        $created_at         = date('Y-m-d H:i:s');

        if ($type == '1' || $type == '2') {

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

            $tgl1 = new DateTime($start);
            $tgl2 = new DateTime($end);
            $days = $tgl2->diff($tgl1)->d + 1;

            $data = array(
                'employeeID'            => $employeeID,
                'type'                  => $type,
                'start'                 => $start,
                'end'                   => $end,
                'jml_hari'              => $days,
                'npl'                   => '0',
                'keterangan'            => $keterangan,
                'image'                 => $image,
                'created_at'            => $created_at
            );
        } elseif ($type == '3' || $type == '4') {

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
            $cekpermit = $this->db->get_where('type_permit', ['id_permit' => $type])->row_array();
            $tgl1 = new DateTime($start);
            $tgl2 = new DateTime($end);
            $days = $tgl2->diff($tgl1)->d + 1;

            $data = array(
                'employeeID'            => $employeeID,
                'type'                  => $type,
                'start'                 => $start,
                'end'                   => $end,
                'jml_hari'              => $days,
                'npl'                   => $days,
                'keterangan'            => $keterangan,
                'image'                 => $image,
                'created_at'            => $created_at
            );
        } elseif ($type == '7' || $type == '8' || $type == '5') {

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
            $cekpermit = $this->db->get_where('type_permit', ['id_permit' => $type])->row_array();

            $tgl1 = new DateTime($start);
            $tgl2 = new DateTime($end);
            $days = $tgl2->diff($tgl1)->d + 1;
            $selisih = $cekpermit['jml_limit'] - $days;

            if ($selisih >= 0) {
                $data = array(
                    'employeeID'            => $employeeID,
                    'type'                  => $type,
                    'start'                 => $start,
                    'end'                   => $end,
                    'jml_hari'              => $days,
                    'npl'                   => 0,
                    'keterangan'            => $keterangan,
                    'image'                 => $image,
                    'created_at'            => $created_at
                );
            } else {
                $data = array(
                    'employeeID'            => $employeeID,
                    'type'                  => $type,
                    'start'                 => $start,
                    'end'                   => $end,
                    'jml_hari'              => $days,
                    'npl'                   => abs($selisih),
                    'keterangan'            => $keterangan,
                    'image'                 => $image,
                    'created_at'            => $created_at
                );
            }
        } elseif ($type == '6') {

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
            $cekpermit = $this->db->get_where('type_permit', ['id_permit' => $type])->row_array();
            //$cekpermit['jml_limit'];
            $cek_kar = $this->db->get_where('employees', ['id' => $employeeID])->row_array();

            $join = date_create($cek_kar['tanggal_join']);
            $today = date_create('today');
            $y = $today->diff($join)->y;
            // $m = $today->diff($join)->m;
            $diff = date_diff($join, $today);
            if ($y > 0) {
                $diff = date_diff($join, $today);
                $month = $diff->m;
                $cekpersudah = $this->db->query("SELECT SUM(jml_hari) AS total_hari FROM permits WHERE type ='6' AND employeeID='$employeeID' AND approve ='1'")->result_array();
                $sudah = $cekpersudah['total_hari'];
                if ($month >= $sudah) {
                    $tgl1 = new DateTime($start);
                    $tgl2 = new DateTime($end);
                    $days = $tgl2->diff($tgl1)->d + 1;

                    $selisih = ($month - $sudah) - $days;
                    if ($selisih > 0) {
                        $data = array(
                            'employeeID'            => $employeeID,
                            'type'                  => $type,
                            'start'                 => $start,
                            'end'                   => $end,
                            'jml_hari'              => $days,
                            'npl'                   => 0,
                            'keterangan'            => $keterangan,
                            'image'                 => $image,
                            'created_at'            => $created_at
                        );
                    } else {
                        $data = array(
                            'employeeID'            => $employeeID,
                            'type'                  => $type,
                            'start'                 => $start,
                            'end'                   => $end,
                            'jml_hari'              => $days,
                            'npl'                   => $selisih,
                            'keterangan'            => $keterangan,
                            'image'                 => $image,
                            'created_at'            => $created_at
                        );
                    }
                } else {
                    echo "Anda Belum Memiliki Jatah Cuti tahunan. Silahkan Hubungi Admin";
                }
            } else {
                echo "Anda Belum Memiliki Jatah Cuti tahunan. Siahkan Hubungi Admin";
            }
        }

        $this->db->insert('permits', $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success"><strong>New Permit Added.</strong></div>');
        redirect('admin/permit');
    }

    public function departments()
    {
        $data['title'] = 'Departments';
        $data['user'] = $this->db->get_where('employees', ['email' => $this->session->userdata('email')])->row_array();
        $data['depart'] = $this->db->get('departments')->result_array();

        $this->load->view('user/header', $data);
        $this->load->view('user/sidebar');
        $this->load->view('admin/departments', $data);
        $this->load->view('user/footertable');
    }

    public function employees()
    {
        $data['title'] = 'Employees';
        $data['user'] = $this->db->get_where('employees', ['email' => $this->session->userdata('email')])->row_array();
        $data['employ'] = $this->db->order_by('employee_name', 'ASC')->get_where('employees', ['role_id' => 2])->result_array();

        $this->load->view('user/header', $data);
        $this->load->view('user/sidebar');
        $this->load->view('admin/employees2', $data);
        $this->load->view('user/footertable');
    }

    public function employee_detail($id)
    {
        $data['title'] = 'Detail Employees';
        $data['user'] = $this->db->get_where('employees', ['email' => $this->session->userdata('email')])->row_array();
        $data['employee'] = $this->db->get_where('employees', ['id' => $id])->row_array();
        // $data['history'] = $this->db->query("SELECT history_inout.*, employees.* FROM history_inout INNER JOIN employees ON employees.id = history_inout.id_emp WHERE employees.id='$id'")->result_array();
        $data['vaksin'] = $this->db->query("SELECT vaksin.nama_vaksin, employees.* FROM vaksin INNER JOIN employees ON employees.jenis_vaksin = vaksin.id_vaksin WHERE employees.id='$id'")->row_array();
        $data['vpas'] = $this->db->query("SELECT vaksin.nama_vaksin FROM vaksin INNER JOIN employees ON employees.jenis_v_pas = vaksin.id_vaksin WHERE employees.id='$id'")->row_array();
        $data['v1'] = $this->db->query("SELECT vaksin.nama_vaksin FROM vaksin INNER JOIN employees ON employees.jenis_vaksin_anak1 = vaksin.id_vaksin WHERE employees.id='$id'")->row_array();
        $data['v2'] = $this->db->query("SELECT vaksin.nama_vaksin FROM vaksin INNER JOIN employees ON employees.jenis_vaksin_anak2 = vaksin.id_vaksin WHERE employees.id='$id'")->row_array();
        $data['v3'] = $this->db->query("SELECT vaksin.nama_vaksin FROM vaksin INNER JOIN employees ON employees.jenis_vaksin_anak3 = vaksin.id_vaksin WHERE employees.id='$id'")->row_array();
        $data['jenis3'] = $this->db->query("SELECT vaksin.nama_vaksin FROM vaksin INNER JOIN employees ON employees.jenis_vaksin_3 = vaksin.id_vaksin WHERE employees.id='$id'")->row_array();
        $data['finance'] = $this->db->query("SELECT employees.*, classifications.*, departments.* FROM employees INNER JOIN classifications ON employees.classification = classifications.id INNER JOIN departments ON departments.id = employees.department WHERE employees.id='$id'")->row_array();

        $this->load->view('user/header', $data);
        $this->load->view('user/sidebar');
        $this->load->view('admin/detailEmployee', $data);
        $this->load->view('user/footer');
    }

    public function employee_add()
    {
        $data['title'] = 'Add Employee';
        $data['user'] = $this->db->get_where('employees', ['email' => $this->session->userdata('email')])->row_array();
        $data['employ'] = $this->db->get('employees')->row_array();
        $data['classification'] = $this->db->get('classifications')->result();
        $data['department'] = $this->db->get('departments')->result();
        $data['vaksin'] = $this->db->get('vaksin')->result();

        $this->load->view('user/header', $data);
        $this->load->view('user/sidebar');
        $this->load->view('admin/addEmployee', $data);
        $this->load->view('user/footertable');
    }

    public function pdfclass()
    {
        $mpdf = new \Mpdf\Mpdf(['orientation' => 'L']);
        $dataclassification = $this->class_model->getClassification();
        $dt = $this->load->view('pdf/mpdf', ['classification' => $dataclassification], TRUE);
        $mpdf->WriteHTML($dt);
        $mpdf->Output();
    }

    public function importclass()
    {
        $config['upload_path'] = './assets/upload/';
        $config['allowed_types'] = 'xls|xlsx';
        $config['file_name'] = 'class' . time();
        $config['max_size']     = '2048';
        $this->load->library('upload', $config);
        if ($this->upload->do_upload('import_file')) {
            $file = $this->upload->data();
            $reader = ReaderEntityFactory::createXLSXReader();

            $reader->open('assets/upload/' . $file['file_name']);
            foreach ($reader->getSheetIterator() as $sheet) {
                $numRow = 1;
                $date = date("Y-m-d H:i:s");
                foreach ($sheet->getRowIterator() as $row) {
                    if ($numRow > 1) {
                        $dataclass = array(
                            'name' => $row->getCellAtIndex(0),
                            'salary' => $row->getCellAtIndex(1),
                            'meal_allo' => $row->getCellAtIndex(2),
                            'transport' => $row->getCellAtIndex(3),
                            'ot_rate' => $row->getCellAtIndex(4),
                            'invoice_rate' => $row->getCellAtIndex(5),
                            'premi' => $row->getCellAtIndex(6),
                            'created_at' => $date,
                            'updated_at' => $date,
                        );
                        $this->class_model->import_data($dataclass);
                    }
                    $numRow++;
                }
                $reader->close();
                unlink('assets/upload/' . $file['file_name']);
                $this->session->set_flashdata('message', '<div class="alert alert-success"><strong>Import Data Success.</strong></div>');
                redirect('admin/classifications');
            }
        } else {
            echo "Error :" . $this->upload->display_errors();;
        };
    }

    public function excelclass()
    {
        $data['title'] = 'Data Classification';
        $data['classification'] = $this->class_model->getClassification();
        $this->load->view('excel/excel', $data);
    }

    public function pdfclassdep()
    {
        $mpdf = new \Mpdf\Mpdf(['orientation' => 'P']);
        $datadepartment = $this->depart_model->getDepartment();
        $dt = $this->load->view('pdf/mpdfdep', ['department' => $datadepartment], TRUE);
        $mpdf->WriteHTML($dt);
        $mpdf->Output();
    }

    public function exceldepart()
    {
        $data['title'] = 'Data Department';
        $data['department'] = $this->depart_model->getDepartment();
        $this->load->view('excel/exceldepart', $data);
    }

    public function importdepart()
    {
        $config['upload_path'] = './assets/upload/';
        $config['allowed_types'] = 'xls|xlsx';
        $config['file_name'] = 'depart' . time();
        $config['max_size']     = '2048';
        $this->load->library('upload', $config);
        if ($this->upload->do_upload('import_file')) {
            $file = $this->upload->data();
            $reader = ReaderEntityFactory::createXLSXReader();

            $reader->open('assets/upload/' . $file['file_name']);
            foreach ($reader->getSheetIterator() as $sheet) {
                $numRow = 1;
                $date = date("Y-m-d H:i:s");
                foreach ($sheet->getRowIterator() as $row) {
                    if ($numRow > 1) {
                        $dataclass = array(
                            'department_name' => $row->getCellAtIndex(0),
                            'created_at' => $date,
                            'updated_at' => $date,
                        );
                        $this->depart_model->import_data($dataclass);
                    }
                    $numRow++;
                }
                $reader->close();
                unlink('assets/upload/' . $file['file_name']);
                $this->session->set_flashdata('message', '<div class="alert alert-success"><strong>Import Data Success.</strong></div>');
                redirect('admin/departments');
            }
        } else {
            echo "Error :" . $this->upload->display_errors();;
        };
    }

    public function employee_print()
    {
        $data['title'] = 'Print / Export Employee';
        $data['employ'] = $this->db->get_where('employees', ['role_id' => '2'])->result_array();
        $data['user'] = $this->db->get_where('employees', ['email' => $this->session->userdata('email')])->row_array();
        $data['classification'] = $this->db->get('classifications')->result();
        $data['department'] = $this->db->get('departments')->result();

        $this->load->view('user/header', $data);
        $this->load->view('user/sidebar');
        $this->load->view('admin/print_employee', $data);
        $this->load->view('user/footertable');
    }

    public function ambildata()
    {
        $data['title'] = 'Hasil Employee';
        $data['user'] = $this->db->get_where('employees', ['email' => $this->session->userdata('email')])->row_array();
        $data['classification'] = $this->db->get('classifications')->result();
        $data['department'] = $this->db->get('departments')->result();

        $this->load->view('user/header', $data);
        $this->load->view('user/sidebar');
        $this->load->view('admin/search', $data);

        if (isset($_POST['submit'])) {
            $department             = $this->input->post('department');
            $classification         = $this->input->post('classification');
            $aktif                  = $this->input->post('aktif');

            if ($department == '' && $classification == '' && $aktif != '') {
                $data['department'] = '0';
                $data['classification'] = '0';
                $data['aktif'] = $this->input->post('aktif');
                $data['employee'] = $this->db->get_where('employees', ['aktif' => $aktif, 'role_id' => '2'])->result_array();
            } elseif ($department != '' && $classification == '' && $aktif != '') {
                $data['department'] = $this->input->post('department');;
                $data['classification'] = '0';
                $data['aktif'] = $this->input->post('aktif');
                $data['employee'] = $this->db->get_where('employees', ['aktif' => $aktif, 'department' => $department, 'role_id' => '2'])->result_array();
            } elseif ($department == '' && $classification != '' && $aktif != '') {
                $data['department'] = '0';
                $data['classification'] = $this->input->post('classification');;
                $data['aktif'] = $this->input->post('aktif');
                $data['employee'] = $this->db->get_where('employees', ['classification' => $classification, 'aktif' => $aktif, 'role_id' => '2'])->result_array();
            } elseif ($department != '' && $classification != '' && $aktif != '') {
                $data['department'] = $this->input->post('department');
                $data['classification'] = $this->input->post('classification');
                $data['aktif'] = $this->input->post('aktif');
                $data['employee'] = $this->db->get_where('employees', ['classification' => $classification, 'department' => $department, 'aktif' => $aktif, 'role_id' => '2'])->result_array();
            }

            $this->load->view('admin/hasil_employee', $data);
            $this->load->view('user/footertable');
        }
    }

    public function cetakdata()
    {

        if (isset($_POST['submit'])) {
            $department             = $this->input->post('department');
            $classification         = $this->input->post('classification');
            $aktif                  = $this->input->post('aktif');

            if ($department == '0' && $classification == '0' && $aktif == 'Aktif') {
                $employee = $this->db->query("SELECT employees.*, classifications.name, departments.department_name FROM employees INNER JOIN classifications ON employees.classification = classifications.id INNER JOIN departments ON departments.id = employees.department WHERE employees.aktif='$aktif'")->result_array();
                // $employee = $this->db->get_where('employees', ['aktif' => $aktif])->result_array();
            } elseif ($department != '' && $classification == '0' && $aktif != '') {
                $employee = $this->db->query("SELECT employees.*, classifications.name, departments.department_name FROM employees INNER JOIN classifications ON employees.classification = classifications.id INNER JOIN departments ON departments.id = employees.department WHERE employees.aktif='$aktif'")->result_array();
                $data['department'] = $this->input->post('department');;
                $data['classification'] = '0';
                $data['aktif'] = $this->input->post('aktif');
                $data['employee'] = $this->db->get_where('employees', ['aktif' => $aktif, 'department' => $department])->result_array();
            } elseif ($department == '' && $classification != '' && $aktif != '') {
                $data['department'] = '0';
                $data['classification'] = $this->input->post('classification');;
                $data['aktif'] = $this->input->post('aktif');
                $data['employee'] = $this->db->get_where('employees', ['classification' => $classification, 'aktif' => $aktif])->result_array();
            } elseif ($department != '' && $classification != '' && $aktif != '') {
                $data['department'] = $this->input->post('department');
                $data['classification'] = $this->input->post('classification');
                $data['aktif'] = $this->input->post('aktif');
                $data['employee'] = $this->db->get_where('employees', ['classification' => $classification, 'department' => $department, 'aktif' => $aktif])->result_array();
            }
        }
        $mpdf = new \Mpdf\Mpdf(['orientation' => 'L']);
        $dt = $this->load->view('pdf/mpdffilter', ['employee' => $employee], TRUE);
        $mpdf->WriteHTML($dt);
        $mpdf->Output();
    }

    public function importemployee()
    {
        $config['upload_path'] = './assets/upload/';
        $config['allowed_types'] = 'xls|xlsx';
        $config['file_name'] = 'employee' . time();
        $config['max_size']     = '2048';
        $this->load->library('upload', $config);
        if ($this->upload->do_upload('import_file')) {
            $file = $this->upload->data();
            $reader = ReaderEntityFactory::createXLSXReader();
            $reader->setShouldFormatDates(true);
            $reader->open('assets/upload/' . $file['file_name']);
            foreach ($reader->getSheetIterator() as $sheet) {
                $numRow = 6;
                $date = date("Y-m-d H:i:s");
                foreach ($sheet->getRowIterator() as $row) {
                    if ($numRow > 6) {
                        // $time = $row->getCellAtIndex(7);
                        // var_dump($time);
                        // die();
                        if ($row->getCellAtIndex(12) == 'Male') {
                            $jk = '0';
                        } else {
                            $jk = '1';
                        }

                        if ($row->getCellAtIndex(57) == 'Male') {
                            $jkp = '0';
                        } else {
                            $jkp = '1';
                        }

                        if ($row->getCellAtIndex(68) == 'Male') {
                            $jk1 = '0';
                        } else {
                            $jk1 = '1';
                        }
                        if ($row->getCellAtIndex(78) == 'Male') {
                            $jk2 = '0';
                        } else {
                            $jk2 = '1';
                        }
                        if ($row->getCellAtIndex(88) == 'Male') {
                            $jk3 = '0';
                        } else {
                            $jk3 = '1';
                        }
                        $dataclass = array(
                            'pns_id'            => $row->getCellAtIndex(2),
                            'no_sap'            => $row->getCellAtIndex(3),
                            'kronos_no'         => $row->getCellAtIndex(4),
                            'department'        => $row->getCellAtIndex(5),
                            'classification'    => $row->getCellAtIndex(7),
                            'grade'             => 0,
                            'tanggal_training'  => date('Y-m-d', strtotime($row->getCellAtIndex(8))),
                            'tanggal_join'      => date('Y-m-d', strtotime($row->getCellAtIndex(9))),

                            'employee_name'     => $row->getCellAtIndex(10),
                            'call_name'         => $row->getCellAtIndex(11),
                            'jk'                => $jk,
                            'bornplace'         => $row->getCellAtIndex(13),

                            'borndate'          => date('Y-m-d', strtotime($row->getCellAtIndex(14))),
                            'nik'               => $row->getCellAtIndex(15),
                            'gol_dar'           => $row->getCellAtIndex(16),
                            'agama'             => $row->getCellAtIndex(17),
                            'suku'              => $row->getCellAtIndex(18),
                            'status_kawin'      => substr($row->getCellAtIndex(19), 0, 1),
                            'tanggungan'        => substr($row->getCellAtIndex(19), 1, 1),

                            'address_ktp'       => $row->getCellAtIndex(20),
                            'rt_ktp'            => $row->getCellAtIndex(21),
                            'rw_ktp'            => $row->getCellAtIndex(22),
                            'kel_ktp'           => $row->getCellAtIndex(23),
                            'kec_ktp'           => $row->getCellAtIndex(24),
                            'kab_ktp'           => $row->getCellAtIndex(25),
                            'prov_ktp'          => $row->getCellAtIndex(26),

                            'address_btm'       => $row->getCellAtIndex(27),
                            'rt_btm'            => $row->getCellAtIndex(28),
                            'rw_btm'            => $row->getCellAtIndex(29),
                            'kel_btm'           => $row->getCellAtIndex(30),
                            'kec_btm'           => $row->getCellAtIndex(31),
                            'kode_pos'          => $row->getCellAtIndex(32),

                            'phoneNumber'       => $row->getCellAtIndex(33),
                            'waNumber'          => $row->getCellAtIndex(34),
                            'email'             => $row->getCellAtIndex(35),

                            'pend_akhir'        => $row->getCellAtIndex(36),
                            'jurusan'           => $row->getCellAtIndex(37),
                            'tahun_lulus'       => $row->getCellAtIndex(38),
                            'nama_sekolah'      => $row->getCellAtIndex(39),
                            'kota_asal_sekolah' => $row->getCellAtIndex(40),

                            'npwp'              => $row->getCellAtIndex(41),
                            'bpjs_kes'          => $row->getCellAtIndex(42),
                            'status_bpjs_kes'   => '1',
                            'bpjs_tk'           => $row->getCellAtIndex(43),
                            'status_bpjs_tk'    => '1',
                            'mandiri'           => $row->getCellAtIndex(44),

                            'ukuran_baju'       => $row->getCellAtIndex(45),
                            'ukuran_sepatu'     => $row->getCellAtIndex(46),

                            'tgl_vaksin_1'      => date('Y-m-d', strtotime($row->getCellAtIndex(47))),
                            'tmpt_vaksin_1'     => $row->getCellAtIndex(48),
                            'tgl_vaksin_2'      => date('Y-m-d', strtotime($row->getCellAtIndex(49))),
                            'tmpt_vaksin_2'     => $row->getCellAtIndex(50),
                            'jenis_vaksin'      => $row->getCellAtIndex(51),
                            'tgl_vaksin_3'      => date('Y-m-d', strtotime($row->getCellAtIndex(52))),
                            'tmpt_vaksin_3'     => $row->getCellAtIndex(53),
                            'jenis_vaksin_3'    => $row->getCellAtIndex(54),
                            'no_kk'             => $row->getCellAtIndex(55),

                            'nama_pasang'       => $row->getCellAtIndex(56),
                            'jk_pasang'         => $jkp,
                            'nik_pasang'        => $row->getCellAtIndex(58),
                            'tmpt_lahir_pasang' => $row->getCellAtIndex(59),
                            'tgl_lahir_pasang'  => date('Y-m-d', strtotime($row->getCellAtIndex(60))),
                            'no_hp_pasang'      => $row->getCellAtIndex(61),
                            'tgl_v1_pas'        => date('Y-m-d', strtotime($row->getCellAtIndex(62))),
                            'tmpt_v1_pas'       => $row->getCellAtIndex(63),
                            'tgl_v2_pas'        => date('Y-m-d', strtotime($row->getCellAtIndex(64))),
                            'tmpt_v2_pas'       => $row->getCellAtIndex(65),
                            'jenis_v_pas'       => $row->getCellAtIndex(66),

                            'nama_anak1'        => $row->getCellAtIndex(67),
                            'jk_anak1'          => $jk1,
                            'nik_anak1'         => $row->getCellAtIndex(69),
                            'tmpt_lahir_anak1'  => $row->getCellAtIndex(70),
                            'tgl_lahir_anak1'   => date('Y-m-d', strtotime($row->getCellAtIndex(71))),
                            'tgl_v1_anak1'      => date('Y-m-d', strtotime($row->getCellAtIndex(72))),
                            'tmpt_v1_anak1'     => $row->getCellAtIndex(73),
                            'tgl_v2_anak1'      => date('Y-m-d', strtotime($row->getCellAtIndex(74))),
                            'tmpt_v2_anak1'     => $row->getCellAtIndex(75),
                            'jenis_vaksin_anak1' => $row->getCellAtIndex(76),

                            'nama_anak2'        => $row->getCellAtIndex(77),
                            'jk_anak2'          => $jk2,
                            'nik_anak2'         => $row->getCellAtIndex(79),
                            'tmpt_lahir_anak2'  => $row->getCellAtIndex(80),
                            'tgl_lahir_anak2'   => date('Y-m-d', strtotime($row->getCellAtIndex(81))),
                            'tgl_v1_anak2'      => date('Y-m-d', strtotime($row->getCellAtIndex(82))),
                            'tmpt_v1_anak2'     => $row->getCellAtIndex(83),
                            'tgl_v2_anak2'      => date('Y-m-d', strtotime($row->getCellAtIndex(84))),
                            'tmpt_v2_anak2'     => $row->getCellAtIndex(85),
                            'jenis_vaksin_anak2' => $row->getCellAtIndex(86),

                            'nama_anak3'        => $row->getCellAtIndex(87),
                            'jk_anak3'          => $jk3,
                            'nik_anak3'         => $row->getCellAtIndex(89),
                            'tmpt_lahir_anak3'  => $row->getCellAtIndex(90),
                            'tgl_lahir_anak3'   => date('Y-m-d', strtotime($row->getCellAtIndex(91))),
                            'tgl_v1_anak3'      => date('Y-m-d', strtotime($row->getCellAtIndex(92))),
                            'tmpt_v1_anak3'     => $row->getCellAtIndex(93),
                            'tgl_v2_anak3'      => date('Y-m-d', strtotime($row->getCellAtIndex(94))),
                            'tmpt_v2_anak3'     => $row->getCellAtIndex(95),
                            'jenis_vaksin_anak3' => $row->getCellAtIndex(96),

                            'dad'               => $row->getCellAtIndex(97),
                            'tmpt_lahir_dad'    => $row->getCellAtIndex(98),
                            'tgl_lahir_dad'     => date('Y-m-d', strtotime($row->getCellAtIndex(99))),
                            'mom'               => $row->getCellAtIndex(100),
                            'tmpt_lahir_mom'    => $row->getCellAtIndex(101),
                            'tgl_lahir_mom'     => date('Y-m-d', strtotime($row->getCellAtIndex(102))),

                            'nama_kodar1'       => $row->getCellAtIndex(103),
                            'hubungan_kodar1'   => $row->getCellAtIndex(104),
                            'alamat_kodar1'     => $row->getCellAtIndex(105),
                            'no_hp_kodar1'      => $row->getCellAtIndex(106),
                            'no_wa_kodar1'      => $row->getCellAtIndex(107),
                            'status'            => 'Karyawan Tidak Tetap',
                            'aktif'             => 'Aktif',
                            'tgl_out'           => '',
                            'foto'              => '',
                            'foto_kk'           => '',
                            'foto_ktp'          => '',
                            'password'          => password_hash($row->getCellAtIndex(15), PASSWORD_DEFAULT),
                            'role_id'           => '2',
                            'is_active'         => '1',
                            'created_at'        => $date,
                            'updated_at'        => $date,
                        );
                        // $this->employee_model->import_dataemp($dataclass);
                        $jumlah = count($dataclass);
                        if ($jumlah > 1) {
                            $ceknik = $row->getCellAtIndex(15);
                            $getdata = $this->db->get_where('employees', ['nik' => $ceknik])->row_array();
                            if ($getdata > 0) {
                                $where = array(
                                    'nik' => $ceknik
                                );
                                $this->db->update('employees', $dataclass, $where);
                            } else {
                                $this->db->insert('employees', $dataclass);
                            }
                        } else {
                            echo 'Data Kosong';
                        }
                    }
                    $numRow++;
                }
                $reader->close();
                unlink('assets/upload/' . $file['file_name']);
                $this->session->set_flashdata('message', '<div class="alert alert-success"><strong>Import Data Success.</strong></div>');
                redirect('admin/employees');
            }
        } else {
            echo "Error :" . $this->upload->display_errors();;
        };
    }

    public function excelemployee()
    {
        $data['title'] = 'Data Employee';
        $data['employee'] = $this->employee_model->getEmployee();
        $this->load->view('excel/excelemployee', $data);
    }

    public function pdfemployee()
    {
        $mpdf = new \Mpdf\Mpdf(['orientation' => 'L']);
        $dataemployee = $this->employee_model->getEmployee();
        $dt = $this->load->view('pdf/mpdfemploy', ['employee' => $dataemployee], TRUE);
        $mpdf->WriteHTML($dt);
        $mpdf->Output();
    }

    public function employee_cetak($id)
    {
        $mpdf = new \Mpdf\Mpdf(['orientation' => 'P']);
        $data['employee'] = $this->employee_model->getEmployeeid($id);
        $data['jenis3'] = $this->db->query("SELECT vaksin.nama_vaksin FROM vaksin INNER JOIN employees ON employees.jenis_vaksin_3 = vaksin.id_vaksin WHERE employees.id='$id'")->row_array();

        // $dt = $this->load->view('pdf/mpdfemploy_cetak', ['employee' => $dataemployee], TRUE);
        $dt = $this->load->view('pdf/mpdfempl', $data, TRUE);
        $mpdf->WriteHTML($dt);
        $mpdf->Output();
    }

    public function payment()
    {
        $data['title'] = 'Payment';
        $m = date('m');
        $y = date('Y');

        $data['employ'] = $this->db->query("SELECT employees.pns_id, employees.no_sap, employees.id, employees.employee_name, employees.nik, employees.phoneNumber, employees.aktif, slips.bulanangka, slips.year, slips.period FROM employees JOIN slips ON slips.employeeID = employees.id WHERE bulanangka = '$m' AND year = '$y' AND employees.role_id = '2'")->result_array();

        $data['user'] = $this->db->get_where('employees', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('user/header', $data);
        $this->load->view('user/sidebar');
        $this->load->view('admin/payment', $data);
        $this->load->view('user/footertable');
    }

    public function payment_select()
    {

        if (isset($_POST['submit'])) {

            $data['title'] = 'Payment';
            $m             = $this->input->post('bulanangka');
            $y             = $this->input->post('tahun');

            $data['employ'] = $this->db->query("SELECT employees.pns_id, employees.no_sap, employees.id, employees.employee_name, employees.nik, employees.phoneNumber, employees.aktif, slips.period, slips.year, slips.bulanangka FROM employees JOIN slips ON slips.employeeID = employees.id WHERE bulanangka = '$m' AND year = '$y' AND role_id = '2'")->result_array();

            $data['user'] = $this->db->get_where('employees', ['email' => $this->session->userdata('email')])->row_array();

            $this->load->view('user/header', $data);
            $this->load->view('user/sidebar');
            $this->load->view('admin/pay_pilih', $data);
            $this->load->view('user/footertable');
        }
    }

    public function payment_detail($id, $m, $y)
    {
        $data['title'] = 'Detail Payment';
        // $bulanangka = date('m');

        $data['user'] = $this->db->get_where('employees', ['email' => $this->session->userdata('email')])->row_array();
        $data['employee'] = $this->db->get_where('employees', ['id' => $id])->row_array();
        $data['slips'] = $this->db->get_where('slips', ['employeeID' => $id])->result_array();
        $data['coba'] = $this->db->get_where('slips', ['employeeID' => $id, 'bulanangka' => $m, 'year' => $y])->row_array();
        $data['finance'] = $this->db->query("SELECT employees.*, classifications.*, departments.* FROM employees INNER JOIN classifications ON employees.classification = classifications.id INNER JOIN departments ON departments.id = employees.department WHERE employees.id='$id'")->row_array();

        $this->load->view('user/header', $data);
        $this->load->view('user/sidebar');
        $this->load->view('admin/payment_detail_bulan', $data);
        $this->load->view('user/footer');
    }

    public function paymentchose($id, $m, $y)
    {
        $data['title'] = 'Detail Payment';
        $data['user'] = $this->db->get_where('employees', ['email' => $this->session->userdata('email')])->row_array();
        $data['employee'] = $this->db->get_where('employees', ['id' => $id])->row_array();
        $data['slips'] = $this->db->get_where('slips', ['employeeID' => $id, 'bulanangka' => $m, 'year' => $y])->result_array();
        $data['coba'] = $this->db->get_where('slips', ['employeeID' => $id, 'bulanangka' => $m, 'year' => $y])->row_array();
        $data['finance'] = $this->db->query("SELECT employees.*, classifications.*, departments.* FROM employees INNER JOIN classifications ON employees.classification = classifications.id INNER JOIN departments ON departments.id = employees.department WHERE employees.id='$id'")->row_array();

        $mpdf = new \Mpdf\Mpdf(['orientation' => 'P']);
        $dt = $this->load->view('pdf/mpdfpayment', $data, TRUE);
        $mpdf->WriteHTML($dt);
        $mpdf->Output();
    }

    public function history()
    {
        $data['title'] = 'History';
        $data['user'] = $this->db->get_where('employees', ['email' => $this->session->userdata('email')])->row_array();
        $data['his'] = $this->db->get('history')->result_array();
        $data['employ'] = $this->db->get('employees')->result_array();
        $this->load->view('user/header', $data);
        $this->load->view('user/sidebar');
        $this->load->view('admin/history', $data);
        $this->load->view('user/footertable');
    }

    public function cuti()
    {
        $data['title'] = 'Cuti';
        $data['user'] = $this->db->get_where('employees', ['email' => $this->session->userdata('email')])->row_array();
        $data['cuti'] = $this->db->get('type_permit')->result_array();

        $this->load->view('user/header', $data);
        $this->load->view('user/sidebar');
        $this->load->view('admin/cuti', $data);
        $this->load->view('user/footer');
    }

    public function vaksin()
    {
        $data['title'] = 'Vaksin';
        $data['user'] = $this->db->get_where('employees', ['email' => $this->session->userdata('email')])->row_array();
        $data['vaksin'] = $this->db->get('vaksin')->result_array();

        $this->load->view('user/header', $data);
        $this->load->view('user/sidebar');
        $this->load->view('admin/vaksin', $data);
        $this->load->view('user/footer');
    }

    public function excelhis()
    {
        $data['title'] = 'Data History';
        $data['history'] = $this->history_model->getHistory();
        $this->load->view('excel/excelhistory', $data);
    }

    public function pdfhis()
    {
        $mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => 'A4-L']);
        $datahis = $this->history_model->getHistory();
        $dt = $this->load->view('pdf/mpdfhis', ['history' => $datahis], TRUE);
        $mpdf->WriteHTML($dt);
        $mpdf->Output();
    }

    public function importhistory()
    {
        $config['upload_path'] = './assets/upload/';
        $config['allowed_types'] = 'xls|xlsx';
        $config['file_name'] = 'history' . time();
        $config['max_size']     = '2048';
        $this->load->library('upload', $config);
        if ($this->upload->do_upload('import_file')) {
            $file = $this->upload->data();
            $reader = ReaderEntityFactory::createXLSXReader();
            $reader->setShouldFormatDates(true);
            $reader->open('assets/upload/' . $file['file_name']);
            foreach ($reader->getSheetIterator() as $sheet) {
                $numRow = 2;
                foreach ($sheet->getRowIterator() as $row) {
                    if ($numRow > 2) {
                        $datahistory = array(
                            'pns_id' => $row->getCellAtIndex(1),
                            'no_sap' => $row->getCellAtIndex(2),
                            'no_cronos' => $row->getCellAtIndex(3),
                            'employee_name' => $row->getCellAtIndex(4),
                            'position' => $row->getCellAtIndex(5),
                            'date_in' => date('Y-m-d', strtotime($row->getCellAtIndex(6))),
                            'date_out' => date('Y-m-d', strtotime($row->getCellAtIndex(7))),
                            'department' => $row->getCellAtIndex(8),
                            'project' => $row->getCellAtIndex(9),
                            'remark' => $row->getCellAtIndex(10),
                        );
                        $this->history_model->import_data($datahistory);
                    }
                    $numRow++;
                }
                $reader->close();
                $this->session->set_flashdata('message', '<div class="alert alert-success"><strong>Import Data Success.</strong></div>');
                redirect('admin/history');
            }
        } else {
            echo "Error :" . $this->upload->display_errors();;
        };
    }
}
