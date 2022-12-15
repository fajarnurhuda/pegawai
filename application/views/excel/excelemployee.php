<?php
header("Content-type:application/octet-stream/");
header("Content-Disposition:attachment; filename=$title.xls");
header("Pragma: no-cache");
header("Expire: 0");
?>

<h3>Data Employee PT. PNS</h3>
<table border="1" width="100%">
    <thead>
        <th>No</th>
        <th class="center">PNS ID</th>
        <th class="center">NO SAP</th>
        <th class="center">Name</th>
        <th class="center">No Kronos</th>
        <th class="center">Classification</th>
        <th class="center">Department</th>
        <th class="center">Join Date</th>
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