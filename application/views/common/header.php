<!DOCTYPE html>

<html class="loading" lang="en" data-textdirection="ltr">
  <!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Stack admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, stack admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title> sports Dashboard</title>
    <link rel="apple-touch-icon" href="<?php echo base_url("app-assets/images/ico/apple-icon-120.png");?>">
    <link rel="shortcut icon" type="image/x-icon" href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i%7COpen+Sans:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("app-assets/vendors/css/vendors.min.css");?>">
    <!-- END: Vendor CSS-->

    <!-- start datatable -->
      <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/datatables.min.css'); ?>"/>
     <!-- end of datatables -->
    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("app-assets/css/bootstrap.min.css");?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("app-assets/css/bootstrap-extended.min.css");?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("app-assets/css/colors.min.css");?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("app-assets/css/components.min.css");?>">
    <!-- END: Theme CSS-->

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("app-assets/css/core/menu/menu-types/vertical-menu-modern.css");?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("app-assets/css/core/colors/palette-gradient.min.css");?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("app-assets/fonts/simple-line-icons/style.min.css");?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("app-assets/fonts/meteocons/style.min.css");?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("app-assets/fonts/font-awesome/css/font-awesome.min.css");?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("app-assets/css/pages/card-statistics.min.css");?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("app-assets/css/pages/vertical-timeline.min.css");?>">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/style.css");?>">
    <!-- END: Custom CSS-->

  </head>
  <!-- END: Head-->

  <!-- BEGIN: Body-->
  <body class="vertical-layout vertical-menu-modern 2-columns   fixed-navbar" data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">

    <!-- BEGIN: Header-->
    <nav class="header-navbar navbar-expand-lg navbar navbar-with-menu fixed-top navbar-semi-dark navbar-shadow">
      <div class="navbar-wrapper">
        <div class="navbar-header">
          <ul class="nav navbar-nav flex-row">
            <li class="nav-item mobile-menu d-lg-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="fa fa-list"></i></a></li>
            <li class="nav-item mr-auto"><a class="navbar-brand" href="index.html"><img class="brand-logo" alt="stack admin logo" src="<?php echo base_url("app-assets/images/logo/stack-logo-light.png");?>">
                <h2 class="brand-text">Stack</h2></a></li>
            <li class="nav-item d-none d-lg-block nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="fa fa-list" data-ticon="feather.icon-toggle-right"></i></a></li>
            <li class="nav-item d-lg-none"><a class="nav-link open-navbar-container" data-toggle="collapse" data-target="#navbar-mobile"><i class="fa fa-ellipsis-v"></i></a></li>
          </ul>
        </div>
        <div class="navbar-container content">
          <div class="collapse navbar-collapse" id="navbar-mobile">
            <ul class="nav navbar-nav mr-auto float-left"><li class="nav-item nav-search"><a class="nav-link nav-link-search" href="#"><i class="fa fa-search"></i></a>
                <div class="search-input">
                  <input class="input" type="text" placeholder="Explore Stack..." tabindex="0" data-search="template-search">
                  <div class="search-input-close"><i class="feather icon-x"></i></div>
                  <ul class="search-list"></ul>
                </div>
              </li>
            </ul>
            <ul class="nav navbar-nav float-right">
              <li class="dropdown dropdown-user nav-item"><a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                  <span class="user-name"><?php echo $login['fullName'];?></span></a>
                <div class="dropdown-menu dropdown-menu-right">
                  <a class="dropdown-item" href="user-cards.html"><i class="fa fa-list"></i> Task</a>
                  <div class="dropdown-divider"></div><a class="dropdown-item" href="<?php echo base_url('index.php/login/logout/');?>"><i class="fa fa-power-off"></i> Logout</a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>
    <!-- END: Header-->
