<div>
    <table id="dynamic-table" class="table table-striped table-bordered table-hover">
        <thead>
            <tr>
                <th class="center">
                    #
                </th>
                <th class="center">PNS ID</th>
                <th class="center">NIK</th>
                <th class="center">Name</th>
                <th class="center">Phone</th>
                <th class="center">Email</th>
                <th class="center">Status</th>
                <th class="center">Action</th>
            </tr>
        </thead>

        <tbody>
            <?php
            $no = 1;
            foreach ($employee as $emp) : ?>
                <tr>
                    <td class="center">
                        <?= $no++ ?>
                    </td>
                    <td>
                        <?= $emp['pns_id'] ?>
                    </td>
                    <td>
                        <?= $emp['nik'] ?>
                    </td>
                    <td>
                        <?= $emp['employee_name'] ?>
                    </td>
                    <td>
                        <?= $emp['phoneNumber'] ?>
                    </td>
                    <td>
                        <?= $emp['email'] ?>
                    </td>
                    <td>
                        <?= $emp['status'] ?>
                    </td>
                    <td>
                        <div class="hidden-sm hidden-xs action-buttons">

                            <a class="green" href="<?= base_url('admin/employee_cetak/' . $emp['id']) ?>" target="_blank">
                                <i class="ace-icon fa fa-print bigger-130"></i>
                            </a>

                        </div>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <form action="<?= base_url() ?>admin/cetakdata" method="POST">
        <input type="hidden" value="<?= $department ?>" name="department">
        <input type="hidden" value="<?= $classification ?>" name="classification">
        <input type="hidden" value="<?= $aktif ?>" name="aktif">
        <button class="btn btn-white btn-info btn-bold pull-right" type="submit" name="submit" style="margin-top: 3px;" target="_blank">
            <i class="ace-icon fa fa-print bigger-120 blue"></i>
            Print
        </button>
        <button class="btn btn-white btn-primary btn-bold pull-right" type="submit" name="submit" style="margin-top: 3px; margin-right: 3px;" target="_blank">
            <i class="ace-icon fa fa-backward bigger-120 blue"></i>
            Back
        </button>
    </form>
</div>
</div>
</div>
<!-- PAGE CONTENT ENDS -->
</div><!-- /.col -->
</div><!-- /.row -->
</div><!-- /.page-content -->
</div>
</div><!-- /.main-content -->