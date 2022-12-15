<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Employee_model extends CI_Model
{

    public function insertnofoto()
    {
        $dat = array(
            'employee_name'              => $this->input->post('employee_name'),
            'nik'                        => $this->input->post('nik'),
            'no_kk'                      => $this->input->post('no_kk'),
            'bornplace'                  => $this->input->post('bornplace'),
            'borndate'                   => $this->input->post('borndate'),
            'status'                     => $this->input->post('status'),
            'status_kawin'               => $this->input->post('status_kawin'),
            'phoneNumber'                => $this->input->post('phoneNumber'),
            'waNumber'                   => $this->input->post('waNumber'),
            'email'                      => $this->input->post('email'),
            'classification'             => $this->input->post('classification'),
            'address'                    => $this->input->post('address'),
            'no_sap'                     => $this->input->post('no_sap'),
            'pns_id'                     => $this->input->post('pns_id'),
            'npwp'                       => $this->input->post('npwp'),
            'kronos_no'                  => $this->input->post('kronos_no'),
            'department'                 => $this->input->post('department'),
            'tanggal_join'               => $this->input->post('tanggal_join'),
            'tanggal_training'           => $this->input->post('tanggal_training'),
            'bpjs_kes'                   => $this->input->post('bpjs_kes'),
            'status_bpjs_kes'            => $this->input->post('status_bpjs_kes'),
            'bpjs_tk'                    => $this->input->post('bpjs_tk'),
            'status_bpjs_tk'             => $this->input->post('status_bpjs_tk'),
            'tanggungan'                 => $this->input->post('tanggungan'),
            'mandiri'                    => $this->input->post('mandiri'),
            'foto'                       => 'default.png',
            'foto_kk'                    => 'default_kk.png',
            'foto_ktp'                   => 'default_ktp',
            'created_at'                 => date("Y/m/d h:i:s"),
            'updated_at'                 => date("Y/m/d h:i:s")
        );
        $this->db->insert('employees', $dat);

        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function insertwithfoto()
    {
        $dat = array(
            'employee_name'              => $this->input->post('employee_name'),
            'nik'                        => $this->input->post('nik'),
            'no_kk'                      => $this->input->post('no_kk'),
            'bornplace'                  => $this->input->post('bornplace'),
            'borndate'                   => $this->input->post('borndate'),
            'status'                     => $this->input->post('status'),
            'status_kawin'               => $this->input->post('status_kawin'),
            'phoneNumber'                => $this->input->post('phoneNumber'),
            'waNumber'                   => $this->input->post('waNumber'),
            'email'                      => $this->input->post('email'),
            'classification'             => $this->input->post('classification'),
            'address'                    => $this->input->post('address'),
            'no_sap'                     => $this->input->post('no_sap'),
            'pns_id'                     => $this->input->post('pns_id'),
            'npwp'                       => $this->input->post('npwp'),
            'kronos_no'                  => $this->input->post('kronos_no'),
            'department'                 => $this->input->post('department'),
            'tanggal_join'               => $this->input->post('tanggal_join'),
            'tanggal_training'           => $this->input->post('tanggal_training'),
            'bpjs_kes'                   => $this->input->post('bpjs_kes'),
            'status_bpjs_kes'            => $this->input->post('status_bpjs_kes'),
            'bpjs_tk'                    => $this->input->post('bpjs_tk'),
            'status_bpjs_tk'             => $this->input->post('status_bpjs_tk'),
            'tanggungan'                 => $this->input->post('tanggungan'),
            'mandiri'                    => $this->input->post('mandiri'),
            'foto'                       => $_FILES['foto']['name'],
            'foto_kk'                    => 'default_kk.png',
            'foto_ktp'                   => 'default_ktp',
            'created_at'                 => date("Y/m/d h:i:s"),
            'updated_at'                 => date("Y/m/d h:i:s")
        );
        $this->db->insert('employees', $dat);

        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function insertwithfotokk()
    {
        $dat = array(
            'employee_name'              => $this->input->post('employee_name'),
            'nik'                        => $this->input->post('nik'),
            'no_kk'                      => $this->input->post('no_kk'),
            'bornplace'                  => $this->input->post('bornplace'),
            'borndate'                   => $this->input->post('borndate'),
            'status'                     => $this->input->post('status'),
            'status_kawin'               => $this->input->post('status_kawin'),
            'phoneNumber'                => $this->input->post('phoneNumber'),
            'waNumber'                   => $this->input->post('waNumber'),
            'email'                      => $this->input->post('email'),
            'classification'             => $this->input->post('classification'),
            'address'                    => $this->input->post('address'),
            'no_sap'                     => $this->input->post('no_sap'),
            'pns_id'                     => $this->input->post('pns_id'),
            'npwp'                       => $this->input->post('npwp'),
            'kronos_no'                  => $this->input->post('kronos_no'),
            'department'                 => $this->input->post('department'),
            'tanggal_join'               => $this->input->post('tanggal_join'),
            'tanggal_training'           => $this->input->post('tanggal_training'),
            'bpjs_kes'                   => $this->input->post('bpjs_kes'),
            'status_bpjs_kes'            => $this->input->post('status_bpjs_kes'),
            'bpjs_tk'                    => $this->input->post('bpjs_tk'),
            'status_bpjs_tk'             => $this->input->post('status_bpjs_tk'),
            'tanggungan'                 => $this->input->post('tanggungan'),
            'mandiri'                    => $this->input->post('mandiri'),
            'foto'                       => $_FILES['foto']['name'],
            'foto_kk'                    => $_FILES['foto_kk']['name'],
            'foto_ktp'                   => 'default_ktp.png',
            'created_at'                 => date("Y/m/d h:i:s"),
            'updated_at'                 => date("Y/m/d h:i:s")
        );
        $this->db->insert('employees', $dat);

        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function insertwithfotoktp()
    {
        $dat = array(
            'employee_name'              => $this->input->post('employee_name'),
            'nik'                        => $this->input->post('nik'),
            'no_kk'                      => $this->input->post('no_kk'),
            'bornplace'                  => $this->input->post('bornplace'),
            'borndate'                   => $this->input->post('borndate'),
            'status'                     => $this->input->post('status'),
            'status_kawin'               => $this->input->post('status_kawin'),
            'phoneNumber'                => $this->input->post('phoneNumber'),
            'waNumber'                   => $this->input->post('waNumber'),
            'email'                      => $this->input->post('email'),
            'classification'             => $this->input->post('classification'),
            'address'                    => $this->input->post('address'),
            'no_sap'                     => $this->input->post('no_sap'),
            'pns_id'                     => $this->input->post('pns_id'),
            'npwp'                       => $this->input->post('npwp'),
            'kronos_no'                  => $this->input->post('kronos_no'),
            'department'                 => $this->input->post('department'),
            'tanggal_join'               => $this->input->post('tanggal_join'),
            'tanggal_training'           => $this->input->post('tanggal_training'),
            'bpjs_kes'                   => $this->input->post('bpjs_kes'),
            'status_bpjs_kes'            => $this->input->post('status_bpjs_kes'),
            'bpjs_tk'                    => $this->input->post('bpjs_tk'),
            'status_bpjs_tk'             => $this->input->post('status_bpjs_tk'),
            'tanggungan'                 => $this->input->post('tanggungan'),
            'mandiri'                    => $this->input->post('mandiri'),
            'foto'                       => $_FILES['foto']['name'],
            'foto_kk'                    => $_FILES['foto_kk']['name'],
            'foto_ktp'                   => $_FILES['foto_ktp']['name'],
            'created_at'                 => date("Y/m/d h:i:s"),
            'updated_at'                 => date("Y/m/d h:i:s")
        );
        $this->db->insert('employees', $dat);

        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }


    public function insertno()
    {
        $dat = array(
            'ID_ADMIN'    => $this->generateID(),
            'NIRM'        => $this->input->post('nirm'),
            'USERNAME'    => $this->input->post('username'),
            'PASSWORD'    => md5($this->input->post('password')),
            'LAST_LOGIN' => NULL,
            'FULLNAME'    => $this->input->post('fullname'),
            'TMP_LAHIR'  => $this->input->post('tmp_lahir'),
            'TGL_LAHIR'   => $this->input->post('tgl_lahir'),
            'GENDER'    => $this->input->post('gender'),
            'NO_TELP'    => $this->input->post('telp'),
            'PRODI'    => $this->input->post('prodi'),
            'ROLE'    => $this->input->post('role'),
            'ALAMAT'    => $this->input->post('alamat'),
            'PHOTO'        => 'default.png',
            'D_CREATED' => date('Ymd')
        );
        $this->db->insert('admin', $dat);

        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function inserts($id, $psw)
    {
        if ($psw == true) {
            $dat = array(
                'USERNAME'    => $this->input->post('username'),
                'ROLE'        => $this->input->post('role'),
                'FULLNAME'    => $this->input->post('fullname'),
                'PASSWORD'    => md5($this->input->post('password'))
            );
        } else {
            $dat = array(
                'USERNAME'    => $this->input->post('username'),
                'ROLE'        => $this->input->post('role'),
                'FULLNAME'    => $this->input->post('fullname'),
            );
        }
        $this->db->where('ID_ADMIN', $id)->update('admin', $dat);

        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    function update_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    public function generateID()
    {
        $query = $this->db->order_by('ID_ADMIN', 'DESC')->limit(1)->get('admin')->row('ID_ADMIN');
        $lastNo = (int) substr($query, 2);
        $next = $lastNo + 1;
        $kd = 'AD';
        return $kd . sprintf('%03s', $next);
    }

    public function getPhoto($username)
    {
        return $this->db->where('USERNAME', $username)->get('admin')->row('PHOTO');
    }

    public function getCount()
    {
        return $this->db->where('ROLE', 'admin')->from('admin')->count_all_results();
    }

    public function delete($id)
    {
        $foto = $this->db->query("SELECT * FROM admin WHERE ID_ADMIN = '$id'")->row();
        if ($foto->FOTO == 'default.png') {
            $this->db->where('ID_ADMIN', $id)->delete('admin');
            if ($this->db->affected_rows() > 0) {
                return true;
            } else {
                return false;
            }
        } else {
            $old_img = './assets/images/upload/anggota/' . $foto->PHOTO;
            unlink($old_img);
            $this->db->where('ID_ADMIN', $id)->delete('admin');
            if ($this->db->affected_rows() > 0) {
                return true;
            } else {
                return false;
            }
        }
    }

    public function getDetail($id)
    {
        return $this->db->where('ID_ADMIN', $id)->get('admin')->row();
    }

    public function checkAvailability($id)
    {
        $query = $this->db->where('ID_ADMIN', $id)->get('admin');
        if ($query->num_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function usernameChecks($id)
    {
        $user = $this->db->where('ID_ADMIN', $id)->get('admin')->row('USERNAME');
        if ($this->input->post('username') == $user) {
            return true;
        } else {
            // $totRow = $this->db->count_all('admin'); //6
            // $query = $this->db->where('USERNAME !=' , $user)->from('admin')->count_all_results(); //5
            // if((int)$query == (int)$totRow - 1){
            // 	return true;
            // }else{
            // 	return false;
            // }

            $get = $this->db->where('USERNAME', $this->input->post('username'))->get('admin');
            if ($get->num_rows() > 0) {
                return false;
            } else {
                return true;
            }
        }
    }

    public function import_data($data)
    {
        $jumlah = count($data);
        if ($jumlah > 0) {
            $this->db->replace('admin', $data);
        }
    }

    public function getAll()
    {
        return $this->db->get('admin')->result_array();
    }

    public function getEmployee()
    {
        return $this->db->query("SELECT employees.*, classifications.*, departments.* FROM employees INNER JOIN classifications ON employees.classification = classifications.id INNER JOIN departments ON departments.id = employees.department")->result_array();
    }

    public function import_dataemp($dataclass)
    {
        $jumlah = count($dataclass);
        if ($jumlah > 0) {
            $this->db->replace('employees', $dataclass);
        }
    }

    public function getEmployeeid($id)
    {
        return $this->db->query("SELECT vaksin.*, employees.*, classifications.*, departments.* FROM employees INNER JOIN classifications ON employees.classification = classifications.id INNER JOIN departments ON departments.id = employees.department INNER JOIN vaksin ON vaksin.id_vaksin = employees.jenis_vaksin WHERE employees.id = '$id'")->row_array();
    }
}

/* End of file Anggota_model.php */
/* Location: ./application/models/Anggota_model.php */
