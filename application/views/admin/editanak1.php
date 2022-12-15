<div class="col-xs-12 col-sm-6">
    <div class="profile-user-info">
        <h4 class="blue">
            <span class="middle">Anak Pertama</span>
        </h4>
        <div class="profile-info-row">
            <div class="profile-info-name"> Nama Lengkap</div>
            <div class="profile-info-value">
                <span><input type="text" id="nama_anak1" name="nama_anak1" class="width-100" placeholder="Nama Lengkap" value="<?= $employee['nama_anak1'] ?>" /></span>
            </div>
        </div>

        <div class="profile-info-row">
            <div class="profile-info-name"> Jenis Kelamin</div>
            <div class="profile-info-value">
                <span>
                    <select class="form-control" id="form-field-select-1" name="jk_anak1">
                        <option <?php if ($employee['jk_anak1'] == '0') {
                                    echo 'selected="selected"';
                                } ?> value="0">Laki Laki</option>
                        <option <?php if ($employee['jk_anak1'] == '1') {
                                    echo 'selected="selected"';
                                } ?> value="1">Perempuan</option>
                    </select>
                </span>
            </div>
        </div>

        <div class="profile-info-row">
            <div class="profile-info-name"> Tempat Lahir </div>
            <div class="profile-info-value">
                <span><input type="text" id="tmpt_lahir_anak1" name="tmpt_lahir_anak1" class="width-100" value="<?= $employee['tmpt_lahir_anak1'] ?>" placeholder="Tempat Lahir" /></span>
            </div>
        </div>

        <div class="profile-info-row">
            <div class="profile-info-name"> Tanggal Lahir</div>
            <div class="profile-info-value">
                <span><input type="date" id="tgl_lahir_anak1" name="tgl_lahir_anak1" class="width-100" placeholder="Tanggal Lahir" value="<?= $employee['tgl_lahir_anak1'] ?>" /></span>
            </div>
        </div>

        <div class="profile-info-row">
            <div class="profile-info-name"> NIK </div>
            <div class="profile-info-value">
                <span><input type="number" id="nik_anak1" name="nik_anak1" class="width-100" placeholder="NIK" value="<?= $employee['nik_anak1'] ?>" onkeypress="return event.charCode >= 48 && event.charCode <=57" /></span>
            </div>
        </div>

        <div class="profile-info-row">
            <div class="profile-info-name" style="color: white;"> No Hp </div>
            <div class="profile-info-value">
                <span></span>
            </div>
        </div>

        <div class="space-30"></div>

        <div class="profile-info-row">
            <div class="profile-info-name"> Tanggal Vaksin 1 </div>
            <div class="profile-info-value">
                <span><input type="date" id="tgl_v1_anak1" name="tgl_v1_anak1" class="width-100" placeholder="Tanggal Vaksin 1" value="<?= $employee['tgl_v1_anak1'] ?>" /></span>
            </div>
        </div>

        <div class="profile-info-row">
            <div class="profile-info-name"> Tempat Vaksin 1 </div>
            <div class="profile-info-value">
                <span><input type="text" id="tmpt_v1_anak1" name="tmpt_v1_anak1" class="width-100" placeholder="Tempat Vaksin 1" value="<?= $employee['tmpt_v1_anak1'] ?>" /></span>
            </div>
        </div>

        <div class="profile-info-row">
            <div class="profile-info-name"> Tanggal Vaksin 2 </div>
            <div class="profile-info-value">
                <span><input type="date" id="tgl_v2_anak1" name="tgl_v2_anak1" class="width-100" placeholder="Tanggal Vaksin 2" value="<?= $employee['tgl_v2_anak1'] ?>" /></span>
            </div>
        </div>

        <div class="profile-info-row">
            <div class="profile-info-name"> Tempat Vaksin 2 </div>
            <div class="profile-info-value">
                <span><input type="text" id="tmpt_v2_anak1" name="tmpt_v2_anak1" class="width-100" placeholder="Tempat Vaksin 2" value="<?= $employee['tmpt_v2_anak1'] ?>" /></span>
            </div>
        </div>

       <div class="profile-info-row">
            <div class="profile-info-name"> Nama Vaksin </div>
            <div class="profile-info-value">
                <span>
                    <select class="chosen-select form-control" name="jenis_vaksin_anak1">
                         <option <?php if ($employee['jenis_vaksin_anak1'] == '0') {
                                    echo 'selected="selected"';
                                } ?> value="0">Pilih Vaksin</option>
                        <option <?php if ($employee['jenis_vaksin_anak1'] == '1') {
                                    echo 'selected="selected"';
                                } ?> value="1">Sinovac</option>
                        <option <?php if ($employee['jenis_vaksin_anak1'] == '2') {
                                    echo 'selected="selected"';
                                } ?> value="2">AstraZeneca</option>
                        <option <?php if ($employee['jenis_vaksin_anak1'] == '3') {
                                    echo 'selected="selected"';
                                } ?> value="3">Sinopharm</option>
                        <option <?php if ($employee['jenis_vaksin_anak1'] == '4') {
                                    echo 'selected="selected"';
                                } ?> value="4">Moderna</option>
                        <option <?php if ($employee['jenis_vaksin_anak1'] == '5') {
                                    echo 'selected="selected"';
                                } ?> value="5">Pfizer</option>
                        <option <?php if ($employee['jenis_vaksin_anak1'] == '6') {
                                    echo 'selected="selected"';
                                } ?> value="6">Sputnik V</option>
                        <option <?php if ($employee['jenis_vaksin_anak1'] == '7') {
                                    echo 'selected="selected"';
                                } ?> value="7">Janssen</option>
                        <option <?php if ($employee['jenis_vaksin_anak1'] == '8') {
                                    echo 'selected="selected"';
                                } ?> value="8">Convidecia</option>
                    </select>
                </span>
            </div>
        </div>

        </div>
    <div class="hr hr-8 dotted"></div>
</div><!-- /.col -->