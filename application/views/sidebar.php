<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>Dashboard with Off-canvas Sidebar</title>
    <meta name="generator" content="Bootply" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="<?php echo base_url(''); ?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url('') ?>assets/DataTables/css/dataTables.bootstrap.min.css">

    <link rel="stylesheet" href="<?php echo base_url('') ?>assets/datatables.min.css">
    

    <link href="<?php echo base_url(''); ?>css/styles.css" rel="stylesheet">


    <style type="text/css">
      #tab { display:inline-block; 
       margin-left: 15%; }

       #tab1 { display:inline-block; 
       margin-left: 13.5%; }

       #tab2 { display:inline-block; 
       margin-left: 13%; }

       #cover { display:inline-block; 
       /*margin-left: -213%;*/
       width: 10%; 
      }

      #foto{
        width: 30%;
        height: 30%;
        align-items: center;
      }

      #cover{
        width: 40%;
        height: 30%;
      }
    </style>

  </head>
  <body onload="cekhalaman()">

<!-- script references -->
    <!-- jQuery -->
    <script src="//code.jquery.com/jquery.js"></script>
    <!-- Bootstrap JavaScript -->
      <script src="<?php echo base_url(''); ?>/assets/datatables.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="Hello World"></script>
    <script type="text/javascript">
      $(document).ready(function(){
        $('#example').DataTable();
      })
    </script>
  
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Perpustakaan</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Dashboard</a></li>
            <li><a href="#">Settings</a></li>
            <li><a href="#">Profile</a></li>
            <li><a href="#">Help</a></li>
            <li><?php if ($this->session->userdata('logged_in')) { ?>
              <a href="<?php echo site_url(''); ?>/login/logout">Logout</a>
          <?php  } ?></li>
          </ul>
          
        </div>
      </div>
</nav>

<div class="container-fluid">
      
      <div class="row row-offcanvas row-offcanvas-left">
        
         <div class="col-sm-3 col-md-2 sidebar-offcanvas" id="sidebar" role="navigation">
           
            <ul class="nav nav-sidebar"><!-- 
              <li class="active"><a href="#">Overview</a></li> -->
            </ul>
            <ul class="nav nav-sidebar">
              <li id="kategori_nav"><a href="<?php echo site_url('') ?>/kategori">Kategori</a></li>
              <li id="buku_nav"><a href="<?php echo site_url('') ?>/buku">Buku</a></li>
            </ul>
            <ul class="nav nav-sidebar">
              <li id="peminjaman_nav" ><a href="<?php echo site_url('') ?>/peminjaman">Peminjaman</a></li>
              <li id="pengembalian_nav"><a href="<?php echo site_url('') ?>/pengembalian">Pengembalian</a></li>
              <li id="denda_nav"><a href="<?php echo site_url('') ?>/denda">Denda</a></li>
            </ul>

            <ul class="nav nav-sidebar">
              <li><a href="<?php echo site_url('') ?>/user">User</a></li>
            </ul>
          
        </div><!--/span-->
        
        <div class="col-sm-9 col-md-10 main" style="padding-bottom: 25%">
          
          <!--toggle sidebar button-->
          <p class="visible-xs">
            <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas"><i class="glyphicon glyphicon-chevron-left"></i></button>
          </p>