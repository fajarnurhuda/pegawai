<div class="row">
    <div class="col-md-6 col-sm-6 col-xs-6 col-lg-6">
        <div class="form-group has-info">
            <label for="inputInfo" class="col-xs-3 col-sm-3 col-md-3 col-lg-3 control-label no-padding-righ">Employee Name</label>
            <div class="col-xs-9 col-sm-9 col-lg-9 col-md-9">
                <span class="block input-icon input-icon-right">
                    <input type="text" id="employee_name" name="employee_name" class="width-100" placeholder="Employee Name" />
                    <!-- <i class="ace-icon fa fa-check-circle"></i> -->
                </span>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-sm-6 col-xs-6 col-lg-6">
        <div class="form-group has-info">
            <label for="inputInfo" class="col-xs-3 col-sm-3 col-md-3 col-lg-3 control-label no-padding-right">No NIK</label>
            <div class="col-xs-9 col-sm-9 col-lg-9 col-md-9">
                <span class="block input-icon input-icon-right">
                    <input type="text" id="nik" name="nik" class="width-100" placeholder="NIK Number" />
                    <!-- <i class="ace-icon fa fa-check-circle"></i> -->
                </span>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-sm-6 col-xs-6 col-lg-6" style="margin-top: 10px;">
        <div class="form-group has-info">
            <label for="inputInfo" class="col-xs-3 col-sm-3 col-md-3 col-lg-3 control-label no-padding-right">Born</label>
            <div class="col-xs-4 col-sm-4 col-lg-4 col-md-4">
                <span class="block input-icon input-icon-right">
                    <input type="text" id="bornplace" name="bornplace" class="width-100" placeholder="Born Place" />
                    <!-- <i class="ace-icon fa fa-check-circle"></i> -->
                </span>
            </div>
            <div class="col-xs-5 col-sm-5 col-lg-5 col-md-5">
                <span class="block input-icon input-icon-right">
                    <input type="date" id="borndate" name="nik" class="width-100" />
                    <!-- <i class="ace-icon fa fa-check-circle"></i> -->
                </span>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-sm-6 col-xs-6 col-lg-6" style="margin-top: 10px;">
        <div class="form-group has-info">
            <label for="inputInfo" class="col-xs-3 col-sm-3 col-md-3 col-lg-3 control-label no-padding-right">Email</label>
            <div class="col-xs-9 col-sm-9 col-lg- col-md-9">
                <span class="block input-icon input-icon-right">
                    <input type="text" id="nik" name="numberPhone" class="width-100" placeholder="Email" />
                    <!-- <i class="ace-icon fa fa-check-circle"></i> -->
                </span>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-sm-6 col-xs-6 col-lg-6" style="margin-top: 10px;">
        <div class="form-group has-info">
            <label for="inputInfo" class="col-xs-3 col-sm-3 col-md-3 col-lg-3 control-label no-padding-right">HP/WA</label>
            <div class="col-xs-9 col-sm-9 col-lg- col-md-9">
                <span class="block input-icon input-icon-right">
                    <input type="text" id="nik" name="numberPhone" class="width-100" placeholder="No Hp/WA" />
                    <!-- <i class="ace-icon fa fa-check-circle"></i> -->
                </span>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-sm-6 col-xs-6 col-lg-6" style="margin-top: 10px;">
        <div class="form-group has-info">
            <label for="inputInfo" class="col-xs-3 col-sm-3 col-md-3 col-lg-3 control-label no-padding-right">HP/WA</label>
            <div class="col-xs-9 col-sm-9 col-lg- col-md-9">
                <span class="block input-icon input-icon-right">
                    <input type="text" id="nik" name="numberPhone" class="width-100" placeholder="No Hp/WA" />
                    <!-- <i class="ace-icon fa fa-check-circle"></i> -->
                </span>
            </div>
        </div>
    </div>
</div>



