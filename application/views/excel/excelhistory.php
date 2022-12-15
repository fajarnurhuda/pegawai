<?php
header("Content-type:application/octet-stream/");
header("Content-Disposition:attachment; filename=$title.xls");
header("Pragma: no-cache");
header("Expire: 0");
?>

<h3>Data History PT. PNS / <?= date('d F Y') ?></h3>
<table border="1" width="100%">
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