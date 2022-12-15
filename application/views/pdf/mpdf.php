<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Classifications</title>
    <link rel="icon" href="<?= base_url() ?>assets/Logo.png" sizes="32x32">
    <!-- Latest compiled and minified CSS -->
</head>

<body>
    Print Date : <?= date('d F Y') ?>
    <h2>PT. PNS</h2>

    <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <th style="text-align: left;" width="5%">
                    No.
                </th>
                <th style="text-align: left;" width="25%">Classification Name</th>
                <th class="center" width="12%">Salary</th>
                <th class="center" width="10%">Meal Allo</th>
                <th class="center" width="10%">Transport</th>
                <th class="center" width="10%">OT Rate</th>
                <th class="center" width="10%">Inv Rate</th>
                <th class="center" width="10%">Premi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            foreach ($classification as $cla) : ?>
                <tr>
                    <td class="center"><?= $no++ ?></td>
                    <td class="center"><?= $cla['name'] ?></td>
                    <td style="text-align: center;"><?= number_format($cla['salary'], 0); ?></td>
                    <td style="text-align: center;"><?= number_format($cla['meal_allo'], 0); ?></td>
                    <td style="text-align: center;"><?= number_format($cla['transport'], 0); ?></td>
                    <td style="text-align: center;"><?= number_format($cla['ot_rate'], 0); ?></td>
                    <td style="text-align: center;"><?= number_format($cla['invoice_rate'], 0); ?></td>
                    <td style="text-align: center;"><?= number_format($cla['premi'], 0); ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>