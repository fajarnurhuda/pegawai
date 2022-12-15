<div class="main-content">
	<div class="main-content-inner">
		<div class="breadcrumbs ace-save-state" id="breadcrumbs">
			<ul class="breadcrumb">
				<li>
					<i class="ace-icon fa fa-home home-icon"></i>
					<a href="#">Home</a>
				</li>
				<li class="active"><?= $title; ?></li>
			</ul><!-- /.breadcrumb -->
		</div>

		<div class="page-content">
			<div class="ace-settings-container" id="ace-settings-container">
				<div class="btn btn-app btn-xs btn-warning ace-settings-btn" id="ace-settings-btn">
					<i class="ace-icon fa fa-cog bigger-130"></i>
				</div>

				<div class="ace-settings-box clearfix" id="ace-settings-box">
					<div class="pull-left width-50">
						<div class="ace-settings-item">
							<div class="pull-left">
								<select id="skin-colorpicker" class="hide">
									<option data-skin="no-skin" value="#438EB9">#438EB9</option>
									<option data-skin="skin-1" value="#222A2D">#222A2D</option>
									<option data-skin="skin-2" value="#C6487E">#C6487E</option>
									<option data-skin="skin-3" value="#D0D0D0">#D0D0D0</option>
								</select>
							</div>
							<span>&nbsp; Choose Skin</span>
						</div>

						<div class="ace-settings-item">
							<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-navbar" autocomplete="off" />
							<label class="lbl" for="ace-settings-navbar"> Fixed Navbar</label>
						</div>

						<div class="ace-settings-item">
							<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-sidebar" autocomplete="off" />
							<label class="lbl" for="ace-settings-sidebar"> Fixed Sidebar</label>
						</div>

						<div class="ace-settings-item">
							<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-breadcrumbs" autocomplete="off" />
							<label class="lbl" for="ace-settings-breadcrumbs"> Fixed Breadcrumbs</label>
						</div>

						<div class="ace-settings-item">
							<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-rtl" autocomplete="off" />
							<label class="lbl" for="ace-settings-rtl"> Right To Left (rtl)</label>
						</div>

						<div class="ace-settings-item">
							<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-add-container" autocomplete="off" />
							<label class="lbl" for="ace-settings-add-container">
								Inside
								<b>.container</b>
							</label>
						</div>
					</div><!-- /.pull-left -->

					<div class="pull-left width-50">
						<div class="ace-settings-item">
							<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-hover" autocomplete="off" />
							<label class="lbl" for="ace-settings-hover"> Submenu on Hover</label>
						</div>

						<div class="ace-settings-item">
							<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-compact" autocomplete="off" />
							<label class="lbl" for="ace-settings-compact"> Compact Sidebar</label>
						</div>

						<div class="ace-settings-item">
							<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-highlight" autocomplete="off" />
							<label class="lbl" for="ace-settings-highlight"> Alt. Active Item</label>
						</div>
					</div><!-- /.pull-left -->
				</div><!-- /.ace-settings-box -->
			</div><!-- /.ace-settings-container -->

			<div class="page-header">
				<h1>
					<?= $title; ?>
				</h1>
			</div><!-- /.page-header -->

			<div class="row">
				<div class="col-xs-12">
					<?php
					$announce = $this->session->flashdata('announce');
					if (!empty($announce)) {
						if ($announce == 'Berhasil menyimpan data') {
							echo '
                                        <div class="alert alert-success">
                                        ' . $announce . '
                                        </div>
                                    ';
						} else {
							echo '
                                        <div class="alert alert-danger">
                                        ' . $announce . '
                                        </div>
                                    ';
						}
					}
					?>
					<!-- PAGE CONTENT BEGINS -->
					<div class="clearfix"></div>
					<?= $this->session->flashdata('message'); ?>
					<form class="form-horizontal" method="POST" action="<?= base_url() ?>add/employee_add" enctype="multipart/form-data">
						<div class="clearfix">
							<div class="pull-right" style="margin-bottom: 10px;">
								<button class="btn btn-sm btn-primary" type="submit" name="submit"><i class="ace-icon fa fa-pencil align-top bigger-125"></i>
									Tambah
									<button class="btn btn-sm btn-info" type="reset" data-toggle="modal" data-target="#exampleModal">
										<i class="ace-icon fa fa-refresh align-top bigger-125"></i>
										Reset
									</button>
							</div>
						</div>
						<div id="user-profile-2" class="user-profile">
							<div class="tabbable">
								<ul class="nav nav-tabs padding-18">
									<li class="active">
										<a data-toggle="tab" href="#home">
											<i class="green ace-icon fa fa-user bigger-120"></i>
											Profil *
										</a>
									</li>

									<li class="">
										<a data-toggle="tab" href="#detail">
											<i class="green ace-icon fa fa-home bigger-120"></i>
											Detail *
										</a>
									</li>

									<li class="">
										<a data-toggle="tab" href="#familys">
											<i class="green ace-icon fa fa-users bigger-120"></i>
											Keluarga
										</a>
									</li>

									<li class="">
										<a data-toggle="tab" href="#parents">
											<i class="green ace-icon fa fa-heart bigger-120"></i>
											Orang Tua
										</a>
									</li>

									<li class="">
										<a data-toggle="tab" href="#emergency">
											<i class="green ace-icon fa fa-fire bigger-120"></i>
											Darurat
										</a>
									</li>

									<li>
										<a data-toggle="tab" href="#feed">
											<i class="green ace-icon fa fa-money bigger-120"></i>
											Keuangan
										</a>
									</li>

									<li>
										<a data-toggle="tab" href="#berkas">
											<i class="green ace-icon fa fa-file bigger-120"></i>
											Berkas
										</a>
									</li>

								</ul>

								<div class="tab-content no-border padding-24">
									<div id="home" class="tab-pane in active">
										<div class="row">
											<div class="col-xs-6 col-sm-6">

												<div class="profile-user-info">
													<div class="profile-info-row">
														<div class="profile-info-name"> Nama Lengkap * </div>
														<div class="profile-info-value">
															<span><input type="text" id="employee_name" name="employee_name" class="width-100" placeholder="Nama Lengkap" required /></span>
														</div>
													</div>

													<!--<div class="profile-info-row">-->
													<!--	<div class="profile-info-name"> Nama Depan * </div>-->
													<!--	<div class="profile-info-value">-->
													<!--		<input type="text" id="first_name" name="first_name" class="width-100" placeholder="Nama Depan" required />-->
													<!--	</div>-->
													<!--</div>-->

													<!--<div class="profile-info-row">-->
													<!--	<div class="profile-info-name"> Nama Belakang * </div>-->
													<!--	<div class="profile-info-value">-->
													<!--		<input type="text" id="last_name" name="last_name" class="width-100" placeholder="Nama Belakang" required />-->
													<!--	</div>-->
													<!--</div>-->

													<div class="profile-info-row">
														<div class="profile-info-name"> Nama Panggilan * </div>
														<div class="profile-info-value">
															<input type="text" id="call_name" name="call_name" class="width-100" placeholder="Nama Panggilan" required />
														</div>
													</div>

													<div class="profile-info-row">
														<div class="profile-info-name"> Jenis Kelamin *</div>
														<div class="profile-info-value">
															<span>
																<select class="form-control" id="form-field-select-1" name="jk">
																	<option value="0" selected>Laki Laki</option>
																	<option value="1">Perempuan</option>
																</select>
															</span>
														</div>
													</div>

													<div class="profile-info-row">
														<div class="profile-info-name"> Tempat Lahir * </div>
														<div class="profile-info-value">
															<span><input type="text" id="bornplace" name="bornplace" class="width-100" placeholder="Tempat Lahir" required /></span>
														</div>
													</div>

													<div class="profile-info-row">
														<div class="profile-info-name"> Tanggal Lahir * </div>
														<div class="profile-info-value">
															<span><input type="date" id="borndate" name="borndate" class="width-100" placeholder="Tanggal Lahir" required /></span>
														</div>
													</div>

													<div class="space-20"></div>

													<div class="profile-info-row">
														<div class="profile-info-name"> Golongan Darah *</div>
														<div class="profile-info-value">
															<span>
																<select class="form-control" id="form-field-select-1" name="gol_dar">
																	<option value="A" selected>A</option>
																	<option value="B">B</option>
																	<option value="O">O</option>
																	<option value="AB">AB</option>
																</select>
															</span>
														</div>
													</div>

													<div class="profile-info-row">
														<div class="profile-info-name"> Agama *</div>
														<div class="profile-info-value">
															<span>
																<select class="form-control" id="form-field-select-1" name="agama">
																	<option value="Islam" selected>Islam</option>
																	<option value="Protestan">Protestan</option>
																	<option value="Kristen">Kristen</option>
																	<option value="Hindu">Hindu</option>
																	<option value="Buddha">Buddha</option>
																	<option value="Konghucu">Konghucu</option>
																</select>
															</span>
														</div>
													</div>

													<div class="profile-info-row">
														<div class="profile-info-name"> Suku * </div>
														<div class="profile-info-value">
															<input type="text" id="suku" name="suku" class="width-100" placeholder="Suku" required />
														</div>
													</div>

													<div class="profile-info-row">
														<div class="profile-info-name"> Status Penikahan </div>
														<div class="profile-info-value">
															<span>
																<select class="form-control" id="status_kawin" name="status_kawin">
																	<option value="">Pilih Status Pernikahan</option>
																	<option value="S">Belum Menikah</option>
																	<option value="M">Menikah</option>
																	<option value="D">Cerai</option>
																</select>
															</span>
														</div>
													</div>

													<div class="profile-info-row">
														<div class="profile-info-name"> Jumlah Anak </div>
														<div class="profile-info-value">
															<span>
																<select class="form-control" id="tanggungan" name="tanggungan" onchange="getanak();">
																	<option value="0">0</option>
																	<option value="1">1</option>
																	<option value="2">2</option>
																	<option value="3">3</option>
																</select>
															</span>
														</div>
													</div>

													<div class="space-20"></div>

													<div class="profile-info-row">
														<div class="profile-info-name"> NO HP *</div>
														<div class="profile-info-value">
															<span><input type="text" id="phoneNumber" name="phoneNumber" class="width-100" placeholder="NO HP" required /></span>
														</div>
													</div>

													<div class="profile-info-row">
														<div class="profile-info-name"> NO WA *</div>
														<div class="profile-info-value">
															<span><input type="text" id="waNumber" name="waNumber" class="width-100" placeholder="NO WA" required /></span>
														</div>
													</div>

													<div class="profile-info-row">
														<div class="profile-info-name"> Email *</div>
														<div class="profile-info-value">
															<span><input type="text" id="email" name="email" class="width-100" placeholder="Email" required /></span>
														</div>
													</div>

												</div>
											</div>
											<div class="col-xs-6 col-sm-6">
												<div class="profile-user-info">
													<div class="profile-info-row">
														<div class="profile-info-name"> Pendidikan Akhir *</div>
														<div class="profile-info-value">
															<span><input type="text" id="pend_akhir" name="pend_akhir" class="width-100" placeholder="Pendidikan Akhir" required /></span>
														</div>
													</div>

													<div class="profile-info-row">
														<div class="profile-info-name"> Jurusan *</div>
														<div class="profile-info-value">
															<span><input type="text" id="jurusan" name="jurusan" class="width-100" placeholder="Jurusan" required /></span>
														</div>
													</div>

													<div class="profile-info-row">
														<div class="profile-info-name"> Tahun Kelulusan *</div>
														<div class="profile-info-value">
															<span><input type="number" id="tahun_lulus" name="tahun_lulus" class="width-100" placeholder="Tahun Kelulusan" required /></span>
														</div>
													</div>

													<div class="profile-info-row">
														<div class="profile-info-name"> Nama Sekolah *</div>
														<div class="profile-info-value">
															<span><input type="text" id="nama_sekolah" name="nama_sekolah" class="width-100" placeholder="Nama Sekolah" required /></span>
														</div>
													</div>

													<div class="profile-info-row">
														<div class="profile-info-name"> Kota Asal Sekolah *</div>
														<div class="profile-info-value">
															<span><input type="text" id="kota_asal_sekolah" name="kota_asal_sekolah" class="width-100" placeholder="Kota Asal Sekolah" required /></span>
														</div>
													</div>

													<div class="space-20"></div>

													<div class="profile-info-row">
														<div class="profile-info-name"> Ukuran Baju *</div>
														<div class="profile-info-value">
															<span><input type="number" id="ukuran_baju" name="ukuran_baju" class="width-100" placeholder="Ukuran Baju" required /></span>
														</div>
													</div>

													<div class="profile-info-row">
														<div class="profile-info-name"> Ukuran Sepatu *</div>
														<div class="profile-info-value">
															<span><input type="number" id="ukuran_sepatu" name="ukuran_sepatu" class="width-100" placeholder="Ukuran Sepatu" required /></span>
														</div>
													</div>

													<div class="space-20"></div>

													<div class="profile-info-row">
														<div class="profile-info-name"> NPWP *</div>
														<div class="profile-info-value">
															<span><input type="number" id="npwp" name="npwp" class="width-100" placeholder="NPWP" required /></span>
														</div>
													</div>

													<div class="profile-info-row">
														<div class="profile-info-name"> No Rekening Bank *</div>
														<div class="profile-info-value">
															<span><input type="number" id="mandiri" name="mandiri" class="width-100" placeholder="No Rekening Bank" required /></span>
														</div>
													</div>

													<!--<div class="profile-info-row">-->
													<!--	<div class="profile-info-name"> Nama Cabang Bank *</div>-->
													<!--	<div class="profile-info-value">-->
													<!--		<span><input type="text" id="nama_cabang" name="nama_cabang" class="width-100" placeholder="Nama Cabang Bank" required /></span>-->
													<!--	</div>-->
													<!--</div>-->

												</div>
												<div class="hr hr-8 dotted"></div>
											</div><!-- /.col -->
										</div><!-- /.row -->
										<div class="space-20"></div>
									</div><!-- /#home -->

									<div id="detail" class="tab-pane">
										<div class="row">
											<div class="col-xs-12 col-sm-12 center">
											</div><!-- /.col -->

											<div class="col-xs-12 col-sm-6">
												<div class="profile-user-info">
													<h4 class="blue">
														<span class="middle">Detail</span>
													</h4>
													<div class="profile-info-row">
														<div class="profile-info-name"> NO NIK </div>
														<div class="profile-info-value">
															<span><input type="number" id="nik" name="nik" class="width-100" placeholder="NIK" required /></span>
														</div>
													</div>

													<div class="profile-info-row">
														<div class="profile-info-name"> NO KK </div>
														<div class="profile-info-value">
															<span><input type="number" id="no_kk" name="no_kk" class="width-100" placeholder="NO KK" required /></span>
														</div>
													</div>

													<div class="profile-info-row">
														<div class="profile-info-name"> Kota KTP </div>
														<div class="profile-info-value">
															<span><input type="text" id="kota_ktp" name="kota_ktp" class="width-100" placeholder="Kota KTP" required /></span>
														</div>
													</div>

													<div class="space-20"></div>

													<div class="profile-info-row">
														<div class="profile-info-name"> Tanggal Vaksin 1 </div>
														<div class="profile-info-value">
															<span><input type="date" id="tgl_vaksin_1" name="tgl_vaksin_1" class="width-100" placeholder="Tanggal Vaksin 1" required /></span>
														</div>
													</div>

													<div class="profile-info-row">
														<div class="profile-info-name"> Tempat Vaksin 1 </div>
														<div class="profile-info-value">
															<span><input type="text" id="tmpt_vaksin_1" name="tmpt_vaksin_1" class="width-100" placeholder="Tempat Vaksin 1" required /></span>
														</div>
													</div>

													<div class="profile-info-row">
														<div class="profile-info-name"> Tanggal Vaksin 2 </div>
														<div class="profile-info-value">
															<span><input type="date" id="tgl_vaksin_2" name="tgl_vaksin_2" class="width-100" placeholder="Tanggal Vaksin 2" required /></span>
														</div>
													</div>

													<div class="profile-info-row">
														<div class="profile-info-name"> Tempat Vaksin 2 </div>
														<div class="profile-info-value">
															<span><input type="text" id="tmpt_vaksin_2" name="tmpt_vaksin_2" class="width-100" placeholder="Tempat Vaksin 2" required /></span>
														</div>
													</div>

													<div class="profile-info-row">
														<div class="profile-info-name"> Nama Vaksin 1 & 2 </div>
														<div class="profile-info-value">
															<span>
																<select class="form-control" id="form-field-select-1" name="jenis_vaksin" required>
																	<option value="">Pilih Vaksin</option>
																	<?php foreach ($vaksin as $v) : ?>
																		<option value="<?= $v->id_vaksin ?>"><?= $v->nama_vaksin ?></option>
																	<?php endforeach; ?>
																</select>
															</span>
														</div>
													</div>

													<div class="profile-info-row">
														<div class="profile-info-name"> Tanggal Vaksin 3 </div>
														<div class="profile-info-value">
															<span><input type="date" id="tgl_vaksin_3" name="tgl_vaksin_3" class="width-100" placeholder="Tanggal Vaksin 3" required /></span>
														</div>
													</div>

													<div class="profile-info-row">
														<div class="profile-info-name"> Tempat Vaksin 3 </div>
														<div class="profile-info-value">
															<span><input type="text" id="tmpt_vaksin_3" name="tmpt_vaksin_3" class="width-100" placeholder="Tempat Vaksin 3" required /></span>
														</div>
													</div>

													<div class="profile-info-row">
														<div class="profile-info-name"> Nama Vaksin 3 </div>
														<div class="profile-info-value">
															<span>
																<select class="form-control" id="form-field-select-1" name="jenis_vaksin_3" required>
																	<option value="">Pilih Vaksin</option>
																	<?php foreach ($vaksin as $v) : ?>
																		<option value="<?= $v->id_vaksin ?>"><?= $v->nama_vaksin ?></option>
																	<?php endforeach; ?>
																</select>
															</span>
														</div>
													</div>

												</div>
												<div class="hr hr-8 dotted"></div>
											</div>

											<div class="col-xs-12 col-sm-4">
												<div class="profile-user-info">
													<h4 class="blue">
														<span class="middle">KTP</span>
													</h4>
													<div class="profile-info-row">
														<div class="profile-info-name"> Alamat</div>
														<div class="profile-info-value">
															<span><textarea placeholder="Alamat" name="address_ktp" style="width: 330px; height:100px" required></textarea></span>
														</div>
													</div>

													<div class="profile-info-row">
														<div class="profile-info-name"> RT / RW </div>
														<div class="profile-info-value">
															<span>
																<input type="number" id="rt_ktp" name="rt_ktp" class="width-45" placeholder="Rt" required />
																<input type="number" id="rw_ktp" name="rw_ktp" class="width-45" placeholder="Rw" required />
															</span>
														</div>
													</div>

													<div class="profile-info-row">
														<div class="profile-info-name"> Kelurahan </div>
														<div class="profile-info-value">
															<span><input type="text" id="kel_ktp" name="kel_ktp" class="width-100" placeholder="Kelurahan" required /></span>
														</div>
													</div>

													<div class="profile-info-row">
														<div class="profile-info-name"> Kecamatan </div>
														<div class="profile-info-value">
															<span><input type="text" id="kec_ktp" name="kec_ktp" class="width-100" placeholder="Kecamatan" required /></span>
														</div>
													</div>

													<div class="profile-info-row">
														<div class="profile-info-name"> Kab / Kota </div>
														<div class="profile-info-value">
															<span><input type="text" id="kab_ktp" name="kab_ktp" class="width-100" placeholder="Kab / Kota" required /></span>
														</div>
													</div>

													<div class="profile-info-row">
														<div class="profile-info-name"> Provinsi </div>
														<div class="profile-info-value">
															<span><input type="text" id="prov_ktp" name="prov_ktp" class="width-100" placeholder="Provinsi" required /></span>
														</div>
													</div>

												</div>
												<div class="hr hr-8 dotted"></div>
											</div><!-- /.col -->

											<div class="col-xs-12 col-sm-4">
												<div class="profile-user-info">
													<h4 class="blue">
														<span class="middle">Batam</span>
													</h4>
													<div class="profile-info-row">
														<div class="profile-info-name"> Alamat</div>
														<div class="profile-info-value">
															<span><textarea placeholder="Alamat" name="address_btm" style="width: 330px; height:100px" required></textarea></span>
														</div>
													</div>

													<div class="profile-info-row">
														<div class="profile-info-name"> RT / RW </div>
														<div class="profile-info-value">
															<span>
																<input type="number" id="rt_btm" name="rt_ktp" class="width-45" placeholder="Rt" required />
																<input type="number" id="rw_btm" name="rw_ktp" class="width-45" placeholder="Rw" required />
															</span>
														</div>
													</div>

													<div class="profile-info-row">
														<div class="profile-info-name"> Kelurahan </div>
														<div class="profile-info-value">
															<span><input type="text" id="kel_btm" name="kel_btm" class="width-100" placeholder="Kelurahan" required /></span>
														</div>
													</div>

													<div class="profile-info-row">
														<div class="profile-info-name"> Kecamatan </div>
														<div class="profile-info-value">
															<span><input type="text" id="kec_btm" name="kec_btm" class="width-100" placeholder="Kecamatan" required /></span>
														</div>
													</div>

													<div class="profile-info-row">
														<div class="profile-info-name"> Kode Pos </div>
														<div class="profile-info-value">
															<span><input type="text" id="kode_pos" name="kode_pos" class="width-100" placeholder="Kode Pos" required /></span>
														</div>
													</div>

												</div>
												<div class="hr hr-8 dotted"></div>
											</div><!-- /.col -->
										</div>
									</div>

									<div id="familys" class="tab-pane">
										<div class="row">
											<div class="col-xs-12 col-sm-12 center">
											</div><!-- /.col -->

											<div class="col-xs-12 col-sm-3">
												<div class="profile-user-info">
													<h4 class="blue">
														<span class="middle">Pasangan</span>
													</h4>
													<div class="profile-info-row">
														<div class="profile-info-name"> Nama Lengkap </div>
														<div class="profile-info-value">
															<span><input type="text" id="nama_pasang" name="nama_pasang" class="width-100" placeholder="Nama Lengkap" /></span>
														</div>
													</div>

													<div class="profile-info-row">
														<div class="profile-info-name"> </div>
														<div class="profile-info-value">
															<span>
																<select class="form-control" id="form-field-select-1" name="jk_pasang">
																	<option value="0" selected>Laki Laki</option>
																	<option value="1">Perempuan</option>
																</select>
															</span>
														</div>
													</div>

													<div class="profile-info-row">
														<div class="profile-info-name"> Tempat Lahir </div>
														<div class="profile-info-value">
															<span><input type="text" id="tmpt_lahir_pasang" name="tmpt_lahir_pasang" class="width-100" placeholder="Tempat Lahir" /></span>
														</div>
													</div>

													<div class="profile-info-row">
														<div class="profile-info-name"> Tanggal Lahir</div>
														<div class="profile-info-value">
															<span><input type="date" id="tgl_lahir_pasang" name="tgl_lahir_pasang" class="width-100" placeholder="Tanggal Lahir" /></span>
														</div>
													</div>

													<div class="profile-info-row">
														<div class="profile-info-name"> NIK </div>
														<div class="profile-info-value">
															<span><input type="number" id="nik_pasang" name="nik_pasang" class="width-100" placeholder="NIK" /></span>
														</div>
													</div>

													<div class="profile-info-row">
														<div class="profile-info-name"> NO HP </div>
														<div class="profile-info-value">
															<span><input type="text" id="no_hp_pasang" name="no_hp_pasang" class="width-100" placeholder="NO HP" /></span>
														</div>
													</div>

													<div class="space-20"></div>

													<div class="profile-info-row">
														<div class="profile-info-name"> Tanggal V 1 </div>
														<div class="profile-info-value">
															<span><input type="date" id="tgl_v1_pas" name="tgl_v1_pas" class="width-100" placeholder="Tanggal Vaksin 1" /></span>
														</div>
													</div>

													<div class="profile-info-row">
														<div class="profile-info-name"> Tempat V 1 </div>
														<div class="profile-info-value">
															<span><input type="text" id="tmpt_v1_pas" name="tmpt_v1_pas" class="width-100" placeholder="Tempat Vaksin 1" /></span>
														</div>
													</div>

													<div class="profile-info-row">
														<div class="profile-info-name"> Tanggal V 2 </div>
														<div class="profile-info-value">
															<span><input type="date" id="tgl_v2_pas" name="tgl_v2_pas" class="width-100" placeholder="Tanggal Vaksin 2" /></span>
														</div>
													</div>

													<div class="profile-info-row">
														<div class="profile-info-name"> Tempat V 2 </div>
														<div class="profile-info-value">
															<span><input type="text" id="tmpt_v2_pas" name="tmpt_v2_pas" class="width-100" placeholder="Tempat Vaksin 2" /></span>
														</div>
													</div>

													<div class="profile-info-row">
														<div class="profile-info-name"> Nama Vaksin </div>
														<div class="profile-info-value">
															<span>
																<select class="form-control" id="form-field-select-1" name="jenis_v_pas">
																	<option value="">Choose Vaksin</option>
																	<?php foreach ($vaksin as $v) : ?>
																		<option value="<?= $v->id_vaksin ?>"><?= $v->nama_vaksin ?></option>
																	<?php endforeach; ?>
																</select>
															</span>
														</div>
													</div>

													<div class="hr hr-8 dotted"></div>
												</div><!-- /.col -->
											</div>

											<div class="col-xs-12 col-sm-3">
												<div class="profile-user-info">
													<h4 class="blue">
														<span class="middle">Anak Pertama</span>
													</h4>
													<div class="profile-info-row">
														<div class="profile-info-name"> Nama Lengkap </div>
														<div class="profile-info-value">
															<span><input type="text" id="nama_anak1" name="nama_anak1" class="width-100" placeholder="Nama Lengkap" /></span>
														</div>
													</div>

													<div class="profile-info-row">
														<div class="profile-info-name"> Jenis Kelamin</div>
														<div class="profile-info-value">
															<span>
																<select class="form-control" id="form-field-select-1" name="jk_anak1">
																	<option value="0" selected>Laki Laki</option>
																	<option value="1">Perempuan</option>
																</select>
															</span>
														</div>
													</div>

													<div class="profile-info-row">
														<div class="profile-info-name"> Tempat Lahir </div>
														<div class="profile-info-value">
															<span><input type="text" id="tmpt_lahir_anak1" name="tmpt_lahir_anak1" class="width-100" placeholder="Tempat Lahir" /></span>
														</div>
													</div>

													<div class="profile-info-row">
														<div class="profile-info-name"> Tanggal Lahir</div>
														<div class="profile-info-value">
															<span><input type="date" id="tgl_lahir_anak1" name="tgl_lahir_anak1" class="width-100" placeholder="Tanggal Lahir" /></span>
														</div>
													</div>

													<div class="profile-info-row">
														<div class="profile-info-name"> NIK </div>
														<div class="profile-info-value">
															<span><input type="number" id="nik_anak1" name="nik_anak1" class="width-100" placeholder="NIK" /></span>
														</div>
													</div>

													<div class="space-20"></div>

													<div class="profile-info-row">
														<div class="profile-info-name"> Tanggal Vaksin 1 </div>
														<div class="profile-info-value">
															<span><input type="date" id="tgl_v1_anak1" name="tgl_v1_anak1" class="width-100" placeholder="Tanggal Vaksin 1" /></span>
														</div>
													</div>

													<div class="profile-info-row">
														<div class="profile-info-name"> Tempat Vaksin 1 </div>
														<div class="profile-info-value">
															<span><input type="text" id="tmpt_v1_anak1" name="tmpt_v1_anak1" class="width-100" placeholder="Tempat Vaksin 1" /></span>
														</div>
													</div>

													<div class="profile-info-row">
														<div class="profile-info-name"> Tanggal Vaksin 2 </div>
														<div class="profile-info-value">
															<span><input type="date" id="tgl_v2_anak1" name="tgl_v2_anak1" class="width-100" placeholder="Tanggal Vaksin 2" /></span>
														</div>
													</div>

													<div class="profile-info-row">
														<div class="profile-info-name"> Tempat Vaksin 2 </div>
														<div class="profile-info-value">
															<span><input type="text" id="tmpt_v2_anak1" name="tmpt_v2_anak1" class="width-100" placeholder="Tempat Vaksin 2" /></span>
														</div>
													</div>

													<div class="profile-info-row">
														<div class="profile-info-name"> Nama Vaksin </div>
														<div class="profile-info-value">
															<span>
																<select class="form-control" id="form-field-select-1" name="jenis_vaksin_anak1">
																	<option value="">Choose Vaksin</option>
																	<?php foreach ($vaksin as $v) : ?>
																		<option value="<?= $v->id_vaksin ?>"><?= $v->nama_vaksin ?></option>
																	<?php endforeach; ?>
																</select>
															</span>
														</div>
													</div>

													<div class="profile-info-row">
														<div class="profile-info-name"> Keterangan Vaksin </div>
														<div class="profile-info-value">
															<span><input type="text" id="ket_v_anak1" name="ket_v_anak1" class="width-100" placeholder="Keterangan Vaksin" /></span>
														</div>
													</div>
													<div class="hr hr-8 dotted"></div>
												</div><!-- /.col -->
											</div>

											<div class="col-xs-12 col-sm-3">
												<div class="profile-user-info">
													<h4 class="blue">
														<span class="middle">Anak Kedua</span>
													</h4>
													<div class="profile-info-row">
														<div class="profile-info-name"> Nama Lengkap </div>
														<div class="profile-info-value">
															<span><input type="text" id="nama_anak2" name="nama_anak2" class="width-100" placeholder="Nama Lengkap" /></span>
														</div>
													</div>

													<div class="profile-info-row">
														<div class="profile-info-name"> Jenis Kelamin</div>
														<div class="profile-info-value">
															<span>
																<select class="form-control" id="form-field-select-1" name="jk_anak2">
																	<option value="0" selected>Laki Laki</option>
																	<option value="1">Perempuan</option>
																</select>
															</span>
														</div>
													</div>

													<div class="profile-info-row">
														<div class="profile-info-name"> Tempat Lahir </div>
														<div class="profile-info-value">
															<span><input type="text" id="tmpt_lahir_anak2" name="tmpt_lahir_anak2" class="width-100" placeholder="Tempat Lahir" /></span>
														</div>
													</div>

													<div class="profile-info-row">
														<div class="profile-info-name"> Tanggal Lahir</div>
														<div class="profile-info-value">
															<span><input type="date" id="tgl_lahir_anak2" name="tgl_lahir_anak2" class="width-100" placeholder="Tanggal Lahir" /></span>
														</div>
													</div>

													<div class="profile-info-row">
														<div class="profile-info-name"> NIK </div>
														<div class="profile-info-value">
															<span><input type="number" id="nik_anak2" name="nik_anak2" class="width-100" placeholder="NIK" /></span>
														</div>
													</div>

													<div class="space-20"></div>

													<div class="profile-info-row">
														<div class="profile-info-name"> Tanggal Vaksin 1 </div>
														<div class="profile-info-value">
															<span><input type="date" id="tgl_v1_anak2" name="tgl_v1_anak2" class="width-100" placeholder="Tanggal Vaksin 1" /></span>
														</div>
													</div>

													<div class="profile-info-row">
														<div class="profile-info-name"> Tempat Vaksin 1 </div>
														<div class="profile-info-value">
															<span><input type="text" id="tmpt_v1_anak2" name="tmpt_v1_anak2" class="width-100" placeholder="Tempat Vaksin 1" /></span>
														</div>
													</div>

													<div class="profile-info-row">
														<div class="profile-info-name"> Tanggal Vaksin 2 </div>
														<div class="profile-info-value">
															<span><input type="date" id="tgl_v2_anak2" name="tgl_v2_anak2" class="width-100" placeholder="Tanggal Vaksin 2" /></span>
														</div>
													</div>

													<div class="profile-info-row">
														<div class="profile-info-name"> Tempat Vaksin 2 </div>
														<div class="profile-info-value">
															<span><input type="text" id="tmpt_v2_anak2" name="tmpt_v2_anak2" class="width-100" placeholder="Tempat Vaksin 2" /></span>
														</div>
													</div>

													<div class="profile-info-row">
														<div class="profile-info-name"> Nama Vaksin </div>
														<div class="profile-info-value">
															<span>
																<select class="form-control" id="form-field-select-1" name="jenis_vaksin_anak2">
																	<option value="">Choose Vaksin</option>
																	<?php foreach ($vaksin as $v) : ?>
																		<option value="<?= $v->id_vaksin ?>"><?= $v->nama_vaksin ?></option>
																	<?php endforeach; ?>
																</select>
															</span>
														</div>
													</div>

													<div class="profile-info-row">
														<div class="profile-info-name"> Keterangan Vaksin </div>
														<div class="profile-info-value">
															<span><input type="text" id="ket_vaksin_anak2" name="ket_vaksin_anak2" class="width-100" placeholder="Keterangan Vaksin" /></span>
														</div>
													</div>
													<div class="hr hr-8 dotted"></div>
												</div><!-- /.col -->
											</div>

											<div class="col-xs-12 col-sm-3">
												<div class="profile-user-info">
													<h4 class="blue">
														<span class="middle">Anak Ketiga</span>
													</h4>
													<div class="profile-info-row">
														<div class="profile-info-name"> Nama Lengkap </div>
														<div class="profile-info-value">
															<span><input type="text" id="nama_anak3" name="nama_anak3" class="width-100" placeholder="Nama Lengkap" /></span>
														</div>
													</div>

													<div class="profile-info-row">
														<div class="profile-info-name"> Jenis Kelamin</div>
														<div class="profile-info-value">
															<span>
																<select class="form-control" id="form-field-select-1" name="jk_anak3">
																	<option value="0" selected>Laki Laki</option>
																	<option value="1">Perempuan</option>
																</select>
															</span>
														</div>
													</div>

													<div class="profile-info-row">
														<div class="profile-info-name"> Tempat Lahir </div>
														<div class="profile-info-value">
															<span><input type="text" id="tmpt_lahir_anak3" name="tmpt_lahir_anak3" class="width-100" placeholder="Tempat Lahir" /></span>
														</div>
													</div>

													<div class="profile-info-row">
														<div class="profile-info-name"> Tanggal Lahir</div>
														<div class="profile-info-value">
															<span><input type="date" id="tgl_lahir_anak3" name="tgl_lahir_anak3" class="width-100" placeholder="Tanggal Lahir" /></span>
														</div>
													</div>

													<div class="profile-info-row">
														<div class="profile-info-name"> NIK </div>
														<div class="profile-info-value">
															<span><input type="number" id="nik_anak3" name="nik_anak3" class="width-100" placeholder="NIK" /></span>
														</div>
													</div>

													<div class="space-20"></div>

													<div class="profile-info-row">
														<div class="profile-info-name"> Tanggal Vaksin 1 </div>
														<div class="profile-info-value">
															<span><input type="date" id="tgl_v1_anak3" name="tgl_v1_anak3" class="width-100" placeholder="Tanggal Vaksin 1" /></span>
														</div>
													</div>

													<div class="profile-info-row">
														<div class="profile-info-name"> Tempat Vaksin 1 </div>
														<div class="profile-info-value">
															<span><input type="text" id="tmpt_v1_anak3" name="tmpt_v1_anak3" class="width-100" placeholder="Tempat Vaksin 1" /></span>
														</div>
													</div>

													<div class="profile-info-row">
														<div class="profile-info-name"> Tanggal Vaksin 2 </div>
														<div class="profile-info-value">
															<span><input type="date" id="tgl_v2_anak3" name="tgl_v2_anak3" class="width-100" placeholder="Tanggal Vaksin 2" /></span>
														</div>
													</div>

													<div class="profile-info-row">
														<div class="profile-info-name"> Tempat Vaksin 2 </div>
														<div class="profile-info-value">
															<span><input type="text" id="tmpt_v2_anak3" name="tmpt_v2_anak3" class="width-100" placeholder="Tempat Vaksin 2" /></span>
														</div>
													</div>

													<div class="profile-info-row">
														<div class="profile-info-name"> Nama Vaksin </div>
														<div class="profile-info-value">
															<span>
																<select class="form-control" id="form-field-select-1" name="jenis_vaksin_anak3">
																	<option value="">Choose Vaksin</option>
																	<?php foreach ($vaksin as $v) : ?>
																		<option value="<?= $v->id_vaksin ?>"><?= $v->nama_vaksin ?></option>
																	<?php endforeach; ?>
																</select>
															</span>
														</div>
													</div>

													<div class="profile-info-row">
														<div class="profile-info-name"> Keterangan Vaksin </div>
														<div class="profile-info-value">
															<span><input type="text" id="ket_vaksin_anak3" name="ket_vaksin_anak3" class="width-100" placeholder="Keterangan Vaksin" /></span>
														</div>
													</div>
													<div class="hr hr-8 dotted"></div>
												</div><!-- /.col -->
											</div>

										</div>
									</div>

									<div id="parents" class="tab-pane">
										<div class="row">
											<div class="col-xs-12 col-sm-12 center">
											</div><!-- /.col -->

											<div class="col-xs-12 col-sm-6">
												<div class="profile-user-info">
													<div class="profile-info-row">
														<div class="profile-info-name"> Nama Ibu </div>
														<div class="profile-info-value">
															<span><input type="text" id="mom" name="mom" class="width-100" placeholder="Nama Ibu" /></span>
														</div>
													</div>

													<div class="profile-info-row">
														<div class="profile-info-name"> Tempat Lahir Ibu </div>
														<div class="profile-info-value">
															<span><input type="text" id="tmpt_lahir_mom" name="tmpt_lahir_mom" class="width-100" placeholder="Tempat Lahir Ibu" /></span>
														</div>
													</div>

													<div class="profile-info-row">
														<div class="profile-info-name"> Tanggal Lahir Ibu</div>
														<div class="profile-info-value">
															<span><input type="date" id="tgl_lahir_mom" name="tgl_lahir_mom" class="width-100" placeholder="Tanggal Lahir Ibu" /></span>
														</div>
													</div>
												</div>
											</div>

											<div class="col-xs-12 col-sm-6">
												<div class="profile-user-info">
													<div class="profile-info-row">
														<div class="profile-info-name"> Nama Ayah </div>
														<div class="profile-info-value">
															<span><input type="text" id="dad" name="dad" class="width-100" placeholder="Nama Ayah" /></span>
														</div>
													</div>

													<div class="profile-info-row">
														<div class="profile-info-name"> Tempat Lahir Ayah </div>
														<div class="profile-info-value">
															<span><input type="text" id="tmpt_lahir_dad" name="tmpt_lahir_dad" class="width-100" placeholder="Tempat Lahir Ayah" /></span>
														</div>
													</div>

													<div class="profile-info-row">
														<div class="profile-info-name"> Tanggal Lahir Ayah</div>
														<div class="profile-info-value">
															<span><input type="date" id="tgl_lahir_dad" name="tgl_lahir_dad" class="width-100" placeholder="Tanggal Lahir Ayah" /></span>
														</div>
													</div>
												</div>
											</div>
											<div class="hr hr-8 dotted"></div>
										</div>
									</div>

									<div id="emergency" class="tab-pane">
										<div class="row">
											<div class="col-xs-12 col-sm-12 center">
											</div><!-- /.col -->

											<div class="col-xs-12 col-sm-12">
												<div class="profile-user-info">
													<h4 class="blue">
														<span class="middle">Darurat 1</span>
													</h4>

													<div class="profile-info-row">
														<div class="profile-info-name"> Nama Lengkap </div>
														<div class="profile-info-value">
															<span><input type="text" id="nama_kodar1" name="nama_kodar1" class="width-100" placeholder="Nama Lengkap" /></span>
														</div>
													</div>

													<div class="profile-info-row">
														<div class="profile-info-name"> Nama Awal </div>
														<div class="profile-info-value">
															<span><input type="text" id="firstname_kodar1" name="firstname_kodar1" class="width-100" placeholder="Nama Awal" /></span>
														</div>
													</div>

													<div class="profile-info-row">
														<div class="profile-info-name"> Nama Akhir </div>
														<div class="profile-info-value">
															<span><input type="text" id="lastname_kodar1" name="lastname_kodar1" class="width-100" placeholder="Nama Akhir" /></span>
														</div>
													</div>

													<div class="profile-info-row">
														<div class="profile-info-name"> Hubungan </div>
														<div class="profile-info-value">
															<span><input type="text" id="hubungan_kodar1" name="hubungan_kodar1" class="width-100" placeholder="Hubungan" /></span>
														</div>
													</div>

													<div class="profile-info-row">
														<div class="profile-info-name"> Alamat</div>
														<div class="profile-info-value">
															<span><textarea placeholder="Alamat" name="alamat_kodar1" style="width: 330px; height:100px"></textarea></span>
														</div>
													</div>

													<div class="profile-info-row">
														<div class="profile-info-name"> NO HP </div>
														<div class="profile-info-value">
															<span><input type="text" id="no_hp_kodar1" name="no_hp_kodar1" class="width-100" placeholder="NO HP" /></span>
														</div>
													</div>
												</div>
											</div>

											<div class="hr hr-8 dotted"></div>
										</div>
									</div>

									<div id="feed" class="tab-pane">
										<div class="row">
											<div class="col-xs-12 col-sm-12 center">
											</div><!-- /.col -->

											<div class="col-xs-12 col-sm-6">
												<div class="profile-user-info">

													<div class="profile-info-row">
														<div class="profile-info-name"> No Kronos </div>
														<div class="profile-info-value">
															<span><input type="text" id="kronos_no" name="kronos_no" class="width-100" placeholder="No Kronos" /></span>
														</div>
													</div>

													<div class="profile-info-row">
														<div class="profile-info-name"> Classification </div>
														<div class="profile-info-value">
															<span>
																<select class="form-control select-box" id="klas" name="classification">
																	<option value="">Choose Classification</option>
																	<?php foreach ($classification as $class) : ?>
																		<option value="<?= $class->id ?>"><?= $class->name ?></option>
																	<?php endforeach; ?>
																</select>
															</span>
														</div>
													</div>

													<div class="profile-info-row">
														<div class="profile-info-name"> Department </div>
														<div class="profile-info-value">
															<span>
																<select class="form-control" id="form-field-select-1" name="department">
																	<option value="">Choose Department</option>
																	<?php foreach ($department as $depart) : ?>
																		<option value="<?= $depart->id ?>"><?= $depart->department_name ?></option>
																	<?php endforeach; ?>
																</select>
															</span>
														</div>
													</div>

													<div class="profile-info-row">
														<div class="profile-info-name"> Tanggal Bergabung </div>
														<div class="profile-info-value">
															<span><input type="date" id="tanggal_join" name="tanggal_join" class="width-100" placeholder="Tanggal Bergabung" /></span>
														</div>
													</div>

													<div class="profile-info-row">
														<div class="profile-info-name"> Tanggal Training </div>
														<div class="profile-info-value">
															<span><input type="date" id="tanggal_training" name="tanggal_training" class="width-100" placeholder="Tanggal Training" /></span>
														</div>
													</div>

													<div class="profile-info-row">
														<div class="profile-info-name"> BPJS Kesehatan </div>
														<div class="profile-info-value">
															<span><input type="text" id="bpjs_kes" name="bpjs_kes" class="width-100" placeholder="BPJS Kesehatan" style="margin-bottom: 10px;" />
																<select class="form-control" id="form-field-select-1" name="status_bpjs_kes">
																	<option value="Aktif" selected>Aktif</option>
																	<option value="Tidak Aktif">Tidak Aktif</option>
																</select>
															</span>
														</div>
													</div>
												</div>
											</div>
											<div class="col-xs-12 col-sm-6">
												<div class="profile-user-info">

													<div class="profile-info-row">
														<div class="profile-info-name"> BPJS Ketenagakerjaan </div>
														<div class="profile-info-value">
															<span><input type="text" id="bpjs_tk" name="bpjs_tk" class="width-100" placeholder="BPJS Ketenagakerjaan" style="margin-bottom: 10px;" />
																<select class="form-control" id="form-field-select-1" name="status_bpjs_tk">
																	<option value="Aktif" selected>Aktif</option>
																	<option value="Tidak Aktif">Tidak Aktif</option>
																</select></span>
														</div>
													</div>

												</div>
												<div class="hr hr-8 dotted"></div>
											</div><!-- /.col -->
										</div><!-- /.row -->
									</div><!-- /#feed -->

									<div id="berkas" class="tab-pane">
										<div class="row">
											<div class="col-xs-12 col-sm-12 center">
											</div><!-- /.col -->

											<div class="col-xs-12 col-sm-6">
												<div class="profile-user-info">
													<div class="profile-info-row">
														<div class="profile-info-name"> Foto Diri </div>
														<div class="profile-info-value">
															<span><input type="file" id="foto" name="foto" class="width-100" /></span>
														</div>
													</div>
												</div>
												<div class="profile-user-info">
													<div class="profile-info-row">
														<div class="profile-info-name"> Foto KTP</div>
														<div class="profile-info-value">
															<span><input type="file" id="foto_ktp" name="foto_ktp" class="width-100" /></span>
														</div>
													</div>
												</div>
												<div class="profile-user-info">
													<div class="profile-info-row">
														<div class="profile-info-name"> Foto KK </div>
														<div class="profile-info-value">
															<span><input type="file" id="foto_kk" name="foto_kk" class="width-100" /></span>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
	$(".select-box").chosen();

	$('.chosen-search input').autocomplete({
		source: function(request, response) {
			$.ajax({
				url: "<?= base_url('admin/') ?>name=" + request.term,
				dataType: "json",
				success: function(data) {
					$('.select-box').empty();
					response($.map(data, function(item) {
						$('.select-box').append('<option value="' + item.id + '">' + item.name + '</option>');
					}));
					$(".select-box").trigger("chosen:updated");
				}
			});
		}
	});
</script>