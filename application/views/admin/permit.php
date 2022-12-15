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

                <div class="pull-right" style="margin-bottom: 10px;">
                    <a href="<?= base_url('admin/permit_add') ?>" class="btn btn-sm btn-primary">
                        <i class="ace-icon fa fa-plus align-top bigger-125"></i>

                    </a>
                    <a href="<?= base_url('admin/pdfclass') ?>" class="btn btn-sm btn-info" target="_blank">
                        <i class="ace-icon fa fa-file-pdf-o align-top bigger-125"></i>

                    </a>
                    <a href="<?= base_url('admin/excelclass') ?>" class="btn btn-sm btn-light">
                        <i class="ace-icon fa fa-file-excel-o align-top bigger-125"></i>

                    </a>
                    <a href="#modal-table" role="button" data-toggle="modal" class="btn btn-sm btn-success">
                        <i class="ace-icon fa fa-upload align-top bigger-125"></i>

                    </a>
                    <div id="modal-table" class="modal fade" tabindex="-1">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <?= form_open_multipart('admin/importclass') ?>
                                <div class="modal-header no-padding">
                                    <div class="table-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                            <span class="white">&times;</span>
                                        </button>
                                        Form Import Permit
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
                                    <a href="<?= base_url() ?>assets/import/classification.xlsx" class="btn btn-sm btn-primary pull-left">
                                        <i class="ace-icon fa fa-file"></i>
                                        Download Template
                                    </a>
                                </div>
                                </form>
                            </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                    </div>
                </div>
                <div class="col-xs-12">
                    <!-- PAGE CONTENT BEGINS -->
                    <?= form_error('permit', '<div class="alert alert-block alert-danger">
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
                                <th class="center" width="auto">Name Employee</th>
                                <th class="center" width="auto">Permit</th>
                                <th class="center" width="auto">NPL</th>
                                <th class="center" width="auto">Start Date</th>
                                <th class="center" width="auto">End Date</th>
                                <th class="center" width="auto">File</th>
                                <th class="center" width="auto">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($permit as $per) : ?>
                                <tr>
                                    <td class="center"><?= $no++ ?></td>
                                    <td class="center"><?= $per['employee_name'] ?></td>
                                    <?php
                                        if ($per['type'] == '1') {
                                            echo '<td class="center">MC</td>';
                                        } elseif ($per['type'] == '2') {
                                            echo '<td class="center">MIMC</td>';
                                        } elseif ($per['type'] == '3') {
                                            echo '<td class="center">SKB</td>';
                                        } elseif ($per['type'] == '4') {
                                            echo '<td class="center">ISOMAN</td>';
                                        } elseif ($per['type'] == '5') {
                                            echo '<td class="center">MELAHIRKAN</td>';
                                        } elseif ($per['type'] == '6') {
                                            echo '<td class="center">TAHUNAN</td>';
                                        } elseif ($per['type'] == '7') {
                                            echo '<td class="center">BERDUKA</td>';
                                        } elseif ($per['type'] == '8') {
                                            echo '<td class="center">ACARA KEAGAMAAN</td>';
                                        } else {
                                            echo '<td class="center">TO</td>';
                                        }
                                        ?>
                                    <td class="center"><?= $per['npl'] ?></td>
                                    <td class="center"><?= $per['start'] ?></td>
                                    <td class="center"><?= $per['end'] ?></td>
                                    <td class="center">
                                        <?php
                                            if ($per['image'] != '') { ?>
                                            <a href="<?= base_url() ?>assets/permit/<?= $per['image'] ?>" class=" btn btn-sm btn-info" target="_blank">
                                                <i class="ace-icon fa fa-eye bigger-120"></i>
                                            </a>
                                        <?php } else { } ?>
                                    </td>
                                    <td class="center">
                                        <a href="<?= base_url('edit/permit/' . $per['id_permit']) ?>">
                                            <button class="btn btn-xs col-lg-4 btn-warning">
                                                <i class="ace-icon fa fa-check bigger-120"></i>
                                            </button>
                                        </a>
                                        <a href="<?= base_url('edit/permit/' . $per['id_permit']) ?>">
                                            <button class="btn btn-xs col-lg-4 btn-info">
                                                <i class="ace-icon fa fa-pencil bigger-120"></i>
                                            </button>
                                        </a>
                                        <a onclick="return confirm('Yakin ingin menghapus ?')" href="<?= base_url('delete/permit/' . $per['id_permit']) ?>">
                                            <button class="btn btn-xs col-lg-4 btn-danger">
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