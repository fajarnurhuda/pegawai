<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta charset="utf-8" />
    <title>Detail Employee</title>
    <link rel="icon" href="<?= base_url() ?>/assets/favicon.png" sizes="32x32">

    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

    <!-- bootstrap & fontawesome -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/stylesendiri.css" />
    <script src="<?= base_url() ?>assets/js/ace-extra.min.js"></script>
</head>

<body>
    <div class="row">
        <div class="col-xs-12 col-sm-12" style="text-align:center;">
            <div class="col-xs-12 col-sm-3 center">
                <span class="profile-picture">
                    <?php
                        if ($employee['foto'] == '') : ?>
                            <img class="editable img-responsive" src="<?= base_url() ?>assets/employee/favicon.png" width="10%" />
                        <?php else : ?>
                            <img class="editable img-responsive" src="<?= base_url() ?>assets/employee/<?= $employee['foto'] ?>" />
                        <?php endif; ?>
                </span>
            </div><!-- /.col -->
            <br>
            <div class="col-xs-12 col-sm-12 col-md-12 label label-lg">
                <b>Informasi Pegawai</b>
            </div>
            <table class="table table-striped" style="font-size: 10pt;">
                <tbody>
                    <tr>
                        <td>Nama Lengkap </td>
                        <td>: <?= $employee['employee_name'] ?></td>
                        <td width="20%">Nama Panggilan </td>
                        <td>: <?= $employee['call_name'] ?></td>
                    </tr>
                    <tr>
                        <td>Jenis Kelamin </td>
                        <td><?php
                            if ($employee['jk'] == '0') {
                                echo ' : Laki Laki';
                            } else {
                                echo ' : Perempuan';
                            }
                            ?></td>
                        <td>TTL </td>
                        <td>: <?= $employee['bornplace'] ?>, <?= date('d M Y', strtotime($employee['borndate'])) ?></td>
                    </tr>
                    <tr>
                        <td>Gol. Darah </td>
                        <td>: <?= $employee['gol_dar'] ?></td>
                        <td>Agama </td>
                        <td>: <?= $employee['agama'] ?></td>
                    </tr>
                    <tr>
                        <td>Suku </td>
                        <td>: <?= $employee['suku'] ?></td>
                        <td>Status Pernikahan </td>
                        <td>: <?= $employee['status_kawin'] ?></span> / <?= $employee['tanggungan'] ?></td>
                    </tr>
                    <tr>
                        <td>No Hp </td>
                        <td>: <?= $employee['phoneNumber'] ?></td>
                        <td>WA </td>
                        <td>: <?= $employee['waNumber'] ?></td>
                    </tr>
                    <tr>
                        <td>Email </td>
                        <td>: <?= $employee['email'] ?></td>
                        <td>Pendidikan Akhir : </td>
                        <td>: <?= $employee['pend_akhir'] ?></td>
                    </tr>
                    <tr>
                        <td>Jurusan </td>
                        <td>: <?= $employee['jurusan'] ?></td>
                        <td>Tahun Lulus </td>
                        <td>: <?= $employee['tahun_lulus'] ?></td>
                    </tr>
                    <tr>
                        <td>Nama Sekolah </td>
                        <td>: <?= $employee['nama_sekolah'] ?></td>
                        <td>Kota Asal Sekolah </td>
                        <td>: <?= $employee['kota_asal_sekolah'] ?></td>
                    </tr>
                    <tr>
                        <td>Ukuran Baju </td>
                        <td>: <?= $employee['ukuran_baju'] ?></td>
                        <td>Ukuran Sepatu </td>
                        <td>: <?= $employee['ukuran_sepatu'] ?></td>
                    </tr>
                    <tr>
                        <td>NPWP </td>
                        <td>: <?= $employee['npwp'] ?></td>
                        <td>Akun Bank </td>
                        <td>: <?= $employee['mandiri'] ?></td>
                    </tr>
                    <tr>
                        <td>BPJS Kesehatan </td>
                        <td>: <?= $employee['bpjs_kes'] ?></td>
                        <td>BPJS Ketenagakerjaan </td>
                        <td>: <?= $employee['bpjs_tk'] ?></td>
                    </tr>
                </tbody>
            </table>
            <br>
            <div class="col-xs-12 col-sm-12 col-md-12 label label-lg">
                <b>Detail Vaksin</b>
            </div>
            <table class="table table-striped" style="font-size: 10pt;">
                <tbody>
                    <tr>
                        <td width="22%">Tanggal Vaksin 1 </td>
                        <td width="30%">: <?= date('d M Y', strtotime($employee['tgl_vaksin_1'])) ?></td>
                        <td>Tempat Vaksin 1 </td>
                        <td>: <?= $employee['tmpt_vaksin_1'] ?></td>
                    </tr>
                    <tr>
                        <td>Tanggal Vaksin 2 </td>
                        <td>: <?= date('d M Y', strtotime($employee['tgl_vaksin_2'])) ?></td>
                        <td>Tempat Vaksin 2 </td>
                        <td>: <?= $employee['tmpt_vaksin_2'] ?></td>
                    </tr>
                    <tr>
                        <td>Tanggal Vaksin 3 </td>
                        <td>: <?= date('d M Y', strtotime($employee['tgl_vaksin_3'])) ?></td>
                        <td>Tempat Vaksin 3 </td>
                        <td>: <?= $employee['tmpt_vaksin_3'] ?></td>
                    </tr>
                    <tr>
                        <td>Nama Vaksin 1 & 2 </td>
                        <td>: <?= $employee['nama_vaksin'] ?></td>
                        <td>Nama Vaksin 3 </td>
                        <td>: <?= $employee['nama_vaksin'] ?></td>
                    </tr>

                </tbody>
            </table>
            <br>
            <div class="col-xs-12 col-sm-12 col-md-12 label label-lg">
                <b>Detail Lain</b>
            </div>
            <table class="table table-striped" style="font-size: 10pt;">
                <tbody>
                    <tr>
                        <td width="22%">NO NIK </td>
                        <td width="30%">: <?= $employee['nik'] ?></td>
                        <td>NO KK </td>
                        <td>: <?= $employee['no_kk'] ?></td>
                    </tr>
                    <tr>
                        <td>Alamat KTP </td>
                        <td>: <?= $employee['address_ktp'] ?></td>
                        <td>Alamat Batam </td>
                        <td>: <?= $employee['address_btm'] ?></td>
                    </tr>
                    <tr>
                        <td>RT/RW KTP </td>
                        <td>: <?= $employee['rt_ktp'] ?> / <?= $employee['rw_ktp'] ?></td>
                        <td>RT/RW Batam </td>
                        <td>: <?= $employee['rt_btm'] ?> / <?= $employee['rw_btm'] ?></td>
                    </tr>
                    <tr>
                        <td>Kelurahan KTP </td>
                        <td>: <?= $employee['kel_ktp'] ?></td>
                        <td>Kelurahan Batam </td>
                        <td>: <?= $employee['kel_btm'] ?></td>
                    </tr>
                    <tr>
                        <td>Kecamatan KTP </td>
                        <td>: <?= $employee['kec_ktp'] ?></td>
                        <td>Kecamatan Batam </td>
                        <td>: <?= $employee['kec_btm'] ?></td>
                    </tr>
                    <tr>
                        <td>Kab / Kota KTP </td>
                        <td>: <?= $employee['kab_ktp'] ?></td>
                        <td>Kode Pos Batam </td>
                        <td>: <?= $employee['kode_pos'] ?></td>
                    </tr>
                    <tr>
                        <td>Provinsi KTP </td>
                        <td>: <?= $employee['prov_ktp'] ?></td>
                    </tr>
                </tbody>
            </table>
        </div><!-- /.col -->
    </div><!-- /.row -->

</body>

</html>