<?php
function cek_login()
{
    $ti = get_instance();
    if (!$ti->session->userdata('email')) {
        redirect('auth');
    } else {
        $role_id = $ti->session->userdata('role_id');
        $menu = $ti->uri->segment(1);

        $queryMenu = $ti->db->get_where('menu_user', ['menu' => $menu])->row_array();

        $menu_id = $queryMenu['id'];

        $useracess = $ti->db->get_where('user_access', [
            'role_id' => $role_id,
            'menu_id' => $menu_id
        ]);
        if ($useracess->num_rows() < 1) {
            redirect('auth/blocked');
        }
    }
}

function check_akses($role_id, $menu_id)
{
    $ti = get_instance();
    $result = $ti->db->get_where('user_access', [
        'role_id' => $role_id,
        'menu_id' => $menu_id
    ]);
    if ($result->num_rows() > 0) {
        return "checked='checked'";
    }
}

function format_uang($rp)
{
    return "Rp." . number_format($rp) . ",00";
}

function tanggal_indo($tanggal)
{
    $bulan = array(
        'Januari',
        'Februari',
        'Maret',
        'April',
        'Mei',
        'Juni',
        'Juli',
        'Agustus',
        'September',
        'Oktober',
        'November',
        'Desember',
    );
    $bulanpecah = explode("-", $tanggal);
    return $bulanpecah[2] . '' . $bulan[(int) $bulanpecah[1]] . '' . $bulanpecah[0];
}
