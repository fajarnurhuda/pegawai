<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menu extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        cek_login();
    }

    public function index()
    {
        $data['title'] = 'Menu Management';
        $data['user'] = $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array();
        $data['menu'] = $this->db->get('menu_user')->result_array();

        $this->form_validation->set_rules('menu', 'Menu', 'required');
        if ($this->form_validation->run() == false) {
            $this->load->view('user/header', $data);
            $this->load->view('user/sidebar');
            $this->load->view('menu/index', $data);
            $this->load->view('user/footer');
        } else {
            $this->db->insert('menu_user', [
                'menu' => $this->input->post('menu', true)
            ]);

            $this->session->set_flashdata('message', '<div class="alert alert-success"><strong>New Menu Added.</strong></div>');
            redirect('menu');
        }
    }

    public function delete_data($id)
    {
        $this->db->delete('sub_menu', array('id' => $id));
        $this->session->set_flashdata('message', '<div class="alert alert-block alert-success">
                                                    <button type="button" class="close" data-dismiss="alert">
                                                        <i class="ace-icon fa fa-times"></i>
                                                    </button>
                                                    <i class="ace-icon fa fa-check red"></i>
                                                    <strong class="red">
                                                        Data Berhasil Dihapus
                                                    </strong>
                                                </div>');
        redirect('menu');
    }

    public function submenu()
    {
        $data['title'] = 'Sub Menu';
        $data['user'] = $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array();
        $data['menu'] = $this->db->get('menu_user')->result_array();

        $this->load->model('Menu_model', 'menu');
        $data['submenu'] = $this->menu->getsubmenu();

        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('menu_id', 'Menu', 'required');
        $this->form_validation->set_rules('url', 'Url', 'required');
        $this->form_validation->set_rules('icon', 'Icon', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('user/header', $data);
            $this->load->view('user/sidebar');
            $this->load->view('menu/submenu', $data);
            $this->load->view('user/footer');
        } else {
            $data = [
                'title' => $this->input->post('title', true),
                'menu_id' => $this->input->post('menu_id', true),
                'url' => $this->input->post('url', true),
                'icon' => $this->input->post('icon', true),
                'is_active' => $this->input->post('is_active', true)
            ];
            $this->db->insert('sub_menu', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success"><strong>New Sub Menu Added.</strong></div>');
            redirect('menu/submenu');
        }
    }
}
