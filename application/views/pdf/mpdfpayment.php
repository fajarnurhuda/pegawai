<!DOCTYPE html>
<html lang="en">
<?php
$baru = $coba['bulanangka'] - 1;
// $bulanlama = date('m-Y', strtotime('-1 month', strtotime($baru)));
?>

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta charset="utf-8" />
    <title>Detail Payment</title>
    <link rel="icon" href="http://localhost/PNS/assets/favicon.png" sizes="32x32">

    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

    <!-- bootstrap & fontawesome -->
    <!-- <link rel="stylesheet" href="<?= base_url() ?>assets/css/bootstrap.min.css" /> -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/stylesendiri.css" />
    <script src="<?= base_url() ?>assets/js/ace-extra.min.js"></script>
</head>

<body>
    <div class="row">
        <div class="col-xs-12 col-sm-12">
            <div class="col-xs-12 col-sm-12 col-md-12 label label-lg">
                <u><b>Informasi Pegawai</b></u>
            </div>
            <table class="table">
                <tbody>
                    <tr>
                        <td>Employee Name </td>
                        <td>: <?= $employee['employee_name'] ?></td>
                        <td>Employee ID </td>
                        <td>: <?= $employee['pns_id'] ?></td>
                    </tr>
                    <tr>
                        <td>Classification </td>
                        <td>: <?= $finance['name'] ?></td>
                        <td>Department </td>
                        <td>: <?= $finance['department_name'] ?></td>
                    </tr>
                    <tr>
                        <td>Maritial Status </td>
                        <td>: <?= $employee['status_kawin'] ?> / <?= $employee['tanggungan'] ?></td>
                        <td>Date Joined </td>
                        <td>: <?= $employee['tanggal_join'] ?></td>
                    </tr>
                    <tr>
                        <td>NPWP </td>
                        <td>: <?= $employee['npwp'] ?></td>
                        <td>BP Jamsostek No </td>
                        <td>: <?= $employee['bpjs_tk'] ?></td>
                    </tr>
                    <tr>
                        <td>BPJS Kesehatan No </td>
                        <td>: <?= $employee['bpjs_kes'] ?></td>
                        <td>Mandiri Account </td>
                        <td>: <?= $employee['mandiri'] ?></td>
                    </tr>
                    <tr>
                        <td>Pay Periode</td>
                        <td>: <?= $coba['period'] ?> <?= date('Y') ?></td>
                    </tr>
                </tbody>
            </table>
        </div><!-- /.col -->
    </div><!-- /.row -->

    <?php
    if (!empty($coba)) : ?>
        <div class="row" style="margin-top: 10px;">
            <div class="col-xs-12 col-sm-12">
                <div class="col-xs-12 col-sm-12 col-md-12 label label-lg">
                    <u><b>Salary</b></u>
                </div>
                <table class="table">
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

            <div class="row" style="margin-top: 10px;">
                <div class="col-xs-12 col-sm-12 col-md-12 label label-lg">
                    <u><b>Deduction</b></u>
                </div>
                <table class="table table-striped ">
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

            <br>
            <div class="row">
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
                                <td style="text-align:right;width:20%;"><?php $total = ($coba['gross_salary'] + $coba['jkm']) ?><?= number_format($total, 0) ?></td>
                                <td style="width:10%;"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="space"></div>

            <div class="row" style="page-break-before:always; text-align:center;">
                <b>Time Sheet Summary</b>
            </div>
            <div class="row">
                <div class="column1">
                    <table class="table1">
                        <thead>
                            <tr>
                                <th style="width: 60%;">Day</th>
                                <th style="width: 40%;">Date</th>
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
                            <tr>
                                <td colspan="2" style="text-align:center;"><b>Total</b></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="column2">
                    <table class="table3">
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
                                        echo '<td style="text-align:center;">' . $t[$x] . '</td>';
                                    }
                                    echo '</tr>';
                                }
                                ?>

                        </tbody>
                    </table>
                </div>
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
    </div>
</body>

</html>