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
                    <!-- <div class="pull-right" style="margin-bottom: 10px;">
                        <button class="btn btn-sm btn-primary" type="button" data-toggle="modal" data-target="#exampleModal">
                            <i class="ace-icon fa fa-plus align-top bigger-125"></i>
                        </button>
                    </div> -->
                </div>
                <div class="col-xs-12">
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

                    <table id="dynamic-table" class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th class="center">
                                    #
                                </th>
                                <th class="center">Permit Name</th>
                                <th class="center">Jumlah Hari</th>
                                <th class="center">Keyword Permit</th>
                                <th class="center">Ket</th>
                                <th class="center" width="8%">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($cuti as $ct) : ?>
                                <tr>
                                    <td class="center"><?= $no++ ?></td>
                                    <td class="center"><?= $ct['nama_permit'] ?></td>
                                    <td class="center"><?= $ct['jml_limit'] ?></td>
                                    <td class="center"><?= $ct['keyword_permit'] ?></td>
                                    <td class="center"><?= $ct['ket'] ?></td>
                                    <td>
                                        <center>
                                            <div class="hidden-sm hidden-xs action-buttons">
                                                <a class="blue" href="#" data-toggle="modal" data-target="#exampleModal<?= $ct['id_permit'] ?>">
                                                    <i class="ace-icon fa fa-pencil bigger-130"></i>
                                                </a>
                                                <!-- <a class="red" onclick="return confirm('Yakin ingin menghapus ?')" href="<?= base_url('delete/cuti/' . $ct['id_permit']) ?>">
                                                    <i class="ace-icon fa fa-trash-o bigger-130"></i>
                                                </a> -->
                                            </div>
                                        </center>
                                    </td>
                                </tr>
                                <div class="modal fade" id="exampleModal<?= $ct['id_permit'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <form action="<?= base_url('edit/cuti_edit') ?>" method="POST" enctype="multipart/form-data">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Edit Cuti</h5>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="form-group">
                                                        <label for="">Permit Name</label>
                                                        <input type="hidden" id="id_permit" name="id_permit" class="col-xs-12" style="margin-bottom: 4%;" value="<?= $ct['id_permit'] ?>" required />
                                                        <input type="text" id="nama_permit" name="nama_permit" placeholder="Permit Name" class="col-xs-12" style="margin-bottom: 4%;" value="<?= $ct['nama_permit'] ?>" required />

                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">Jumlah Hari</label>
                                                        <input type="number" id="jml_limit" name="jml_limit" placeholder="Jumlah Hari" class="col-xs-12" style="margin-bottom: 4%;" value="<?= $ct['jml_limit'] ?>" required />

                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">keyword Permit</label>
                                                        <input type="text" id="keyword_permit" name="keyword_permit" placeholder="Keyword Permit" class="col-xs-12" style="margin-bottom: 4%;" value="<?= $ct['keyword_permit'] ?>" required />

                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">Keterangan</label>
                                                        <select class="form-control" id="form-field-select-1" name="ket" id="ket">
                                                            <option <?php if ($ct['ket'] == 'pay') {
                                                                            echo 'selected="selected"';
                                                                        } ?> value="pay">Pay</option>
                                                            <option <?php if ($ct['ket'] == 'no pay') {
                                                                            echo 'selected="selected"';
                                                                        } ?> value="no pay">No Pay</option>
                                                            <option <?php if ($ct['ket'] == 'leave') {
                                                                            echo 'selected="selected"';
                                                                        } ?> value="leave">Leave</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="space-20"></div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-info"> Edit</button>
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
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary"> Tambah</button>
                </div>
            </form>
        </div>
    </div>
</div>