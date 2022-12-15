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
                                                            <td style="width:28%">Basic Salary </td>
                                                            <?php
                                                                $basic = explode(",", $coba['basic_salary']);
                                                                echo '<td style="text-align:right;">' . number_format($basic[0], 0) . '</td>
                                                                <td style="text-align:right;width:10%;">' . $basic[1] . '</td>
                                                                <td style="text-align:right;width:10%;">' . $basic[2] . '</td>
                                                                <td style="text-align:right;width:20%;">' . number_format($basic[3], 0)  . '</td>
                                                                <td style="width:10%;"></td>';
                                                                ?>
                                                        </tr>                               

                                                        <tr>
                                                            <td style="width:28%">
                                                                Basic Salary Deduction
                                                            </td>
                                                            <?php
                                                                $dedu = explode(",", $coba['basic_salary_deduction']);
                                                                echo '<td style="text-align:right;">' . number_format($dedu[0], 0) . '</td>
                                                                    <td style="text-align:right;width:10%;">' . $dedu[1] . '</td>
                                                                    <td style="text-align:right;width:10%;">' . $dedu[2] . '</td>
                                                                    <td style="text-align:right;width:20%;">' . $dedu[3] . '</td>
                                                                    <td style="width:10%;"></td>';
                                                                ?>
                                                        </tr>
                                
                                                        <tr>
                                                            <td style="width:28%">
                                                                Meal Allowance
                                                            </td>
                                                            <?php
                                                                $meal = explode(",", $coba['meal_allo']);
                                                                echo '<td style="text-align:right;">' . number_format($meal[0], 0) . '</td>
                                                                    <td style="text-align:right;width:10%;">' . $meal[1] . '</td>
                                                                    <td style="text-align:right;width:10%;">' . $meal[2] . '</td>
                                                                    <td style="text-align:right;width:20%;">' . number_format($meal[3], 0)  . '</td>
                                                                    <td style="width:10%;"></td>';
                                                                ?>
                                                        </tr>
                                
                                                        <tr>
                                                            <td style="width:28%">
                                                                Transport Allowance
                                                            </td>
                                                            <?php
                                                                $trans = explode(",", $coba['transport_allo']);
                                                                echo '<td style="text-align:right;">' . number_format($trans[0], 0) . '</td>
                                                                    <td style="text-align:right;width:10%;">' . $trans[1] . '</td>
                                                                    <td style="text-align:right;width:10%;">' . $trans[2] . '</td>
                                                                    <td style="text-align:right;width:20%;">' . number_format($trans[3], 0)  . '</td>
                                                                    <td style="width:10%;"></td>';
                                                                ?>
                                                        </tr>
                                
                                                        <tr>
                                                            <td style="width:28%">
                                                                Overtime
                                                            </td>
                                                            <?php
                                                                $over = explode(",", $coba['overtime']);
                                                                echo '<td style="text-align:right;">' . number_format($over[0], 0) . '</td>
                                                                    <td style="text-align:right;width:10%;">' . $over[1] . '</td>
                                                                    <td style="text-align:right;width:10%;">' . $over[2] . '</td>
                                                                    <td style="text-align:right;width:20%;">' . number_format($over[3], 0)  . '</td>
                                                                    <td style="width:10%;"></td>';
                                                                ?>
                                                        </tr>
                                
                                                        <tr>
                                                            <td style="width:28%">
                                                                ETI Bonus
                                                            </td>
                                                            <?php
                                                                $eti = explode(",", $coba['eti_bonus']);
                                                                echo '<td style="text-align:right;">' . number_format($eti[0], 0) . '</td>
                                                                    <td style="text-align:right;width:10%;">' . $eti[1] . ' % </td>
                                                                    <td style="text-align:right;width:10%;">' . $eti[2] . '</td>
                                                                    <td style="text-align:right;width:20%;">' . number_format($eti[3], 0)  . '</td>
                                                                    <td style="width:10%;"></td>';
                                                                ?>
                                                        </tr>
                                
                                                        <tr>
                                                            <td style="width:28%">
                                                                Annual Leave
                                                            </td>
                                                            <td style="text-align:right;"></td>
                                                            <td style="text-align:right;width:10%;"></td>
                                                            <td style="text-align:right;width:10%;"></td>
                                                            <td style="text-align:right;width:20%;"></td>
                                                            <td style="width:10%;"></td>
                                                        </tr>
                                
                                                        <tr>
                                                            <td style="width:28%">
                                                                THR
                                                            </td>
                                                            <td style="text-align:right;"></td>
                                                            <td style="text-align:right;width:10%;"></td>
                                                            <td style="text-align:right;width:10%;"></td>
                                                            <td style="text-align:right;width:20%;"></td>
                                                            <td style="width:10%;"></td>
                                                        </tr>
                                
                                                        <tr>
                                                            <td style="width:28%">
                                                                Severant Payment
                                                            </td>
                                                            <td style="text-align:right;"></td>
                                                            <td style="text-align:right;width:10%;"></td>
                                                            <td style="text-align:right;width:10%;"></td>
                                                            <td style="text-align:right;width:20%;"></td>
                                                            <td style="width:10%;"></td>
                                                        </tr>
                                
                                                        <tr>
                                                            <td style="width:28%">
                                                                Family Allowance
                                                            </td>
                                                            <td style="text-align:right;"></td>
                                                            <td style="text-align:right;width:10%;"></td>
                                                            <td style="text-align:right;width:10%;"></td>
                                                            <td style="text-align:right;width:20%;"></td>
                                                            <td style="width:10%;"></td>
                                                        </tr>
                                
                                                        <tr>
                                                            <?php
                                                                $os = explode(",", $coba['others_salary']);
                                                                echo '
                                                                <td style="width:28%">' . $os[0] . '</td>
                                                                    <td style="text-align:right;width:10%;"></td>
                                                                    <td style="text-align:right;width:10%;"></td>
                                                                    <td style="text-align:right;width:10%;"></td>
                                                                    <td style="text-align:right;width:20%;">' . number_format($os[4], 0)  . '</td>
                                                                    <td style="width:10%;"></td>';
                                                                ?>
                                                        </tr>
                                                    </tbody>
                                                    <tfoot>
                                                        <tr>
                                                            <td colspan="4" style="text-align: right;">Gross Salary : </td>
                                                            <td style="text-align:right;width:20%;"><?= number_format($coba['gross_salary'], 0) ?></td>
                                                            <td style="width:10%;"></td>
                                                        </tr>
                                                    </tfoot>
                                                </table>
                                            </div>

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
                                                            <td style="width:28%">
                                                                BP Jamsostek Old Saving
                                                            </td>
                                                            <?php
                                                                $old = explode(",", $coba['bpjs_old_saving']);
                                                                echo '<td style="text-align:right;">' . number_format($old[0], 0) . '</td>
                                                                    <td style="text-align:right;width:10%;">' . $old[1] . '</td>
                                                                    <td style="text-align:right;width:10%;">' . $old[2] . '</td>
                                                                    <td style="text-align:right;width:20%;">' . number_format($old[3], 0)  . '</td>
                                                                    <td style="width:10%;"></td>';
                                                                ?>
                                                        </tr>
                                
                                                        <tr>
                                                            <td style="width:28%">
                                                                BP Jamsostek Pension
                                                            </td>
                                                            <?php
                                                                $pensiun = explode(",", $coba['bpjs_pension']);
                                                                echo '<td style="text-align:right;">' . number_format($pensiun[0], 0) . '</td>
                                                                <td style="text-align:right;width:10%;">' . $pensiun[1] . '</td>
                                                                <td style="text-align:right;width:10%;">' . $pensiun[2] . '</td>
                                                                <td style="text-align:right;width:20%;">' . number_format($pensiun[3], 0)  . '</td>
                                                                <td style="width:10%;"></td>';
                                                                ?>
                                                        </tr>
                                
                                                        <tr>
                                                            <td style="width:28%">
                                                                BPJS Kesehatan
                                                            </td>
                                                            <?php
                                                                $kes = explode(",", $coba['bpjs_kesehatan']);
                                                                echo '<td style="text-align:right;">' . number_format($kes[0], 0) . '</td>
                                                                <td style="text-align:right;width:10%;">' . $kes[1] . '</td>
                                                                <td style="text-align:right;width:10%;">' . $kes[2] . '</td>
                                                                <td style="text-align:right;width:20%;">' . number_format($kes[3], 0)  . '</td>
                                                                <td style="width:10%;"></td>';
                                                                ?>
                                                        </tr>
                                
                                                        <tr>
                                                            <td style="width:28%">
                                                                Tax (PPh 21)
                                                            </td>
                                                            <?php
                                                                $pph = explode(",", $coba['pph21']);
                                                                echo '<td style="text-align:right;">' . $pph[0] . '</td>
                                                                <td style="text-align:right;width:10%;">' . $pph[1] . '</td>
                                                                <td style="text-align:right;width:10%;">' . $pph[2] . '</td>
                                                                <td style="text-align:right;width:20%;">' . number_format($pph[3], 0)  . '</td>
                                                                <td style="width:10%;"></td>';
                                                                ?>
                                                        </tr>
                                
                                                        <tr>
                                                            <?php
                                                                $oth = explode(",", $coba['others_deduction']);
                                                                echo '
                                                                <td style="width:28%">' . $oth[0] . '</td>
                                                                    <td style="text-align:right;width:10%;"></td>
                                                                    <td style="text-align:right;width:10%;"></td>
                                                                    <td style="text-align:right;width:10%;"></td>
                                                                    <td style="text-align:right;width:20%;">' . number_format($oth[4], 0)  . '</td>
                                                                    <td style="width:10%;"></td>';
                                                                ?>
                                                        </tr>
                                
                                                        <tr>
                                                            <td style="width:28%">
                                                                Materai
                                                            </td>
                                                            <?php
                                                                $mat = explode(",", $coba['others_materai']);
                                                                echo '<td style="text-align:right;">' . $mat[0] . '</td>
                                                                    <td style="text-align:right;width:10%;">' . $mat[1] . '</td>
                                                                    <td style="text-align:right;width:10%;">' . $mat[2] . '</td>
                                                                    <td style="text-align:right;width:20%;">' . $mat[3] . '</td>
                                                                    <td style="width:10%;"></td>';
                                                                ?>
                                                        </tr>
                                                    </tbody>
                                                     <tfoot>
                                                        <tr>
                                                            <td colspan="4" style="text-align: right;">Total Deduction : </td>
                                                            <td style="text-align:right;width:20%;"><?= number_format($coba['total_deduction'], 0) ?></td>
                                                            <td style="width:10%;"></td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="4" style="text-align: right;">Take Home Pay : </td>
                                                            <td style="text-align:right;width:20%;"><?= number_format($coba['take_home_pay'], 0) ?></td>
                                                            <td style="width:10%;"></td>
                                                        </tr>
                                                    </tfoot>
                                                </table>
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
                                                                $ma = $coba['bulanangka'] - 1;
                                                                $rangetgl = date_range('2022-' . $ma . '-16', '2022-' . $mo . '-15');

                                                                foreach ($rangetgl as $ra) : ?>
                                                                <tr>
                                                                    <td><?= date('l', strtotime($ra)) . "\n" ?> </td>
                                                                    <td><?= date('d M Y', strtotime($ra)) . "\n" ?> </td>
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
                                                                <th style="text-align:center;">Work Hours</th>
                                                                <th style="text-align:center;">Basic Hours</th>
                                                                <th style="text-align:center;">OT Hours</th>
                                                                <th style="text-align:center;">OT Total</th>
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
                                                                        echo '<td style="text-align:center;">' . $t[$x] . '</td>';
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
                                                                <td style="text-align:right;width:20%;"><?= number_format($coba['gross_salary'], 0) ?></td>
                                                                <td style="width:10%;"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>THR</td>
                                                                <td style="text-align:right;width:20%;">-</td>
                                                                <td style="width:10%;"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>JKK/JKM BP Jamsostek & BPJS Kes ( PNS)</td>
                                                                <td style="text-align:right;width:20%;"><?= number_format($coba['jkm'], 0) ?></td>
                                                                <td style="width:10%;"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Total</td>
                                                                <td  style="text-align:right;width:20%;"><?php $total = ($coba['gross_salary'] + $coba['jkm']) ?><?= number_format($total, 0) ?>
                                                                <td style="width:10%;"></td>
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