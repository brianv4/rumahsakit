<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $title_web; ?> | SI KLINIK X - RS BAKTI HUSADA </title>
    <!-- Tell the browser to be responsive to screen width -->


    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets_style/assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets_style/assets/bower_components/font-awesome/css/font-awesome.min.css">


    <!-- Select2 -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets_style/assets/bower_components/select2/dist/css/select2.min.css">

    <!-- Ionicons -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets_style/assets/bower_components/Ionicons/css/ionicons.min.css">
    <!-- Theme style -->

    <link href="<?php echo base_url(); ?>assets_style/assets/plugins/summernote/summernote-lite.css" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets_style/assets/dist/css/AdminLTE.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets_style/assets/dist/css/responsive.css">

    <!-- Bootstrap time Picker -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets_style/assets/plugins/timepicker/bootstrap-timepicker.min.css">
    <!-- bootstrap datepicker -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets_style/assets/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets_style/assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets_style/assets/dist/css/skins/_all-skins.min.css">

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets_style/assets/plugins/pace/pace.min.css">
    <!-- jQuery 3 -->
    <script src="<?php echo base_url(); ?>assets_style/assets/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    <!-- offline -->
    <script type="text/javascript">
        $(document).ajaxStart(function() {
            Pace.restart();
        });
    </script>
</head>

<body class="hold-transition skin-blue-light sidebar-mini">
    <div class="wrapper" style="background-image: url('<?= base_url('assets_style/image/background.jpg'); ?>'); background-size: cover; background-position: center;">
        <header class="main-header">

            <!-- Logo -->
            <?php if (!empty($this->session->userdata('ses_id'))) { ?>
                <a href="<?php echo base_url('antrian'); ?>" class="logo">
                    <!-- mini logo for sidebar mini 50x50 pixels -->
                    <span class="logo-mini"><b>P</b>C</span>
                    <!-- logo for regular state and mobile devices -->
                    <span class="logo-lg">SISTEM ANTRIAN</span>
                </a>
            <?php } else { ?>
                <a href="<?php echo base_url(); ?>" class="logo">
                    <!-- mini logo for sidebar mini 50x50 pixels -->
                    <span class="logo-mini"><b>P</b>C</span>
                    <!-- logo for regular state and mobile devices -->
                    <span class="logo-lg">SISTEM ANTRIAN</span>
                </a>
            <?php } ?>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top">
                <!-- Sidebar toggle button-->
                <!-- Navbar Right Menu -->
                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">

                        <!-- Control Sidebar Toggle Button  -->
                        <?php if (!empty($this->session->userdata('ses_id'))) { ?>
                            <li>
                                <a href="<?php echo base_url(); ?>login/logout_pasien">Logout</a>
                            </li>
                        <?php } else {
                        } ?>
                    </ul>
                </div>
            </nav>
        </header>
        <!--loading-->
        <!-- Left side column. contains the logo and sidebar -->