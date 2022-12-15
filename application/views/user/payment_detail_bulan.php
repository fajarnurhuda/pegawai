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
                                    </form>
                                </div>

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
                                                                <div class="profile-info-name"> Pay Periode </div>
                                                                <div class="profile-info-value">
                                                                    <?php if(!empty($coba)) : ?>
                                                                    <span><?= $coba['period'] ?> <?= date('Y') ?></span>
                                                                    <?php else : ?>
                                                                        <span><?= date('Y') ?></span>
                                                                    <?php endif ?>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><!-- /.col -->
                                                </div><!-- /.row -->
                                            </div>
                                        </div>

                                        <div class="space"></div>
                                        <?php
                                        if (!empty($coba)) : ?>
                                            <div>
                                                <table class="table table-striped ">
                                                    <thead>
                                                        <tr>
                                                            <th>Salary</th>
                                                            <th></th>
                                                            <th></th>
                                                            <th></th>
                                                            <th></th>
                                                        </tr>
                                                    </thead>

                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                Basic Salary
                                                            </td>
                                                            <?php
                                                                $basic = explode(",", $coba['basic_salary']);
                                                                echo '<td>' . number_format($basic[0], 0) . '</td>
                                                             <td>' . $basic[1] . '</td>
                                                             <td>' . $basic[2] . '</td>
                                                             <td>' . number_format($basic[3], 0)  . '</td>';
                                                                ?>
                                                        </tr>

                                                        <tr>
                                                            <td>
                                                                Basic Salary Deduction
                                                            </td>
                                                            <?php
                                                                $dedu = explode(",", $coba['basic_salary_deduction']);
                                                                echo '<td>' . number_format($dedu[0], 0) . '</td>
                                                             <td>' . $dedu[1] . '</td>
                                                             <td>' . $dedu[2] . '</td>
                                                             <td>' . $dedu[3] . '</td>';
                                                                ?>
                                                        </tr>

                                                        <tr>
                                                            <td>
                                                                Meal Allowance
                                                            </td>
                                                            <?php
                                                                $meal = explode(",", $coba['meal_allo']);
                                                                echo '<td>' . number_format($meal[0], 0) . '</td>
                                                             <td>' . $meal[1] . '</td>
                                                             <td>' . $meal[2] . '</td>
                                                             <td>' . number_format($meal[3], 0)  . '</td>';
                                                                ?>
                                                        </tr>

                                                        <tr>
                                                            <td>
                                                                Transport Allowance
                                                            </td>
                                                            <?php
                                                                $trans = explode(",", $coba['transport_allo']);
                                                                echo '<td>' . number_format($trans[0], 0) . '</td>
                                                             <td>' . $trans[1] . '</td>
                                                             <td>' . $trans[2] . '</td>
                                                             <td>' . number_format($trans[3], 0)  . '</td>';
                                                                ?>
                                                        </tr>

                                                        <tr>
                                                            <td>
                                                                Overtime
                                                            </td>
                                                            <?php
                                                                $over = explode(",", $coba['overtime']);
                                                                echo '<td>' . number_format($over[0], 0) . '</td>
                                                             <td>' . $over[1] . '</td>
                                                             <td>' . $over[2] . '</td>
                                                             <td>' . number_format($over[3], 0)  . '</td>';
                                                                ?>
                                                        </tr>

                                                        <tr>
                                                            <td>
                                                                ETI Bonus
                                                            </td>
                                                            <?php
                                                                $eti = explode(",", $coba['eti_bonus']);
                                                                echo '<td>' . number_format($eti[0], 0) . '</td>
                                                             <td>' . $eti[1] . ' % </td>
                                                             <td>' . $eti[2] . '</td>
                                                             <td>' . number_format($eti[3], 0)  . '</td>';
                                                                ?>
                                                        </tr>

                                                        <tr>
                                                            <td>
                                                                Annual Leave
                                                            </td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                        </tr>

                                                        <tr>
                                                            <td>
                                                                THR
                                                            </td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                        </tr>

                                                        <tr>
                                                            <td>
                                                                Severant Payment
                                                            </td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                        </tr>

                                                        <tr>
                                                            <td>
                                                                Family Allowance
                                                            </td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                        </tr>

                                                        <tr>
                                                            <td>
                                                                Others
                                                            </td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>

                                            <div class="hr hr8 hr-double hr-dotted"></div>

                                            <div class="row">
                                                <div class="col-sm-5 pull-right">
                                                    <h5 class="pull-right">
                                                        Gross Salary :
                                                        <span class="green"><?= number_format($coba['gross_salary'], 0) ?></span>
                                                    </h5>
                                                </div>
                                            </div>

                                            <div class="space-6"></div>
                                            <div>
                                                <table class="table table-striped ">
                                                    <thead>
                                                        <tr>
                                                            <th>Deduction</th>
                                                            <th></th>
                                                            <th></th>
                                                            <th></th>
                                                            <th></th>
                                                        </tr>
                                                    </thead>

                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                BP Jamsostek Old Saving
                                                            </td>
                                                            <?php
                                                                $old = explode(",", $coba['bpjs_old_saving']);
                                                                echo '<td>' . number_format($old[0], 0) . '</td>
                                                             <td>' . $old[1] . '</td>
                                                             <td>' . $old[2] . '</td>
                                                             <td>' . number_format($old[3], 0)  . '</td>';
                                                                ?>
                                                        </tr>

                                                        <tr>
                                                            <td>
                                                                BP Jamsostek Pensiun
                                                            </td>
                                                            <?php
                                                                $pensiun = explode(",", $coba['bpjs_pension']);
                                                                echo '<td>' . number_format($pensiun[0], 0) . '</td>
                                                             <td>' . $pensiun[1] . '</td>
                                                             <td>' . $pensiun[2] . '</td>
                                                             <td>' . number_format($pensiun[3], 0)  . '</td>';
                                                                ?>
                                                        </tr>

                                                        <tr>
                                                            <td>
                                                                BPJS Kesehatan
                                                            </td>
                                                            <?php
                                                                $kes = explode(",", $coba['bpjs_kesehatan']);
                                                                echo '<td>' . number_format($kes[0], 0) . '</td>
                                                             <td>' . $kes[1] . '</td>
                                                             <td>' . $kes[2] . '</td>
                                                             <td>' . number_format($kes[3], 0)  . '</td>';
                                                                ?>
                                                        </tr>

                                                        <tr>
                                                            <td>
                                                                Tax (PPh 21)
                                                            </td>
                                                            <?php
                                                                $pph = explode(",", $coba['pph21']);
                                                                echo '<td>' . $pph[0] . '</td>
                                                             <td>' . $pph[1] . '</td>
                                                             <td>' . $pph[2] . '</td>
                                                             <td>' . number_format($pph[3], 0)  . '</td>';
                                                                ?>
                                                        </tr>

                                                        <?php
                                                            $oth = explode("|", $coba['others_deduction']);
                                                            foreach ($oth as $o) {
                                                                // ini belum selesai
                                                                echo '<tr>';
                                                                $od = explode(",", $o);
                                                                for ($x = 0; $x <= 4; $x++) {
                                                                    echo '<td>' . $od[$x] . '</td>';
                                                                }
                                                                echo '</tr>';
                                                            }
                                                            ?>

                                                        <tr>
                                                            <td>
                                                                Materai
                                                            </td>
                                                            <?php
                                                                $mat = explode(",", $coba['others_materai']);
                                                                echo '<td>' . $mat[0] . '</td>
                                                             <td>' . $mat[1] . '</td>
                                                             <td>' . $mat[2] . '</td>
                                                             <td>' . $mat[3] . '</td>';
                                                                ?>
                                                        </tr>

                                                    </tbody>
                                                </table>
                                            </div>

                                            <div class="hr hr8 hr-double hr-dotted"></div>

                                            <div class="row">
                                                <div class="col-sm-5 pull-right">
                                                    <h4 class="pull-right">
                                                        Total Deduction :
                                                        <span class="red"><?= number_format($coba['total_deduction'], 0) ?></span>
                                                    </h4>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-5 pull-right">
                                                    <h4 class="pull-right">
                                                        Take Home Pay :
                                                        <span class="blue"><?= number_format($coba['take_home_pay'], 0) ?></span>
                                                    </h4>
                                                </div>
                                            </div>
                                            <div class="space"></div>
                                            <div class="space"></div>
                                            <div class="row">
                                                <div class="col-xs-12 label label-lg label-info arrowed-in arrowed-right">
                                                    <b> Time Sheet Summary</b>
                                                </div>
                                            </div>
                                            <div class="space"></div>
                                            <div class="row">
                                                <div class="col-xs-3">
                                                    <table class="table table-striped">
                                                        <thead>
                                                            <tr>
                                                                <th>Day</th>
                                                                <th>Date</th>
                                                            </tr>
                                                        </thead>

                                                        <tbody>
                                                            <?php
                                                                $mo = $coba['bulanangka'];
                                                                $year = $coba['year'];
                                                                $ma = $coba['bulanangka'] - 1;
                                                                $awal = $year - $mo - '15';
                                                                // $rangetgl = date_range('2022-' . $ma . '-16', '2022-' . $mo . '-15');
                                                                $ran = new DatePeriod(
                                                                    new DateTime($year . '-' . $ma . '-16'),
                                                                    new DateInterval('P1D'),
                                                                    new DateTime($year . '-' . $mo . '-16')
                                                                );

                                                                foreach ($ran as $ra) : ?>
                                                                <tr>
                                                                    <td><?= $ra->format('l') . "\n" ?> </td>
                                                                    <td><?= $ra->format('Y-m-d') . "\n" ?> </td>
                                                                </tr>
                                                            <?php endforeach; ?>
                                                            <td colspan="2"><b>Total</b></td>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="col-xs-9">
                                                    <table class="table table-striped">
                                                        <thead>
                                                            <tr>
                                                                <th>Work Hours</th>
                                                                <th>Basic Hours</th>
                                                                <th>OT Hours</th>
                                                                <th>OT Total</th>
                                                            </tr>
                                                        </thead>

                                                        <tbody>
                                                            <?php
                                                                $tsheet = explode(",", $coba['timesheet']);
                                                                foreach ($tsheet as $th) {
                                                                    // ini belum selesai
                                                                    echo '<tr>';
                                                                    $t = explode("|", $th);
                                                                    for ($x = 0; $x < 4; $x++) {
                                                                        echo '<td>' . $t[$x] . '</td>';
                                                                    }
                                                                    echo '</tr>';
                                                                }
                                                                ?>

                                                        </tbody>
                                                    </table>
                                                </div>

                                                <div class="col-xs-12">
                                                    <table class="table table-striped">
                                                        <tbody>
                                                            <tr>
                                                                <td>Detail of Gross Income for PPh 21 Calculation :</td>
                                                                <td></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Gross Salary</td>
                                                                <td><?= number_format($coba['gross_salary'], 0) ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td>THR</td>
                                                                <td>-</td>
                                                            </tr>
                                                            <tr>
                                                                <td>JKK/JKM BP Jamsostek & BPJS Kes ( PNS)</td>
                                                                <td><?= number_format($coba['total_deduction'], 0) ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Total</td>
                                                                <td><?= number_format($coba['take_home_pay'], 0) ?></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
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

                <!-- PAGE CONTENT ENDS -->
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div>
</div>