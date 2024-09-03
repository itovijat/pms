<?php

include_once "../dbconnect.php";
?>

<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>EOvijat</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="assets/images/icon/favicon.ico">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/metisMenu.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/slicknav.min.css">
    <!-- amchart css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
    <!-- others css -->
    <link rel="stylesheet" href="assets/css/typography.css">
    <link rel="stylesheet" href="assets/css/default-css.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <!-- modernizr css -->
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>

    <style>
        @media print {
   .noprint {display:none;}
}
        </style>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- preloader area start -->
    <div id="preloader" class="noprint">
        <div class="loader"></div>
    </div>
    <!-- preloader area end -->
    <!-- page container area start -->
    <div class="page-container sbar_collapsed ">
        <!-- sidebar menu area start -->
        <div class="sidebar-menu noprint">
            <div class="sidebar-header">
                <div class="logo">
                    <h1 style="color:white">EOvijat</h1>
                </div>
            </div>
            <div class="main-menu">
                <div class="menu-inner">
                    <nav>
                        <ul class="metismenu" id="menu">

                        <li><a href="index.php"><i class="ti-dashboard"></i> <span>Dashboard</span></a></li>
                            <li >
                                <a href="javascript:void(0)" aria-expanded="true"><i class="ti-user"></i><span>Person</span></a>
                                <ul class="collapse">
                                    <li ><a href="index.html">Add New</a></li>
                                    <li><a href="index2.html">View All</a></li>
                                    <li><a href="index3.html">Print ID</a></li>
                                </ul>
                            </li>

                            <li >
                                <a href="javascript:void(0)" aria-expanded="true"><i class="ti-github"></i><span>User</span></a>
                                <ul class="collapse">
                                    <li ><a href="index.html">Add New</a></li>
                                    <li><a href="index2.html">View All</a></li>

                                </ul>
                            </li>
                           
                            <li><a href="profile.php"><i class="ti-face-smile"></i> <span>Profile</span></a></li>

                           
                            
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <!-- sidebar menu area end -->
        <!-- main content area start -->
        <div class="main-content">
            <!-- header area start -->
            <div class="header-area noprint">
                <div class="row align-items-center">
                    <!-- nav and search button -->
                    <div class="col-md-2 col-sm-2 col-2 clearfix">
                        <div class="nav-btn pull-left">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                       
                        
                    </div>
                    <!-- profile info & task notification -->
                    <div class="col-md-10 col-sm-10 col-10 clearfix">
                        <ul class="notification-area pull-right">
                        
                           
                          


                            <li class="dropdown">
                                <i class="fa fa-envelope-o dropdown-toggle" data-toggle="dropdown"></i>
                                <div class="dropdown-menu notify-box nt-enveloper-box">
                                    <span class="notify-title">Message / Notification Box</span>
                                    <div class="nofity-list">


                                        <a href="#" class="notify-item">
                                            <div class="notify-thumb">
                                             
                                            </div>
                                            <div class="notify-text">
                                                <p>Admin</p>
                                                <span class="msg">Hey I am waiting for you...Hey I am waiting for you...Hey I am waiting for you...Hey I am waiting for you...</span>
                                                <span>3:15 PM</span>
                                            </div>
                                        </a>

                                        <a href="#" class="notify-item">
                                            <div class="notify-thumb">
                                             
                                            </div>
                                            <div class="notify-text">
                                                <p>Admin</p>
                                                <span class="msg">Hey I am waiting for you...Hey I am waiting for you...Hey I am waiting for you...Hey I am waiting for you...</span>
                                                <span>3:15 PM</span>
                                            </div>
                                        </a>
                                       



                                    </div>
                                </div>
                            </li>
                            <li class="settings-btn">
                                <i class="fa fa-calculator"></i>
                            </li>
                            <li>
                            <i onclick="location.href='logout.php'" class="ti-unlock dropdown-toggle" data-toggle="dropdown"><span ><p id="refreshTimer"></p></span></i>  
                            </li>

                            
                           
                        </ul>
                    </div>
                </div>
            </div>
            <!-- header area end -->