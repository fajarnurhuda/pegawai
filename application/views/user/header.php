<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta charset="utf-8" />
    <title><?= $title; ?></title>
    <link rel="icon" href="<?= base_url() ?>assets/favicon.png" sizes="32x32">

    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

    <!-- bootstrap & fontawesome -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="<?= base_url() ?>assets/font-awesome/4.5.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/jquery-ui.custom.min.css" />
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/jquery.gritter.min.css" />
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/select2.min.css" />
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/bootstrap-datepicker3.min.css" />
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/bootstrap-editable.min.css" />
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/chosen.min.css" />
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/daterangepicker.min.css" />
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/fonts.googleapis.com.css" />
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/ace-skins.min.css" />
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/ace-rtl.min.css" />
    <script src="<?= base_url() ?>assets/js/ace-extra.min.js"></script>
</head>

<body class="no-skin">
    <div id="navbar" class="navbar navbar-default          ace-save-state">
        <div class="navbar-container ace-save-state" id="navbar-container">
            <button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
                <span class="sr-only">Toggle sidebar</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <div class="navbar-header pull-left">
                <a href="#" class="navbar-brand">
                    <small>
                        Sistem Informasi Employee PT. PNS
                    </small>
                </a>
            </div>

            <div class="navbar-buttons navbar-header pull-right" role="navigation">
                <ul class="nav ace-nav">
                    <li class="light-blue dropdown-modal">
                        <a data-toggle="dropdown" href="#" class="dropdown-toggle">
                            <?php if ($user['foto'] == '') :  ?>
                                <img class="nav-user-photo" src="<?= base_url('assets/employee/default.png') ?>" alt="<?= $user['employee_name'] ?>" />
                            <?php else : ?>
                                <img class="nav-user-photo" src="<?= base_url('assets/employee/') . $user['foto'] ?>" alt="<?= $user['employee_name'] ?>" />
                            <?php endif; ?>
                            <span class="user-info">
                                <small>Welcome,</small>
                                <?= $user['employee_name'] ?>
                            </span>
                            <i class="ace-icon fa fa-caret-down"></i>
                        </a>

                        <ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
                            <li>
                                <a href="<?= base_url('auth/logout') ?>">
                                    <i class="ace-icon fa fa-power-off"></i>
                                    Logout
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div><!-- /.navbar-container -->
    </div>