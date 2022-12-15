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
                            <h5>Detail Permit ( Tipe Permit )</h5>
                            <table class="table table-striped table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Nama Permit</th>
                                        <th>Jumlah Hari </th>
                                        <th>Keterangan </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($tiper as $p) : ?>
                                        <tr>
                                            <td class="center"><?= $no++ ?></td>
                                            <td class="center"><?= $p['nama_permit'] ?></td>
                                            <td class="center"><?= $p['jml_limit'] ?></td>
                                            <td class="center"><?= strtoupper($p['ket']) ?> / <?= $p['keyword_permit'] ?></td>
                                        </tr>

                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                            <div class="clearfix">
                                <div class="row">
                                    <div class="col-sm-12 col-xs-12 col-md-12 col-lg-12">
                                        <div class="widget-box">
                                            <div class="widget-header">
                                                <h5 class="widget-title">Input Permit</h5>
                                            </div>
                                            <div class="widget-body">
                                                <div class="widget-main">
                                                    <form class="form-group" method="POST" action="<?= base_url() ?>user/proses_add_permit" enctype="multipart/form-data">
                                                        <div class="row">

                                                            <div class="form-group col-xs-3">
                                                                <label for="">Nama Employee</label>
                                                                <input type="text" name="employee_name" placeholder="Employee Name" class="width-100" value="<?= $employ['employee_name'] ?> / <?= $employ['pns_id'] ?>" readonly>
                                                                <input type="hidden" name="employee_id" placeholder="Employee ID" class="width-100" value="<?= $employ['id'] ?>">
                                                            </div>

                                                            <div class=" form-group col-xs-3">
                                                                <label for="">Type Permit</label>
                                                                <select name="type" id="type" class="chosen-select form-control">
                                                                    <?php foreach ($tiper as $t) : ?>
                                                                        <option value="<?= $t['id_permit'] ?>"><?= $t['nama_permit'] ?></option>
                                                                    <?php endforeach; ?>
                                                                </select>
                                                            </div>

                                                            <div class="form-group col-xs-3">
                                                                <label for="">Start Date</label>
                                                                <input type="date" id="start" name="start" class="width-100" required />
                                                            </div>

                                                            <div class="form-group col-xs-3">
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
                                            <table id="dynamic-table" class="table table-striped table-bordered table-hover">
                                                <thead>
                                                    <tr>
                                                        <th class="center">
                                                            #
                                                        </th>
                                                        <th class="center" width="auto">Permit</th>
                                                        <th class="center" width="auto">Start Date</th>
                                                        <th class="center" width="auto">End Date</th>
                                                        <th class="center" width="auto">Keterangan</th>
                                                        <th class="center" width="auto">File</th>
                                                        <th class="center" width="auto">Approve</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    $no = 1;
                                                    foreach ($permit as $per) : ?>
                                                        <tr>
                                                            <td class="center"><?= $no++ ?></td>
                                                            <td class="center"><?= $per['nama_permit'] ?></td>

                                                            <td class="center"><?= $per['start'] ?></td>
                                                            <td class="center"><?= $per['end'] ?></td>
                                                            <td class="center"><?= $per['keterangan'] ?></td>
                                                            <td class="center">
                                                                <?php
                                                                    if ($per['image'] != '') { ?>
                                                                    <a href="<?= base_url() ?>assets/permit/<?= $per['image'] ?>" class=" btn btn-sm btn-info" target="_blank">
                                                                        <i class="ace-icon fa fa-eye bigger-120"></i>
                                                                    </a>
                                                                <?php } else { } ?>
                                                            </td>
                                                            <td class="center"><?= $per['approve'] ?></td>
                                                        </tr>

                                                    <?php endforeach; ?>
                                                </tbody>
                                            </table>
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