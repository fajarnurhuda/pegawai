 <?php
    $mo = date('m');
    $ma = date('m') + 1;
    $rangetgl = date_range('2022-' . $mo . '-16', '2022-' . $ma . '-15');
    $susun = explode(",", $coba['timesheet']);
    foreach ($rangetgl as $ra) : ?>
     <tr>
         <td><?= date('l', strtotime($ra)) . "\n" ?> </td>
         <td><?= date('d M Y', strtotime($ra)) . "\n" ?> </td>
         <?php
                foreach ($susun as $su) {
                    $pecah = explode("|", $su);

                    echo '<td>' . $pecah[0] . '</td>';
                } ?>
     </tr>
 <?php endforeach; ?>


 <tr>
     <td colspan="6">Detail of Gross Income for PPh 21 Calculation :</td>
 </tr>
 <tr>
     <td colspan="5">Gross Salary</td>
     <td colspan="1">16.044.000</td>
 </tr>
 <tr>
     <td colspan="5">THR</td>
     <td colspan="1">-</td>
 </tr>
 <tr>
     <td colspan="5">JKK/JKM BP Jamsostek & BPJS Kes ( PNS)</td>
     <td colspan="1">238.000</td>
 </tr>
 <tr>
     <td colspan="5">Total</td>
     <td colspan="1">16.238.000</td>
 </tr>

 <div class="profile-info-row">
     <div class="profile-info-name"> Tanggal Keluar </div>
     <div class="profile-info-value">
         <span><input type="date" id="tgl_out" name="tgl_out" class="width-100" placeholder="Tanggal Keluar" value="<?= $employee['tgl_out'] ?>" /></span>
         <small>*Isi jika status Eks Karyawan</small>
     </div>
 </div>

 <div class="profile-info-row">
     <div class="profile-info-name"> Alasan </div>
     <div class="profile-info-value">
         <span><textarea placeholder="Alasan" name="reason" style="width: 330px; height:100px"><?= $employee['reason'] ?></textarea></span>
         <small>*Isi jika status Eks Karyawan</small>
     </div>
 </div>