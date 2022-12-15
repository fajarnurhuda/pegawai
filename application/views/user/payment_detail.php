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
                                    <form class="form-horizontal" method="POST" action="<?= base_url() ?>user/payment_select" enctype="multipart/form-data">
                                        <div class="widget-main">
                                            <div class="col-xs-4">
                                                <input type="hidden" name="employeeID" value="<?= $employee['id'] ?>">
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

                                                <input type="submit" name="submit" class="btn btn-primary btn-block"></button>
                                            </div>
                                        </div>
                                </div>
                                </form>

                                <div class="widget-body">
                                    <div class="widget-main padding-24">
                                        <div class="row">
                                            <div class="col-sm-12 col-xs-12">
                                                <div class="space"></div>
                                                <div class="row">
                                                    <div class="col-xs-12 label label-lg label-info arrowed-in arrowed-right">
                                                        <b>Employee Info</b>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-xs-6 col-sm-6 ">
                                                        <div class="profile-user-info">
                                                            <div class="profile-info-row">
                                                                <div class="profile-info-name"> Employee Name </div>
                                                                <div class="profile-info-value">
                                                                    <span><?= $employee['employee_name'] ?></span>
                                                                </div>
                                                            </div>

                                                            <div class="profile-info-row">
                                                                <div class="profile-info-name"> Employee ID </div>
                                                                <div class="profile-info-value">
                                                                    <span><?= $employee['pns_id'] ?></span>
                                                                </div>
                                                            </div>

                                                            <div class="profile-info-row">
                                                                <div class="profile-info-name"> Classification </div>
                                                                <div class="profile-info-value">
                                                                    <span><?= $finance['name'] ?></span>
                                                                </div>
                                                            </div>

                                                            <div class="profile-info-row">
                                                                <div class="profile-info-name"> Department </div>
                                                                <div class="profile-info-value">
                                                                    <span><?= $finance['department_name'] ?></span>
                                                                </div>
                                                            </div>

                                                            <div class="profile-info-row">
                                                                <div class="profile-info-name"> Maritial Status </div>
                                                                <div class="profile-info-value">
                                                                    <span><?= $employee['status_kawin'] ?></span> / <?= $employee['tanggungan'] ?>
                                                                </div>
                                                            </div>

                                                            <div class="profile-info-row">
                                                                <div class="profile-info-name"> Date Joined </div>
                                                                <div class="profile-info-value">
                                                                    <span><?= $employee['tanggal_join'] ?></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><!-- /.col -->
                                                    <div class="col-xs-6 col-sm-6 ">
                                                        <div class="profile-user-info">
                                                            <div class="profile-info-row">
                                                                <div class="profile-info-name"> NPWP </div>
                                                                <div class="profile-info-value">
                                                                    <span><?= $employee['npwp'] ?></span>
                                                                </div>
                                                            </div>

                                                            <div class="profile-info-row">
                                                                <div class="profile-info-name"> BP Jamsostek No. </div>
                                                                <div class="profile-info-value">
                                                                    <span><?= $employee['bpjs_tk'] ?></span>
                                                                </div>
                                                            </div>

                                                            <div class="profile-info-row">
                                                                <div class="profile-info-name"> BPJS Kesehatan No. </div>
                                                                <div class="profile-info-value">
                                                                    <span><?= $employee['bpjs_kes'] ?></span>
                                                                </div>
                                                            </div>

                                                            <div class="profile-info-row">
                                                                <div class="profile-info-name"> Mandiri Account </div>
                                                                <div class="profile-info-value">
                                                                    <span><?= $employee['mandiri'] ?></span>
                                                                </div>
                                                            </div>

                                                            <div class="profile-info-row">
                                                                <div class="profile-info-name"> Pay Periode</div>
                                                                <div class="profile-info-value">
                                                                    <span>
                                                                        <span><?= date('Y') ?></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><!-- /.col -->
                                                </div><!-- /.row -->
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
    </div>
</div>