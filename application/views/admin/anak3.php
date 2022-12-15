<div class="col-xs-12 col-sm-6">
    <h4 class="blue" style="text-align:center;">
        <span class="middle">Anak Ketiga</span>
    </h4>
    <div class="profile-user-info profile-user-info-striped">
        <div class="profile-info-row">
            <div class="profile-info-name"> Nama </div>
            <div class="profile-info-value">
                <span>
                    <?php if ($employee['nama_anak3'] == '0' || $employee['nama_anak3'] == '') : ?>
                       -
                    <?php else : ?>
                      <?= $employee['nama_anak3'] ?>
                    <?php endif; ?>
                </span>
            </div>
        </div>

        <div class="profile-info-row">
            <div class="profile-info-name"> Jenis Kelamin </div>
            <div class="profile-info-value">
                <span>
                    <span>
                        <?php
                        if ($employee['jk_anak3'] == '0') {
                            echo 'Laki Laki';
                        } else {
                            echo 'Perempuan';
                        }
                        ?>
                    </span>
                </span>
            </div>
        </div>

        <div class="profile-info-row">
            <div class="profile-info-name">No NIK </div>
            <div class="profile-info-value">
                <span>
                    <?php if ($employee['nik_anak3'] == '0' || $employee['nik_anak3'] == '') : ?>
                       -
                    <?php else : ?>
                      <?= $employee['nik_anak3'] ?>
                    <?php endif; ?>
                </span>
            </div>
        </div>

        <div class="profile-info-row">
            <div class="profile-info-name"> Status Kelahiran</div>
            <div class="profile-info-value">
                <span>
                    <?php if ($employee['tmpt_lahir_anak3'] == '0' || $employee['tmpt_lahir_anak3'] == '') : ?>
                       -
                    <?php else : ?>
                      <?= $employee['tmpt_lahir_anak3'] ?> / <?= date('d M Y', strtotime($employee['tgl_lahir_anak3'])) ?>
                    <?php endif; ?>
                </span>
            </div>
        </div>

        <div class="profile-info-row">
            <div class="profile-info-name"> Tanggal Vaksin 1 </div>
            <div class="profile-info-value">
                <span>
                    <?php if ($employee['tmpt_v1_anak3'] == '0' || $employee['tmpt_v1_anak3'] == '' ) : ?>
                       -
                    <?php else : ?>
                       <?= date('d M Y', strtotime($employee['tgl_v1_anak3'])) ?>
                    <?php endif; ?>
                </span>
            </div>
        </div>

        <div class="profile-info-row">
            <div class="profile-info-name"> Tempat Vaksin 1 </div>
            <div class="profile-info-value">
                <span>
                    <?php if ($employee['tmpt_v1_anak3'] == '0' || $employee['tmpt_v1_anak3'] == '' ) : ?>
                       -
                    <?php else : ?>
                       <?= $employee['tmpt_v1_anak3'] ?>
                    <?php endif; ?>
                </span>
            </div>
        </div>

        <div class="profile-info-row">
            <div class="profile-info-name"> Tanggal Vaksin 2</div>
            <div class="profile-info-value">
                <span>
                    <?php if ($employee['tmpt_v2_anak3'] == '0' || $employee['tmpt_v2_anak3'] == '' ) : ?>
                       -
                    <?php else : ?>
                       <?= date('d M Y', strtotime($employee['tgl_v2_anak3'])) ?>
                    <?php endif; ?>
                </span>
            </div>
        </div>

        <div class="profile-info-row">
            <div class="profile-info-name"> Tempat Vaksin 2 </div>
            <div class="profile-info-value">
                <span>
                    <?php if ($employee['tmpt_v2_anak3'] == '0' || $employee['tmpt_v2_anak3'] == '' ) : ?>
                       -
                    <?php else : ?>
                       <?= $employee['tmpt_v2_anak3'] ?>
                    <?php endif; ?>
                </span>
            </div>
        </div>

        <div class="profile-info-row">
            <div class="profile-info-name"> Nama Vaksin </div>
            <div class="profile-info-value">
                <span>
                    <?php if (!empty($v3)) : ?>
                        <?= $v3['nama_vaksin'] ?>
                    <?php else : ?>
                        Belum Vaksin
                    <?php endif; ?></span>
            </div>
        </div>

        </div>
    
</div><!-- /.row -->