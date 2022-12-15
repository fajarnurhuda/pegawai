<div class="main-content">
    <div class="main-content-inner">
        <div class="breadcrumbs ace-save-state" id="breadcrumbs">
            <ul class="breadcrumb">
                <li>
                    <i class="ace-icon fa fa-home home-icon"></i>
                    <a href="#">Home</a>
                </li>
                <li class="active">

                    <?= $title; ?></li>
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

                    <div class="row">

                        <div class="col-sm-10 col-sm-offset-1">
                            <div class="widget-box transparent">
                                <div class="widget-body">
                                    <form class="form-horizontal" method="POST" action="<?= base_url() ?>admin/payment_select" enctype="multipart/form-data">
                                        <div class="widget-main">
                                            <div class="col-xs-4">
                                                <select class="form-control" id="form-field-select-1" name="bulanangka" id="bulanangka">
                                                    <option value="Pilih Bulan">Pilih Bulan</option>
                                                    <option value="1">Januari</option>
                                                    <option value="2">Februari</option>
                                                    <option value="3">Maret</option>
                                                    <option value="4">April</option>
                                                    <option value="5">Mei</option>
                                                    <option value="6">Juni</option>
                                                    <option value="7">Juli</option>
                                                    <option value="8">Agustus</option>
                                                    <option value="9">September</option>
                                                    <option value="10">Oktober</option>
                                                    <option value="11">November</option>
                                                    <option value="12">Desember</option>
                                                </select>
                                            </div>

                                            <div class="col-xs-4">

                                                <select class="form-control" id="form-field-select-1" name="tahun" id="tahun">
                                                    <option value="Pilih Tahun">Pilih Tahun</option>
                                                    <?php
                                                    for ($i = date('Y'); $i >= date('Y') - 4; $i -= 1) {
                                                        echo '<option value=' . $i . '> ' . $i . ' </option>';
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                            <div class="col-xs-4">

                                                <input type="submit" name="submit" class="btn btn-sm btn-primary btn-block"></button>
                                            </div>
                                        </div>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <br>
                    <div class="row">
                        <div class="col-xs-12">
                            <?php if (!empty($employ)) : ?>
                                <div>
                                    <table id="dynamic-table" class="table table-striped table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th class="center">
                                                    #
                                                </th>
                                                <th class="center">PNS ID</th>
                                                <th class="center">NO SAP</th>
                                                <th class="center">Name</th>
                                                <th class="center">NIK</th>
                                                <th class="center">No Hp</th>
                                                <th class="center">Aktif</th>
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
                                                        <?= $emp['no_sap'] ?>
                                                    </td>
                                                    <td>
                                                        <?= $emp['employee_name'] ?>
                                                    </td>
                                                    <td>
                                                        <?= $emp['nik'] ?>
                                                    </td>
                                                    <td>
                                                        <?= $emp['phoneNumber'] ?>
                                                    </td>
                                                    <td>
                                                        <?= $emp['aktif'] ?>
                                                    </td>
                                                    <td>
                                                        <div class="hidden-sm hidden-xs action-buttons">
                                                            <a class="blue" href="<?= base_url('admin/payment_detail/' . $emp['id']) ?>">
                                                                <i class="ace-icon fa fa-money bigger-130"></i>
                                                            </a>
                                                            <a class="green" href="#modal-table<?= $emp['id'] ?>" role="button" data-toggle="modal">
                                                                <i class="ace-icon fa fa-print bigger-130"></i>
                                                            </a>

                                                        </div>
                                                    </td>
                                                </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            <?php else : ?>
                                <table class="table table-striped">
                                    <tr>
                                        <td align="center">Tidak Ada Data</td>
                                    </tr>
                                </table>
                            <?php endif ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>