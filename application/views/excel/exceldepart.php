<?php
header("Content-type:application/octet-stream/");
header("Content-Disposition:attachment; filename=$title.xls");
header("Pragma: no-cache");
header("Expire: 0");
?>

<h3>Data Department PT. PNS</h3>
<table border="1" width="100%">
    <thead>
        <th>No</th>
        <th>Department Name</th>
    </thead>
    <tbody>
        <?php
        $no = 1;
        foreach ($department as $depart) : ?>
            <tr>
                <td class="center"><?= $no++ ?></td>
                <td class="center"><?= $depart['department_name'] ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>