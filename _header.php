<?php 
require_once "_config/config.php";
require "_assets/vendor/autoload.php";

if(!isset($_SESSION['user'])){
    echo "<script>window.location='".base_url('auth/login ')."';</script>";
} ?>

<!DOCTYPE html>
<html lang="zxx" id="myprint">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="<?=base_url('_assets/img/logo2.png')?>" type="image/x-icon">
    <title>Hospital</title>
    <!-- CSS -->
    <link rel="stylesheet" href="<?=base_url('_assets/css/app.css')?>">
    <style>
        .loader {
            position: fixed;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: #F5F8FA;
            z-index: 9998;
            text-align: center;
        }

        .plane-container {
            position: absolute;
            top: 50%;
            left: 50%;
        }
    </style>
    <!-- Js -->
    <!--
    --- Head Part - Use Jquery anywhere at page.
    --- http://writing.colin-gourlay.com/safely-using-ready-before-including-jquery/
    -->
    <script>(function(w,d,u){w.readyQ=[];w.bindReadyQ=[];function p(x,y){if(x=="ready"){w.bindReadyQ.push(y);}else{w.readyQ.push(x);}};var a={ready:p,bind:p};w.$=w.jQuery=function(f){if(f===d||f===u){return a}else{p(f)}}})(window,document)</script>
</head>
<body class="light" oncontextmenu="return false;">
<!-- Pre loader -->
<div id="loader" class="loader">
    <div class="plane-container">
        <div class="preloader-wrapper small active">
            <div class="spinner-layer spinner-blue">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div><div class="gap-patch">
                    <div class="circle"></div>
                </div><div class="circle-clipper right">
                    <div class="circle"></div>
                </div>
            </div>

            <div class="spinner-layer spinner-red">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div><div class="gap-patch">
                    <div class="circle"></div>
                </div><div class="circle-clipper right">
                    <div class="circle"></div>
                </div>
            </div>

            <div class="spinner-layer spinner-yellow">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div><div class="gap-patch">
                    <div class="circle"></div>
                </div><div class="circle-clipper right">
                    <div class="circle"></div>
                </div>
            </div>

            <div class="spinner-layer spinner-green">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div><div class="gap-patch">
                    <div class="circle"></div>
                </div><div class="circle-clipper right">
                    <div class="circle"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="app">
    <aside class="main-sidebar fixed offcanvas shadow" data-toggle='offcanvas'>
        <section class="sidebar">
            <div class="relative">
                <div class="user-panel p-3 light mb-2">
                    <div>
                        <div class="float-left image">
                            <img class="user_avatar" src="https://img.icons8.com/color/48/000000/user.png" alt="User Image">
                        </div>
                        <div class="float-left info">
                            <h6 class="font-weight-light mt-2 mb-1"><?=$_SESSION['user'];?></h6>
                            <a href="#"><i class="icon-circle text-primary blink"></i> Online</a>
                        </div>
                    </div>
                </div>
            </div>
            <ul class="sidebar-menu">
                <li class="header"><strong>MENU</strong></li>
                <li class="treeview">
                    <a href="<?=base_url('dashboard/index.html')?>">
                        <img class="gambar" src="https://img.icons8.com/color/30/000000/hospital-3.png"/>
                        <span>Home</span>
                        <i class="icon icon-angle-right s-18 pull-right"></i>
                    </a>
                </li>
                <li class="treeview">
                    <a href="<?=base_url('pasien/')?>">
                        <img class="gambar" src="https://img.icons8.com/color/30/000000/recovery.png"/>
                        <span>Pasien</span>
                        <i class="icon icon-angle-right s-18 pull-right"></i>
                    </a>
                </li>
                <li class="treeview">
                    <a href="<?=base_url('dokter/')?>">
                        <img src="https://img.icons8.com/color/30/000000/doctor-female.png"/>
                        <span>Dokter</span>
                        <i class="icon icon-angle-right s-18 pull-right"></i>
                    </a>
                </li>
                <li class="treeview">
                    <a href="<?=base_url('suster/')?>">
                        <img src="https://img.icons8.com/color/30/000000/nurse-female--v1.png"/>
                        <span>Suster</span>
                        <i class="icon icon-angle-right s-18 pull-right"></i>
                    </a>
                </li>
                <li class="treeview">
                    <a href="<?=base_url('klinik/')?>">
                        <img src="https://img.icons8.com/color/30/000000/clinic.png"/>
                        <span>Klinik</span>
                        <i class="icon icon-angle-right s-18 pull-right"></i>
                    </a>
                </li>
                <li class="treeview">
                    <a href="<?=base_url('obat/')?>">
                        <img class="gambar" src="https://img.icons8.com/color/30/000000/doctors-bag.png"/>
                        <span>Obat</span>
                        <i class="icon icon-angle-right s-18 pull-right"></i>
                    </a>
                </li>
                <li class="treeview">
                    <a href="<?=base_url('rekammedis')?>">
                        <img class="gambar" src="https://img.icons8.com/color/30/000000/treatment-plan.png"/>
                        <span>Rekammedis</span>
                        <i class="icon icon-angle-right s-18 pull-right"></i>
                    </a>
                </li>
                <?php
                if($_SESSION['user']=="admin"){
                ?>
                <li class="treeview">
                    <a href="<?=base_url('user')?>">
                        <img src="https://img.icons8.com/color/30/000000/circled-user-male-skin-type-7--v1.png"/>
                        <span>User</span>
                        <i class="icon icon-angle-right s-18 pull-right"></i>
                    </a>
                </li>
                    <?php
                }
                ?>
            </ul>
        </section>
    </aside>
    <!--Sidebar End-->
    <div class="has-sidebar-left">
        <div class="pos-f-t">
            <div class="collapse" id="navbarToggleExternalContent">
                <div class="bg-dark pt-2 pb-2 pl-4 pr-2">
                    <div class="search-bar">
                        <input class="transparent s-24 text-white b-0 font-weight-lighter w-128 height-50" type="text"
                               placeholder="start typing...">
                    </div>
                    <a href="#" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-expanded="false"
                       aria-label="Toggle navigation" class="paper-nav-toggle paper-nav-white active "><i></i></a>
                </div>
            </div>
        </div>
        <div class="sticky">
            <div class="navbar navbar-expand navbar-dark d-flex justify-content-between bd-navbar blue accent-3">
                <div class="relative">
                    <a href="#" data-toggle="push-menu" class="paper-nav-toggle pp-nav-toggle">
                        <i></i>
                    </a>
                </div>
                <!--Top Menu Start -->
                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <li>
                            <a class="nav-link " data-toggle="collapse" data-target="#navbarToggleExternalContent"
                               aria-controls="navbarToggleExternalContent"
                               aria-expanded="false" aria-label="Toggle navigation">
                                <i class=" icon-search3 "></i>
                            </a>
                        </li>
                        <!-- User Account-->
                        <li class="dropdown custom-dropdown user user-menu ">
                            <a href="#" class="nav-link" data-toggle="dropdown">
                                <i class="icon-more_vert "></i>
                            </a>
                            <div class="dropdown-menu p-4 dropdown-menu-right">
                                <div class="treeview" align="right">
                                    <a href="<?=base_url('auth/logout.php')?>">
                                        <div>
                                            <i class="icon icon-sign-out red-text s-24"></i>
                                            <h4>Logout</h4>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
