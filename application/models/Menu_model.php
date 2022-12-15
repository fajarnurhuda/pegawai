<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menu_model extends CI_Model

{
    public function getsubmenu()
    {
        $query = "SELECT sub_menu.*, menu_user.menu FROM 
        sub_menu JOIN menu_user ON sub_menu.menu_id = menu_user.id";

        return $this->db->query($query)->result_array();
    }
}
