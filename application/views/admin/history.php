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
                        <a href="<?= base_url('admin/pdfhis') ?>" class="btn btn-sm btn-info" target="_blank">
                            <i class="ace-icon fa fa-file-pdf-o align-top bigger-125"></i>
                        </a>
                        <a href="<?= base_url('admin/excelhis') ?>" class="btn btn-sm btn-light">
                            <i class="ace-icon fa fa-file-excel-o align-top bigger-125"></i>
                        </a>
                        <a href="#modal-table" role="button" data-toggle="modal" class="btn btn-sm btn-success">
                            <i class="ace-icon fa fa-upload align-top bigger-125"></i>
                        </a>
                        <div id="modal-table" class="modal fade" tabindex="-1">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <?= form_open_multipart('admin/importhistory') ?>
                                    <div class="modal-header no-padding">
                                        <div class="table-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                                <span class="white">&times;</span>
                                            </button>
                                            Form Import History
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
                                        <a href="<?= base_url() ?>assets/import/history.xlsx" class="btn btn-sm btn-primary pull-left">
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
                    <?= form_error('history', '<div class="alert alert-block alert-danger">
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

                    <table id="dynamic-table" class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th class="center">
                                    #
                                </th>
                                <th class="center">PNS ID</th>
                                <th class="center">Nama Pegawai</th>
                                <th class="center">Position</th>
                                <th class="center">Date In </th>
                                <th class="center">Date Out </th>
                                <th class="center">Remark</th>
                                <th class="center" width="8%">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php

                            use Mpdf\Tag\A;

                            $no = 1;
                            foreach ($his as $h) : ?>
                                <tr>
                                    <td class="center"><?= $no++ ?></td>
                                    <td class="center"><?= $h['pns_id'] ?></td>
                                    <td class="center">
                                        <?= $h['employee_name'] ?>
                                    </td>
                                    <td class="center"><?= $h['position'] ?></td>
                                    <td class="center"><?= date('d M Y', strtotime($h['date_in'])) ?></td>
                                    <td class="center"><?= date('d M Y', strtotime($h['date_out'])) ?></td>
                                    <td class="center"><?= $h['remark'] ?></td>
                                    <td>
                                        <center>
                                            <div class="hidden-sm hidden-xs action-buttons">
                                                <a class="blue" href="#" data-toggle="modal" data-target="#exampleModal<?= $h['id_his'] ?>">
                                                    <i class="ace-icon fa fa-pencil bigger-130"></i>
                                                </a>
                                                <a class="red" onclick="return confirm('Yakin ingin menghapus ?')" href="<?= base_url('delete/history/' . $h['id_his']) ?>">
                                                    <i class="ace-icon fa fa-trash-o bigger-130"></i>
                                                </a>
                                            </div>
                                        </center>
                                    </td>
                                </tr>
                                <div class="modal fade" id="exampleModal<?= $h['id_his'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <form action="<?= base_url('edit/history_edit') ?>" method="POST" enctype="multipart/form-data">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Edit History</h5>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name"> ID PNS </div>
                                                        <div class="profile-info-value">
                                                            <input type="text" class="form-control" name="pns_id" id="pns_id" placeholder="Masukkan PNS ID" value="<?= $h['pns_id'] ?>">
                                                        </div>
                                                    </div>
                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name"> Nama Pegawai </div>
                                                        <div class="profile-info-value">
                                                            <input type="text" class="form-control" name="employee_name" id="employee_name" placeholder="Masukkan Nama Pegawai">
                                                        </div>
                                                    </div>
                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name"> No SAP </div>
                                                        <div class="profile-info-value">
                                                            <input type="text" class="form-control" name="no_sap" id="no_sap" placeholder="Masukkan PNS ID">
                                                        </div>
                                                    </div>
                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name"> No Kronos </div>
                                                        <div class="profile-info-value">
                                                            <input type="text" class="form-control" name="no_cronos" id="no_cronos" placeholder="Masukkan PNS ID">
                                                        </div>
                                                    </div>
                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name"> Tanggal Masuk </div>
                                                        <div class="profile-info-value">
                                                            <span><input type="date" id="date_in_ck" name="date_in" class="width-100" required /></span>
                                                        </div>
                                                    </div>

                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name"> Tanggal Keluar </div>
                                                        <div class="profile-info-value">
                                                            <span><input type="date" id="date_out" name="date_out" class="width-100" required /></span>
                                                        </div>
                                                    </div>
                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name"> Position </div>
                                                        <div class="profile-info-value">
                                                            <input type="text" class="form-control" name="position" id="position" placeholder="Masukkan Department">
                                                        </div>
                                                    </div>
                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name"> Department </div>
                                                        <div class="profile-info-value">
                                                            <input type="text" class="form-control" name="department" id="department" placeholder="Masukkan Department">
                                                        </div>
                                                    </div>
                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name"> Project </div>
                                                        <div class="profile-info-value">
                                                            <input type="text" class="form-control" name="project" id="project" placeholder="Masukkan Nama Project">
                                                        </div>
                                                    </div>

                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name"> Remark </div>
                                                        <div class="profile-info-value">
                                                            <span><textarea placeholder="Remark" name="remark" style="width: 400px; height:100px"></textarea></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary"><i class="ace-icon fa fa-plus bigger-130"></i> Tambah</button>
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

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="<?= base_url('add/history_add') ?>" method="POST" enctype="multipart/form-data">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Submit History</h5>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6 col-lg-6">
                            <div class="form-group">
                                <label for="">PNS ID</label>
                                <input type="text" id="pns_id_cek" name="pns_id" class="col-xs-12" style="margin-bottom: 4%;" onkeyup="autofill()" />
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6">
                            <div class="form-group">
                                <label for="">Nama Pegawai</label>
                                <input type="text" id="employee_name_ck" name="employee_name" class="col-xs-12" style="margin-bottom: 4%;" />
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6">
                            <div class="form-group">
                                <label for="">No Kronos</label>
                                <input type="text" id="no_cronos_ck" name="no_cronos" class="col-xs-12" style="margin-bottom: 4%;" />
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6">
                            <div class="form-group">
                                <label for="">No SAP</label>
                                <input type="text" id="no_sap_ck" name="no_sap" class="col-xs-12" style="margin-bottom: 4%;" />
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6">
                            <div class="form-group">
                                <label for="">Position</label>
                                <input type="text" id="position_ck" name="position" class="col-xs-12" style="margin-bottom: 4%;" />
                                <input type="hidden" id="class" name="id_class" class="col-xs-12" style="margin-bottom: 4%;" />
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6">
                            <div class="form-group">
                                <label for="">Departement</label>
                                <input type="hidden" id="depart" name="id_depart" class="col-xs-12" style="margin-bottom: 4%;" />
                                <input type="text" id="department_ck" name="department" class="col-xs-12" style="margin-bottom: 4%;" />
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6">
                            <div class="form-group">
                                <label for="">Tanggal Masuk</label>
                                <input type="date" id="date_in_ck" name="date_in" class="col-xs-12" style="margin-bottom: 4%;" />
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6">
                            <div class="form-group">
                                <label for="">Tanggal Keluar</label>
                                <input type="date" id="date_out" name="date_out" class="col-xs-12" style="margin-bottom: 4%;" />
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-12">
                            <div class="form-group">
                                <label for="">Project</label>
                                <input type="text" id="project" name="project" placeholder="Project" class="col-xs-12" style="margin-bottom: 4%;" />
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-12">
                            <div class="form-group">
                                <label for="">Remark</label>
                                <input type="text" id="remark" name="remark" placeholder="Remark" class="col-xs-12" style="margin-bottom: 4%;" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal"><i class="ace-icon fa fa-times bigger-125"></i> Close</button>
                    <button type="submit" class="btn btn-sm btn-info"><i class="ace-icon fa fa-save bigger-125"></i> Tambah</button>
                </div>
            </form>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.1.js"></script>
<script type="text/javascript">
    function autofill() {
        var pns_id = $('#pns_id_cek').val();
        $.ajax({
            url: "<?= base_url('admin/historyajax') ?>",
            data: {
                pns_id: pns_id
            },
            cache: false,
            success: function(data) {
                var json = data,
                    obj = JSON.parse(json);
                $("#employee_name_ck").val(obj.employee_name).attr('readonly', 'readonly');
                $("#no_cronos_ck").val(obj.no_cronos).attr('readonly', 'readonly');
                $("#no_sap_ck").val(obj.no_sap).attr('readonly', 'readonly');
                $("#position_ck").val(obj.position).attr('readonly', 'readonly');
                $("#department_ck").val(obj.department).attr('readonly', 'readonly');
                $("#date_in_ck").val(obj.date_in);
                $("#depart").val(obj.depart);
                $("#class").val(obj.class);
            }
        });
    }
</script>