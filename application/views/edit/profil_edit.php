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
                    <!-- PAGE CONTENT BEGINS -->
                    <div>
                        <?= $this->session->flashdata('message'); ?>
                        <?= form_open_multipart('edit/profil_edit'); ?>
                        <div class="form-group">
                            <label class="col-xs-3 control-label"> ID Company </label>
                            <div class="col-xs-9">
                                <input type="number" id="companyID" name="companyID" placeholder="ID Company" class="col-xs-12" style="margin-bottom: 1%;" value="<?= $profil['companyID'] ?>" />
                                <?= form_error('companyID', '<div class="alert alert-danger">', '</div>'); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-xs-3 control-label"> Name Company </label>
                            <div class="col-xs-9">
                                <input type="text" id="name" name="name" placeholder="Name Company" class="col-xs-12" style="margin-bottom: 1%;" value="<?= $profil['name'] ?>" />
                                <?= form_error('name', '<div class="alert alert-danger">', '</div>'); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-xs-3 control-label"> Address </label>
                            <div class="col-xs-9">
                                <input type="text" id="address" name="address" placeholder="Address" class="col-xs-12" style="margin-bottom: 1%;" value="<?= $profil['accountAddress1'] ?>" />
                                <?= form_error('address', '<div class="alert alert-danger">', '</div>'); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-xs-3 control-label"> Account Name </label>
                            <div class="col-xs-9">
                                <input type="text" id="accountName" name="accountName" placeholder="Account Name" class="col-xs-12" style="margin-bottom: 1%;" value="<?= $profil['accountName'] ?>" minlength="13" />
                                <?= form_error('accountName', '<div class="alert alert-danger">', '</div>'); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-xs-3 control-label"> Account Bank </label>
                            <div class="col-xs-9">
                                <input type="text" id="accountBank" name="accountBank" placeholder="Account Bank" class="col-xs-12" style="margin-bottom: 1%;" value="<?= $profil['accountBank'] ?>" />
                                <?= form_error('accountBank', '<div class="alert alert-danger">', '</div>'); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-xs-3 control-label"> Account Number </label>
                            <div class="col-xs-9">
                                <input type="number" id="accountNumber" name="accountNumber" placeholder="Account Number" class="col-xs-12" style="margin-bottom: 1%;" value="<?= $profil['accountNumber'] ?>" />
                                <?= form_error('accountNumber', '<div class="alert alert-danger">', '</div>'); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-xs-3 control-label"> Email </label>
                            <div class="col-xs-9">
                                <input type="email" id="email" name="email" placeholder="Email" class="col-xs-12" style="margin-bottom: 1%;" value="<?= $profil['email'] ?>" />
                                <?= form_error('email', '<div class="alert alert-danger">', '</div>'); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-xs-3 control-label"> Picture </label>
                            <div class="col-xs-9">
                                <div class="row">
                                    <div class="col-xs-4">
                                        <img src="<?= base_url('assets/') . $profil['logopt'] ?>" width="150" height="150" style="margin-bottom: 8%;">
                                    </div>
                                    <div class="col-xs-8">
                                        <div class="form-group">
                                            <div class="col-xs-12">
                                                <input type="file" id="logopt" name="logopt" accept=".jpg, .jpeg, .png" onchange="previewImageUpdate();" style="margin-bottom: 3%;" />
                                                <img id="image-preview-update" alt="image preview" width="100px" style="margin-bottom: 3%;">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12">
                                <button type="submit" name="edit" class="btn btn-sm btn-primary col-xs-12" value="true">
                                    <i class="ace-icon fa fa-floppy-o bigger-125"></i>
                                    Save
                                </button>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    function previewImageUpdate() {
        document.getElementById("image-preview-update").style.display = "block";
        var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("logopt").files[0]);
        oFReader.onload = function(oFREvent) {
            document.getElementById("image-preview-update").src = oFREvent.target.result;
        };
    };
</script>