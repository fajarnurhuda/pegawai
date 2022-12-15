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
                    <div class="clearfix"></div>
                    <div class="clearfix">
                        <div class="pull-right" style="margin-bottom: 10px;">
                            <a href="<?= base_url('edit/employee_edit/' . $employee['id']) ?>" class="btn btn-sm btn-primary"><i class="ace icon fa fa-pencil"> &nbsp;Edit</i> </a> </div>
                    </div>
                    <div>
                        <div id="user-profile-2" class="user-profile">
                            <div class="tabbable">
                                <ul class="nav nav-tabs padding-18">
                                    <li class="active">
                                        <a data-toggle="tab" href="#home">
                                            <i class="blue ace-icon fa fa-user bigger-120"></i>
                                            Profil
                                        </a>
                                    </li>

                                    <li class="">
                                        <a data-toggle="tab" href="#detail">
                                            <i class="blue ace-icon fa fa-home bigger-120"></i>
                                            Detail
                                        </a>
                                    </li>
                                    <?php if ($employee['status_kawin'] == 'S') { ?>
                                    <?php } else { ?>
                                        <li class="">
                                            <a data-toggle="tab" href="#family">
                                                <i class="blue ace-icon fa fa-users bigger-120"></i>
                                                Keluarga
                                            </a>
                                        </li>
                                    <?php } ?>
                                    <li class="">
                                        <a data-toggle="tab" href="#parents">
                                            <i class="blue ace-icon fa fa-heart bigger-120"></i>
                                            Orang Tua
                                        </a>
                                    </li>

                                    <li class="">
                                        <a data-toggle="tab" href="#emergency">
                                            <i class="blue ace-icon fa fa-fire bigger-120"></i>
                                            Darurat
                                        </a>
                                    </li>

                                    <li>
                                        <a data-toggle="tab" href="#keuangan">
                                            <i class="blue ace-icon fa fa-money bigger-120"></i>
                                            Keuangan
                                        </a>
                                    </li>
                                    <?php if ($employee['role_id'] == '2') { ?>
                                    <?php } else { ?>
                                        <li>
                                            <a data-toggle="tab" href="#history">
                                                <i class="blue ace-icon fa fa-history bigger-120"></i>
                                                History
                                            </a>
                                        </li>
                                    <?php } ?>

                                    <li>
                                        <a data-toggle="tab" href="#berkas">
                                            <i class="blue ace-icon fa fa-file bigger-120"></i>
                                            Berkas
                                        </a>
                                    </li>
                                </ul>

                                <div class="tab-content no-border padding-24">
                                    <div id="home" class="tab-pane in active">
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-2 center">
                                                <span class="profile-picture">
                                                    <?php if ($employee['foto'] == '') : ?>
                                                        <img class="editable img-responsive" alt="<?= $employee['employee_name'] ?>" src="<?= base_url() ?>assets/employee/user.jpeg" />
                                                    <?php else : ?>
                                                        <img class="editable img-responsive" alt="<?= $employee['employee_name'] ?>" src="<?= base_url() ?>assets/employee/<?= $employee['foto'] ?>" />
                                                    <?php endif; ?>
                                                </span>
                                                <div class="space space-4"></div>
                                            </div><!-- /.col -->
                                            
                                            <div class="col-xs-12 col-sm-5">
                                                <div class="profile-user-info profile-user-info-striped">
                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name"> Nama Lengkap </div>
                                                        <div class="profile-info-value">
                                                            <span><?= $employee['employee_name'] ?></span>
                                                        </div>
                                                    </div>

                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name"> Nama Panggilan</div>
                                                        <div class="profile-info-value">
                                                            <span>
                                                                <?php if ($employee['call_name'] == '0' || $employee['call_name'] == '' ) : ?>
                                                                   -
                                                                <?php else : ?>
                                                                    <?= $employee['call_name'] ?>
                                                                <?php endif; ?>
                                                            </span>
                                                        </div>
                                                    </div>

                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name"> Jenis Kelamin </div>
                                                        <div class="profile-info-value">
                                                            <span> <?php
                                                                    if ($employee['jk'] == '0') {
                                                                        echo 'Laki Laki';
                                                                    } else {
                                                                        echo 'Perempuan';
                                                                    }
                                                                    ?>
                                                            </span>
                                                        </div>
                                                    </div>

                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name"> Tempat / Tanggal Lahir </div>
                                                        <div class="profile-info-value">
                                                            <span><?= $employee['bornplace'] ?></span>
                                                            <span><?= date('d M Y', strtotime($employee['borndate'])) ?></span>
                                                        </div>
                                                    </div>

                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name"> Gol. Darah </div>
                                                        <div class="profile-info-value">
                                                            <span>
                                                                <?php if ($employee['gol_dar'] == '0' || $employee['gol_dar'] == '' ) : ?>
                                                                   -
                                                                <?php else : ?>
                                                                    <?= $employee['gol_dar'] ?>
                                                                <?php endif; ?>
                                                            </span>
                                                        </div>
                                                    </div>

                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name"> Agama </div>
                                                        <div class="profile-info-value">
                                                            <span>
                                                                <?php if ($employee['agama'] == '0' || $employee['agama'] == '' ) : ?>
                                                                   -
                                                                <?php else : ?>
                                                                    <?= $employee['agama'] ?>
                                                                <?php endif; ?>
                                                            </span>
                                                        </div>
                                                    </div>

                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name"> Suku </div>
                                                        <div class="profile-info-value">
                                                            <span>
                                                                <?php if ($employee['suku'] == '0' || $employee['suku'] == '' ) : ?>
                                                                   -
                                                                <?php else : ?>
                                                                    <?= $employee['suku'] ?>
                                                                <?php endif; ?>
                                                            </span>
                                                        </div>
                                                    </div>

                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name"> Status Pernikahan </div>
                                                        <div class="profile-info-value">
                                                            <span><?= $employee['status_kawin'] ?></span> / <?= $employee['tanggungan'] ?>
                                                        </div>
                                                    </div>

                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name"> No Hp </div>
                                                        <div class="profile-info-value">
                                                            <span><?= $employee['phoneNumber'] ?></span>
                                                        </div>
                                                    </div>

                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name"> WA </div>
                                                        <div class="profile-info-value">
                                                            <span><?= $employee['waNumber'] ?></span>
                                                        </div>
                                                    </div>

                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name"> Email </div>
                                                        <div class="profile-info-value">
                                                            <span><?= $employee['email'] ?></span>
                                                        </div>
                                                    </div>

                                                </div>
                                                
                                            </div><!-- /.col -->
                                            <div class="col-xs-12 col-sm-5">
                                                <div class="profile-user-info profile-user-info-striped">
                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name"> Pendidikan Akhir </div>
                                                        <div class="profile-info-value">
                                                            <span>
                                                                <?php if ($employee['pend_akhir'] == '0' || $employee['pend_akhir'] == '') : ?>
                                                                   -
                                                                <?php else : ?>
                                                                    <?= $employee['pend_akhir'] ?>
                                                                <?php endif; ?>
                                                            </span>
                                                        </div>
                                                    </div>

                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name"> Jurusan </div>
                                                        <div class="profile-info-value">
                                                            <span>
                                                                <?php if ($employee['jurusan'] == '0' || $employee['jurusan'] == '' ) : ?>
                                                                   -
                                                                <?php else : ?>
                                                                    <?= $employee['jurusan'] ?>
                                                                <?php endif; ?>
                                                            </span>
                                                        </div>
                                                    </div>

                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name"> Tahun Lulus </div>
                                                        <div class="profile-info-value">
                                                           <span>
                                                                <?php if ($employee['tahun_lulus'] == '0' || $employee['tahun_lulus'] == '' ) : ?>
                                                                   -
                                                                <?php else : ?>
                                                                    <?= $employee['tahun_lulus'] ?>
                                                                <?php endif; ?>
                                                            </span>
                                                        </div>
                                                    </div>

                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name"> Nama Sekolah </div>
                                                        <div class="profile-info-value">
                                                            <span>
                                                                <?php if ($employee['nama_sekolah'] == '0' || $employee['nama_sekolah'] == '' ) : ?>
                                                                   -
                                                                <?php else : ?>
                                                                    <?= $employee['nama_sekolah'] ?>
                                                                <?php endif; ?>
                                                            </span>
                                                        </div>
                                                    </div>

                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name"> Kota Asal Sekolah</div>
                                                        <div class="profile-info-value">
                                                            <span>
                                                                <?php if ($employee['kota_asal_sekolah'] == '0' || $employee['kota_asal_sekolah'] == '' ) : ?>
                                                                   -
                                                                <?php else : ?>
                                                                    <?= $employee['kota_asal_sekolah'] ?>
                                                                <?php endif; ?>
                                                            </span>
                                                        </div>
                                                    </div>

                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name"> Ukuran Baju </div>
                                                        <div class="profile-info-value">
                                                            <span>
                                                                <?php if ($employee['ukuran_baju'] == '0' || $employee['ukuran_baju'] == '' ) : ?>
                                                                   -
                                                                <?php else : ?>
                                                                    <?= $employee['ukuran_baju'] ?>
                                                                <?php endif; ?>
                                                            </span>
                                                        </div>
                                                    </div>

                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name"> Ukuran Sepatu </div>
                                                        <div class="profile-info-value">
                                                            <span>
                                                                <?php if ($employee['ukuran_sepatu'] == '0' || $employee['ukuran_sepatu'] == '' ) : ?>
                                                                   -
                                                                <?php else : ?>
                                                                    <?= $employee['ukuran_sepatu'] ?>
                                                                <?php endif; ?>
                                                            </span>
                                                        </div>
                                                    </div>

                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name"> NPWP </div>
                                                        <div class="profile-info-value">
                                                            <span>
                                                                <?php if ($employee['npwp'] == '0' || $employee['npwp'] == '' ) : ?>
                                                                   -
                                                                <?php else : ?>
                                                                    <?= $employee['npwp'] ?>
                                                                <?php endif; ?>
                                                            </span>
                                                        </div>
                                                    </div>

                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name"> Akun Bank </div>
                                                        <div class="profile-info-value">
                                                            <span>
                                                                <?php if ($employee['mandiri'] == '0' || $employee['mandiri'] == '' ) : ?>
                                                                   -
                                                                <?php else : ?>
                                                                    <?= $employee['mandiri'] ?>
                                                                <?php endif; ?>
                                                            </span>
                                                        </div>
                                                    </div>

                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name"> BPJS Kesehatan </div>
                                                        <div class="profile-info-value">
                                                            <span>
                                                                <?php if ($employee['bpjs_kes'] == '0' || $employee['bpjs_kes'] == '' ) : ?>
                                                                   -
                                                                    <div class="pull-right"><span class="label label-danger">Tidak Aktif</span></div>
                                                                <?php else : ?>
                                                                    <?= $employee['bpjs_kes'] ?>
                                                                     <div class="pull-right"><span class="label label-info">Aktif</span></div>
                                                                <?php endif; ?>
                                                            </span>
                                                        </div>
                                                    </div>

                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name"> BPJS Ketenagakerjaan </div>
                                                        <div class="profile-info-value">
                                                            <span>
                                                            <?php if ($employee['bpjs_tk'] == '0' || $employee['bpjs_tk'] == '' ) : ?>
                                                                   -
                                                                    <div class="pull-right"><span class="label label-danger">Tidak Aktif</span></div>
                                                                <?php else : ?>
                                                                    <?= $employee['bpjs_tk'] ?>
                                                                     <div class="pull-right"><span class="label label-info">Aktif</span></div>
                                                                <?php endif; ?>
                                                            </span>    
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div><!-- /.row -->
                                    </div><!-- /#home -->

                                    <div id="detail" class="tab-pane">
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-12 center">
                                            </div><!-- /.col -->

                                            <div class="col-xs-12 col-sm-4">
                                                <div class="profile-user-info profile-user-info-striped">
                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name"> NO NIK </div>
                                                        <div class="profile-info-value">
                                                            <span><?= $employee['nik'] ?></span>
                                                        </div>
                                                    </div>

                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name"> NO KK </div>
                                                        <div class="profile-info-value">
                                                            <span>
                                                                <?php if ($employee['no_kk'] == '0' || $employee['no_kk'] == '' ) : ?>
                                                                   -
                                                                <?php else : ?>
                                                                    <?= $employee['no_kk'] ?>
                                                                <?php endif; ?>
                                                            </span>
                                                        </div>
                                                    </div>

                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name"> Kota KTP </div>
                                                        <div class="profile-info-value">
                                                            <span>
                                                                <?php if ($employee['kab_ktp'] == '0' || $employee['kab_ktp'] == '' ) : ?>
                                                                   -
                                                                <?php else : ?>
                                                                    <?= $employee['kab_ktp'] ?>
                                                                <?php endif; ?>
                                                            </span>
                                                        </div>
                                                    </div>

                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name"> Tanggal Vaksin 1 </div>
                                                        <div class="profile-info-value">
                                                            <span>
                                                                <?php if ($employee['tmpt_vaksin_1'] == '0' || $employee['tmpt_vaksin_1'] == '' ) : ?>
                                                                   -
                                                                <?php else : ?>
                                                                   <?= date('d M Y', strtotime($employee['tgl_vaksin_1'])) ?>
                                                                <?php endif; ?>
                                                            </span>
                                                        </div>
                                                    </div>

                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name"> Tempat Vaksin 1 </div>
                                                        <div class="profile-info-value">
                                                            <span>
                                                                <?php if ($employee['tmpt_vaksin_1'] == '0' || $employee['tmpt_vaksin_1'] == '') : ?>
                                                                   -
                                                                <?php else : ?>
                                                                   <?= $employee['tmpt_vaksin_1'] ?>
                                                                <?php endif; ?>
                                                            </span>
                                                        </div>
                                                    </div>

                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name"> Tanggal Vaksin 2 </div>
                                                        <div class="profile-info-value">
                                                            <span>
                                                                <?php if ($employee['tmpt_vaksin_2'] == '0' || $employee['tmpt_vaksin_2'] == '' ) : ?>
                                                                   -
                                                                <?php else : ?>
                                                                   <?= date('d M Y', strtotime($employee['tgl_vaksin_2'])) ?>
                                                                <?php endif; ?>
                                                            </span>
                                                        </div>
                                                    </div>

                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name"> Tempat Vaksin 2 </div>
                                                        <div class="profile-info-value">
                                                            <span>
                                                                <?php if ($employee['tmpt_vaksin_2'] == '0' || $employee['tmpt_vaksin_2'] == '') : ?>
                                                                   -
                                                                <?php else : ?>
                                                                   <?= $employee['tmpt_vaksin_2'] ?>
                                                                <?php endif; ?>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name"> Nama Vaksin 1 & 2 </div>
                                                        <div class="profile-info-value">
                                                            <span>
                                                                <?php if ($vaksin['nama_vaksin'] == '0' || $vaksin['nama_vaksin'] == '' ) : ?>
                                                                   -
                                                                <?php else : ?>
                                                                    <?= $vaksin['nama_vaksin'] ?>
                                                                <?php endif; ?>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name"> Tanggal Vaksin 3 </div>
                                                        <div class="profile-info-value">
                                                            <span>
                                                                <?php if ($employee['tmpt_vaksin_3'] == '0' || $employee['tmpt_vaksin_3'] == '') : ?>
                                                                   -
                                                                <?php else : ?>
                                                                   <?= date('d M Y', strtotime($employee['tgl_vaksin_3'])) ?>
                                                                <?php endif; ?>
                                                            </span>
                                                        </div>
                                                    </div>

                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name"> Tempat Vaksin 3 </div>
                                                        <div class="profile-info-value">
                                                            <span>
                                                                <?php if ($employee['tmpt_vaksin_3'] == '0' || $employee['tmpt_vaksin_3'] == '') : ?>
                                                                   -
                                                                <?php else : ?>
                                                                  <?= $employee['tmpt_vaksin_3'] ?>
                                                                <?php endif; ?>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name"> Nama Vaksin 3 </div>
                                                        <div class="profile-info-value">
                                                            <span>
                                                                <?php if (!empty($jenis3)) : ?>
                                                                    <?= $jenis3['nama_vaksin'] ?>
                                                                <?php else : ?>
                                                                    Belum Vaksin
                                                                <?php endif; ?>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                                
                                            </div><!-- /.col -->

                                            <div class="col-xs-12 col-sm-4">
                                                <div class="profile-user-info profile-user-info-striped">
                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name"> Alamat KTP</div>
                                                        <div class="profile-info-value">
                                                            <span>
                                                                <?php if ($employee['address_ktp'] == '0' || $employee['address_ktp'] == '') : ?>
                                                                   -
                                                                <?php else : ?>
                                                                  <?= $employee['address_ktp'] ?>
                                                                <?php endif; ?>
                                                            </span>
                                                        </div>
                                                    </div>

                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name"> RT / RW KTP </div>
                                                        <div class="profile-info-value">
                                                            <span><?= $employee['rt_ktp'] ?> / <?= $employee['rw_ktp'] ?></span>
                                                        </div>
                                                    </div>

                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name"> Kelurahan KTP </div>
                                                        <div class="profile-info-value">
                                                            <span>
                                                                <?php if ($employee['kel_ktp'] == '0' || $employee['kel_ktp'] == '') : ?>
                                                                   -
                                                                <?php else : ?>
                                                                  <?= $employee['kel_ktp'] ?>
                                                                <?php endif; ?>
                                                            </span>
                                                        </div>
                                                    </div>

                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name"> Kecamatan KTP </div>
                                                        <div class="profile-info-value">
                                                            <span>
                                                                <?php if ($employee['kec_ktp'] == '0' || $employee['kec_ktp'] == '') : ?>
                                                                   -
                                                                <?php else : ?>
                                                                  <?= $employee['kec_ktp'] ?>
                                                                <?php endif; ?>
                                                            </span>
                                                        </div>
                                                    </div>

                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name"> Kab / Kota KTP </div>
                                                        <div class="profile-info-value">
                                                            <span>
                                                                <?php if ($employee['kab_ktp'] == '0' || $employee['kab_ktp'] == '') : ?>
                                                                   -
                                                                <?php else : ?>
                                                                  <?= $employee['kab_ktp'] ?>
                                                                <?php endif; ?>
                                                            </span>
                                                        </div>
                                                    </div>

                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name"> Provinsi KTP </div>
                                                        <div class="profile-info-value">
                                                            <span>
                                                                <?php if ($employee['prov_ktp'] == '0' || $employee['prov_ktp'] == '') : ?>
                                                                   -
                                                                <?php else : ?>
                                                                  <?= $employee['prov_ktp'] ?>
                                                                <?php endif; ?>
                                                            </span>
                                                        </div>
                                                    </div>

                                                </div>
                                                
                                            </div><!-- /.col -->

                                            <div class="col-xs-12 col-sm-4">
                                                <div class="profile-user-info profile-user-info-striped">
                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name"> Alamat Batam</div>
                                                        <div class="profile-info-value">
                                                            <span>
                                                                <?php if ($employee['address_btm'] == '0' || $employee['address_btm'] == '') : ?>
                                                                   -
                                                                <?php else : ?>
                                                                  <?= $employee['address_btm'] ?>
                                                                <?php endif; ?>
                                                            </span>
                                                        </div>
                                                    </div>

                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name"> RT / RW Batam </div>
                                                        <div class="profile-info-value">
                                                            <span><?= $employee['rt_btm'] ?> / <?= $employee['rw_btm'] ?></span>
                                                        </div>
                                                    </div>

                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name"> Kelurahan Batam </div>
                                                        <div class="profile-info-value">
                                                            <span>
                                                                <?php if ($employee['kel_btm'] == '0' || $employee['kel_btm'] == '') : ?>
                                                                   -
                                                                <?php else : ?>
                                                                  <?= $employee['kel_btm'] ?>
                                                                <?php endif; ?>
                                                            </span>
                                                        </div>
                                                    </div>

                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name"> Kecamatan Batam </div>
                                                        <div class="profile-info-value">
                                                            <span>
                                                                <?php if ($employee['kec_btm'] == '0' || $employee['kec_btm'] == '') : ?>
                                                                   -
                                                                <?php else : ?>
                                                                  <?= $employee['kec_btm'] ?>
                                                                <?php endif; ?>
                                                            </span>
                                                        </div>
                                                    </div>

                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name"> Kode Pos Batam </div>
                                                        <div class="profile-info-value">
                                                            <span>
                                                                <?php if ($employee['kode_pos'] == '0' || $employee['kode_pos'] == '') : ?>
                                                                   -
                                                                <?php else : ?>
                                                                  <?= $employee['kode_pos'] ?>
                                                                <?php endif; ?>
                                                            </span>
                                                        </div>
                                                    </div>

                                                </div>
                                                
                                            </div><!-- /.col -->
                                        </div><!-- /.row -->
                                    </div><!-- /#detail -->

                                    <div id="family" class="tab-pane">
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-12 center">
                                            </div><!-- /.col -->

                                            <div class="col-xs-12 col-sm-6">
                                                <h4 class="blue" style="text-align:center;" >
                                                    <span class="middle"> Pasangan </span>
                                                </h4>
                                                <div class="profile-user-info profile-user-info-striped">
                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name"> Nama </div>
                                                        <div class="profile-info-value">
                                                            <span>
                                                                <?php if ($employee['nama_pasang'] == '0' || $employee['nama_pasang'] == '') : ?>
                                                                   -
                                                                <?php else : ?>
                                                                  <?= $employee['nama_pasang'] ?>
                                                                <?php endif; ?>
                                                            </span>
                                                        </div>
                                                    </div>

                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name"> No HP </div>
                                                        <div class="profile-info-value">
                                                            <span>
                                                                <?php if ($employee['no_hp_pasang'] == '0' || $employee['no_hp_pasang'] == '') : ?>
                                                                   -
                                                                <?php else : ?>
                                                                  <?= $employee['no_hp_pasang'] ?>
                                                                <?php endif; ?>
                                                            </span>
                                                        </div>
                                                    </div>

                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name"> Jenis Kelamin </div>
                                                        <div class="profile-info-value">
                                                            <span>
                                                                <span>
                                                                    <?php
                                                                    if ($employee['jk_pasang'] == '0') {
                                                                        echo 'Laki Laki';
                                                                    } else {
                                                                        echo 'Perempuan';
                                                                    }
                                                                    ?>
                                                                </span>
                                                            </span>
                                                        </div>
                                                    </div>

                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name"> No NIK </div>
                                                        <div class="profile-info-value">
                                                            <span>
                                                                <?php if ($employee['nik_pasang'] == '0' || $employee['nik_pasang'] == '') : ?>
                                                                   -
                                                                <?php else : ?>
                                                                  <?= $employee['nik_pasang'] ?>
                                                                <?php endif; ?>
                                                            </span>
                                                        </div>
                                                    </div>

                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name"> Tempat / Tanggal Lahir </div>
                                                        <div class="profile-info-value">
                                                            <span>
                                                                <?php if ($employee['tmpt_lahir_pasang'] == '0' || $employee['tmpt_lahir_pasang'] == '') : ?>
                                                                   -
                                                                <?php else : ?>
                                                                  <?= $employee['tmpt_lahir_pasang'] ?> / <?= date('d M Y', strtotime($employee['tgl_lahir_pasang'])) ?>
                                                                <?php endif; ?>
                                                            </span>
                                                        </div>
                                                    </div>

                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name"> Tanggal Vaksin 1 </div>
                                                        <div class="profile-info-value">
                                                            <span>
                                                                <?php if ($employee['tmpt_v1_pas'] == '0' || $employee['tmpt_v1_pas'] == '' ) : ?>
                                                                   -
                                                                <?php else : ?>
                                                                   <?= date('d M Y', strtotime($employee['tgl_v1_pas'])) ?>
                                                                <?php endif; ?>
                                                            </span>
                                                        </div>
                                                    </div>

                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name"> Tempat Vaksin 1 </div>
                                                        <div class="profile-info-value">
                                                            <span>
                                                                <?php if ($employee['tmpt_v1_pas'] == '0' || $employee['tmpt_v1_pas'] == '' ) : ?>
                                                                   -
                                                                <?php else : ?>
                                                                   <?= $employee['tmpt_v1_pas'] ?>
                                                                <?php endif; ?>
                                                            </span>
                                                        </div>
                                                    </div>

                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name"> Tanggal Vaksin 2 </div>
                                                        <div class="profile-info-value">
                                                            <span>
                                                                <?php if ($employee['tmpt_v2_pas'] == '0' || $employee['tmpt_v2_pas'] == '' ) : ?>
                                                                   -
                                                                <?php else : ?>
                                                                   <?= date('d M Y', strtotime($employee['tgl_v2_pas'])) ?>
                                                                <?php endif; ?>
                                                            </span>
                                                        </div>
                                                    </div>

                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name"> Tempat Vaksin 2 </div>
                                                        <div class="profile-info-value">
                                                            <span>
                                                                <?php if ($employee['tmpt_v2_pas'] == '0' || $employee['tmpt_v2_pas'] == '' ) : ?>
                                                                   -
                                                                <?php else : ?>
                                                                   <?= $employee['tmpt_v2_pas'] ?>
                                                                <?php endif; ?>
                                                            </span>
                                                        </div>
                                                    </div>

                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name"> Nama Vaksin </div>
                                                        <div class="profile-info-value">
                                                            <span>
                                                                <?php if (!empty($vpas)) : ?>
                                                                    <?= $vpas['nama_vaksin'] ?>
                                                                <?php else : ?>
                                                                    Belum Vaksin
                                                                <?php endif; ?>
                                                            </span>
                                                        </div>
                                                    </div>

                                                </div>
                                                
                                            </div><!-- /.col -->
                                            <?php if ($employee['tanggungan'] == '1') {
                                                include 'anak1.php';
                                            } elseif ($employee['tanggungan'] == '2') {
                                                include 'anak1.php';
                                                include 'anak2.php';
                                            } elseif ($employee['tanggungan'] == '3') {
                                                include 'anak1.php';
                                                include 'anak2.php';
                                                include 'anak3.php';
                                            } ?>
                                        </div>
                                    </div>

                                    <div id="parents" class="tab-pane">
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-12 center">
                                            </div><!-- /.col -->

                                            <div class="col-xs-12 col-sm-6">
                                                <div class="profile-user-info profile-user-info-striped">
                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name"> Nama Ibu </div>
                                                        <div class="profile-info-value">
                                                            <span>
                                                                <?php if ($employee['mom'] == '0' || $employee['mom'] == '' ) : ?>
                                                                   -
                                                                <?php else : ?>
                                                                   <?= $employee['mom'] ?>
                                                                <?php endif; ?>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name"> Tempat / Tanggal Lahir </div>
                                                        <div class="profile-info-value">
                                                            <span>
                                                                <?php if ($employee['tmpt_lahir_mom'] == '0' || $employee['tmpt_lahir_mom'] == '' ) : ?>
                                                                   -
                                                                <?php else : ?>
                                                                  <?= $employee['tmpt_lahir_mom'] ?> / <?= date('d M Y', strtotime($employee['tgl_lahir_mom'])) ?>
                                                                <?php endif; ?>
                                                            </span>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-6">
                                                <div class="profile-user-info profile-user-info-striped">
                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name"> Nama Ayah </div>
                                                        <div class="profile-info-value">
                                                            <span>
                                                                <?php if ($employee['dad'] == '0' || $employee['dad'] == '' ) : ?>
                                                                   -
                                                                <?php else : ?>
                                                                   <?= $employee['dad'] ?>
                                                                <?php endif; ?>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name"> Tempat / Tanggal Lahir </div>
                                                        <div class="profile-info-value">
                                                            <span>
                                                                <?php if ($employee['tmpt_lahir_dad'] == '0' || $employee['tmpt_lahir_dad'] == '' ) : ?>
                                                                   -
                                                                <?php else : ?>
                                                                  <?= $employee['tmpt_lahir_dad'] ?> / <?= date('d M Y', strtotime($employee['tgl_lahir_dad'])) ?>
                                                                <?php endif; ?>
                                                            </span>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div id="emergency" class="tab-pane">
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-12 center">
                                            </div><!-- /.col -->

                                            <div class="col-xs-12 col-sm-6">
                                                <div class="profile-user-info profile-user-info-striped">
                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name"> Nama </div>
                                                        <div class="profile-info-value">
                                                            <span>
                                                                <?php if ($employee['nama_kodar1'] == '0' || $employee['nama_kodar1'] == '' ) : ?>
                                                                   -
                                                                <?php else : ?>
                                                                   <?= $employee['nama_kodar1'] ?>
                                                                <?php endif; ?>
                                                            </span>
                                                        </div>
                                                    </div>

                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name"> Hubungan </div>
                                                        <div class="profile-info-value">
                                                            <span>
                                                                <?php if ($employee['hubungan_kodar1'] == '0' || $employee['hubungan_kodar1'] == '' ) : ?>
                                                                   -
                                                                <?php else : ?>
                                                                   <?= $employee['hubungan_kodar1'] ?>
                                                                <?php endif; ?>
                                                            </span>
                                                        </div>
                                                    </div>

                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name"> Alamat </div>
                                                        <div class="profile-info-value">
                                                            <span>
                                                                <?php if ($employee['alamat_kodar1'] == '0' || $employee['alamat_kodar1'] == '' ) : ?>
                                                                   -
                                                                <?php else : ?>
                                                                   <?= $employee['alamat_kodar1'] ?>
                                                                <?php endif; ?>
                                                            </span>
                                                        </div>
                                                    </div>

                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name"> No HP </div>
                                                        <div class="profile-info-value">
                                                            <span>
                                                                <?php if ($employee['no_hp_kodar1'] == '0' || $employee['no_hp_kodar1'] == '' ) : ?>
                                                                   -
                                                                <?php else : ?>
                                                                   <?= $employee['no_hp_kodar1'] ?>
                                                                <?php endif; ?>
                                                            </span>
                                                        </div>
                                                    </div>

                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name"> No WA </div>
                                                        <div class="profile-info-value">
                                                            <span>
                                                                <?php if ($employee['no_wa_kodar1'] == '0' || $employee['no_wa_kodar1'] == '' ) : ?>
                                                                   -
                                                                <?php else : ?>
                                                                   <?= $employee['no_wa_kodar1'] ?>
                                                                <?php endif; ?>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div id="keuangan" class="tab-pane">
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-12 center">
                                            </div><!-- /.col -->

                                            <div class="col-xs-12 col-sm-6">
                                                <div class="profile-user-info profile-user-info-striped">
                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name"> No Kronos </div>
                                                        <div class="profile-info-value">
                                                            <span><?= $employee['kronos_no'] ?></span>
                                                        </div>
                                                    </div>

                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name"> Classification </div>
                                                        <div class="profile-info-value">
                                                            <span><?= $finance['name'] ?></span>
                                                        </div>
                                                    </div>

                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name"> Departement </div>
                                                        <div class="profile-info-value">
                                                            <span><?= $finance['department_name'] ?></span>
                                                        </div>
                                                    </div>

                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name"> Grade </div>
                                                        <div class="profile-info-value">
                                                            <span>
                                                                <?php if ($employee['grade'] == '0' || $employee['grade'] == '' ) : ?>
                                                                   -
                                                                <?php else : ?>
                                                                   <?= $employee['grade'] ?>
                                                                <?php endif; ?>
                                                            </span>
                                                        </div>
                                                    </div>

                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name"> No SAP </div>
                                                        <div class="profile-info-value">
                                                            <span>
                                                                <?php if ($employee['no_sap'] == '0' || $employee['no_sap'] == '' ) : ?>
                                                                   -
                                                                <?php else : ?>
                                                                   <?= $employee['no_sap'] ?>
                                                                <?php endif; ?>
                                                            </span>
                                                        </div>
                                                    </div>

                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name"> Tanggal Join </div>
                                                        <div class="profile-info-value">
                                                            <span><?= date('d M Y', strtotime($employee['tanggal_join'])) ?></span>
                                                        </div>
                                                    </div>

                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name"> Tanggal Training </div>
                                                        <div class="profile-info-value">
                                                            <span><?= date('d M Y', strtotime($employee['tanggal_training'])) ?></span>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="hr hr-8 dotted"></div>
                                            </div><!-- /.col -->

                                            <div class="col-xs-12 col-sm-6">
                                                <div class="profile-user-info profile-user-info-striped">
                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name"> ID PNS </div>
                                                        <div class="profile-info-value">
                                                            <span><?= $employee['pns_id'] ?></span>
                                                        </div>
                                                    </div>

                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name"> Basic Salary </div>
                                                        <div class="profile-info-value">
                                                            <span><?= number_format($finance['salary'],0) ?></span>
                                                        </div>
                                                    </div>

                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name"> Meal Allowances </div>
                                                        <div class="profile-info-value">
                                                            <span><?= number_format($finance['meal_allo'],0) ?></span>
                                                        </div>
                                                    </div>

                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name"> Transport Allowance </div>
                                                        <div class="profile-info-value">
                                                            <span><?= number_format($finance['transport'],0) ?></span>
                                                        </div>
                                                    </div>

                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name"> OT Rate </div>
                                                        <div class="profile-info-value">
                                                            <span><?= number_format($finance['ot_rate'],0) ?></span>
                                                        </div>
                                                    </div>

                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name"> Premi </div>
                                                        <div class="profile-info-value">
                                                            <span><?= number_format($finance['premi'],0) ?></span>
                                                        </div>
                                                    </div>

                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name"> Status </div>
                                                        <div class="profile-info-value">
                                                            <span><?= $employee['status'] ?></span>
                                                        </div>
                                                    </div>
                                                    <?php
                                                    if ($employee['status'] == 'Eks Karyawan') { ?>
                                                        <div class="profile-info-row">
                                                            <div class="profile-info-name"> Out Date </div>
                                                            <div class="profile-info-value">
                                                                <span><?= date('d M Y', strtotime($employee['tgl_out'])) ?></span>
                                                            </div>
                                                        </div>

                                                        <div class="profile-info-row">
                                                            <div class="profile-info-name"> Reason Out </div>
                                                            <div class="profile-info-value">
                                                                <span><?= $employee['reason'] ?></span>
                                                            </div>
                                                        </div>
                                                    <?php } else { } ?>
                                                </div>
                                                <div class="hr hr-8 dotted"></div>
                                            </div><!-- /.col -->
                                        </div><!-- /.row -->
                                    </div><!-- /#feed -->

                                    <div id="history" class="tab-pane">
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-12 center">
                                            </div><!-- /.col -->
                                            <?php foreach ($history as $his) : ?>
                                                <div class="col-xs-12 col-sm-6">
                                                    <div class="profile-user-info profile-user-info-striped">
                                                        <div class="profile-info-row">
                                                            <div class="profile-info-name"> Tanggal In / Out </div>
                                                            <div class="profile-info-value">
                                                                <span><?= date('d M Y', strtotime($his['tgl_out_last'])) ?></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12 col-sm-6">
                                                    <div class="profile-user-info profile-user-info-striped">
                                                        <div class="profile-info-row">
                                                            <div class="profile-info-name"> Pilihan </div>
                                                            <div class="profile-info-value">
                                                                <span><?= $his['pilihan'] ?></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12 col-sm-6">
                                                    <div class="profile-user-info profile-user-info-striped">
                                                        <div class="profile-info-row">
                                                            <div class="profile-info-name"> Status </div>
                                                            <div class="profile-info-value">
                                                                <span><?= $his['status_kar'] ?></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12 col-sm-6">
                                                    <div class="profile-user-info profile-user-info-striped">
                                                        <div class="profile-info-row">
                                                            <div class="profile-info-name"> Reason </div>
                                                            <div class="profile-info-value">
                                                                <span><?= $his['reason'] ?></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <br>
                                            <?php endforeach; ?>
                                        </div>
                                    </div>

                                    <div id="berkas" class="tab-pane">
                                        <div class="row">
                                            <div class="col-xs-3 col-sm-3 col-md-3">
                                                <br>
                                                <?php if ($employee['foto_ktp'] == '') : ?>
                                                    <img class="editable img-responsive" alt="<?= $employee['employee_name'] ?>" id="avatar2" src="<?= base_url() ?>assets/employee/default_ktp.png" />
                                                <?php else : ?>
                                                    <a href="<?= base_url() ?>assets/employee/<?= $employee['foto_ktp'] ?>" class="btn btn-white btn-info btn-block" target="_blank">
                                                        <img class="editable img-responsive" alt="<?= $employee['employee_name'] ?>" id="avatar2" src="<?= base_url() ?>assets/employee/<?= $employee['foto_ktp'] ?>" />
                                                    </a>
                                                <?php endif; ?>
                                            </div>
                                            <div class="col-xs-3 col-sm-3 col-md-3">
                                                <br>
                                                <?php if ($employee['foto_kk'] == '') : ?>
                                                    <img class="editable img-responsive" alt="<?= $employee['employee_name'] ?>" id="avatar2" src="<?= base_url() ?>assets/employee/default_kk.png" />
                                                <?php else : ?>
                                                    <a href="<?= base_url() ?>assets/employee/<?= $employee['foto_kk'] ?>" class="btn btn-white btn-info btn-block" target="_blank">
                                                        <img class="editable img-responsive" alt="<?= $employee['employee_name'] ?>" id="avatar2" src="<?= base_url() ?>assets/employee/<?= $employee['foto_kk'] ?>" />
                                                    </a>
                                                <?php endif; ?>
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
    </div>
</div>