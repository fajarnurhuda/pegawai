<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Employee</title>
    <link rel="icon" href="<?= base_url() ?>assets/Logo.png" sizes="32x32">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>

<body>
    Print Date : <?= date('d F Y') ?>
    <center>
        <h2>PT. PNS</h2>
    </center>
    <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <th class="center" width="5%">
                    #
                </th>
                <th class="center" width="25%">Name</th>
                <th class="center" width="12%">Kronos</th>
                <th class="center" width="10%">Phone</th>
                <th class="center" width="10%">PNS ID</th>
                <th class="center" width="10%">Classification</th>
                <th class="center" width="10%">Department</th>
                <th class="center" width="10%">No SAP</th>
                <th class="center" width="10%">Status</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            foreach ($employee as $emp) : ?>
                <tr>
                    <td class="center"><?= $no++ ?></td>
                    <td class="center"><?= $emp['employee_name'] ?></td>
                    <td class="center"><?= $emp['kronos_no'] ?></td>
                    <td class="center"><?= $emp['phoneNumber'] ?></td>
                    <td class="center"><?= $emp['pns_id'] ?></td>
                    <td class="center"><?= $emp['name'] ?></td>
                    <td class="center"><?= $emp['department_name'] ?></td>
                    <td class="center"><?= $emp['no_sap'] ?></td>
                    <td class="center"><?= $emp['aktif'] ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>