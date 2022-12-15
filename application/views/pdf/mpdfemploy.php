<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Employee</title>
    <link rel="icon" href="<?= base_url() ?>assets/Logo.png" sizes="32x32">
    <!-- Latest compiled and minified CSS -->
</head>

<body>
    Print Date : <?= date('d F Y') ?>
    <h2>PT. PNS</h2>

    <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>No</th>
                <th class="center">PNS ID</th>
                <th class="center">NO SAP</th>
                <th class="center">Name</th>
                <th class="center">No Kronos</th>
                <th class="center">Classification</th>
                <th class="center">Department</th>
                <th class="center">Join Date</th>
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
                        <?= $emp['no_sap'] ?>
                    </td>
                    <td>
                        <?= $emp['employee_name'] ?>
                    </td>
                    <td>
                        <?= $emp['kronos_no'] ?>
                    </td>
                    <td>
                        <?= $emp['name'] ?>
                    </td>
                    <td>
                        <?= $emp['department_name'] ?>
                    </td>
                    <td>
                        <?= $emp['tanggal_join'] ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>