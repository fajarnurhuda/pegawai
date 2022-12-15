<?php
date_default_timezone_set("Asia/Jakarta");
$today = date('Y-m-d');
?>
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
                    <?php
                    $announce = $this->session->flashdata('announce');
                    if (!empty($announce)) {
                        if ($announce == 'Berhasil menyimpan data') {
                            echo '
                                        <div class="alert alert-success">
                                        ' . $announce . '
                                        </div>
                                    ';
                        } else {
                            echo '
                                        <div class="alert alert-danger">
                                        ' . $announce . '
                                        </div>
                                    ';
                        }
                    }
                    ?>
                    <!-- PAGE CONTENT BEGINS -->
                    <div class="clearfix"></div>
                    <?= $this->session->flashdata('message'); ?>
                    <form class="form-horizontal" method="POST" action="<?= base_url() ?>edit/employee_edit_proses" enctype="multipart/form-data">
                        <div class="clearfix">
                            <div class="pull-right" style="margin-bottom: 10px;">
                                <input class="btn btn-sm btn-primary" type="submit" name="submit">
                            </div>
                        </div>
                        <div id="user-profile-2" class="user-profile">
                            <div class="tabbable">
                                <ul class="nav nav-tabs padding-18">
                                    <li class="active">
                                        <a data-toggle="tab" href="#home">
                                            <i class="green ace-icon fa fa-user bigger-120"></i>
                                            Profile *
                                        </a>
                                    </li>

                                    <li class="">
                                        <a data-toggle="tab" href="#detail">
                                            <i class="green ace-icon fa fa-home bigger-120"></i>
                                            Detail
                                        </a>
                                    </li>
                                    <?php if ($employee['status_kawin'] == 'S') { ?> <?php } else { ?>
                                        <li class="">
                                            <a data-toggle="tab" href="#family">
                                                <i class="green ace-icon fa fa-users bigger-120"></i>
                                                Keluarga
                                            </a>
                                        </li>
                                    <?php } ?>

                                    <li class="">
                                        <a data-toggle="tab" href="#parents">
                                            <i class="green ace-icon fa fa-heart bigger-120"></i>
                                            Orang Tua
                                        </a>
                                    </li>

                                    <li class="">
                                        <a data-toggle="tab" href="#emergency">
                                            <i class="green ace-icon fa fa-fire bigger-120"></i>
                                            Darurat
                                        </a>
                                    </li>
                                     <?php if ($user['role_id'] == '2') { ?> <?php } else { ?>
                                        <li>
                                            <a data-toggle="tab" href="#feed">
                                                <i class="green ace-icon fa fa-money bigger-120"></i>
                                                Keuangan
                                            </a>
                                        </li>
                                    <?php } ?>
                                    <li>
                                        <a data-toggle="tab" href="#berkas">
                                            <i class="green ace-icon fa fa-file bigger-120"></i>
                                            Berkas
                                        </a>
                                    </li>

                                </ul>

                                <div class="tab-content no-border padding-24">
                                    <div id="home" class="tab-pane in active">
                                        <div class="row">
                                            <div class="col-xs-6 col-sm-6">

                                                <div class="profile-user-info">
                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name"> Nama Lengkap </div>
                                                        <div class="profile-info-value">
                                                            <span><input type="text" id="employee_name" name="employee_name" class="width-100" placeholder="Nama Lengkap" value="<?= $employee['employee_name'] ?>" required /></span>
                                                            <input type="hidden" id="id" name="id" class="width-100" placeholder="id" value="<?= $employee['id'] ?>" required />
                                                            <input type="hidden" id="role_id" name="role_id" class="width-100" placeholder="id" value="<?= $user['role_id'] ?>" required />
                                                        </div>
                                                    </div>

                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name"> Nama Depan </div>
                                                        <div class="profile-info-value">
                                                            <input type="text" id="first_name" name="first_name" class="width-100" placeholder="First Name" value="<?= $employee['first_name'] ?>" required />
                                                        </div>
                                                    </div>

                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name"> Nama Belakang </div>
                                                        <div class="profile-info-value">
                                                            <input type="text" id="last_name" name="last_name" class="width-100" placeholder="Last Name" value="<?= $employee['last_name'] ?>" required />
                                                        </div>
                                                    </div>

                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name"> Nama Panggilan </div>
                                                        <div class="profile-info-value">
                                                            <input type="text" id="call_name" name="call_name" class="width-100" placeholder="Call Name" value="<?= $employee['call_name'] ?>" required />
                                                        </div>
                                                    </div>

                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name"> Jenis Kelamin</div>
                                                        <div class="profile-info-value">
                                                            <span>
                                                                <select class="form-control" id="form-field-select-1" name="jk">
                                                                    <option <?php if ($employee['jk'] == '0') {
                                                                                echo 'selected="selected"';
                                                                            } ?> value="0">Laki Laki</option>
                                                                    <option <?php if ($employee['jk'] == '1') {
                                                                                echo 'selected="selected"';
                                                                            } ?> value="1">Perempuan</option>
                                                                </select>
                                                            </span>
                                                        </div>
                                                    </div>

                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name"> Tempat Lahir</div>
                                                        <div class="profile-info-value">
                                                            <span><input type="text" id="bornplace" name="bornplace" class="width-100" value="<?= $employee['bornplace'] ?>" placeholder="Born Place" required /></span>
                                                        </div>
                                                    </div>

                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name"> Tanggal Lahir </div>
                                                        <div class="profile-info-value">
                                                            <span><input type="date" id="borndate" name="borndate" class="width-100" placeholder="Born Date" value="<?= $employee['borndate'] ?>" dateformat="dd/mm/yyyy" required /></span>
                                                        </div>
                                                    </div>

                                                    <div class="space-20"></div>

                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name"> Golongan Darah</div>
                                                        <div class="profile-info-value">
                                                            <span>
                                                                <select class="form-control" id="form-field-select-1" name="gol_dar">
                                                                    <option <?php if ($employee['gol_dar'] == 'A') {
                                                                                echo 'selected="selected"';
                                                                            } ?> value="A">A</option>
                                                                    <option <?php if ($employee['gol_dar'] == 'B') {
                                                                                echo 'selected="selected"';
                                                                            } ?> value="B">B</option>
                                                                    <option <?php if ($employee['gol_dar'] == 'O') {
                                                                                echo 'selected="selected"';
                                                                            } ?> value="O">O</option>
                                                                    <option <?php if ($employee['gol_dar'] == 'AB') {
                                                                                echo 'selected="selected"';
                                                                            } ?> value="AB">AB</option>
                                                                </select>
                                                            </span>
                                                        </div>
                                                    </div>

                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name"> Agama </div>
                                                        <div class="profile-info-value">
                                                            <span>
                                                                <select class="form-control" id="form-field-select-1" name="agama">
                                                                    <option <?php if ($employee['agama'] == 'Islam') {
                                                                                echo 'selected="selected"';
                                                                            } ?> value="Islam">Islam</option>
                                                                    <option <?php if ($employee['agama'] == 'Protestan') {
                                                                                echo 'selected="selected"';
                                                                            } ?> value="Protestan">Protestan</option>
                                                                    <option <?php if ($employee['agama'] == 'Kristen') {
                                                                                echo 'selected="selected"';
                                                                            } ?> value="Kristen">Kristen</option>
                                                                    <option <?php if ($employee['agama'] == 'Hindu') {
                                                                                echo 'selected="selected"';
                                                                            } ?> value="Hindu">Hindu</option>
                                                                    <option <?php if ($employee['agama'] == 'Buddha') {
                                                                                echo 'selected="selected"';
                                                                            } ?> value="Buddha">Buddha</option>
                                                                    <option <?php if ($employee['agama'] == 'Konghucu') {
                                                                                echo 'selected="selected"';
                                                                            } ?> value="Konghucu">Konghucu</option>
                                                                </select>
                                                            </span>
                                                        </div>
                                                    </div>

                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name"> Suku </div>
                                                        <div class="profile-info-value">
                                                            <input type="text" id="suku" name="suku" class="width-100" placeholder="Ethnic" value="<?= $employee['suku'] ?>" required />
                                                        </div>
                                                    </div>

                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name"> Status Pernikahan </div>
                                                        <div class="profile-info-value">
                                                            <span>
                                                                <select class="form-control" id="form-field-select-1" name="status_kawin">
                                                                    <option <?php if ($employee['status_kawin'] == 'S') {
                                                                                echo 'selected="selected"';
                                                                            } ?> value="S">Single</option>
                                                                    <option <?php if ($employee['status_kawin'] == 'M') {
                                                                                echo 'selected="selected"';
                                                                            } ?> value="M">Married</option>
                                                                    <option <?php if ($employee['status_kawin'] == 'D') {
                                                                                echo 'selected="selected"';
                                                                            } ?> value="D">Divorce</option>
                                                                </select>
                                                            </span>
                                                        </div>
                                                    </div>

                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name"> Jumlah Tanggungan </div>
                                                        <div class="profile-info-value">
                                                            <span><input type="number" id="tanggungan" name="tanggungan" class="width-100" placeholder="Jumlah Tanggungan" value="<?= $employee['tanggungan'] ?>" min='0' max='3' /></span>
                                                        </div>
                                                    </div>

                                                    <div class="space-20"></div>

                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name"> NO HP</div>
                                                        <div class="profile-info-value">
                                                            <span><input type="text" id="phoneNumber" name="phoneNumber" class="width-100" placeholder="NO HP" value="<?= $employee['phoneNumber'] ?>" onkeypress="return event.charCode >= 48 && event.charCode <=57" required /></span>
                                                        </div>
                                                    </div>

                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name"> NO WA </div>
                                                        <div class="profile-info-value">
                                                            <span><input type="text" id="waNumber" name="waNumber" class="width-100" placeholder="NO WA" value="<?= $employee['waNumber'] ?>" onkeypress="return event.charCode >= 48 && event.charCode <=57" required /></span>
                                                        </div>
                                                    </div>

                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name"> Email </div>
                                                        <div class="profile-info-value">
                                                            <span><input type="email" id="email" name="email" class="width-100" placeholder="Email" value="<?= $employee['email'] ?>" required /></span>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-xs-6 col-sm-6">

                                                <div class="profile-user-info">
                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name"> Pendidikan Terkahir</div>
                                                        <div class="profile-info-value">
                                                            <span><input type="text" id="pend_akhir" name="pend_akhir" class="width-100" placeholder="Education" value="<?= $employee['pend_akhir'] ?>" required /></span>
                                                        </div>
                                                    </div>

                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name"> Jurusan</div>
                                                        <div class="profile-info-value">
                                                            <span><input type="text" id="jurusan" name="jurusan" class="width-100" placeholder="Major" value="<?= $employee['jurusan'] ?>" required /></span>
                                                        </div>
                                                    </div>

                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name"> Tahun Lulus</div>
                                                        <div class="profile-info-value">
                                                            <span><input type="number" id="tahun_lulus" name="tahun_lulus" class="width-100" placeholder="Graduation Year" value="<?= $employee['tahun_lulus'] ?>" onkeypress="return event.charCode >= 48 && event.charCode <=57" required /></span>
                                                        </div>
                                                    </div>

                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name"> Nama Sekolah</div>
                                                        <div class="profile-info-value">
                                                            <span><input type="text" id="nama_sekolah" name="nama_sekolah" class="width-100" placeholder="Education Name" value="<?= $employee['nama_sekolah'] ?>" required /></span>
                                                        </div>
                                                    </div>

                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name"> Kota Asal Sekolah</div>
                                                        <div class="profile-info-value">
                                                            <span><input type="text" id="kota_asal_sekolah" name="kota_asal_sekolah" class="width-100" placeholder="Education Place" value="<?= $employee['kota_asal_sekolah'] ?>" onkeypress="return event.charCode < 48 || event.charCode  >57" required /></span>
                                                        </div>
                                                    </div>

                                                    <div class="space-20"></div>

                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name"> Ukuran Baju</div>
                                                        <div class="profile-info-value">
                                                            <span>
                                                                <select class="form-control" id="form-field-select-1" name="ukuran_baju">
                                                                    <option <?php if ($employee['ukuran_baju'] == 'S') {
                                                                                echo 'selected="selected"';
                                                                            } ?> value="S">S</option>
                                                                    <option <?php if ($employee['ukuran_baju'] == 'M') {
                                                                                echo 'selected="selected"';
                                                                            } ?> value="M">M</option>
                                                                    <option <?php if ($employee['ukuran_baju'] == 'L') {
                                                                                echo 'selected="selected"';
                                                                            } ?> value="L">L</option>
                                                                    <option <?php if ($employee['ukuran_baju'] == 'XL') {
                                                                                echo 'selected="selected"';
                                                                            } ?> value="XL">XL</option>
                                                                    <option <?php if ($employee['ukuran_baju'] == 'XXL') {
                                                                                echo 'selected="selected"';
                                                                            } ?> value="XXL">XXL</option>
                                                                    <option <?php if ($employee['ukuran_baju'] == 'XXXL') {
                                                                                echo 'selected="selected"';
                                                                            } ?> value="XXXL">XXXL</option>
                                                                </select>
                                                            </span>
                                                        </div>
                                                    </div>

                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name"> Ukuran Sepatu </div>
                                                        <div class="profile-info-value">
                                                            <span><input type="number" id="ukuran_sepatu" name="ukuran_sepatu" class="width-100" placeholder="Shoes Size" value="<?= $employee['ukuran_sepatu'] ?>" min="36" max="45" required /></span>
                                                        </div>
                                                    </div>

                                                    <div class="space-20"></div>

                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name"> NPWP </div>
                                                        <div class="profile-info-value">
                                                            <span><input type="number" id="npwp" name="npwp" class="width-100" placeholder="NPWP" value="<?= $employee['npwp'] ?>" onkeypress="return event.charCode >= 48 && event.charCode <=57" required /></span>
                                                        </div>
                                                    </div>

                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name"> No Rekening </div>
                                                        <div class="profile-info-value">
                                                            <span><input type="number" id="mandiri" name="mandiri" class="width-100" placeholder="Bank Account" value="<?= $employee['mandiri'] ?>" onkeypress="return event.charCode >= 48 && event.charCode <=57" required /></span>
                                                        </div>
                                                    </div>

                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name"> BPJS Kesehatan </div>
                                                        <div class="profile-info-value">
                                                            <span><input type="text" id="bpjs_kes" name="bpjs_kes" class="width-100" placeholder="BPJS Kesehatan" value="<?= $employee['bpjs_kes'] ?>" style="margin-bottom: 10px;" onkeypress="return event.charCode >= 48 && event.charCode <=57" />
                                                                <select class="form-control" id="form-field-select-1" name="status_bpjs_kes">
                                                                    <option <?php if ($employee['status_bpjs_kes'] == '1') {
                                                                                echo 'selected="selected"';
                                                                            } ?> value="1">Aktif</option>
                                                                    <option <?php if ($employee['status_bpjs_kes'] == '0') {
                                                                                echo 'selected="selected"';
                                                                            } ?> value="0">Tidak Aktif</option>
                                                                </select>
                                                            </span>
                                                        </div>
                                                    </div>

                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name"> BPJS Ketenagakerjaan </div>
                                                        <div class="profile-info-value">
                                                            <span><input type="text" id="bpjs_tk" name="bpjs_tk" class="width-100" placeholder="BPJS Ketenagakerjaan" value="<?= $employee['bpjs_tk'] ?>" style="margin-bottom: 10px;" onkeypress="return event.charCode >= 48 && event.charCode <=57" />
                                                                <select class="form-control" id="form-field-select-1" name="status_bpjs_tk">
                                                                    <option <?php if ($employee['status_bpjs_tk'] == '1') {
                                                                                echo 'selected="selected"';
                                                                            } ?> value="1">Aktif</option>
                                                                    <option <?php if ($employee['status_bpjs_tk'] == '0') {
                                                                                echo 'selected="selected"';
                                                                            } ?> value="0">Tidak Aktif</option>
                                                                </select>
                                                            </span>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="hr hr-8 dotted"></div>
                                            </div><!-- /.col -->
                                        </div><!-- /.row -->
                                        <div class="space-20"></div>
                                    </div><!-- /#home -->

                                    <div id="detail" class="tab-pane">
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-12 center">
                                            </div><!-- /.col -->

                                            <div class="col-xs-12 col-sm-6">
                                                <div class="profile-user-info">
                                                    <h4 class="blue">
                                                        <span class="middle">Detail</span>
                                                    </h4>
                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name"> NO NIK </div>
                                                        <div class="profile-info-value">
                                                            <span><input type="number" id="nik" name="nik" class="width-100" placeholder="NIK" value="<?= $employee['nik'] ?>" onkeypress="return event.charCode >= 48 && event.charCode <=57" /></span>
                                                        </div>
                                                    </div>

                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name"> NO KK </div>
                                                        <div class="profile-info-value">
                                                            <span><input type="number" id="no_kk" name="no_kk" class="width-100" placeholder="NO KK" value="<?= $employee['no_kk'] ?>" onkeypress="return event.charCode >= 48 && event.charCode <=57" /></span>
                                                        </div>
                                                    </div>

                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name"> KOTA KTP </div>
                                                        <div class="profile-info-value">
                                                            <span><input type="text" id="kota_ktp" name="kota_ktp" class="width-100" placeholder="KTP Daerah" value="<?= $employee['kab_ktp'] ?>" /></span>
                                                        </div>
                                                    </div>

                                                    <div class="space-20"></div>

                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name"> Tanggal Vaksin 1 </div>
                                                        <div class="profile-info-value">
                                                            <span><input type="date" id="tgl_vaksin_1" name="tgl_vaksin_1" class="width-100" placeholder="Vaksin 1 Date" value="<?= $employee['tgl_vaksin_1'] ?>" /></span>
                                                        </div>
                                                    </div>

                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name"> Tempat Vaksin 1 </div>
                                                        <div class="profile-info-value">
                                                            <span><input type="text" id="tmpt_vaksin_1" name="tmpt_vaksin_1" class="width-100" placeholder="Vaksin 1 place" value="<?= $employee['tmpt_vaksin_1'] ?>" /></span>
                                                        </div>
                                                    </div>

                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name"> Tanggal Vaksin 2 </div>
                                                        <div class="profile-info-value">
                                                            <span><input type="date" id="tgl_vaksin_2" name="tgl_vaksin_2" class="width-100" placeholder="Vaksin 2 Date" value="<?= $employee['tgl_vaksin_2'] ?>" /></span>
                                                        </div>
                                                    </div>

                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name"> Tempat Vaksin 2 </div>
                                                        <div class="profile-info-value">
                                                            <span><input type="text" id="tmpt_vaksin_2" name="tmpt_vaksin_2" class="width-100" placeholder="Vaksin 2 place" value="<?= $employee['tmpt_vaksin_2'] ?>" /></span>
                                                        </div>
                                                    </div>

                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name"> Nama Vaksin 1 & 2 </div>
                                                        <div class="profile-info-value">
                                                            <span><select class="chosen-select form-control" name="jenis_vaksin">
                                                                    <option <?php if ($employee['jenis_vaksin'] == '0') {
                                                                                echo 'selected="selected"';
                                                                            } ?> value="0">Pilih Vaksin</option>
                                                                    <option <?php if ($employee['jenis_vaksin'] == '1') {
                                                                                echo 'selected="selected"';
                                                                            } ?> value="1">Sinovac</option>
                                                                    <option <?php if ($employee['jenis_vaksin'] == '2') {
                                                                                echo 'selected="selected"';
                                                                            } ?> value="2">AstraZeneca</option>
                                                                    <option <?php if ($employee['jenis_vaksin'] == '3') {
                                                                                echo 'selected="selected"';
                                                                            } ?> value="3">Sinopharm</option>
                                                                    <option <?php if ($employee['jenis_vaksin'] == '4') {
                                                                                echo 'selected="selected"';
                                                                            } ?> value="4">Moderna</option>
                                                                    <option <?php if ($employee['jenis_vaksin'] == '5') {
                                                                                echo 'selected="selected"';
                                                                            } ?> value="5">Pfizer</option>
                                                                    <option <?php if ($employee['jenis_vaksin'] == '6') {
                                                                                echo 'selected="selected"';
                                                                            } ?> value="6">Sputnik V</option>
                                                                    <option <?php if ($employee['jenis_vaksin'] == '7') {
                                                                                echo 'selected="selected"';
                                                                            } ?> value="7">Janssen</option>
                                                                    <option <?php if ($employee['jenis_vaksin'] == '8') {
                                                                                echo 'selected="selected"';
                                                                            } ?> value="8">Convidecia</option>
                                                                </select>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name"> Tanggal Vaksin 3</div>
                                                        <div class="profile-info-value">
                                                            <span><input type="date" id="tgl_vaksin_3" name="tgl_vaksin_3" class="width-100" placeholder="Vaksin 3 Date" value="<?= $employee['tgl_vaksin_3'] ?>" /></span>
                                                        </div>
                                                    </div>

                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name"> Tempat Vaksin 3 </div>
                                                        <div class="profile-info-value">
                                                            <span><input type="text" id="tmpt_vaksin_3" name="tmpt_vaksin_3" class="width-100" placeholder="Vaksin 3 place" value="<?= $employee['tmpt_vaksin_3'] ?>" /></span>
                                                        </div>
                                                    </div>

                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name"> Nama Vaksin 3 </div>
                                                        <div class="profile-info-value">
                                                            <span><select class="chosen-select form-control" name="jenis_vaksin_3">
                                                                    <option <?php if ($employee['jenis_vaksin_3'] == '0') {
                                                                                echo 'selected="selected"';
                                                                            } ?> value="0">Pilih Vaksin</option>
                                                                    <option <?php if ($employee['jenis_vaksin_3'] == '1') {
                                                                                echo 'selected="selected"';
                                                                            } ?> value="1">Sinovac</option>
                                                                    <option <?php if ($employee['jenis_vaksin_3'] == '2') {
                                                                                echo 'selected="selected"';
                                                                            } ?> value="2">AstraZeneca</option>
                                                                    <option <?php if ($employee['jenis_vaksin_3'] == '3') {
                                                                                echo 'selected="selected"';
                                                                            } ?> value="3">Sinopharm</option>
                                                                    <option <?php if ($employee['jenis_vaksin_3'] == '4') {
                                                                                echo 'selected="selected"';
                                                                            } ?> value="4">Moderna</option>
                                                                    <option <?php if ($employee['jenis_vaksin_3'] == '5') {
                                                                                echo 'selected="selected"';
                                                                            } ?> value="5">Pfizer</option>
                                                                    <option <?php if ($employee['jenis_vaksin_3'] == '6') {
                                                                                echo 'selected="selected"';
                                                                            } ?> value="6">Sputnik V</option>
                                                                    <option <?php if ($employee['jenis_vaksin_3'] == '7') {
                                                                                echo 'selected="selected"';
                                                                            } ?> value="7">Janssen</option>
                                                                    <option <?php if ($employee['jenis_vaksin_3'] == '8') {
                                                                                echo 'selected="selected"';
                                                                            } ?> value="8">Convidecia</option>
                                                                </select>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="hr hr-8 dotted"></div>
                                            </div>

                                            <div class="col-xs-12 col-sm-6">
                                                <div class="profile-user-info">
                                                    <h4 class="blue">
                                                        <span class="middle">KTP</span>
                                                    </h4>
                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name"> Address</div>
                                                        <div class="profile-info-value">
                                                            <span><textarea placeholder="Address" name="address_ktp" style="width: 330px; height:100px"><?= $employee['address_ktp'] ?></textarea></span>
                                                        </div>
                                                    </div>

                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name"> RT / RW </div>
                                                        <div class="profile-info-value">
                                                            <span>
                                                                <input type="number" id="rt_ktp" name="rt_ktp" class="width-45" placeholder="Rt" value="<?= $employee['rt_ktp'] ?>" />
                                                                <input type="number" id="rw_ktp" name="rt_ktp" class="width-45" placeholder="Rw" value="<?= $employee['rw_ktp'] ?>" />
                                                            </span>
                                                        </div>
                                                    </div>

                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name"> Kelurahan </div>
                                                        <div class="profile-info-value">
                                                            <span><input type="text" id="kel_ktp" name="kel_ktp" class="width-100" placeholder="Kelurahan" value="<?= $employee['kel_ktp'] ?>" /></span>
                                                        </div>
                                                    </div>

                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name"> Kecamatan </div>
                                                        <div class="profile-info-value">
                                                            <span><input type="text" id="kec_ktp" name="kec_ktp" class="width-100" placeholder="Kecamatan" value="<?= $employee['kec_ktp'] ?>" /></span>
                                                        </div>
                                                    </div>

                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name"> Kab / Kota </div>
                                                        <div class="profile-info-value">
                                                            <span><input type="text" id="kab_ktp" name="kab_ktp" class="width-100" placeholder="Kab / Kota" value="<?= $employee['kab_ktp'] ?>" /></span>
                                                        </div>
                                                    </div>

                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name"> Provinsi </div>
                                                        <div class="profile-info-value">
                                                            <span><input type="text" id="prov_ktp" name="prov_ktp" class="width-100" placeholder="Provinsi" value="<?= $employee['prov_ktp'] ?>" /></span>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="hr hr-8 dotted"></div>
                                            </div><!-- /.col -->

                                            <div class="col-xs-12 col-sm-6">
                                                <div class="profile-user-info">
                                                    <h4 class="blue">
                                                        <span class="middle">Batam</span>
                                                    </h4>
                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name"> Address</div>
                                                        <div class="profile-info-value">
                                                            <span><textarea placeholder="Address" name="address_btm" style="width: 330px; height:100px"><?= $employee['address_btm'] ?></textarea></span>
                                                        </div>
                                                    </div>

                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name"> RT / RW </div>
                                                        <div class="profile-info-value">
                                                            <span>
                                                                <input type="number" id="rt_btm" name="rt_ktp" class="width-45" placeholder="Rt" value="<?= $employee['rt_btm'] ?>" />
                                                                <input type="number" id="rw_btm" name="rw_ktp" class="width-45" placeholder="Rw" value="<?= $employee['rw_btm'] ?>" />
                                                            </span>
                                                        </div>
                                                    </div>

                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name"> Kelurahan </div>
                                                        <div class="profile-info-value">
                                                            <span><input type="text" id="kel_btm" name="kel_btm" class="width-100" placeholder="Kelurahan" value="<?= $employee['kel_btm'] ?>" /></span>
                                                        </div>
                                                    </div>

                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name"> Kecamatan </div>
                                                        <div class="profile-info-value">
                                                            <span><input type="text" id="kec_btm" name="kec_btm" class="width-100" placeholder="Kecamatan" value="<?= $employee['kec_btm'] ?>" /></span>
                                                        </div>
                                                    </div>

                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name"> Kode Pos </div>
                                                        <div class="profile-info-value">
                                                            <span><input type="text" id="kode_pos" name="kode_pos" class="width-100" placeholder="Kode Pos" value="<?= $employee['kode_pos'] ?>" /></span>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="hr hr-8 dotted"></div>
                                            </div><!-- /.col -->
                                        </div>
                                    </div>

                                    <div id="family" class="tab-pane">
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-12 center">
                                            </div><!-- /.col -->

                                            <div class="col-xs-12 col-sm-6">
                                                <div class="profile-user-info">
                                                    <h4 class="blue">
                                                        <span class="middle">Pasangan</span>
                                                    </h4>
                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name"> Nama Lengkap</div>
                                                        <div class="profile-info-value">
                                                            <span><input type="text" id="nama_pasang" name="nama_pasang" class="width-100" placeholder="Nama Lengkap" value="<?= $employee['nama_pasang'] ?>" /></span>
                                                        </div>
                                                    </div>

                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name"> Jenis Kelamin</div>
                                                        <div class="profile-info-value">
                                                            <span>
                                                                <select class="form-control" id="form-field-select-1" name="jk_pasang">
                                                                    <option <?php if ($employee['jk_pasang'] == '0') {
                                                                                echo 'selected="selected"';
                                                                            } ?> value="0">Laki Laki</option>
                                                                    <option <?php if ($employee['jk_pasang'] == '1') {
                                                                                echo 'selected="selected"';
                                                                            } ?> value="1">Perempuan</option>
                                                                </select>
                                                            </span>
                                                        </div>
                                                    </div>

                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name"> Tempat Lahir </div>
                                                        <div class="profile-info-value">
                                                            <span><input type="text" id="tmpt_lahir_pasang" name="tmpt_lahir_pasang" class="width-100" value="<?= $employee['tmpt_lahir_pasang'] ?>" placeholder="Tempat Lahir" /></span>
                                                        </div>
                                                    </div>

                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name"> Tanggal Lahir</div>
                                                        <div class="profile-info-value">
                                                            <span><input type="date" id="tgl_lahir_pasang" name="tgl_lahir_pasang" class="width-100" placeholder="Tanggal Lahir" value="<?= $employee['tgl_lahir_pasang'] ?>" /></span>
                                                        </div>
                                                    </div>

                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name"> NIK </div>
                                                        <div class="profile-info-value">
                                                            <span><input type="number" id="nik_pasang" name="nik_pasang" class="width-100" placeholder="NIK" value="<?= $employee['nik_pasang'] ?>" onkeypress="return event.charCode >= 48 && event.charCode <=57" /></span>
                                                        </div>
                                                    </div>

                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name"> NO HP </div>
                                                        <div class="profile-info-value">
                                                            <span><input type="text" id="no_hp_pasang" name="no_hp_pasang" class="width-100" placeholder="NO HP" value="<?= $employee['no_hp_pasang'] ?>" onkeypress="return event.charCode >= 48 && event.charCode <=57" /></span>
                                                        </div>
                                                    </div>

                                                    <div class="space-20"></div>

                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name"> Tanggal Vaksin 1 </div>
                                                        <div class="profile-info-value">
                                                            <span><input type="date" id="tgl_v1_pas" name="tgl_v1_pas" class="width-100" placeholder="Tanggal Vaksin 1" value="<?= $employee['tgl_v1_pas'] ?>" /></span>
                                                        </div>
                                                    </div>

                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name"> Tempat Vaksin 1 </div>
                                                        <div class="profile-info-value">
                                                            <span><input type="text" id="tmpt_v1_pas" name="tmpt_v1_pas" class="width-100" placeholder="Tempat Vaksin 1" value="<?= $employee['tmpt_v1_pas'] ?>" /></span>
                                                        </div>
                                                    </div>

                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name"> Tanggal Vaksin 2 </div>
                                                        <div class="profile-info-value">
                                                            <span><input type="date" id="tgl_v2_pas" name="tgl_v2_pas" class="width-100" placeholder="Tanggal Vaksin 2" value="<?= $employee['tgl_v2_pas'] ?>" /></span>
                                                        </div>
                                                    </div>

                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name"> Tempat Vaksin 2 </div>
                                                        <div class="profile-info-value">
                                                            <span><input type="text" id="tmpt_v2_pas" name="tmpt_v2_pas" class="width-100" placeholder="Tempat Vaksin 2" value="<?= $employee['tmpt_v2_pas'] ?>" /></span>
                                                        </div>
                                                    </div>

                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name">Nama Vaksin </div>
                                                        <div class="profile-info-value">
                                                            <span>
                                                                <select class="form-control" id="form-field-select-1" name="jenis_v_pas">
                                                                    <option <?php if ($employee['jenis_v_pas'] == '0') {
                                                                                echo 'selected="selected"';
                                                                            } ?> value="0">Pilih Vaksin</option>
                                                                    <option <?php if ($employee['jenis_v_pas'] == '1') {
                                                                                echo 'selected="selected"';
                                                                            } ?> value="1">Sinovac</option>
                                                                    <option <?php if ($employee['jenis_v_pas'] == '2') {
                                                                                echo 'selected="selected"';
                                                                            } ?> value="2">AstraZeneca</option>
                                                                    <option <?php if ($employee['jenis_v_pas'] == '3') {
                                                                                echo 'selected="selected"';
                                                                            } ?> value="3">Sinopharm</option>
                                                                    <option <?php if ($employee['jenis_v_pas'] == '4') {
                                                                                echo 'selected="selected"';
                                                                            } ?> value="4">Moderna</option>
                                                                    <option <?php if ($employee['jenis_v_pas'] == '5') {
                                                                                echo 'selected="selected"';
                                                                            } ?> value="5">Pfizer</option>
                                                                    <option <?php if ($employee['jenis_v_pas'] == '6') {
                                                                                echo 'selected="selected"';
                                                                            } ?> value="6">Sputnik V</option>
                                                                    <option <?php if ($employee['jenis_v_pas'] == '7') {
                                                                                echo 'selected="selected"';
                                                                            } ?> value="7">Janssen</option>
                                                                    <option <?php if ($employee['jenis_v_pas'] == '7') {
                                                                                echo 'selected="selected"';
                                                                            } ?> value="7">Convidecia</option>
                                                                </select>
                                                            </span>
                                                        </div>
                                                    </div>

                                                    <div class="hr hr-8 dotted"></div>
                                                </div><!-- /.col -->
                                            </div>

                                            <?php if ($employee['tanggungan'] == '1') {
                                                include 'editanak1.php';
                                            } elseif ($employee['tanggungan'] == '2') {
                                                include 'editanak1.php';
                                                include 'editanak2.php';
                                            } elseif ($employee['tanggungan'] == '3') {
                                                include 'editanak1.php';
                                                include 'editanak2.php';
                                                include 'editanak3.php';
                                            } ?>
                                        </div>
                                    </div>


                                    <div id="parents" class="tab-pane">
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-12 center">
                                            </div><!-- /.col -->

                                            <div class="col-xs-12 col-sm-6">
                                                <div class="profile-user-info">
                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name"> Nama Ibu </div>
                                                        <div class="profile-info-value">
                                                            <span><input type="text" id="mom" name="mom" class="width-100" placeholder="Nama Ibu" value="<?= $employee['mom'] ?>" /></span>
                                                        </div>
                                                    </div>

                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name"> Tempat Lahir Ibu </div>
                                                        <div class="profile-info-value">
                                                            <span><input type="text" id="tmpt_lahir_mom" name="tmpt_lahir_mom" class="width-100" value="<?= $employee['tmpt_lahir_mom'] ?>" placeholder="Tempat Lahir Ibu" /></span>
                                                        </div>
                                                    </div>

                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name"> Tanggal Lahir Ibu</div>
                                                        <div class="profile-info-value">
                                                            <span><input type="date" id="tgl_lahir_mom" name="tgl_lahir_mom" class="width-100" placeholder="Tanggal Lahir Ibu" value="<?= $employee['tgl_lahir_mom'] ?>" /></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-xs-12 col-sm-6">
                                                <div class="profile-user-info">
                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name"> Nama Ayah </div>
                                                        <div class="profile-info-value">
                                                            <span><input type="text" id="dad" name="dad" class="width-100" placeholder="Nama Ayah" value="<?= $employee['dad'] ?>" /></span>
                                                        </div>
                                                    </div>

                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name"> Tempat Lahir Ayah </div>
                                                        <div class="profile-info-value">
                                                            <span><input type="text" id="tmpt_lahir_dad" name="tmpt_lahir_dad" class="width-100" value="<?= $employee['tmpt_lahir_dad'] ?>" placeholder="Tempat Lahir Ayah" /></span>
                                                        </div>
                                                    </div>

                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name"> Tanggal Lahir Ayah</div>
                                                        <div class="profile-info-value">
                                                            <span><input type="date" id="tgl_lahir_dad" name="tgl_lahir_dad" class="width-100" placeholder="Tanggal Lahir Ayah" value="<?= $employee['tgl_lahir_dad'] ?>" /></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="hr hr-8 dotted"></div>
                                        </div>
                                    </div>

                                    <div id="emergency" class="tab-pane">
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-12 center">
                                            </div><!-- /.col -->

                                            <div class="col-xs-12 col-sm-6">
                                                <div class="profile-user-info">
                                                    <h4 class="blue">
                                                        <span class="middle">Kontak Darurat</span>
                                                    </h4>

                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name"> Nama Lengkap </div>
                                                        <div class="profile-info-value">
                                                            <span><input type="text" id="nama_kodar1" name="nama_kodar1" class="width-100" placeholder="Nama Lengkap" value="<?= $employee['nama_kodar1'] ?>" /></span>
                                                        </div>
                                                    </div>

                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name"> Nama Pertama </div>
                                                        <div class="profile-info-value">
                                                            <span><input type="text" id="firstname_kodar1" name="firstname_kodar1" class="width-100" placeholder="Nama Pertama" value="<?= $employee['firstname_kodar1'] ?>" /></span>
                                                        </div>
                                                    </div>

                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name"> Nama Terakhir </div>
                                                        <div class="profile-info-value">
                                                            <span><input type="text" id="lastname_kodar1" name="lastname_kodar1" class="width-100" placeholder="Nama Terakhir" value="<?= $employee['lastname_kodar1'] ?>" /></span>
                                                        </div>
                                                    </div>

                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name"> Hubungan </div>
                                                        <div class="profile-info-value">
                                                            <span><input type="text" id="hubungan_kodar1" name="hubungan_kodar1" class="width-100" placeholder="Hubungan" value="<?= $employee['hubungan_kodar1'] ?>" /></span>
                                                        </div>
                                                    </div>

                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name"> Alamat</div>
                                                        <div class="profile-info-value">
                                                            <span><textarea placeholder="Alamat" name="alamat_kodar1" style="width: 330px; height:100px"><?= $employee['alamat_kodar1'] ?></textarea></span>
                                                        </div>
                                                    </div>

                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name"> NO HP </div>
                                                        <div class="profile-info-value">
                                                            <span><input type="text" id="no_hp_kodar1" name="no_hp_kodar1" class="width-100" placeholder="NO HP" value="<?= $employee['no_hp_kodar1'] ?>" onkeypress="return event.charCode >= 48 && event.charCode <=57" /></span>
                                                        </div>
                                                    </div>

                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name"> NO WA </div>
                                                        <div class="profile-info-value">
                                                            <span><input type="text" id="no_wa_kodar1" name="no_wa_kodar1" class="width-100" placeholder="NO WA" value="<?= $employee['no_hp_kodar1'] ?>" onkeypress="return event.charCode >= 48 && event.charCode <=57" /></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="hr hr-8 dotted"></div>
                                        </div>
                                    </div>

                                    <div id="feed" class="tab-pane">
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-12 center">
                                            </div><!-- /.col -->

                                            <div class="col-xs-12 col-sm-6">
                                                <div class="profile-user-info">
                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name"> No Kronos </div>
                                                        <div class="profile-info-value">
                                                            <span><input type="text" id="kronos_no" name="kronos_no" class="width-100" value="<?= $employee['kronos_no'] ?>" placeholder="No Kronos" /></span>
                                                        </div>
                                                    </div>

                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name"> Classification *</div>
                                                        <div class="profile-info-value">
                                                            <span><select class="chosen-select form-control" name="classification">
                                                                    <option <?php if ($classid['name'] == $classid['name']) {
                                                                                echo 'selected="selected"';
                                                                            } ?> value="<?= $classid['id'] ?>"><?= $classid['name'] ?></option>

                                                                    <?php foreach ($classification as $class) : ?>
                                                                        <option value="<?= $class->id ?>"><?= $class->name ?></option>
                                                                    <?php endforeach; ?>
                                                                </select>
                                                            </span>
                                                        </div>
                                                    </div>

                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name"> Department </div>
                                                        <div class="profile-info-value">
                                                            <select class="chosen-select form-control" name="department" id="form-field-select-3">
                                                                <option <?php if ($departid['department_name'] == $departid['department_name']) {
                                                                            echo 'selected="selected"';
                                                                        } ?> value="<?= $departid['id'] ?>"><?= $departid['department_name'] ?></option>

                                                                <?php foreach ($department as $depart) : ?>
                                                                    <option value="<?= $depart->id ?>"><?= $depart->department_name ?></option>
                                                                <?php endforeach; ?>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name"> Grade </div>
                                                        <div class="profile-info-value">
                                                            <span><input type="text" id="grade" name="grade" class="width-100" value="<?= $employee['grade'] ?>" placeholder="Grade" /></span>
                                                        </div>
                                                    </div>

                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name"> No SAP </div>
                                                        <div class="profile-info-value">
                                                            <span><input type="text" id="no_sap" name="no_sap" class="width-100" placeholder="No SAP" value="<?= $employee['no_sap'] ?>" /></span>
                                                        </div>
                                                    </div>

                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name"> Tanggal Training </div>
                                                        <div class="profile-info-value">
                                                            <span><input type="date" id="tanggal_training" name="tanggal_training" class="width-100" value="<?= $employee['tanggal_training'] ?>" placeholder="Tanggal Training" /></span>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                            <div class="col-xs-12 col-sm-6">
                                                <div class="profile-user-info">
                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name"> PNS ID </div>
                                                        <div class="profile-info-value">
                                                            <span><input type="text" id="pns_id" name="pns_id" class="width-100" placeholder="PNS ID" value="<?= $employee['pns_id'] ?>" /></span>
                                                        </div>
                                                    </div>

                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name"> Employ Aktif </div>
                                                        <div class="profile-info-value">
                                                            <span>
                                                                <select class="form-control" id="form-field-select-1" name="aktif">
                                                                    <option <?php if ($employee['aktif'] == '1') {
                                                                                echo 'selected="selected"';
                                                                            } ?> value="1">Aktif</option>
                                                                    <option <?php if ($employee['aktif'] == '2') {
                                                                                echo 'selected="selected"';
                                                                            } ?> value="2">Non Aktif</option>
                                                                </select>
                                                            </span>
                                                        </div>
                                                    </div>

                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name"> Tanggal Bergabung </div>
                                                        <div class="profile-info-value">
                                                            <span><input type="date" id="tanggal_join" name="tanggal_join" class="width-100" value="<?= $employee['tanggal_join'] ?>" placeholder="Tanggal Bergabung" /></span>
                                                        </div>
                                                    </div>

                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name"> Status Pegawai * </div>
                                                        <div class="profile-info-value">
                                                            <span>
                                                                <select class="form-control" id="form-field-select-1" name="status">
                                                                    <option <?php if ($employee['status'] == 'Karyawan Tetap') {
                                                                                echo 'selected="selected"';
                                                                            } ?> value="Karyawan Tetap">Karyawan Tetap</option>
                                                                    <option <?php if ($employee['status'] == 'Karyawan Tidak Tetap') {
                                                                                echo 'selected="selected"';
                                                                            } ?> value="Karyawan Tidak Tetap">Karyawan Tidak Tetap</option>
                                                                    <option <?php if ($employee['status'] == 'Calon Karyawan') {
                                                                                echo 'selected="selected"';
                                                                            } ?> value="Calon Karyawan">Calon Karyawan</option>
                                                                    <option <?php if ($employee['status'] == 'Eks Karyawan') {
                                                                                echo 'selected="selected"';
                                                                            } ?> value="Eks Karyawan">Eks Karyawan</option>
                                                                </select>
                                                            </span>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="hr hr-8 dotted"></div>
                                            </div><!-- /.col -->
                                        </div><!-- /.row -->
                                    </div>

                                    <div id="berkas" class="tab-pane">
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-12 center">
                                            </div><!-- /.col -->

                                            <div class="col-xs-4 col-sm-4">

                                                <div class="profile-user-info">
                                                    <div class="profile-info-row">
                                                        <center>
                                                            <img class="editable img-responsive" alt="<?= $employee['employee_name'] ?>" src="<?= base_url() ?>assets/employee/<?= $employee['foto'] ?>" />
                                                        </center>
                                                        <br />
                                                        <div class="profile-info-value">
                                                            <span>Foto Diri<input type="file" id="foto" name="foto" /></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-4 col-sm-4">
                                                <div class="profile-user-info">
                                                    <div class="profile-info-row">
                                                        <center>
                                                            <img class="editable img-responsive" alt="<?= $employee['employee_name'] ?>" src="<?= base_url() ?>assets/employee/<?= $employee['foto_ktp'] ?>" />
                                                        </center>
                                                        <br />
                                                        <div class="profile-info-value">
                                                            <span>Foto KTP<input type="file" id="foto" name="foto_ktp" /></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-4 col-sm-4">
                                                <div class="profile-user-info">
                                                    <div class="profile-info-row">

                                                        <center>
                                                            <img class="editable img-responsive" alt="<?= $employee['employee_name'] ?>" src="<?= base_url() ?>assets/employee/<?= $employee['foto_kk'] ?>" />
                                                        </center>
                                                        <br />
                                                        <div class="profile-info-value">
                                                            <span>Foto KK<input type="file" id="foto" name="foto_kk" /></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>