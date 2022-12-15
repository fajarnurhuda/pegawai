<?php
header("Content-type:application/octet-stream/");
header("Content-Disposition:attachment; filename=$title.xls");
header("Pragma: no-cache");
header("Expire: 0");
?>

<h3>Data Classification PT. PNS</h3>
<table border="1" width="100%">
    <thead>
        <th>No</th>
        <th>Classification Name</th>
        <th>Salary</th>
        <th>Meal Allowances</th>
        <th>Transport Allowances</th>
        <th>OT Rate</th>
        <th>Invoice Rate</th>
        <th>Premi</th>
    </thead>
    <tbody>
        <?php
        $no = 1;
        foreach ($classification as $cla) : ?>
            <tr>
                <td class="center"><?= $no++ ?></td>
                <td class="center"><?= $cla['name'] ?></td>
                <td class="center"><?= number_format($cla['salary'], 0); ?></td>
                <td class="center"><?= number_format($cla['meal_allo'], 0); ?></td>
                <td class="center"><?= number_format($cla['transport'], 0); ?></td>
                <td class="center"><?= number_format($cla['ot_rate'], 0); ?></td>
                <td class="center"><?= number_format($cla['invoice_rate'], 0); ?></td>
                <td class="center"><?= number_format($cla['premi'], 0); ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>