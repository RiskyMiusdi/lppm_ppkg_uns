<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php echo $title; ?></title>

    <!-- Bootstrap -->
    <!-- <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/gentela-gh-pages/vendors/bootstrap/dist/css/bootstrap.min.css" />
    <!-- <link type="text/css" rel="stylesheet" href="<?php //echo base_url() 
                                                        ?>assets/tampilan/style.css" /> -->

    <!-- Font Awesome -->
    <!-- <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/gentela-gh-pages/vendors/font-awesome/css/font-awesome.min.css" />
    <!-- NProgress -->
    <!-- <link href="../vendors/nprogress/nprogress.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/gentela-gh-pages/vendors/nprogress/nprogress.css" />
    <!-- iCheck -->
    <!-- <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/gentela-gh-pages/vendors/iCheck/skins/flat/green.css" />

    <!-- bootstrap-progressbar -->
    <!-- <link href="../vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/gentela-gh-pages/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" />
    <!-- JQVMap -->
    <!-- <link href="../vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet" /> -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/gentela-gh-pages/vendors/jqvmap/dist/jqvmap.min.css" />
    <!-- bootstrap-daterangepicker -->
    <!-- <link href="../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/gentela-gh-pages/vendors/bootstrap-daterangepicker/daterangepicker.css" />



    <!-- Datatables -->
    <link href="<?php echo base_url() ?>assets/gentela-gh-pages/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/gentela-gh-pages/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/gentela-gh-pages/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/gentela-gh-pages/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/gentela-gh-pages/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">


    <!-- Custom Theme Style -->
    <!-- <link href="../build/css/custom.min.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/gentela-gh-pages/build/css/custom.min.css" />
    <link rel="icon" href="<?php echo base_url() ?>assets/img/Logo-PPKG-LPPM-UNS-Text-Putih.png" type=" image/ico">
</head>

<body class="nav-md" style="color: black;">
    <div class="container body">
        <div class="main_container">
            <div class="col-md-3 left_col">
                <div class="left_col scroll-view">
                    <div class="navbar nav_title" style="border: 0;">
                        <a href="<?php echo base_url(); ?>index.php/c_home" class="site_title"><img src="<?php echo base_url() ?>assets/img/Logo-PPKG-LPPM-UNS-Text-Putih.png" width="200" alt="logo PPKG UNS"></a>
                    </div>

                    <div class="clearfix"></div>

                    <!-- menu profile quick info -->
                    <div class="profile clearfix">
                        <div class="profile_pic">
                            <img src="<?php echo base_url(); ?>uploads/<?php echo $user['avatar']; ?>" alt="Foto profil" class="img-circle profile_img" />
                        </div>
                        <div class="profile_info">

                            <h2> <?php echo $this->session->userdata('username'); ?></h2>
                            <br />
                            <h2> <?php echo $this->session->userdata('role'); ?></h2>

                        </div>
                    </div>
                    <!-- /menu profile quick info -->

                    <br />

                    <!-- sidebar menu -->
                    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">

                        <div class="menu_section">

                            <ul class="nav side-menu">
                                <li><a href="<?php echo base_url() ?>index.php/admin/c_dashboard_admin"><i class="fa fa-dashboard"></i>Dashboard</a></li>
                                <li><a href="<?php echo base_url() ?>index.php/admin/c_profil_admin"><i class="fa fa-user"></i> Profil</a></li>
                                <li><a href="<?php echo base_url() ?>index.php/admin/c_member"><i class="fa fa-group"></i>Member</a></li>
                                <li><a><i class="fa fa-graduation-cap"></i>Pendidikan<span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="<?php echo base_url(); ?>index.php/admin/pendidikan_admin/c_pendidikan_admin/daftar_semua_event">Event</a></li>
                                        <li><a href=" <?php echo base_url(); ?>index.php/admin/pendidikan_admin/c_pendidikan_admin/daftar_semua_artikel">Artikel</a></li>
                                    </ul>
                                </li>
                                <li><a><i class="fa fa-share-alt"></i>Pengabdian<span class="fa fa-chevron-down"></span>
                                    </a>
                                    <ul class="nav child_menu">
                                        <li><a href="<?php echo base_url(); ?>index.php/admin/pengabdian_admin/c_pengabdian_admin/daftar_semua_event">Event</a></li>
                                        <li><a href=" <?php echo base_url(); ?>index.php/admin/pengabdian_admin/c_pengabdian_admin/daftar_semua_artikel">Artikel</a></li>
                                    </ul>
                                </li>
                                <li><a><i class="fa fa-search"></i>Penelitian<span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="<?php echo base_url(); ?>index.php/admin/penelitian_admin/C_penelitian_admin/daftar_semua_event">Event</a></li>
                                        <li><a href=" <?php echo base_url(); ?>index.php/admin/penelitian_admin/C_penelitian_admin/daftar_semua_artikel">Artikel</a></li>
                                    </ul>
                                </li>
                                <li><a><i class="fa fa-microphone"></i>Seminar<span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="<?php echo base_url(); ?>index.php/admin/seminar_admin/C_seminar_admin/daftar_semua_event">Event</a></li>
                                        <li><a href=" <?php echo base_url(); ?>index.php/admin/seminar_admin/c_seminar_admin/daftar_semua_artikel">Artikel</a></li>
                                    </ul>
                                </li>
                                <li><a><i class="fa fa-gears"></i>Kerja Sama<span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="<?php echo base_url(); ?>index.php/admin/kerjasama_admin/C_kerjasama_admin/daftar_semua_event">Event</a></li>
                                        <li><a href=" <?php echo base_url(); ?>index.php/admin/kerjasama_admin/C_kerjasama_admin/daftar_semua_artikel">Artikel</a></li>
                                    </ul>
                                </li>

                            </ul>

                        </div>

                    </div>
                    <!-- /sidebar menu -->


                </div>
            </div>

            <!-- top navigation -->
            <div class="top_nav">
                <div class="nav_menu">
                    <nav>
                        <div class="nav toggle">
                            <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                        </div>

                        <ul class="nav navbar-nav navbar-right">
                            <li class="">
                                <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                    <!-- <img src="images/img.jpg" alt=""> -->
                                    <img src="<?php echo base_url(); ?>uploads/<?php echo $user['avatar']; ?>" alt="Foto profil" />

                                    <?php echo $this->session->userdata('username'); ?>

                                    <span class=" fa fa-angle-down"></span>
                                </a>
                                <ul class="dropdown-menu dropdown-usermenu pull-right">

                                    <li><a href="<?php echo base_url() ?>index.php/c_login/logout"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>

                                </ul>
                            </li>


                        </ul>
                    </nav>
                </div>
            </div>
            <!-- /top navigation -->