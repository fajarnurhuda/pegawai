<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta charset="utf-8" />
    <title>Data Karyawan</title>
    <link rel="icon" href="<?= base_url() ?>assets/Logo.png" sizes="32x32">

    <meta name="description" content="3 styles with inline editable feature" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

    <!-- bootstrap & fontawesome -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="<?= base_url() ?>assets/font-awesome/4.5.0/css/font-awesome.min.css" />

    <!-- page specific plugin styles -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/jquery-ui.custom.min.css" />
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/jquery.gritter.min.css" />
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/select2.min.css" />
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/bootstrap-datepicker3.min.css" />
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/bootstrap-editable.min.css" />

    <!-- text fonts -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/fonts.googleapis.com.css" />

    <!-- ace styles -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />

    <!--[if lte IE 9]>
			<link rel="stylesheet" href="<?= base_url() ?>assets/css/ace-part2.min.css" class="ace-main-stylesheet" />
		<![endif]-->
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/ace-skins.min.css" />
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/ace-rtl.min.css" />

    <!--[if lte IE 9]>
		  <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
		<![endif]-->

    <!-- inline styles related to this page -->

    <!-- ace settings handler -->
    <script src="<?= base_url() ?>assets/js/ace-extra.min.js"></script>

    <!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

    <!--[if lte IE 8]>
		<script src="<?= base_url() ?>assets/js/html5shiv.min.js"></script>
		<script src="<?= base_url() ?>assets/js/respond.min.js"></script>
		<![endif]-->
</head>

<body>
    <h5>Data Karyawan</h5>

    <div class="tab-content no-border padding-24">
        <div id="home" class="tab-pane in active">
            <div class="row">
                <div class="col-xs-12 col-sm-3 center">
                    <span class="profile-picture">
                        <img class="editable img-responsive" alt="Alex's Avatar" id="avatar2" src="<?= base_url('assets/employee/') . $employee['foto'] ?>" />
                    </span>

                    <div class="space space-4"></div>
                </div><!-- /.col -->

                <div class="col-xs-12 col-sm-9">
                    <div class="row">
                        <span class="center"><?= $employee['employee_name'] ?></span>

                        <span class="label label-purple arrowed-in-right">
                            <i class="ace-icon fa fa-circle smaller-80 align-middle"></i>
                            online
                        </span>
                    </div>

                    <div class="profile-user-info">
                        <div class="profile-info-row">
                            <div class="profile-info-name"> Username </div>

                            <div class="profile-info-value">
                                <span>alexdoe</span>
                            </div>
                        </div>

                        <div class="profile-info-row">
                            <div class="profile-info-name"> Location </div>

                            <div class="profile-info-value">
                                <i class="fa fa-map-marker light-orange bigger-110"></i>
                                <span>Netherlands</span>
                                <span>Amsterdam</span>
                            </div>
                        </div>

                        <div class="profile-info-row">
                            <div class="profile-info-name"> Age </div>

                            <div class="profile-info-value">
                                <span>38</span>
                            </div>
                        </div>

                        <div class="profile-info-row">
                            <div class="profile-info-name"> Joined </div>

                            <div class="profile-info-value">
                                <span>2010/06/20</span>
                            </div>
                        </div>

                        <div class="profile-info-row">
                            <div class="profile-info-name"> Last Online </div>

                            <div class="profile-info-value">
                                <span>3 hours ago</span>
                            </div>
                        </div>
                    </div>

                    <div class="hr hr-8 dotted"></div>

                    <div class="profile-user-info">
                        <div class="profile-info-row">
                            <div class="profile-info-name"> Website </div>

                            <div class="profile-info-value">
                                <a href="#" target="_blank">www.alexdoe.com</a>
                            </div>
                        </div>

                        <div class="profile-info-row">
                            <div class="profile-info-name">
                                <i class="middle ace-icon fa fa-facebook-square bigger-150 blue"></i>
                            </div>

                            <div class="profile-info-value">
                                <a href="#">Find me on Facebook</a>
                            </div>
                        </div>

                        <div class="profile-info-row">
                            <div class="profile-info-name">
                                <i class="middle ace-icon fa fa-twitter-square bigger-150 light-blue"></i>
                            </div>

                            <div class="profile-info-value">
                                <a href="#">Follow me on Twitter</a>
                            </div>
                        </div>
                    </div>
                </div><!-- /.col -->
            </div><!-- /.row -->

            <div class="space-20"></div>

            <div class="row">
                <div class="col-xs-12 col-sm-6">
                    <div class="widget-box transparent">
                        <div class="widget-header widget-header-small">
                            <h4 class="widget-title smaller">
                                <i class="ace-icon fa fa-check-square-o bigger-110"></i>
                                Little About Me
                            </h4>
                        </div>

                        <div class="widget-body">
                            <div class="widget-main">
                                <p>
                                    My job is mostly lorem ipsuming and dolor sit ameting as long as consectetur adipiscing elit.
                                </p>
                                <p>
                                    Sometimes quisque commodo massa gets in the way and sed ipsum porttitor facilisis.
                                </p>
                                <p>
                                    The best thing about my job is that vestibulum id ligula porta felis euismod and nullam quis risus eget urna mollis ornare.
                                </p>
                                <p>
                                    Thanks for visiting my profile.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-6">
                    <div class="widget-box transparent">
                        <div class="widget-header widget-header-small header-color-blue2">
                            <h4 class="widget-title smaller">
                                <i class="ace-icon fa fa-lightbulb-o bigger-120"></i>
                                My Skills
                            </h4>
                        </div>

                        <div class="widget-body">
                            <div class="widget-main padding-16">
                                <div class="clearfix">
                                    <div class="grid3 center">
                                        <div class="easy-pie-chart percentage" data-percent="45" data-color="#CA5952">
                                            <span class="percent">45</span>%
                                        </div>

                                        <div class="space-2"></div>
                                        Graphic Design
                                    </div>

                                    <div class="grid3 center">
                                        <div class="center easy-pie-chart percentage" data-percent="90" data-color="#59A84B">
                                            <span class="percent">90</span>%
                                        </div>

                                        <div class="space-2"></div>
                                        HTML5 & CSS3
                                    </div>

                                    <div class="grid3 center">
                                        <div class="center easy-pie-chart percentage" data-percent="80" data-color="#9585BF">
                                            <span class="percent">80</span>%
                                        </div>

                                        <div class="space-2"></div>
                                        Javascript/jQuery
                                    </div>
                                </div>

                                <div class="hr hr-16"></div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /#home -->


</body>

</html>