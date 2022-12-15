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
                <div class="col-xs-12">
                    <div class="pull-right" style="margin-bottom: 10px;">
                        <button class="btn btn-sm btn-primary" type="button" data-toggle="modal" data-target="#exampleModal">
                            <i class="ace-icon fa fa-plus align-top bigger-125"></i>

                        </button>
                        <a href="<?= base_url('admin/pdfclassdep') ?>" class="btn btn-sm btn-info" target="_blank">
                            <i class="ace-icon fa fa-file-pdf-o align-top bigger-125"></i>

                        </a>
                        <a href="<?= base_url('admin/exceldepart') ?>" class="btn btn-sm btn-light">
                            <i class="ace-icon fa fa-file-excel-o align-top bigger-125"></i>

                        </a>
                        <a href="#modal-table" role="button" data-toggle="modal" class="btn btn-sm btn-success">
                            <i class="ace-icon fa fa-upload align-top bigger-125"></i>

                        </a>
                        <div id="modal-table" class="modal fade" tabindex="-1">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <?= form_open_multipart('admin/importdepart') ?>
                                    <div class="modal-header no-padding">
                                        <div class="table-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                                <span class="white">&times;</span>
                                            </button>
                                            Form Import Department
                                        </div>
                                    </div>

                                    <div class="modal-body no-padding">
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-12" style="padding: 10px;">
                                                <div class="profile-user-info">
                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name"> Import File * </div>
                                                        <div class="profile-info-value">
                                                            <span><input type="file" id="import_file" name="import_file" class="width-100" accept=".xlsx,.xls" required /></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="modal-footer no-margin-top">
                                        <button class="btn btn-sm btn-primary pull-right" type="submit">
                                            <i class="ace-icon fa fa-upload"></i>
                                            Import
                                        </button>
                                        <a href="<?= base_url() ?>assets/import/department.xlsx" class="btn btn-sm btn-primary pull-left">
                                            <i class="ace-icon fa fa-file"></i>
                                            Download Template
                                        </a>
                                    </div>
                                    </form>
                                </div><!-- /.modal-content -->
                            </div><!-- /.modal-dialog -->
                        </div>
                    </div>
                </div>
                <div class="col-xs-12">

                    <!-- PAGE CONTENT BEGINS -->
                    <?= form_error('classifications', '<div class="alert alert-block alert-danger">
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
                    <div class="row">
                        <div class="col-lg-4 col-md-4">
                            <form action="<?= base_url('add/department_add') ?>" method="POST">
                                <h5 class="modal-title" id="exampleModalLabel">Add Department</h5>
                                <div class="form-group" style="margin-top: 10px;">
                                    <input type="text" id="name" name="name" placeholder="Department Name" class="col-xs-12" style="margin-bottom: 4%;" required />
                                    <?= form_error('name', '<div class="alert alert-danger">', '</div>'); ?>
                                </div>
                                <button type="submit" class="btn btn-sm btn-primary pull-right"><i class="ace-icon fa fa-plus bigger-125"></i> Tambah</button>
                            </form>
                        </div>
                        <div class="col-lg-8 col-md-8">
                            <table id="dynamic-table" class="table table-striped table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th class="center">
                                            #
                                        </th>
                                        <th class="center" width="92%">Departments Name</th>
                                        <th class="center" width="8%">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($depart as $dpt) : ?>
                                        <tr>
                                            <td class="center"><?= $dpt['id'] ?></td>
                                            <td><?= $dpt['department_name'] ?></td>
                                            <td>
                                                <center>
                                                    <div class="hidden-sm hidden-xs action-buttons">
                                                        <a class="blue" href="#" data-toggle="modal" data-target="#exampleModal<?= $dpt['id'] ?>">
                                                            <i class="ace-icon fa fa-pencil bigger-130"></i>
                                                        </a>
                                                        <a class="red" onclick="return confirm('Yakin ingin menghapus ?')" href="<?= base_url('delete/depart/' . $dpt['id']) ?>">
                                                            <i class="ace-icon fa fa-trash-o bigger-130"></i>
                                                        </a>
                                                    </div>
                                                </center>
                                            </td>
                                        </tr>
                                        <div class="modal fade" id="exampleModal<?= $dpt['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <form action="<?= base_url('edit/department_edit') ?>" method="POST" enctype="multipart/form-data">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Edit Departments</h5>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="form-group">
                                                                <label for="">Departments Name</label>
                                                                <input type="hidden" id="id" name="id" placeholder="Departments ID" class="col-xs-12" style="margin-bottom: 4%;" value="<?= $dpt['id'] ?>" required />
                                                                <input type="text" id="name" name="name" placeholder="Departments Name" class="col-xs-12" style="margin-bottom: 4%;" value="<?= $dpt['department_name'] ?>" required />
                                                                <?= form_error('name', '<div class="alert alert-danger">', '</div>'); ?>
                                                            </div>
                                                        </div>
                                                        <div class="space-20"></div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal"><i class="ace-icon fa fa-times bigger-125"></i>Close</button>
                                                            <button type="submit" class="btn btn-sm btn-info"><i class="ace-icon fa fa-save bigger-125"></i> Save</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                            <!-- PAGE CONTENT ENDS -->
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.page-content -->
            </div>
        </div><!-- /.main-content -->
    </div>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="<?= base_url('add/department_add') ?>" method="POST" enctype="multipart/form-data">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Department</h5>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="">Department Name</label>
                        <input type="text" id="name" name="name" placeholder="Department Name" class="col-xs-12" style="margin-bottom: 4%;" required />
                        <?= form_error('name', '<div class="alert alert-danger">', '</div>'); ?>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal"><i class="ace-icon fa fa-times bigger-125"></i> Close</button>
                    <button type="submit" class="btn btn-sm btn-primary"><i class="ace-icon fa fa-pencil bigger-125"></i> Tambah</button>
                </div>
            </form>
        </div>
    </div>
</div>