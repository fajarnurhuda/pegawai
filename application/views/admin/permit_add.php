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
                                                <h4 class="widget-title">Input Permit</h4>
                                            </div>
                                            <div class="widget-body">
                                                <div class="widget-main">
                                                    <form class="form-group" method="POST" action="<?= base_url() ?>admin/proses_add_permit" enctype="multipart/form-data">
                                                        <div class="row">

                                                            <div class="form-group col-xs-4">
                                                                <label for="">Choose Employee</label>
                                                                <select name="employeeID" id="employeeID" class="chosen-select form-control">
                                                                    <option value="" selected>Choose Employee</option>
                                                                    <?php foreach ($employ as $emp) : ?>
                                                                        <option value="<?= $emp['pns_id'] ?>"><?= $emp['employee_name'] ?></option>
                                                                    <?php endforeach; ?>
                                                                </select>
                                                            </div>

                                                            <div class="form-group col-xs-2">
                                                                <label for="">Type Permit</label>
                                                                <select name="type" id="type" class="chosen-select form-control">
                                                                    <option value="0" selected>LEAVE</option>
                                                                    <option value="1">MC</option>
                                                                    <option value="2">MIMC</option>
                                                                    <option value="3">NPL</option>
                                                                </select>
                                                            </div>

                                                            <div class="form-group col-xs-2">
                                                                <label for="">Reason</label>
                                                                <select name="reason" id="type" class="chosen-select form-control">
                                                                    <option value="0" selected>Cuti Biasa</option>
                                                                    <option value="1">Melahirkan</option>
                                                                    <option value="2">Duka Cita</option>
                                                                    <option value="3">Darurat</option>
                                                                </select>
                                                            </div>

                                                            <div class="form-group col-xs-2">
                                                                <label for="">Start Date</label>
                                                                <input type="text" id="start" name="start" class="width-100" required />
                                                            </div>

                                                            <div class="form-group col-xs-2">
                                                                <label for="">End Date</label>
                                                                <input type="date" id="end" name="end" class="width-100" required />
                                                            </div>

                                                            <div class="form-group col-xs-12">
                                                                <textarea name="keterangan" id="keterangan" cols="148" rows="2" placeholder="Keterangan"></textarea>
                                                            </div>

                                                            <div class="form-group col-xs-8">
                                                                <input type="file" name="image">
                                                            </div>

                                                            <div class="form-group col-xs-2 pull-right" style="margin-top: 3px;">
                                                                <button type="submit" name="submit" class="btn btn-info btn-sm form-control">
                                                                    <i class="ace-icon fa fa-plus bigger-110"></i> Tambah
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
                        </div>
                    </div>
                    <!-- PAGE CONTENT ENDS -->
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.page-content -->
    </div>
</div><!-- /.main-content -->