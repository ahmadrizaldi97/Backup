<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Home</title>
    <!-- Favicon-->
    <!-- <link rel="icon" href="favicon.ico" type="image/x-icon"> -->

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
    <script data-require="jquery@*" data-semver="2.0.3" src="<?php echo base_url(''); ?>assets/plugins/jquery/jquery.min.js"></script>
    <script data-require="bootstrap@*" data-semver="3.1.1" src="<?php echo base_url(''); ?>assets/plugins/bootstrap//js/bootstrap.min.js"></script>
   
    <!-- Bootstrap Core Css -->
    <link href="<?php echo base_url(''); ?>assets/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <!-- <link href="plugins/node-waves/waves.css" rel="stylesheet" /> -->

    <!-- <link rel="stylesheet" href="<?php echo base_url('') ?>assets/DataTables/css/dataTables.bootstrap.min.css"> -->

    <link rel="stylesheet" href="<?php echo base_url('') ?>assets/datatables.min.css">

    <!-- Animation Css -->
    <link href="<?php echo base_url(''); ?>assets/plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Morris Chart Css-->
    <!-- <link href="plugins/morrisjs/morris.css" rel="stylesheet" /> -->

    <!-- Custom Css -->
    <link href="<?php echo base_url(''); ?>assets/css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="<?php echo base_url(''); ?>assets/css/themes/all-themes.css" rel="stylesheet" />

    <style>
        #cover {  
       /*margin-left: -213%;*/
       width: 150px;
       height: 200px; 
      }

      #input{
        padding: 7px;
        border: 1px solid #ccc;
        border-radius: 4px;
      }

      
    </style>


</head>

<body class="theme-red">


    <!-- Page Loader -->
    <!-- <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Please wait...</p>
        </div>
    </div> -->
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Search Bar -->
    <div class="search-bar">
        <div class="search-icon">
            <i class="material-icons">search</i>
        </div>
        <input type="text" placeholder="START TYPING...">
        <div class="close-search">
            <i class="material-icons">close</i>
        </div>
    </div>
    <!-- #END# Search Bar -->
    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="index.html">Perpustakaan Sukses</a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="javascript:void(0);" class="js-search" data-close="true"><i class="material-icons">search</i></a></li>
                </ul>


            </div>
        </div>
    </nav>

<?php $logged_in = $this->session->userdata('logged_in');
$nama = $logged_in['nama_user']; 
$nim    = $logged_in['nim_nip']; 
$foto    = $logged_in['foto']; 
?>

    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <img src="<?php echo base_url(''); ?>assets/uploads/<?php echo $foto; ?>" width="48" height="48" alt="User" />
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $nama; ?></div>
                    <div class="email"><?php echo $nim; ?></div>
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="javascript:void(0);"><i class="material-icons">person</i>Profile</a></li>
                            
                            <li role="seperator" class="divider"></li>
                            <li><a href="<?php echo site_url(''); ?>/login/logout"><i class="material-icons">input</i>Sign Out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">MAIN NAVIGATION</li>
                    <li class="active">
                        <a href="<?php echo site_url(''); ?>/buku">
                            <!-- <i class="material-icons">home</i> -->
                            <span>Home</span>
                        </a>
                    </li>
                    
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <!-- <i class="material-icons">layers</i> -->
                            <span>Kategori Buku</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="<?php echo site_url(''); ?>/kategori">Kategori</a>
                            </li>
                            <li>
                                <a href="<?php echo site_url(''); ?>/kategori/insert">Tambah Kategori</a>
                            </li>
                            
                            
                        </ul>
                    </li>
                   
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <!-- <i class="material-icons">layers</i> -->
                            <span>Buku</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="<?php echo site_url(''); ?>/buku">Buku</a>
                            </li>
                            <li>
                                <a href="<?php echo site_url(''); ?>/buku/tambahbuku">Tambah Buku</a>
                            </li>
                            <li>
                                <a href="#">Pengarang</a>
                            </li>
                            
                        </ul>
                    </li>

                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <!-- <i class="material-icons">view_list</i> -->
                            <span>Transaksi</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="<?php echo site_url(''); ?>/peminjaman">Peminjaman</a>
                            </li>
                            <li>
                                <a href="<?php echo site_url(''); ?>/peminjaman/tambahpeminjaman">Tambah Peminjam</a>
                            </li>
                            <li>
                                <a href="<?php echo site_url(''); ?>/Pengembalian">Pengembalian</a>
                            </li>
                            <li>
                                <a href="<?php echo site_url(''); ?>/Denda">Denda</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <!-- <i class="material-icons">layers</i> -->
                            <span>User</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="<?php echo site_url(''); ?>/user">Daftar User</a>
                            </li>
                            <li>
                                <a href="#">Tambah Users</a>
                            </li>
                            
                        </ul>
                    </li>

                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <!-- <i class="material-icons">layers</i> -->
                            <span>Laporan</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="pages/forms/basic-form-elements.html">Laporan Transaksi</a>
                            </li>
                            
                        </ul>
                    </li>
                   
                </ul>
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy; 2017 Kelompok 6 - Perpustakaan_Sukses
                </div>
            </div>
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->
       
    </section>
<section class="content">
