<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta charset="utf-8" />
        <link rel="icon" type="image/png" sizes="40x40" href="<?php echo base_url().'assets/images/icon/kedaikopi11.png'?>">
        <title>Dashboard - Kedai Kopi 11</title>

        <meta name="description" content="overview &amp; stats" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

        <!-- bootstrap & fontawesome -->
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap.min.css" />
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/font-awesome/4.5.0/css/font-awesome.min.css" />

        <!-- page specific plugin styles -->
        <link rel="stylesheet" href="<?php echo base_url()?>assets/css/jquery-ui.min.css" />
        <link rel="stylesheet" href="<?php echo base_url()?>assets/css/bootstrap-datepicker3.min.css" />
        <link rel="stylesheet" href="<?php echo base_url()?>assets/css/ui.jqgrid.min.css" />

        <!-- text fonts -->
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/fonts.googleapis.com.css" />

        <!-- ace styles -->
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />

        <!--[if lte IE 9]>
            <link rel="stylesheet" href="assets/css/ace-part2.min.css" class="ace-main-stylesheet" />
        <![endif]-->
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/ace-skins.min.css" />
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/ace-rtl.min.css" />

        <!--[if lte IE 9]>
          <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
        <![endif]-->

        <!-- inline styles related to this page -->

        <!-- ace settings handler -->
        <script src="<?php echo base_url() ?>assets/js/ace-extra.min.js"></script>

        <!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

        <!--[if lte IE 8]>
        <script src="assets/js/html5shiv.min.js"></script>
        <script src="assets/js/respond.min.js"></script>
        <![endif]-->
    </head>

            <div id="navbar" class="navbar navbar-default ace-save-state">
            <div class="navbar-container ace-save-state" id="navbar-container">
                <button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
                    <span class="sr-only">Toggle sidebar</span>

                    <span class="icon-bar"></span>

                    <span class="icon-bar"></span>

                    <span class="icon-bar"></span>
                </button>

                <div class="navbar-header pull-left">
                    <a href="<?php echo base_url('Kasir/Kasir/index')?>" class="navbar-brand">
                        <small>
                            <i class="ace-icon fa fa-coffee white"></i>
                            <i class="fa fa-coffe"></i>
                            Kedai Kopi 11
                        </small>
                    </a>
                </div>

                <div class="navbar-buttons navbar-header pull-right" role="navigation">
                    <ul class="nav ace-nav">
                        <li class="light-blue dropdown-modal">
                            <a data-toggle="dropdown" href="#" class="dropdown-toggle">
                                <img class="nav-user-photo" src="<?php echo base_url() ?>assets/images/avatars/profile-pic1.png" alt="Jason's Photo" />
                                <span class="user-info">
                                    <small>Selamat Datang,</small>
                                    <?php echo $this->session->userdata('ses_nama'); ?>
                                </span>

                                <i class="ace-icon fa fa-caret-down"></i>
                            </a>

                            <ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
                                <li>
                                <li>
                                    <a href="<?php echo base_url().'index.php/Login/logout'?>">
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
        </html>