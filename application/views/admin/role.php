<div class="main-content">
    <div class="main-content-inner">
        <div class="breadcrumbs ace-save-state" id="breadcrumbs">
            <ul class="breadcrumb">
                <li>
                    <i class="ace-icon fa fa-home home-icon"></i>
                    <a href="#">Home</a>
                </li>
                <li class="active"><?= $title; ?></li>
            </ul><!-- /.breadcrumb -->
        </div>

        <div class="page-content">
            <div class="ace-settings-container" id="ace-settings-container">
                <div class="btn btn-app btn-xs btn-warning ace-settings-btn" id="ace-settings-btn">
                    <i class="ace-icon fa fa-cog bigger-130"></i>
                </div>

                <div class="ace-settings-box clearfix" id="ace-settings-box">
                    <div class="pull-left width-50">
                        <div class="ace-settings-item">
                            <div class="pull-left">
                                <select id="skin-colorpicker" class="hide">
                                    <option data-skin="no-skin" value="#438EB9">#438EB9</option>
                                    <option data-skin="skin-1" value="#222A2D">#222A2D</option>
                                    <option data-skin="skin-2" value="#C6487E">#C6487E</option>
                                    <option data-skin="skin-3" value="#D0D0D0">#D0D0D0</option>
                                </select>
                            </div>
                            <span>&nbsp; Choose Skin</span>
                        </div>

                        <div class="ace-settings-item">
                            <input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-navbar" autocomplete="off" />
                            <label class="lbl" for="ace-settings-navbar"> Fixed Navbar</label>
                        </div>

                        <div class="ace-settings-item">
                            <input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-sidebar" autocomplete="off" />
                            <label class="lbl" for="ace-settings-sidebar"> Fixed Sidebar</label>
                        </div>

                        <div class="ace-settings-item">
                            <input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-breadcrumbs" autocomplete="off" />
                            <label class="lbl" for="ace-settings-breadcrumbs"> Fixed Breadcrumbs</label>
                        </div>

                        <div class="ace-settings-item">
                            <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-rtl" autocomplete="off" />
                            <label class="lbl" for="ace-settings-rtl"> Right To Left (rtl)</label>
                        </div>

                        <div class="ace-settings-item">
                            <input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-add-container" autocomplete="off" />
                            <label class="lbl" for="ace-settings-add-container">
                                Inside
                                <b>.container</b>
                            </label>
                        </div>
                    </div><!-- /.pull-left -->

                    <div class="pull-left width-50">
                        <div class="ace-settings-item">
                            <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-hover" autocomplete="off" />
                            <label class="lbl" for="ace-settings-hover"> Submenu on Hover</label>
                        </div>

                        <div class="ace-settings-item">
                            <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-compact" autocomplete="off" />
                            <label class="lbl" for="ace-settings-compact"> Compact Sidebar</label>
                        </div>

                        <div class="ace-settings-item">
                            <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-highlight" autocomplete="off" />
                            <label class="lbl" for="ace-settings-highlight"> Alt. Active Item</label>
                        </div>
                    </div><!-- /.pull-left -->
                </div><!-- /.ace-settings-box -->
            </div><!-- /.ace-settings-container -->

            <div class="page-header">
                <h1>
                    <?= $title; ?>
                </h1>
            </div><!-- /.page-header -->

            <div class="row">
                <div class="col-xs-6">
                    <?= form_error('menu', '<div class="alert alert-block alert-danger">
                                                    <button type="button" class="close" data-dismiss="alert">
                                                        <i class="ace-icon fa fa-times"></i>
                                                    </button>
                                                    <i class="ace-icon fa fa-check red"></i>
                                                    <strong class="red">
                                                        ', '
                                                    </strong>
                                                </div>')
                    ?>

                    <?= $this->session->flashdata('message')  ?>
                    <!-- PAGE CONTENT BEGINS -->
                    <a class="pull-right" style="margin-bottom: 10px;">
                        <button class="btn btn-sm btn-primary" type="button" data-toggle="modal" data-target="#roleModal">
                            <i class="ace-icon fa fa-plus align-top bigger-125"></i>
                            Add New Role
                        </button>
                    </a>

                    <table id="simple-table" class="table  table-bordered table-hover">
                        <thead>
                            <tr>
                                <th class="center">
                                    #
                                </th>
                                <th class="center">Role</th>
                                <th class="center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($role as $r) : ?>
                                <tr>
                                    <td class="center"><?= $no++ ?></td>
                                    <td class="center"><?= $r['name_role'] ?></td>
                                    <td class="center">
                                        <a href="<?= base_url('admin/role_akses/' . $r['id_role']) ?>">
                                            <button class="btn btn-xs btn-warning">
                                                <i class="ace-icon fa fa-key bigger-120"></i>
                                            </button>
                                        </a>
                                        <a href="<?= base_url('admin/role_update/' . $r['id_role']) ?>">
                                            <button class="btn btn-xs btn-success">
                                                <i class="ace-icon fa fa-pencil bigger-120"></i>
                                            </button>
                                        </a>
                                        <a onclick="return confirm('Yakin ingin menghapus ?')" href="<?= base_url('role/delete/' . $r['id_role']) ?>">
                                            <button class="btn btn-xs btn-danger">
                                                <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                            </button>
                                        </a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                    <!-- PAGE CONTENT ENDS -->
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.page-content -->
    </div>
</div><!-- /.main-content -->

<div class="modal fade" id="roleModal" tabindex="-1" aria-labelledby="roleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <form class="form-horizontal" role="form" action="<?= base_url('admin/role/add') ?>" method="POST">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="roleModalLabel">Tambah Role</h5>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <div class="col-sm-12">
                            <input type="text" id="name_role" name="name_role" placeholder="New Name Role" class="col-xs-12 col-sm-12" />
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="ace-icon fa fa-times bigger-120"></i>Close</button>
                    <button type="submit" class="btn btn-primary"><i class="ace-icon fa fa-plus bigger-120"></i>Add</button>
                </div>
            </div>
        </form>
    </div>
</div>