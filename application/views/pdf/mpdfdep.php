<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Department</title>
    <link rel="icon" href="<?= base_url() ?>assets/Logo.png" sizes="32x32">
    <!-- Latest compiled and minified CSS -->
</head>

<body>
    Print Date : <?= date('d F Y') ?>
    <h2>PT. PNS</h2>

    <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <th style="text-align: left;" width="15%">
                    No.
                </th>
                <th style="text-align: left;">Department Name</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            foreach ($department as $dep) : ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $dep['department_name'] ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>