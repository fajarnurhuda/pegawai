<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data History</title>
    <link rel="icon" href="<?= base_url() ?>assets/Logo.png" sizes="32x32">
    <!-- Latest compiled and minified CSS -->
</head>
<style>
    .table {
        border: 1px solid black;
    }

    .table tr td {
        border-top: 1px solid black;
        border-bottom: 1px solid black;
    }
</style>

<body>

    <h2>Data History PT. PNS / <?= date('d F Y') ?></h2>

    <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <th style="text-align: left;">
                    No.
                </th>
                <th style="text-align: left;">PNS ID</th>
                <th style="text-align: left;">Employee Name</th>
                <th style="text-align: left;">Position</th>
                <th style="text-align: left;">Date IN</th>
                <th style="text-align: left;">Date OUT</th>
                <th style="text-align: left;">Remark</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            foreach ($history as $h) : ?>
                <tr>
                    <td class="center"><?= $no++ ?></td>
                    <td class="center"><?= $h['pns_id'] ?></td>
                    <td class="center"><?= $h['employee_name'] ?></td>
                    <td class="center"><?= $h['position'] ?></td>
                    <td class="center"><?= date('d M Y', strtotime($h['date_in'])) ?></td>
                    <td class="center"><?= date('d M Y', strtotime($h['date_out'])) ?></td>
                    <td class="center"><?= $h['remark'] ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>