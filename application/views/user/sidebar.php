<div class="main-container ace-save-state" id="main-container">
    <script type="text/javascript">
        try {
            ace.settings.loadState('main-container')
        } catch (e) {}
    </script>
    <div id="sidebar" class="sidebar responsive ace-save-state">
        <script type="text/javascript">
            try {
                ace.settings.loadState('sidebar')
            } catch (e) {}
        </script>

        <div class="sidebar-shortcuts" id="sidebar-shortcuts">
            <div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
                <i class="fa fa-calendar"></i>
                <?php
                date_default_timezone_set('Asia/Jakarta');
                echo date('D, Y-m-d H:i:s');
                ?>
            </div>
            <div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
                <span class="btn btn-success"></span>
                <span class="btn btn-info"></span>
                <span class="btn btn-warning"></span>
                <span class="btn btn-danger"></span>
            </div>
        </div>
        <!--#sidebar-shortcuts-->

        <div align="center">
            <img src="<?= base_url() ?>assets/favicon.png" width="80">
            <h6>PT. PAN NUSANTARA SENTOSA</h6>
        </div>

        <ul class="nav nav-list">
            <?php
            $role = $this->session->userdata('role_id');
            $queryMenu = "SELECT menu_user.id, menu_user.menu FROM menu_user JOIN 
                            user_access ON menu_user.id = user_access.menu_id
                            WHERE user_access.role_id = '$role' ORDER BY user_access.menu_id ASC";
            $menu = $this->db->query($queryMenu)->result_array();
            ?>
            <?php foreach ($menu as $m) : ?>
                <?php
                    $menuId = $m['id'];
                    $querysubMenu = "SELECT * FROM sub_menu JOIN 
                            menu_user ON menu_user.id = sub_menu.menu_id
                            WHERE sub_menu.menu_id = '$menuId' AND sub_menu.is_active = '1'";
                    $submenu = $this->db->query($querysubMenu)->result_array();
                    ?>
                <?php foreach ($submenu as $sm) : ?>
                    <?php if ($title == $sm['title']) : ?>
                        <li class="active">
                        <?php else : ?>
                        <li class="">
                        <?php endif; ?>
                        <a href="<?= base_url($sm['url']) ?>">
                            <i class="menu-icon <?= $sm['icon'] ?>"></i>
                            <span class="menu-text"> <?= $sm['title'] ?> </span>
                        </a>
                        </li>
                    <?php endforeach; ?>
                <?php endforeach; ?>

                <li class="">
                    <a href="<?= base_url('auth/logout'); ?>">
                        <i class="menu-icon fa fa-power-off"></i>
                        <span class="menu-text">
                            Logout
                        </span>
                    </a>
                </li>
        </ul><!-- /.nav-list -->

        <div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
            <i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
        </div>
    </div>