<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Delete extends CI_Controller
{

    public function class($id)
    {
        $this->db->delete('classifications', array('id' => $id));
        $this->session->set_flashdata('message', '<div class="alert alert-block alert-success">
                                                    <button type="button" class="close" data-dismiss="alert">
                                                        <i class="ace-icon fa fa-times"></i>
                                                    </button>
                                                    <i class="ace-icon fa fa-check red"></i>
                                                    <strong class="red">
                                                        Delete Classification Success
                                                    </strong>
                                                </div>');
        redirect('admin/classifications');
    }

    public function depart($id)
    {
        $this->db->delete('departments', array('id' => $id));
        $this->session->set_flashdata('message', '<div class="alert alert-block alert-success">
                                                    <button type="button" class="close" data-dismiss="alert">
                                                        <i class="ace-icon fa fa-times"></i>
                                                    </button>
                                                    <i class="ace-icon fa fa-check red"></i>
                                                    <strong class="red">
                                                        Delete Departments Success
                                                    </strong>
                                                </div>');
        redirect('admin/departments');
    }

    public function employee($id)
    {
        $item = $this->db->query("SELECT * FROM employees WHERE id = '$id'")->row();
        if ($item->foto != 'default.png') {
            $target_file = './assets/employee/' . $item->foto;
            unlink($target_file);
        }
        if ($item->foto_kk != 'default_kk.png') {
            $target_file = './assets/employee/' . $item->foto_kk;
            unlink($target_file);
        }
        if ($item->foto_ktp != 'default_ktp.png') {
            $target_file = './assets/employee/' . $item->foto_ktp;
            unlink($target_file);
        }
        $this->db->delete('employees', array('id' => $id));
        $this->session->set_flashdata('message', '<div class="alert alert-block alert-success">
                                                    <button type="button" class="close" data-dismiss="alert">
                                                        <i class="ace-icon fa fa-times"></i>
                                                    </button>
                                                    <i class="ace-icon fa fa-check red"></i>
                                                    <strong class="red">
                                                        Delete Employee Success
                                                    </strong>
                                                </div>');
        redirect('admin/employees');
    }

    public function permit($id)
    {
        $item = $this->db->query("SELECT * FROM permits WHERE id_permit = '$id'")->row();
        $target_file = './assets/permit/' . $item->image;
        unlink($target_file);
        $this->db->delete('permits', array('id_permit' => $id));
        $this->session->set_flashdata('message', '<div class="alert alert-block alert-success">
                                                    <button type="button" class="close" data-dismiss="alert">
                                                        <i class="ace-icon fa fa-times"></i>
                                                    </button>
                                                    <i class="ace-icon fa fa-check red"></i>
                                                    <strong class="red">
                                                        Data Berhasil Dihapus
                                                    </strong>
                                                </div>');
        redirect('admin/permit');
    }

    public function vaksin($id)
    {
        $this->db->delete('vaksin', array('id_vaksin' => $id));
        $this->session->set_flashdata('message', '<div class="alert alert-block alert-success">
                                                    <button type="button" class="close" data-dismiss="alert">
                                                        <i class="ace-icon fa fa-times"></i>
                                                    </button>
                                                    <i class="ace-icon fa fa-check red"></i>
                                                    <strong class="red">
                                                        Data Berhasil Dihapus
                                                    </strong>
                                                </div>');
        redirect('admin/vaksin');
    }

    public function history($id)
    {
        $this->db->delete('history', array('id_his' => $id));
        $this->session->set_flashdata('message', '<div class="alert alert-block alert-success">
                                                    <button type="button" class="close" data-dismiss="alert">
                                                        <i class="ace-icon fa fa-times"></i>
                                                    </button>
                                                    <i class="ace-icon fa fa-check red"></i>
                                                    <strong class="red">
                                                        Data Berhasil Dihapus
                                                    </strong>
                                                </div>');
        redirect('admin/history');
    }
}
