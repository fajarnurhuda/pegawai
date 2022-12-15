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
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="clearfix">
                                <div class="row">
                                    <div class="col-sm-12 col-xs-12 col-md-12 col-lg-12">
                                        <div class="widget-box">
                                            <div class="widget-header">
                                                <h4 class="widget-title">Form Search</h4>
                                            </div>
                                            <div class="widget-body">
                                                <div class="widget-main">
                                                    <form class="form-group" method="POST" action="<?= base_url() ?>admin/ambilhis" enctype="multipart/form-data">
                                                        <div class="row">
                                                            <div class="form-group col-xs-3">
                                                                <label>Tanggal Dari</label>
                                                                <input type="date" name="dari" id="dari" class="chosen-select form-control">
                                                            </div>
                                                            <div class="form-group col-xs-3">
                                                                <label>Tanggal Sampai</label>
                                                                <input type="date" name="sampai" id="sampai" class="chosen-select form-control">
                                                            </div>
                                                            <div class="form-group col-xs-3">
                                                                <label>Nama Pegawai</label>
                                                                <select name="employee_name" id="employee_name" class="chosen-select form-control">
                                                                    <option value="" selected>All Pegawai</option>
                                                                    <?php foreach ($emphis as $e) : ?>
                                                                        <option value="<?= $e['employee_name'] ?>"><?= $e['employee_name'] ?></option>
                                                                    <?php endforeach; ?>
                                                                </select>
                                                            </div>
                                                            <div class="form-group col-xs-3">
                                                                <label>Nama Departemen</label>
                                                                <select name="department" id="department" class="chosen-select form-control">
                                                                    <option value="" selected>All Departmen</option>
                                                                    <?php foreach ($deparhis as $d) : ?>
                                                                        <option value="<?= $d['department'] ?>"><?= $d['department'] ?></option>
                                                                    <?php endforeach; ?>
                                                                </select>
                                                            </div>
                                                            <div class="form-group col-xs-3">
                                                                <label>Nama Posisi</label>
                                                                <select name="position" id="position" class="chosen-select form-control">
                                                                    <option value="" selected>All Position</option>
                                                                    <?php foreach ($posihis as $p) : ?>
                                                                        <option value="<?= $p['position'] ?>"><?= $p['position'] ?></option>
                                                                    <?php endforeach; ?>
                                                                </select>
                                                            </div>
                                                            <div class="form-group col-xs-3">
                                                                <label>Nama Project</label>
                                                                <select name="project" id="project" class="chosen-select form-control">
                                                                    <option value="" selected>All Project</option>
                                                                    <?php foreach ($projhis as $pr) : ?>
                                                                        <option value="<?= $pr['project'] ?>"><?= $pr['project'] ?></option>
                                                                    <?php endforeach; ?>
                                                                </select>
                                                            </div>
                                                            <div class="form-group col-xs-3">
                                                                <label>Nama Remark</label>
                                                                <select name="remark" id="remark" class="chosen-select form-control">
                                                                    <option value="" selected>All Remark</option>
                                                                    <?php foreach ($remhis as $rk) : ?>
                                                                        <option value="<?= $rk['remark'] ?>"><?= $rk['remark'] ?></option>
                                                                    <?php endforeach; ?>
                                                                </select>
                                                            </div>
                                                            <div class="form-group col-xs-3">
                                                                <label style="color:white;">klik</label>
                                                                <button type="submit" name="submit" class="btn btn-info btn-sm chosen-select form-control">
                                                                    <i class="ace-icon fa fa-search bigger-110"></i> Search
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>