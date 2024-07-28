<?php   
session_start();  
  if(!isset($_SESSION['id']) && !isset($_SESSION['username'])) {
  	header("Location:index.php");
  }
?> 
<!DOCTYPE html>
<html lang="en">
  <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
  <head>
    <meta charset="utf-8">
    <title>HostCo|Admin</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../images/icon.png">
    <link href="assets/vendor/jqvmap/css/jqvmap.min.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="assets/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet" type="text/css"/>
    <link href="assets/vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css"/>
    <link href="assets/css/style.css" rel="stylesheet" type="text/css"/>
    <link href="assets/css/summernote-bs4.min.css" rel="stylesheet" type="text/css"/>
    <link href="assets/css/all.min.css" rel="stylesheet" type="text/css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" ></script>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <style type="text/css">
      .logo-abbr{
      width: 150%!important;
      }
      .nav-header .logo-abbr {
      max-width: 170px!important;
      }
    </style>
  </head>
  <body>
    <div id="main-wrapper">
    <div class="nav-header">
      <a href="index.html" class="brand-logo">
      <img class="logo-abbr" src="../images/logo.png" alt=""	>
      </a>
      <div class="nav-control">
        <div class="hamburger">
          <span class="line"></span><span class="line"></span><span class="line"></span>
        </div>
      </div>
    </div>
    <?php include 'top-header.php'; ?>