<?php
if ($employee['status_bpjs_kes'] == '1') {
    echo '<div class="pull-right"><span class="label">Aktif</span></div>';
} else {
    echo '<div class="pull-right"><span class="label label-danger">Tidak Aktif</span></div>';
}
?>

<div id="setting" class="tab-pane">
    <div class="space-10"></div>
    <form>
        <div class="form-group">
            <label class="col-sm-3 control-label no-padding-right" for="form-field-pass1">New Password</label>
            <div class="col-sm-9">
                <input type="password" id="form-field-pass1" style="margin-bottom: 10px;" />
            </div>
        </div>
        <div class="space-4"></div>
        <div class="form-group">
            <label class="col-sm-3 control-label no-padding-right" for="form-field-pass2">Confirm Password</label>
            <div class="col-sm-9">
                <input type="password" id="form-field-pass2" />
            </div>
        </div>
    </form>
</div>

<li>
    <a data-toggle="tab" href="#setting">
        <i class="blue ace-icon fa fa-key bigger-120"></i>
        Password
    </a>
</li>


//cara ngekspor excel
require APPPATH . 'third_party/PHPExcel/Classes/PHPExcel.php';
require APPPATH . 'third_party/PHPExcel/Classes/PHPExcel/Writer/Excel2007.php';

$object = new PHPExcel();

$object->getProperties()->setCreator("PT PNS");
$object->getProperties()->setLastModifiedBy("PT PNS");
$object->getProperties()->setTitle("Data Classifications");
$object->setActiveSheetIndex(0);

$object->getActiveSheet()->setCellValue('A1', 'No');
$object->getActiveSheet()->setCellValue('B1', 'Classification Name');
$object->getActiveSheet()->setCellValue('C1', 'Salary');
$object->getActiveSheet()->setCellValue('D1', 'Meal Allowances');
$object->getActiveSheet()->setCellValue('E1', 'Transport Allowances');
$object->getActiveSheet()->setCellValue('F1', 'OT Rate');
$object->getActiveSheet()->setCellValue('G1', 'Invoice Rate');
$object->getActiveSheet()->setCellValue('H1', 'Premi');

$baris = 2;
$no = 1;

foreach ($data['classification'] as $class) {
$object->getActiveSheet()->setCellValue('A2', $baris, $no++);
$object->getActiveSheet()->setCellValue('B2', $baris, $class->name);
$object->getActiveSheet()->setCellValue('C2', $baris, $class->salary);
$object->getActiveSheet()->setCellValue('D2', $baris, $class->meal_allo);
$object->getActiveSheet()->setCellValue('E2', $baris, $class->transport);
$object->getActiveSheet()->setCellValue('F2', $baris, $class->ot_rate);
$object->getActiveSheet()->setCellValue('G2', $baris, $class->invoice_rate);
$object->getActiveSheet()->setCellValue('H2', $baris, $class->premi);

$baris++;
}
$filename = "Classifications Data" . '.xlsx';
$object->getActiveSheet()->setTitle("Classifications Data");
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="' . $filename . '"');
header('Cache-Control: max-age=0');

$writer = PHPExcel_IOFactory::createwriter($object, 'Excel2007');
$writer->save('php://output');

exit;


<script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>
<script>
    $(function() {
        $.ajaxSetup({
            type: 'POST',
            url: '<?= base_url('admin/ambildata') ?>',
            cache: false
        });
        $("#cari").change(function() {
            var value = $(this).val();
            if (value > 0) {
                $.ajax({
                    data: {
                        modul: 'cari2',
                        id: value
                    },
                    success: function(respon) {
                        $("#cari2").html(respon);
                    }
                });
            }
        });
    });
</script>

<div class="input-group col-xs-8">
    <select class="chosen-select form-control" data-placeholder="Choose Category" name="cari2" id="cari2">
        <option value=""></option>

    </select>
    <span class="input-group-btn">
        <button type="submit" class="btn btn-inverse btn-white">
            <span class="ace-icon fa fa-search icon-on-right bigger-90"></span>
            Search
        </button>
    </span>
</div>