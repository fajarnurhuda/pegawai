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
                                                    <form class="form-group" method="POST" action="<?= base_url() ?>admin/ambildata" enctype="multipart/form-data">
                                                        <div class="row">
                                                            <div class="form-group col-xs-3">
                                                                <select name="department" id="department" class="chosen-select form-control">
                                                                    <option value="" selected>All Department</option>
                                                                    <?php foreach ($department as $depart) : ?>
                                                                        <option value="<?= $depart->id ?>"><?= $depart->department_name ?></option>
                                                                    <?php endforeach; ?>
                                                                </select>
                                                            </div>
                                                            <div class="form-group col-xs-3">
                                                                <select name="classification" id="classification" class="chosen-select form-control">
                                                                    <option value="" selected>All Classification</option>
                                                                    <?php foreach ($classification as $class) : ?>
                                                                        <option value="<?= $class->id ?>"><?= $class->name ?></option>
                                                                    <?php endforeach; ?>
                                                                </select>
                                                            </div>
                                                            <div class="form-group col-xs-3">
                                                                <select name="aktif" id="aktif" class="chosen-select form-control">
                                                                    <option value="Aktif" selected>Aktif</option>
                                                                    <option value="Non Aktif">Non Aktif</option>
                                                                </select>
                                                            </div>
                                                            <div class="form-group col-xs-3">
                                                                <button type="submit" name="submit" class="btn btn-info btn-sm form-control">
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
                            <div>
                                <table id="dynamic-table" class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th class="center">
                                                #
                                            </th>
                                            <th class="center">PNS ID</th>
                                            <th class="center">NIK</th>
                                            <th class="center">Name</th>
                                            <th class="center">Phone</th>
                                            <th class="center">Email</th>
                                            <th class="center">Status</th>
                                            <th class="center">Action</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php
                                        $no = 1;
                                        foreach ($employ as $emp) : ?>
                                            <tr>
                                                <td class="center">
                                                    <?= $no++ ?>
                                                </td>
                                                <td>
                                                    <?= $emp['pns_id'] ?>
                                                </td>
                                                <td>
                                                    <?= $emp['nik'] ?>
                                                </td>
                                                <td>
                                                    <?= $emp['employee_name'] ?>
                                                </td>
                                                <td>
                                                    <?= $emp['phoneNumber'] ?>
                                                </td>
                                                <td>
                                                    <?= $emp['email'] ?>
                                                </td>
                                                <td>
                                                    <?= $emp['status'] ?>
                                                </td>
                                                <td>
                                                    <div class="hidden-sm hidden-xs action-buttons">
                                                        <a class="blue" href="<?= base_url('admin/employee_detail/' . $emp['id']) ?>" alt="detail">
                                                            <i class="ace-icon fa fa-eye bigger-130"></i>
                                                        </a>
                                                        <a class="blue" href="<?= base_url('edit/employee_edit/' . $emp['id']) ?>">
                                                            <i class="ace-icon fa fa-pencil bigger-130"></i>
                                                        </a>
                                                        <a class="blue" href="<?= base_url('admin/employee_cetak/' . $emp['id']) ?>" target="_blank">
                                                            <i class="ace-icon fa fa-print bigger-130"></i>
                                                        </a>
                                                        <a class="red" onclick="return confirm('Yakin ingin menghapus ?')" href="<?= base_url('delete/employee/' . $emp['id']) ?>">
                                                            <i class="ace-icon fa fa-trash-o bigger-130"></i>
                                                        </a>
                                                        <!--<a class="green" href="<?= base_url('admin/permit_add_id/' . $emp['id']) ?>">-->
                                                        <!--    <i class="ace-icon fa fa-envelope bigger-130"></i>-->
                                                        <!--</a>-->
                                                    </div>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- PAGE CONTENT ENDS -->
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.page-content -->
    </div>
</div><!-- /.main-content -->