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
                        <div id="signup-box" class="signup-box widget-box no-border">
                            <div class="widget-body">
                                <div class="widget-main">
                                    <h4 class="header green lighter bigger">
                                        <i class="ace-icon fa fa-users blue"></i>
                                        New User Registration
                                    </h4>

                                    <div class="space-6"></div>
                                    <p> Enter your details to begin: </p>

                                    <form action="<?= base_url('auth/registration') ?>" method="POST">
                                        <label class="block clearfix">
                                            <span class="block input-icon input-icon-right">
                                                <input type="email" class="form-control" placeholder="Email" id="email" name="email" value="<?= set_value('email') ?>" required />
                                                <i class="ace-icon fa fa-envelope"></i>
                                            </span>
                                        </label>
                                        <label class="block clearfix">
                                            <span class="block input-icon input-icon-right">
                                                <input type="text" class="form-control" placeholder="Username" id="username" name="username" value="<?= set_value('username') ?>" required />
                                                <i class="ace-icon fa fa-user"></i>
                                            </span>
                                        </label>
                                        <label class="block clearfix">
                                            <span class="block input-icon input-icon-right">
                                                <input type="password" class="form-control" placeholder="Password" id="password" name="password" required />
                                                <i class="ace-icon fa fa-lock"></i>
                                                <?= form_error('password', '<span class="alert help-inline top"></span>'); ?>
                                            </span>
                                        </label>
                                        <label class="block clearfix">
                                            <span class="block input-icon input-icon-right">
                                                <input type="password" class="form-control" placeholder="Repeat password" id="password1" name="password1" required />
                                                <i class="ace-icon fa fa-retweet"></i>
                                            </span>
                                        </label>
                                        <div class="space-24"></div>
                                        <div class="clearfix">
                                            <button type="reset" class="width-30 pull-left btn btn-sm">
                                                <i class="ace-icon fa fa-refresh"></i>
                                                <span class="bigger-110">Reset</span>
                                            </button>
                                            <button type="submit" class="width-65 pull-right btn btn-sm btn-success">
                                                <span class="bigger-110">Register</span>
                                                <i class="ace-icon fa fa-arrow-right icon-on-right"></i>
                                            </button>
                                        </div>
                                    </form>
                                </div>

                                <!-- <div class="toolbar center">
                                    <a href="#" data-target="#login-box" class="back-to-login-link">
                                        <i class="ace-icon fa fa-arrow-left"></i>
                                        Back to login
                                    </a>
                                </div> -->
                            </div><!-- /.widget-body -->
                        </div><!-- /.signup-box -->