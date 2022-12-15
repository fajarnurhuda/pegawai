<div class="main-container">
    <div class="main-content">
        <div class="row">
            <div class="col-sm-10 col-sm-offset-1">
                <div class="login-container">
                    <div class="center">
                        <h1>
                            <span class="red">Aplikasi Kepegawaian<br> PT. PNS</span>
                        </h1>
                        <h4 class="blue" id="id-company-text">&copy; Tunas Idea</h4>
                    </div>
                    <div class="space-6"></div>
                    <div class="position-relative">
                        <div id="login-box" class="login-box visible widget-box no-border">
                            <div class="widget-body">
                                <div class="widget-main">
                                    <h4 class="header blue lighter bigger">
                                        <i class="ace-icon fa fa-coffee green"></i>
                                        Please Enter Your Information
                                    </h4>
                                    <?= $this->session->flashdata('message'); ?>
                                    <div class="space-6"></div>
                                    <form method="POST" action="<?= base_url('auth'); ?>">
                                        <fieldset>
                                            <label class="block clearfix">
                                                <span class="block input-icon input-icon-right">
                                                    <input type="email" class="form-control" placeholder="Enter Email Adress" id="email" name="email" value="<?= set_value('email'); ?>" required />
                                                    <i class="ace-icon fa fa-user"></i>
                                                    <?= form_error('email', '<div class="alert alert-success">', '</div>'); ?>
                                                </span>
                                            </label>
                                            <label class="block clearfix">
                                                <span class="block input-icon input-icon-right">
                                                    <input type="password" class="form-control" placeholder="Password" id="password" name="password" required />
                                                    <i class="ace-icon fa fa-lock"></i>
                                                    <?= form_error('password', '<div class="alert alert-success">', '</div>'); ?>
                                                </span>
                                            </label>
                                            <div class="space"></div>
                                            <div class="clearfix">
                                                <button type="submit" class="width-35 pull-right btn btn-sm btn-primary">
                                                    <i class="ace-icon fa fa-key"></i>
                                                    <span class="bigger-110">Login</span>
                                                </button>
                                            </div>
                                            <div class="space-4"></div>
                                        </fieldset>
                                    </form>
                                </div><!-- /.widget-main -->
                            </div><!-- /.widget-body -->
                        </div><!-- /.login-box -->
                    </div><!-- /.position-relative -->
                </div>
            </div>
        </div>
    </div>
</div>